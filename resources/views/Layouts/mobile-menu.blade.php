@php
    $isProducts = request()->routeIs('products.*');
@endphp

<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo/headlogo.png') }}" alt="Crystree Solutions" class="logo menulogo">
            </a>
            <button class="vs-menu-toggle">
                <i class="fal fa-times"></i>
            </button>
        </div>

        <div class="vs-mobile-menu">
            <ul>

                <li>
                    <a href="{{ route('home') }}"
                       class="{{ request()->routeIs('home') ? 'active-mobile' : '' }}">
                        HOME
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                       class="{{ request()->routeIs('about') ? 'active-mobile' : '' }}">
                        About
                    </a>
                </li>

                <li class="menu-item-has-children {{ $isProducts ? 'active-mobile-parent' : '' }}">
                    <a href="javascript:void(0)"
                       class="{{ $isProducts ? 'active-mobile' : '' }}">
                        Products
                    </a>

                    <ul class="sub-menu">

                        <li><a class="{{ request()->routeIs('products.website') ? 'active-mobile' : '' }}" href="{{ route('products.website') }}">Website</a></li>
                        <li><a class="{{ request()->routeIs('products.app') ? 'active-mobile' : '' }}" href="{{ route('products.app') }}">App</a></li>
                        <li><a class="{{ request()->routeIs('products.erp') ? 'active-mobile' : '' }}" href="{{ route('products.erp') }}">ERP</a></li>
                        <li><a class="{{ request()->routeIs('products.seo') ? 'active-mobile' : '' }}" href="{{ route('products.seo') }}">SEO</a></li>
                        <li><a class="{{ request()->routeIs('products.gbp') ? 'active-mobile' : '' }}" href="{{ route('products.gbp') }}">GBP</a></li>

                        <li><a class="{{ request()->routeIs('products.email') ? 'active-mobile' : '' }}" href="{{ route('products.email') }}">Email</a></li>
                        <li><a class="{{ request()->routeIs('products.reel') ? 'active-mobile' : '' }}" href="{{ route('products.reel') }}">Reel</a></li>
                        <li><a class="{{ request()->routeIs('products.brand') ? 'active-mobile' : '' }}" href="{{ route('products.brand') }}">Brand</a></li>
                        <li><a class="{{ request()->routeIs('products.crm') ? 'active-mobile' : '' }}" href="{{ route('products.crm') }}">CRM</a></li>
                        <li><a class="{{ request()->routeIs('products.design') ? 'active-mobile' : '' }}" href="{{ route('products.design') }}">Design</a></li>

                        <li><a class="{{ request()->routeIs('products.cloud') ? 'active-mobile' : '' }}" href="{{ route('products.cloud') }}">Cloud</a></li>
                        <li><a class="{{ request()->routeIs('products.sms') ? 'active-mobile' : '' }}" href="{{ route('products.sms') }}">SMS</a></li>
                        <li><a class="{{ request()->routeIs('products.saas') ? 'active-mobile' : '' }}" href="{{ route('products.saas') }}">SaaS</a></li>
                        <li><a class="{{ request()->routeIs('products.web') ? 'active-mobile' : '' }}" href="{{ route('products.web') }}">Web</a></li>
                        <li><a class="{{ request()->routeIs('products.ecommerce') ? 'active-mobile' : '' }}" href="{{ route('products.ecommerce') }}">Ecommerce</a></li>

                        <li><a class="{{ request()->routeIs('products.smm') ? 'active-mobile' : '' }}" href="{{ route('products.smm') }}">SMM</a></li>
                        <li><a class="{{ request()->routeIs('products.ads') ? 'active-mobile' : '' }}" href="{{ route('products.ads') }}">Ads</a></li>
                        <li><a class="{{ request()->routeIs('products.whatsapp') ? 'active-mobile' : '' }}" href="{{ route('products.whatsapp') }}">WhatsApp</a></li>
                        <li><a class="{{ request()->routeIs('products.poster') ? 'active-mobile' : '' }}" href="{{ route('products.poster') }}">Poster</a></li>
                        <li><a class="{{ request()->routeIs('products.maintenance') ? 'active-mobile' : '' }}" href="{{ route('products.maintenance') }}">Maintenance</a></li>

                        <li><a class="{{ request()->routeIs('products.uiux') ? 'active-mobile' : '' }}" href="{{ route('products.uiux') }}">UI/UX</a></li>
                        <li><a class="{{ request()->routeIs('products.software') ? 'active-mobile' : '' }}" href="{{ route('products.software') }}">Software</a></li>
                        <li><a class="{{ request()->routeIs('products.ai') ? 'active-mobile' : '' }}" href="{{ route('products.ai') }}">AI</a></li>
                        <li><a class="{{ request()->routeIs('products.ppc') ? 'active-mobile' : '' }}" href="{{ route('products.ppc') }}">PPC</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('gallery') }}"
                       class="{{ request()->routeIs('gallery') ? 'active-mobile' : '' }}">
                        Gallery
                    </a>
                </li>

                <li>
                    <a href="{{ route('bts') }}"
                       class="{{ request()->routeIs('bts') ? 'active-mobile' : '' }}">
                        BTS
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog') }}"
                       class="{{ request()->routeIs('blog') ? 'active-mobile' : '' }}">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="{{ route('faq') }}"
                       class="{{ request()->routeIs('faq') ? 'active-mobile' : '' }}">
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimonials') }}"
                       class="{{ request()->routeIs('testimonials') ? 'active-mobile' : '' }}">
                        Testimonials
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}"
                       class="{{ request()->routeIs('contact') ? 'active-mobile' : '' }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('career') }}"
                       class="{{ request()->routeIs('career') ? 'active-mobile' : '' }}">
                        Career
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

<style>
    .active-mobile {
    background: linear-gradient(180deg, #FFF8DC 0%, #fcd80a 30%, #bb9521 60%, #765c08 80%, #664f05 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
}

.active-mobile-parent > a {
    background: linear-gradient(180deg, #FFF8DC 0%, #fcd80a 30%, #bb9521 60%, #765c08 80%, #664f05 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
}

.vs-mobile-menu .sub-menu .active-mobile {
    background: rgba(255, 255, 255, 0.12);
    border-radius: 5px;
    padding: 8px 12px;
    display: block;
}

</style>