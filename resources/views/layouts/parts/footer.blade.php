<footer class=" text-left primary-background-light px-xl print-hidden">
    <div class="grid third gap-x-xxl no-row-gap">
        <div>
            <a href="{{ url('/') }}" data-shortcut="home_view" class="logo">
                @if(setting('app-logo-footer', '') !== 'none')
                    <img class="logo-image" src="{{ setting('app-logo-footer', '') === '' ? url('/logo.png') : url(setting('app-logo-footer', '')) }}" alt="Logo">
                @endif
            </a>

        </div>
        <div></div>

        <div class="footer-social col-sm-12 col-lg-3 icons-min">

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
                <li >
                    <a href="mailto:info@sudameria.com.ar"><i class="las la-envelope"></i>
                    </a>
                </li>
                <li class="icon-border-right">
                    <a target="_blank"
                        href="https://api.whatsapp.com/send?phone=5491134534971&amp;text=¡Sumate a nuestra lista de difusión! "><i
                            class="lab la-whatsapp"></i>
                    </a>
                </li>
                <li class="icon-border-left">
                    <a href="tel:541152186619"><i class="las la-phone"></i><span class="text-phone">54 11-5218-6619</span></a>
                </li>


            </ul>
            <ul class="footer-phone icons-min">



            </ul>
        </div>


    </div>


    @if (count(setting('app-footer-links', [])) > 0)
    <div id="foot-links" >

        <div class="text-center">
            
                
                    @foreach (setting('app-footer-links', []) as $link)
                        
                            <a href="{{ $link['url'] }}" target="_blank"
                                rel="noopener">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
                        
                    @endforeach
                
            
        </div>
    </div>
    @endif
</footer>
