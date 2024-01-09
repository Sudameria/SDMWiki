<div id="header-sudameria" class="primary-background-opacity"
    @if (setting('app-home-image', '') !== 'none') style="background-image: url({{ setting('app-home-image', '') === '' ? '' : url(setting('app-home-image', '')) }});" @endif>




    <header id="header" component="header-mobile-toggle" class="primary-background-opacity">
        <div class="container px-xl grid third print-hidden">
            <div>
                @include('layouts.parts.header-logo')
                <button type="button" refs="header-mobile-toggle@toggle" title="{{ trans('common.header_menu_expand') }}"
                    aria-expanded="false" class="mobile-menu-toggle hide-over-l">@icon('more')</button>
            </div>

            <div class="last" style="margin-left: auto;">
                <nav refs="header-mobile-toggle@menu" class="header-links">
                    <div class="links text-center">
                        @include('layouts.parts.header-links')
                    </div>
                    @if (!user()->isGuest())
                        @include('layouts.parts.header-user-menu', ['user' => user()])
                    @endif
                </nav>
            </div>
        </div>
    </header>




    @if (user()->hasAppAccess())
        <div
            class="search-box-container primary-background-opacity flex-container-column items-center justify-center hide-under-l ">
            <h3 class="mb-l">{{ setting('app-home-title', '') }}</h3>


            @include('layouts.parts.header-search-sudameria')
        </div>
    @endif
</div>
