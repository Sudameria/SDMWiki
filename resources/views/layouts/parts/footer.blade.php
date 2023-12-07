<footer class=" px-xl print-hidden text-center ">
    <div class="grid half border-bottom-line max-width-1080 m-auto py-xl">
        <div class="text-left ">
            @if (setting('app-logo-footer', '') !== 'none' && setting('app-logo-footer', '') !== '')
                <a href="{{ url('/') }}" data-shortcut="home_view" class="logo">
                    <img class="logo-image" src="{{ url(setting('app-logo-footer', '')) }}" alt="Logo">
                </a>
            @endif

        </div>

        <div class="footer-social  icons-min text-right ">

            <ul>
                <li>
                    <a target="_blank" href="https://www.facebook.com/Sudameriatravel">
                        <i class="lab la-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/sudameriatravel/"><i
                            class="lab la-instagram"></i></a>
                </li>

                <li>
                    <a target="_blank" href="https://www.linkedin.com/company/sudameria-travel/"><i
                            class="lab la-linkedin"></i></a>
                </li>

            </ul>
        </div>


    </div>


    <div class="grid fifth border-bottom-line max-width-1080 m-auto py-xl external-logo">




        <div>
            <span>
                <img src="/images/lufthansa.svg">
            </span>
        </div>
        <div>
            <span>
                <img src="/images/Mesa-de-trabajo-2.svg">
            </span>
        </div>
        <div style="padding: 0px 150px;">
            <span>
                <img src="/images/Mesa-de-trabajo-3.svg">
            </span>
        </div>
        <div>
            <span>
                <img class="force-height" src="/images/Mesa-de-trabajo-4.svg">
            </span>
        </div>
        <div class="last">
            <span>
                <img src="/images/Mesa-de-trabajo-5.svg">
            </span>
        </div>


    </div>

    <div class="grid max-width-1080 m-auto py-xl bottom-text-footer">
        <p>© 2021 Sudameria Incoming Solutions SRL <br><span>Lavalle 348, C1047, CABA, Argentina | 54.11.5218.6619 | <a href="#">info@sudameria.com.ar</a></span>&nbsp;| Legajo: EVT 11776</p>
    </div>

    @if (count(setting('app-footer-links', [])) > 0)
        <div id="foot-links">

            <div class="text-center">


                @foreach (setting('app-footer-links', []) as $link)
                    <a href="{{ $link['url'] }}" target="_blank"
                        rel="noopener">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
                @endforeach


            </div>
        </div>
    @endif
</footer>
