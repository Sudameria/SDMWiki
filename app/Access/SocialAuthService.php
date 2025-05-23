<?php

namespace BookStack\Access;

use BookStack\Auth\Access\handler;
use BookStack\Exceptions\SocialDriverNotConfigured;
use BookStack\Exceptions\SocialSignInAccountNotUsed;
use BookStack\Exceptions\UserRegistrationException;
use BookStack\Users\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Contracts\User as SocialUser;
use Laravel\Socialite\Two\GoogleProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialAuthService
{
    /**
     * The core socialite library used.
     *
     * @var Socialite
     */
    protected $socialite;

    /**
     * @var LoginService
     */
    protected $loginService;

    /**
     * The default built-in social drivers we support.
     *
     * @var string[]
     */
    protected $validSocialDrivers = [
        'google',
        'github',
        'facebook',
        'slack',
        'twitter',
        'azure',
        'okta',
        'gitlab',
        'twitch',
        'discord',
    ];

    /**
     * Callbacks to run when configuring a social driver
     * for an initial redirect action.
     * Array is keyed by social driver name.
     * Callbacks are passed an instance of the driver.
     *
     * @var array<string, callable>
     */
    protected $configureForRedirectCallbacks = [];

    /**
     * SocialAuthService constructor.
     */
    public function __construct(Socialite $socialite, LoginService $loginService)
    {
        $this->socialite = $socialite;
        $this->loginService = $loginService;
    }

    /**
     * Start the social login path.
     *
     * @throws SocialDriverNotConfigured
     */
    public function startLogIn(string $socialDriver): RedirectResponse
    {
        $driver = $this->validateDriver($socialDriver);

        return $this->getDriverForRedirect($driver)->redirect();
    }

    /**
     * Start the social registration process.
     *
     * @throws SocialDriverNotConfigured
     */
    public function startRegister(string $socialDriver): RedirectResponse
    {
        $driver = $this->validateDriver($socialDriver);

        return $this->getDriverForRedirect($driver)->redirect();
    }

    /**
     * Handle the social registration process on callback.
     *
     * @throws UserRegistrationException
     */
    public function handleRegistrationCallback(string $socialDriver, SocialUser $socialUser): SocialUser
    {
        // Check social account has not already been used
        if (SocialAccount::query()->where('driver_id', '=', $socialUser->getId())->exists()) {
            throw new UserRegistrationException(trans('errors.social_account_in_use', ['socialAccount' => $socialDriver]), '/login');
        }

        $userWithEmail = User::query()->where('email', '=', $socialUser->getEmail())->first();

        if ($userWithEmail) {
            // Si el usuario ya tiene una cuenta social con este driver, bloqueamos el registro
            $alreadyHasThisSocial = $userWithEmail->socialAccounts()
                ->where('driver', $socialDriver)
                ->where('driver_id', $socialUser->getId())
                ->exists();

            if ($alreadyHasThisSocial) {
                throw new UserRegistrationException(trans('errors.social_account_in_use', ['socialAccount' => $socialDriver]), '/login');
            }

            // Si el usuario existe pero nunca vinculó este proveedor, permitimos (NO tiramos excepción)
            return $socialUser;
        }

        return $socialUser;
    }

    /**
     * Get the social user details via the social driver.
     *
     * @throws SocialDriverNotConfigured
     */
    public function getSocialUser(string $socialDriver): SocialUser
    {
        $driver = $this->validateDriver($socialDriver);

        return $this->socialite->driver($driver)->user();
    }

    /**
     * Handle the login process on a oAuth callback.
     *
     * @throws SocialSignInAccountNotUsed
     */
    public function handleLoginCallback(string $socialDriver, SocialUser $socialUser)
    {
        $socialId = $socialUser->getId();
        $email = $socialUser->getEmail();

        // Buscar si ya hay una cuenta social con este driver_id
        $socialAccount = SocialAccount::query()->where('driver_id', '=', $socialId)->first();
        $userWithEmail = User::query()->where('email', $email)->first();

        $isLoggedIn = auth()->check();
        $currentUser = user();
        $titleCaseDriver = Str::title($socialDriver);

        // 🔒 Si la cuenta social ya existe y no estamos logueados, logueamos directamente
        if (!$isLoggedIn && $socialAccount !== null) {
            $this->loginService->login($socialAccount->user, $socialDriver);
            return redirect()->intended('/');
        }

        // ✅ Si estamos logueados y no hay cuenta social, la vinculamos al usuario actual
        if ($isLoggedIn && $socialAccount === null) {
            $account = $this->newSocialAccount($socialDriver, $socialUser);
            $currentUser->socialAccounts()->save($account);
            session()->flash('success', trans('settings.users_social_connected', ['socialAccount' => $titleCaseDriver]));
            return redirect('/my-account/auth#social_accounts');
        }

        // ⚠️ Si estamos logueados y el social account ya existe pero es de otro usuario
        if ($isLoggedIn && $socialAccount && $socialAccount->user_id !== $currentUser->id) {
            session()->flash('error', trans('errors.social_account_already_used_existing', ['socialAccount' => $titleCaseDriver]));
            return redirect('/my-account/auth#social_accounts');
        }

        // ⚠️ Si ya existe y está vinculado al mismo usuario logueado
        if ($isLoggedIn && $socialAccount && $socialAccount->user_id === $currentUser->id) {
            session()->flash('error', trans('errors.social_account_existing', ['socialAccount' => $titleCaseDriver]));
            return redirect('/my-account/auth#social_accounts');
        }

        // ✅ Si no hay SocialAccount pero el email ya existe, vinculamos al usuario y lo logueamos
        if (!$isLoggedIn && $userWithEmail && !$userWithEmail->socialAccounts()
            ->where('driver', $socialDriver)
            ->where('driver_id', $socialId)
            ->exists()) {
            $account = $this->newSocialAccount($socialDriver, $socialUser);
            $userWithEmail->socialAccounts()->save($account);
            $this->loginService->login($userWithEmail, $socialDriver);
            return redirect()->intended('/');
        }

        // 🛑 Si llegamos acá y hay conflicto, lo bloqueamos
        $message = trans('errors.social_account_not_used', ['socialAccount' => $titleCaseDriver]);
        if (setting('registration-enabled') && config('auth.method') !== 'ldap' && config('auth.method') !== 'saml2') {
            $message .= trans('errors.social_account_register_instructions', ['socialAccount' => $titleCaseDriver]);
        }

        throw new SocialSignInAccountNotUsed($message, '/login');
    }


    /**
     * Ensure the social driver is correct and supported.
     *
     * @throws SocialDriverNotConfigured
     */
    protected function validateDriver(string $socialDriver): string
    {
        $driver = trim(strtolower($socialDriver));

        if (!in_array($driver, $this->validSocialDrivers)) {
            abort(404, trans('errors.social_driver_not_found'));
        }

        if (!$this->checkDriverConfigured($driver)) {
            throw new SocialDriverNotConfigured(trans('errors.social_driver_not_configured', ['socialAccount' => Str::title($socialDriver)]));
        }

        return $driver;
    }

    /**
     * Check a social driver has been configured correctly.
     */
    protected function checkDriverConfigured(string $driver): bool
    {
        $lowerName = strtolower($driver);
        $configPrefix = 'services.' . $lowerName . '.';
        $config = [config($configPrefix . 'client_id'), config($configPrefix . 'client_secret'), config('services.callback_url')];

        return !in_array(false, $config) && !in_array(null, $config);
    }

    /**
     * Gets the names of the active social drivers.
     * @returns array<string, string>
     */
    public function getActiveDrivers(): array
    {
        $activeDrivers = [];

        foreach ($this->validSocialDrivers as $driverKey) {
            if ($this->checkDriverConfigured($driverKey)) {
                $activeDrivers[$driverKey] = $this->getDriverName($driverKey);
            }
        }

        return $activeDrivers;
    }

    /**
     * Get the presentational name for a driver.
     */
    public function getDriverName(string $driver): string
    {
        return config('services.' . strtolower($driver) . '.name');
    }

    /**
     * Check if the current config for the given driver allows auto-registration.
     */
    public function driverAutoRegisterEnabled(string $driver): bool
    {
        return config('services.' . strtolower($driver) . '.auto_register') === true;
    }

    /**
     * Check if the current config for the given driver allow email address auto-confirmation.
     */
    public function driverAutoConfirmEmailEnabled(string $driver): bool
    {
        return config('services.' . strtolower($driver) . '.auto_confirm') === true;
    }

    /**
     * Fill and return a SocialAccount from the given driver name and SocialUser.
     */
    public function newSocialAccount(string $socialDriver, SocialUser $socialUser): SocialAccount
    {
        return new SocialAccount([
            'driver'    => $socialDriver,
            'driver_id' => $socialUser->getId(),
            'avatar'    => $socialUser->getAvatar(),
        ]);
    }

    /**
     * Detach a social account from a user.
     */
    public function detachSocialAccount(string $socialDriver): void
    {
        user()->socialAccounts()->where('driver', '=', $socialDriver)->delete();
    }

    /**
     * Provide redirect options per service for the Laravel Socialite driver.
     */
    protected function getDriverForRedirect(string $driverName): Provider
    {
        $driver = $this->socialite->driver($driverName);

        if ($driver instanceof GoogleProvider && config('services.google.select_account')) {
            $driver->with(['prompt' => 'select_account']);
        }

        if (isset($this->configureForRedirectCallbacks[$driverName])) {
            $this->configureForRedirectCallbacks[$driverName]($driver);
        }

        return $driver;
    }

    /**
     * Add a custom socialite driver to be used.
     * Driver name should be lower_snake_case.
     * Config array should mirror the structure of a service
     * within the `Config/services.php` file.
     * Handler should be a Class@method handler to the SocialiteWasCalled event.
     */
    public function addSocialDriver(
        string $driverName,
        array $config,
        string $socialiteHandler,
        callable $configureForRedirect = null
    ) {
        $this->validSocialDrivers[] = $driverName;
        config()->set('services.' . $driverName, $config);
        config()->set('services.' . $driverName . '.redirect', url('/login/service/' . $driverName . '/callback'));
        config()->set('services.' . $driverName . '.name', $config['name'] ?? $driverName);
        Event::listen(SocialiteWasCalled::class, $socialiteHandler);
        if (!is_null($configureForRedirect)) {
            $this->configureForRedirectCallbacks[$driverName] = $configureForRedirect;
        }
    }
}
