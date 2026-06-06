<header class="vs-header vs-header--style2">
    <div id="sticky-placeholder"></div>
    <div class="vs-sticky-header">
        <div id="navbar-wrap">
            <div class="container container--custom">
                <div class="vs-header__content">
                    <div class="row justify-content-between align-items-center gx-sm-0">
                        <div class="col-lg-auto col-auto">
                            <div class="vs-header__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo/newlogo1.png') }}" alt="Crystree Solutions" class="logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-auto flex-grow-1 col-auto d-none d-lg-block">
                            <nav class="main-menu d-none d-lg-block text-end text-xl-center">
                                <ul>

                                    <li class="menu-item-has-children">
                                        <a class="menu-item-has-children__link active" href="{{ route('home') }}">HOME</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('about') }}">About</a>
                                    </li>

                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a class="menu-item-has-children__link" href="javascript:void(0)">Products</a>

                                        <ul class="mega-menu">

                                            <li>
                                                <a href="javascript:void(0)">Development Solutions</a>
                                                <ul>
                                                    <li><a href="{{ route('products.website') }}">Website Development</a></li>
                                                    <li><a href="{{ route('products.app') }}">Mobile App Development</a></li>
                                                    <li><a href="{{ route('products.erp') }}">ERP Solutions</a></li>
                                                    <li><a href="{{ route('products.web') }}">Web Applications</a></li>
                                                    <li><a href="{{ route('products.software') }}">Custom Software Development</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">Digital Marketing</a>
                                                <ul>
                                                    <li><a href="{{ route('products.seo') }}">SEO Services</a></li>
                                                    <li><a href="{{ route('products.smm') }}">Social Media Marketing</a></li>
                                                    <li><a href="{{ route('products.ads') }}">Google & Meta Ads</a></li>
                                                    <li><a href="{{ route('products.email') }}">Email Marketing</a></li>
                                                    <li><a href="{{ route('products.whatsapp') }}">WhatsApp Marketing</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">Business Solutions</a>
                                                <ul>
                                                    <li><a href="{{ route('products.crm') }}">CRM Software</a></li>
                                                    <li><a href="{{ route('products.saas') }}">SaaS Solutions</a></li>
                                                    <li><a href="{{ route('products.cloud') }}">Cloud Solutions</a></li>
                                                    <li><a href="{{ route('products.sms') }}">Bulk SMS Services</a></li>
                                                    <li><a href="{{ route('products.gbp') }}">Google Business Profile</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">Creative & AI Services</a>
                                                <ul>
                                                    <li><a href="{{ route('products.brand') }}">Branding Solutions</a></li>
                                                    <li><a href="{{ route('products.design') }}">Graphic Design</a></li>
                                                    <li><a href="{{ route('products.poster') }}">Poster Design</a></li>
                                                    <li><a href="{{ route('products.uiux') }}">UI/UX Design</a></li>
                                                    <li><a href="{{ route('products.reel') }}">Reels & Video Marketing</a></li>
                                                    <li><a href="{{ route('products.ai') }}">AI Solutions</a></li>
                                                    <li><a href="{{ route('products.ecommerce') }}">E-Commerce Solutions</a></li>
                                                    <li><a href="{{ route('products.maintenance') }}">Website Maintenance</a></li>
                                                    <li><a href="{{ route('products.ppc') }}">PPC Advertising</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('gallery') }}">Gallery</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('bts') }}">BTS</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('blog') }}">Blog</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('faq') }}">FAQ</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('testimonials') }}">Testimonials</a>
                                    </li>

                                    <li>
                                        <a class="menu-item-has-children__link" href="{{ route('contact') }}">Contact</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-auto col-auto">
                            <div class="vs-header__action">
                                <div class="d-none d-xl-inline-flex align-items-center">
                                    <a href="{{ route('contact') }}" class="vs-btn vs-btn--gradient">
                                        Get In Touch
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>

                                <button class="vs-menu-toggle d-inline-flex d-lg-none">
                                    <i class="fal fa-bars"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>