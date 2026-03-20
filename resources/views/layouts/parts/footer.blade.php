<footer class="sdm-footer bg-black text-white print-hidden">
    <style>
        .sdm-footer {
            background: #000;
            color: #fff;
            padding: 0;
        }

        .sdm-footer,
        .sdm-footer * {
            box-sizing: border-box;
        }

        .sdm-footer a,
        .sdm-footer a:visited {
            color: #fff;
            text-decoration: none;
        }

        .sdm-footer ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .sdm-footer .bg-black {
            background: #000;
        }

        .sdm-footer .text-white {
            color: #fff;
        }

        .sdm-footer .text-center {
            text-align: center;
        }

        .sdm-footer .text-left {
            text-align: left;
        }

        .sdm-footer .text-right {
            text-align: right;
        }

        .sdm-footer .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .sdm-footer .me-auto {
            margin-right: auto;
        }

        .sdm-footer .mt-auto {
            margin-top: auto;
        }

        .sdm-footer .w-full {
            width: 100%;
        }

        .sdm-footer .w-auto {
            width: auto;
        }

        .sdm-footer .hidden {
            display: none;
        }

        .sdm-footer .max-w-7xl {
            max-width: 1280px;
        }

        .sdm-footer .px-4 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .sdm-footer .py-3 {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .sdm-footer .pt-5 {
            padding-top: 20px;
        }

        .sdm-footer .my-8 {
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .sdm-footer .gap-4 {
            gap: 16px;
        }

        .sdm-footer .gap-5 {
            gap: 20px;
        }

        .sdm-footer .gap-16 {
            gap: 64px;
        }

        .sdm-footer .ms-4 {
            margin-left: 16px;
        }

        .sdm-footer .flex {
            display: flex;
        }

        .sdm-footer .flex-wrap {
            flex-wrap: wrap;
        }

        .sdm-footer .items-center {
            align-items: center;
        }

        .sdm-footer .items-end {
            align-items: flex-end;
        }

        .sdm-footer .justify-between {
            justify-content: space-between;
        }

        .sdm-footer .h-px {
            height: 1px;
        }

        .sdm-footer .border-0 {
            border: 0;
        }

        .sdm-footer hr.bg-white {
            background: rgba(255, 255, 255, 0.9);
        }

        .sdm-footer .text-xs {
            font-size: 12px;
            line-height: 1.4;
        }

        .sdm-footer .text-lg {
            font-size: 18px;
            line-height: 1;
        }

        .sdm-footer .h-4 {
            height: 16px;
            width: auto;
        }

        .sdm-footer .h-5 {
            height: 20px;
            width: auto;
        }

        .sdm-footer .h-6 {
            height: 24px;
            width: auto;
        }

        .sdm-footer .h-8 {
            height: 32px;
            width: auto;
        }

        .sdm-footer .h-14 {
            height: 56px;
            width: auto;
        }

        .sdm-footer .max-w-7xl {
            margin-left: auto;
            margin-right: auto;
        }

        .sdm-footer .max-w-7xl > .flex:first-child {
            min-height: 32px;
        }

        .sdm-footer .max-w-7xl > .flex:first-child > div:first-child {
            flex: 1 1 0;
            justify-content: flex-start;
            padding-left: 0;
        }

        .sdm-footer .max-w-7xl > .flex:first-child > div:last-child {
            flex: 1 1 0;
            justify-content: flex-end;
            padding-right: 0;
        }

        .sdm-footer .max-w-7xl > .flex:first-child > div:last-child ul {
            align-items: center;
            gap: 0;
        }

        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div {
            display: flex;
            align-items: center;
            flex: 1 1 20%;
        }

        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div:first-child {
            justify-content: flex-start;
        }

        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div:nth-child(2),
        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div:nth-child(3),
        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div:nth-child(4) {
            justify-content: center;
        }

        .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div:last-child {
            justify-content: flex-end;
        }

        .sdm-footer .max-w-7xl > .flex:last-of-type > div:first-child {
            flex: 0 0 220px;
            justify-content: flex-start;
        }

        .sdm-footer .max-w-7xl > .flex:last-of-type > div:last-child {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            justify-content: center;
        }

        .sdm-footer .max-w-7xl > .flex:last-of-type p {
            margin: 0;
        }

        .sdm-footer .max-w-7xl > .flex:last-of-type p + p {
            margin-top: 2px;
        }

        .sdm-footer .footer-iso {
            filter: invert(1);
            display: block;
        }

        .sdm-footer .footer-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
            width: auto;
            height: auto;
        }

        @media (min-width: 640px) {
            .sdm-footer .sm\:px-4 {
                padding-left: 16px;
                padding-right: 16px;
            }
        }

        @media (min-width: 768px) {
            .sdm-footer .max-w-7xl > .flex:first-child {
                display: grid;
                grid-template-columns: 1fr auto;
                align-items: end;
            }

            .sdm-footer .max-w-7xl > .flex:first-child > div:first-child {
                width: 100%;
            }

            .sdm-footer .max-w-7xl > .flex:first-child > div:last-child {
                width: auto;
            }

            .sdm-footer .max-w-7xl > .flex:first-child,
            .sdm-footer .max-w-7xl > .flex:nth-of-type(2),
            .sdm-footer .max-w-7xl > .flex:last-of-type {
                width: 100%;
            }

            .sdm-footer .md\:flex-nowrap {
                flex-wrap: nowrap;
            }

            .sdm-footer .md\:justify-between {
                justify-content: space-between;
            }

            .sdm-footer .md\:text-left {
                text-align: left;
            }

            .sdm-footer .md\:text-right {
                text-align: right;
            }

            .sdm-footer .md\:w-auto {
                width: auto;
            }

            .sdm-footer .md\:m-0,
            .sdm-footer .md\:mx-0 {
                margin: 0;
            }

            .sdm-footer .max-w-7xl > .flex:first-child > div:first-child > a {
                margin-left: 0 !important;
                margin-right: auto !important;
            }

            .sdm-footer .max-w-7xl > .flex:first-child > div:last-child > ul {
                margin-left: auto !important;
                margin-right: 0 !important;
            }
        }

        @media (max-width: 767px) {
            .sdm-footer .max-w-7xl {
                max-width: 100%;
            }

            .sdm-footer .h-8 {
                height: 32px;
            }

            .sdm-footer .h-14 {
                height: 56px;
            }

            .sdm-footer .text-lg {
                font-size: 18px;
            }

            .sdm-footer .my-8 {
                margin-top: 22px;
                margin-bottom: 22px;
            }

            .sdm-footer .max-w-7xl > .flex:first-child,
            .sdm-footer .max-w-7xl > .flex:nth-of-type(2),
            .sdm-footer .max-w-7xl > .flex:last-of-type {
                justify-content: center;
            }

            .sdm-footer .max-w-7xl > .flex:nth-of-type(2) > div,
            .sdm-footer .max-w-7xl > .flex:last-of-type > div {
                flex: 1 1 100%;
                justify-content: center !important;
            }

            .sdm-footer .max-w-7xl > .flex:last-of-type > div:last-child {
                text-align: center;
            }

            .sdm-footer .max-w-7xl > .flex:first-child > div:first-child,
            .sdm-footer .max-w-7xl > .flex:first-child > div:last-child {
                flex: 1 1 100%;
                padding-left: 0;
                padding-right: 0;
            }
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-4 py-3 text-center">

        <div class="flex flex-wrap md:flex-nowrap md:justify-between gap-5 pt-5">
            <div class="text-center mx-auto md:m-0 md:text-left w-full md:w-auto flex items-end gap-16">

                <a href="https://sudameria.com" data-shortcut="home_view" class="mx-auto md:m-0">
                    <img class="h-8" src="{{ url('/images/logo_sdm.svg') }}" alt="Logo">
                </a>

            </div>

            <div class="mx-auto md:m-0 text-center md:text-right w-full md:w-auto flex items-end">

                <ul class="flex mx-auto md:m-0">
                    <li class="ms-4">
                        <a class="footer-social-icon" target="_blank" rel="noopener" href="https://www.facebook.com/Sudameriatravel">
                            <i class="fab fa-facebook-square text-lg"></i>
                        </a>
                    </li>
                    <li class="ms-4">
                        <a class="footer-social-icon" target="_blank" rel="noopener" href="https://www.instagram.com/sudameriatravel/">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </li>

                    <li class="ms-4">
                        <a class="footer-social-icon" target="_blank" rel="noopener" href="https://www.linkedin.com/company/sudameria-travel/">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

        <hr class="h-px my-8 bg-white border-0">

        <div class="flex flex-wrap md:flex-nowrap md:justify-between items-center gap-5">

            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-6 md:mx-0" src="{{ url('/images/lufthansa.svg') }}" alt="Lufthansa">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-4 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-2.svg') }}" alt="FACVE">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-3.svg') }}" alt="AVIABUE">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-4.svg') }}" alt="PCI DSS">
            </div>
            <div class="h-6 w-full md:w-auto me-auto md:mx-0">
                <img class="h-5 md:mx-0" src="{{ url('/images/Mesa-de-trabajo-5.svg') }}" alt="IATA">
            </div>

        </div>
        <hr class="h-px my-8 bg-white border-0">

        <div class="flex flex-wrap md:flex-nowrap md:justify-between items-center gap-5">
            <div class="w-full md:w-auto text-left text-white text-xs flex items-center gap-4">
                <div class="text-white flex items-center">
                    <img class="footer-iso h-14 w-auto" src="{{ url('/images/logo iso.svg') }}" alt="ISO 9001:2015">
                </div>
            </div>
            <div class="w-full md:w-auto text-right text-white text-xs mt-auto">
                <p>Lavalle 348, C1047, CABA, Argentina | 54.11.5218.6619 | <a href="mailto:info@sudameria.com.ar">info@sudameria.com.ar</a> | Legajo: EVT 11776</p>
                <p>&copy; {{ \Carbon\Carbon::now()->year }} Sudameria Incoming Solutions SRL CUIT 33708398999</p>
            </div>
        </div>

        @if (count(setting('app-footer-links', [])) > 0)
            <div class="text-center" style="padding-top: 14px;">
                @foreach (setting('app-footer-links', []) as $link)
                    <a href="{{ $link['url'] }}" target="_blank"
                        rel="noopener" style="margin: 0 8px;">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
                @endforeach
            </div>
        @endif
    </div>
</footer>
