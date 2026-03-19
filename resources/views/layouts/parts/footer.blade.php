<footer class="bg-black text-white px-xl print-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-center">
        <div class="flex flex-wrap md:flex-nowrap md:justify-between gap-5 pt-5">
            <div class="text-center mx-auto md:m-0 md:text-left w-full md:w-auto flex items-end gap-16">
                <a href="{{ url('/') }}" data-shortcut="home_view" class="mx-auto md:m-0">
                    <img class="h-8" src="{{ url('/images/logo_sdm.svg') }}" alt="Logo">
                </a>

                <div class="text-white flex items-center">
                    <x-logo-iso class="h-10 w-auto" />
                </div>
            </div>

            <div class="mx-auto md:m-0 text-center md:text-right w-full md:w-auto">
                <ul class="flex mx-auto md:m-0">
                    <li class="ms-4">
                        <a target="_blank" rel="noopener" href="https://www.facebook.com/Sudameriatravel">
                            <i class="fa-brands fa-square-facebook text-lg"></i>
                        </a>
                    </li>
                    <li class="ms-4">
                        <a target="_blank" rel="noopener" href="https://www.instagram.com/sudameriatravel/">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                    </li>
                    <li class="ms-4">
                        <a target="_blank" rel="noopener" href="https://www.linkedin.com/company/sudameria-travel/">
                            <i class="fa-brands fa-linkedin text-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="h-px my-8 bg-white border-0">

        <div class="flex flex-wrap md:flex-nowrap md:justify-between gap-5">
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-6 md:mx-0" src="{{ url('/images/lufthansa.svg') }}" alt="Lufthansa">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-4 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-2.svg') }}" alt="Partner 2">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-3.svg') }}" alt="Partner 3">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-4.svg') }}" alt="Partner 4">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-5.svg') }}" alt="Partner 5">
            </div>
        </div>

        <hr class="h-px my-8 bg-white border-0">

        <div class="text-left text-white mb-5 text-xs">
            <p>
                &copy; {{ \Carbon\Carbon::now()->year }} Sudameria Incoming Solutions SRL CUIT 33708398999
                <br>
                <span>
                    Lavalle 348, C1047, CABA, Argentina | 54.11.5218.6619 |
                    <a href="mailto:info@sudameria.com.ar">info@sudameria.com.ar</a>
                </span>
                &nbsp;| Legajo: EVT 11776
            </p>
        </div>

        @if (count(setting('app-footer-links', [])) > 0)
            <div id="foot-links" class="pb-5 text-center text-xs">
                @foreach (setting('app-footer-links', []) as $link)
                    <a href="{{ $link['url'] }}" target="_blank" rel="noopener">
                        {{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    <div class="hidden">
        <div class="w-20 h-10 rounded-full bg-sudameria-900 text-sudameria-900 border border-sudameria-900 shadow-sudameria-lg ring ring-sudameria-900">
            900
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-800 text-sudameria-800 border border-sudameria-800 shadow-sudameria-lg ring ring-sudameria-800">
            800
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-700 text-sudameria-700 border border-sudameria-700 shadow-sudameria-lg ring ring-sudameria-700">
            700
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-600 text-sudameria-600 border border-sudameria-600 shadow-sudameria-lg ring ring-sudameria-600">
            600
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-500 text-sudameria-500 border border-sudameria-500 shadow-sudameria-lg ring ring-sudameria-500">
            500
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-400 text-sudameria-400 border border-sudameria-400 shadow-sudameria-lg ring ring-sudameria-400">
            400
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-300 text-sudameria-300 border border-sudameria-300 shadow-sudameria-lg ring ring-sudameria-300">
            300
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-200 text-sudameria-200 border border-sudameria-200 shadow-sudameria-lg ring ring-sudameria-200">
            200
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-100 text-sudameria-100 border border-sudameria-100 shadow-sudameria-lg ring ring-sudameria-100">
            100
        </div>
        <div class="w-20 h-10 rounded-full bg-sudameria-50 text-sudameria-50 border border-sudameria-50 shadow-sudameria-lg ring ring-sudameria-50">
            50
        </div>
    </div>
</footer>
