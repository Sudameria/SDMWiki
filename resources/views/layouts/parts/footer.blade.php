<footer class="print-hidden sdm-footer">
    <style>
        .sdm-footer {
            flex-shrink: 0;
            padding: 26px 20px 22px;
            color: #ffffff;
            background: #000000;
            text-align: left;
        }

        .sdm-footer,
        .sdm-footer * {
            box-sizing: border-box;
        }

        .sdm-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .sdm-footer a:hover {
            opacity: 0.9;
        }

        .sdm-footer__inner {
            max-width: 1250px;
            margin: 0 auto;
        }

        .sdm-footer__section {
            padding: 16px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.92);
        }

        .sdm-footer__section:first-child {
            padding-top: 0;
        }

        .sdm-footer__section:last-of-type {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .sdm-footer__top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .sdm-footer__brand {
            display: inline-flex;
            align-items: center;
        }

        .sdm-footer__brand img {
            display: block;
            width: 240px;
            max-width: 100%;
            height: auto;
        }

        .sdm-footer__social {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sdm-footer__social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            font-size: 15px;
            line-height: 1;
        }

        .sdm-footer__logos {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .sdm-footer__logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 28px;
            flex: 1 1 0;
        }

        .sdm-footer__logo-item img {
            display: block;
            max-width: 100%;
            width: auto;
            height: auto;
            max-height: 28px;
        }

        .sdm-footer__bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .sdm-footer__certification {
            flex: 0 0 auto;
        }

        .sdm-footer__certification img {
            display: block;
            width: 126px;
            max-width: 100%;
            height: auto;
            filter: invert(1);
        }

        .sdm-footer__info {
            flex: 1 1 auto;
            text-align: right;
            font-size: 11px;
            line-height: 1.3;
            font-weight: 400;
        }

        .sdm-footer__info p {
            margin: 0;
        }

        .sdm-footer__info p + p {
            margin-top: 2px;
        }

        .sdm-footer__links {
            margin-top: 14px;
            text-align: center;
        }

        .sdm-footer__links a {
            margin: 0 8px;
            white-space: nowrap;
        }

        @media (max-width: 900px) {
            .sdm-footer {
                padding: 22px 18px 18px;
            }

            .sdm-footer__top,
            .sdm-footer__bottom {
                flex-direction: column;
                align-items: flex-start;
            }

            .sdm-footer__social {
                justify-content: flex-start;
            }

            .sdm-footer__logos {
                flex-wrap: wrap;
                justify-content: center;
            }

            .sdm-footer__logo-item {
                flex: 0 1 140px;
            }

            .sdm-footer__info {
                text-align: left;
            }
        }

        @media (max-width: 600px) {
            .sdm-footer__brand img {
                width: 200px;
            }

            .sdm-footer__section {
                padding: 14px 0;
            }

            .sdm-footer__logos {
                gap: 14px 10px;
            }

            .sdm-footer__logo-item {
                flex: 0 1 calc(50% - 6px);
                min-height: 28px;
            }

            .sdm-footer__logo-item img {
                max-height: 22px;
            }

            .sdm-footer__certification img {
                width: 110px;
            }

            .sdm-footer__info {
                font-size: 10px;
            }

            .sdm-footer__links a {
                display: inline-block;
                margin: 4px 6px;
            }
        }
    </style>

    <div class="sdm-footer__inner">
        <div class="sdm-footer__section sdm-footer__top">
            <a href="https://sudameria.com" data-shortcut="home_view" class="sdm-footer__brand" aria-label="Sudameria">
                <img src="{{ url('/images/logo_sdm.svg') }}" alt="Sudameria">
            </a>

            <ul class="sdm-footer__social" aria-label="Redes sociales">
                <li>
                    <a target="_blank" rel="noopener" href="https://www.facebook.com/Sudameriatravel" aria-label="Facebook">
                        <i class="lab la-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" rel="noopener" href="https://www.instagram.com/sudameriatravel/" aria-label="Instagram">
                        <i class="lab la-instagram"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" rel="noopener" href="https://www.linkedin.com/company/sudameria-travel/" aria-label="LinkedIn">
                        <i class="lab la-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sdm-footer__section sdm-footer__logos" aria-label="Afiliaciones y certificaciones">
            <div class="sdm-footer__logo-item">
                <img src="{{ url('/images/lufthansa.svg') }}" alt="Lufthansa City Center Sudameria">
            </div>
            <div class="sdm-footer__logo-item">
                <img src="{{ url('/images/Mesa-de-trabajo-2.svg') }}" alt="FACVE">
            </div>
            <div class="sdm-footer__logo-item">
                <img src="{{ url('/images/Mesa-de-trabajo-3.svg') }}" alt="AVIABUE">
            </div>
            <div class="sdm-footer__logo-item">
                <img src="{{ url('/images/Mesa-de-trabajo-4.svg') }}" alt="PCI DSS">
            </div>
            <div class="sdm-footer__logo-item">
                <img src="{{ url('/images/Mesa-de-trabajo-5.svg') }}" alt="IATA">
            </div>
        </div>

        <div class="sdm-footer__section sdm-footer__bottom">
            <div class="sdm-footer__certification">
                <img src="{{ url('/images/logo iso.svg') }}" alt="Certificacion ISO 9001:2015">
            </div>

            <div class="sdm-footer__info">
                <p>Lavalle 348, C1047, CABA, Argentina | 54.11.5218.6619 | <a href="mailto:info@sudameria.com.ar">info@sudameria.com.ar</a> | Legajo: EVT 11776</p>
                <p>&copy; {{ \Carbon\Carbon::now()->year }} Sudameria Incoming Solutions SRL CUIT 33708398999</p>
            </div>
        </div>

        @if (count(setting('app-footer-links', [])) > 0)
            <div class="sdm-footer__links">
                @foreach (setting('app-footer-links', []) as $link)
                    <a href="{{ $link['url'] }}" target="_blank"
                        rel="noopener">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
                @endforeach
            </div>
        @endif
    </div>
</footer>
