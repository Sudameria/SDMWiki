<a href="{{ url('/') }}" data-shortcut="home_view" class="logo">
    {{--
    @if(setting('app-logo', '') !== 'none')
        <img class="logo-image" src="{{ setting('app-logo', '') === '' ? url('/images/logo.png') : url(setting('app-logo', '')) }}" alt="Logo">
    @endif
    --}}
    <img class="logo-image" src="{{  url('/images/logo_sdm.svg') }}" alt="Logo">
    @if (setting('app-name-header'))
        <span class="logo-text">{{ setting('app-name') }}</span>
    @endif
</a>