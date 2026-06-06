<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo/newlogo1.png') }}" alt="Crystree Solutions" class="logo">
            </a>
            <button class="vs-menu-toggle">
                <i class="fal fa-times"></i>
            </button>
        </div>

        <div class="vs-mobile-menu">
            <ul>

                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}">HOME</a>
                </li>

                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0)">Products</a>

                    <ul class="sub-menu">

                        <li><a href="{{ route('products.website') }}">Website</a></li>
                        <li><a href="{{ route('products.app') }}">App</a></li>
                        <li><a href="{{ route('products.erp') }}">ERP</a></li>
                        <li><a href="{{ route('products.seo') }}">SEO</a></li>
                        <li><a href="{{ route('products.gbp') }}">GBP</a></li>

                        <li><a href="{{ route('products.email') }}">Email</a></li>
                        <li><a href="{{ route('products.reel') }}">Reel</a></li>
                        <li><a href="{{ route('products.brand') }}">Brand</a></li>
                        <li><a href="{{ route('products.crm') }}">CRM</a></li>
                        <li><a href="{{ route('products.design') }}">Design</a></li>

                        <li><a href="{{ route('products.cloud') }}">Cloud</a></li>
                        <li><a href="{{ route('products.sms') }}">SMS</a></li>
                        <li><a href="{{ route('products.saas') }}">SaaS</a></li>
                        <li><a href="{{ route('products.web') }}">Web</a></li>
                        <li><a href="{{ route('products.ecommerce') }}">Ecommerce</a></li>

                        <li><a href="{{ route('products.smm') }}">SMM</a></li>
                        <li><a href="{{ route('products.ads') }}">Ads</a></li>
                        <li><a href="{{ route('products.whatsapp') }}">WhatsApp</a></li>
                        <li><a href="{{ route('products.poster') }}">Poster</a></li>
                        <li><a href="{{ route('products.maintenance') }}">Maintenance</a></li>

                        <li><a href="{{ route('products.uiux') }}">UI/UX</a></li>
                        <li><a href="{{ route('products.software') }}">Software</a></li>
                        <li><a href="{{ route('products.ai') }}">AI</a></li>
                        <li><a href="{{ route('products.ppc') }}">PPC</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>

                <li>
                    <a href="{{ route('bts') }}">BTS</a>
                </li>

                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>

                <li>
                    <a href="{{ route('faq') }}">FAQ</a>
                </li>

                <li>
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</div>