<footer class="print-hidden sdm-footer">
    <style>
        .sdm-footer {
            background: #000;
            color: #fff;
            padding: 26px 0 20px;
            text-align: left;
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

        .sdm-footer__container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .sdm-footer__row {
            width: 100%;
        }

        .sdm-footer__row--top {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            padding: 6px 0 24px;
        }

        .sdm-footer__row--logos {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 22px 0;
        }

        .sdm-footer__row--bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            padding: 18px 0 0;
        }

        .sdm-footer__divider {
            border: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.9);
            margin: 0;
        }

        .sdm-footer__brand {
            display: inline-flex;
            align-items: center;
            flex: 0 0 auto;
        }

        .sdm-footer__brand img {
            display: block;
            width: 310px;
            max-width: 100%;
            height: auto;
        }

        .sdm-footer__social {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 14px;
            margin: 0;
            padding: 0;
            list-style: none;
            flex: 0 0 auto;
        }

        .sdm-footer__social li {
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        .sdm-footer__social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            font-size: 14px;
            line-height: 1;
        }

        .sdm-footer__logos-item {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1 1 0;
            min-width: 0;
        }

        .sdm-footer__logos-item img {
            display: block;
            width: auto;
            max-width: 100%;
            height: auto;
        }

        .sdm-footer__logos-item--lufthansa img {
            height: 28px;
        }

        .sdm-footer__logos-item--facve img {
            height: 27px;
        }

        .sdm-footer__logos-item--aviabue img {
            height: 26px;
        }

        .sdm-footer__logos-item--pci img {
            height: 24px;
        }

        .sdm-footer__logos-item--iata img {
            height: 24px;
        }

        .sdm-footer__iso {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex: 0 0 180px;
            min-width: 180px;
        }

        .sdm-footer__iso img {
            display: block;
            width: 118px;
            height: auto;
            filter: invert(1);
            transform-origin: left center;
        }

        .sdm-footer__info {
            flex: 1 1 auto;
            text-align: right;
            font-size: 12px;
            line-height: 1.42;
            font-weight: 400;
        }

        .sdm-footer__info p {
            margin: 0;
        }

        .sdm-footer__links {
            padding-top: 14px;
            text-align: center;
        }

        .sdm-footer__links a {
            display: inline-block;
            margin: 0 8px;
        }

        @media (max-width: 900px) {
            .sdm-footer {
                padding: 24px 0 18px;
            }

            .sdm-footer__container {
                padding: 0 20px;
            }

            .sdm-footer__row--top,
            .sdm-footer__row--bottom {
                align-items: flex-start;
                flex-direction: column;
            }

            .sdm-footer__row--logos {
                flex-wrap: wrap;
                justify-content: center;
                gap: 18px 22px;
            }

            .sdm-footer__brand img {
                width: 260px;
            }

            .sdm-footer__social {
                justify-content: flex-start;
            }

            .sdm-footer__logos-item {
                flex: 0 1 180px;
            }

            .sdm-footer__iso {
                min-width: 0;
                flex-basis: auto;
            }

            .sdm-footer__info {
                text-align: left;
            }
        }

        @media (max-width: 640px) {
            .sdm-footer__container {
                padding: 0 16px;
            }

            .sdm-footer__row--top {
                padding: 4px 0 18px;
            }

            .sdm-footer__row--logos {
                padding: 18px 0;
                gap: 16px 12px;
            }

            .sdm-footer__row--bottom {
                padding-top: 16px;
                gap: 16px;
            }

            .sdm-footer__brand img {
                width: 220px;
            }

            .sdm-footer__logos-item {
                flex: 0 1 calc(50% - 8px);
            }

            .sdm-footer__logos-item--lufthansa img {
                height: 24px;
            }

            .sdm-footer__logos-item--facve img,
            .sdm-footer__logos-item--aviabue img,
            .sdm-footer__logos-item--pci img,
            .sdm-footer__logos-item--iata img {
                height: 22px;
            }

            .sdm-footer__iso img {
                width: 104px;
            }

            .sdm-footer__info {
                font-size: 11px;
            }
        }
    </style>

    <div class="sdm-footer__container">
        <div class="sdm-footer__row sdm-footer__row--top">
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

        <hr class="sdm-footer__divider">

        <div class="sdm-footer__row sdm-footer__row--logos" aria-label="Afiliaciones y certificaciones">
            <div class="sdm-footer__logos-item sdm-footer__logos-item--lufthansa">
                <img src="{{ url('/images/lufthansa.svg') }}" alt="Lufthansa City Center Sudameria">
            </div>
            <div class="sdm-footer__logos-item sdm-footer__logos-item--facve">
                <img src="{{ url('/images/Mesa-de-trabajo-2.svg') }}" alt="FACVE">
            </div>
            <div class="sdm-footer__logos-item sdm-footer__logos-item--aviabue">
                <img src="{{ url('/images/Mesa-de-trabajo-3.svg') }}" alt="AVIABUE">
            </div>
            <div class="sdm-footer__logos-item sdm-footer__logos-item--pci">
                <img src="{{ url('/images/Mesa-de-trabajo-4.svg') }}" alt="PCI DSS">
            </div>
            <div class="sdm-footer__logos-item sdm-footer__logos-item--iata">
                <img src="{{ url('/images/Mesa-de-trabajo-5.svg') }}" alt="IATA">
            </div>
        </div>

        <hr class="sdm-footer__divider">

        <div class="sdm-footer__row sdm-footer__row--bottom">
            <div class="sdm-footer__iso">
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
