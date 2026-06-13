@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/web-application-banner.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Web Applications</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Web Applications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog vs-blog--single">
                        <figure class="vs-blog__figure"><img class="vs-blog__img" src="{{ asset('assets/img/blog/web-application.webp')}}" alt="Blog Image">
                            <div class="overlay"></div>
                        </figure>
                        <div class="vs-blog__content">
                            <h3 class="vs-blog__title mb-2">Transform Your Business with Professional Website Design </h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">A website is more than just an online presence—it is a powerful business tool that helps attract customers, build trust, and generate enquiries. Whether you are a startup, small business, or established enterprise, having a professionally designed website can significantly improve your visibility and credibility in the digital marketplace.</p>
                            <p class="pt-40">As a leading web design company , we create modern, responsive, and user-focused websites that help businesses connect with their target audience and achieve their growth objectives. Our websites are designed to deliver exceptional user experiences while maintaining high performance and search engine compatibility.</p>
                            <h4 class="mt-4 mb-15">Custom Web Design Solutions for Every Business</h4>
                            <p class="mb-20">Every brand has a unique identity, and your website should reflect that uniqueness. We provide customized website design solutions tailored to your industry, goals, and customer expectations. From corporate websites to service-based platforms and business portfolios, we develop websites that represent your brand professionally.</p>
                            <ul class="vs-list style2">
                                <li>Creative and Modern Designs</li>
                                <li>Responsive User Interfaces</li>
                                <li>Easy Navigation Structure</li>
                                <li>Fast Website Performance</li>
                                <li>SEO-Friendly Development</li>                                <li>Secure Website Architecture</li>
                                <li>Conversion-Oriented Layouts</li>
                                <li>Mobile-Optimized Experiences</li>
                            </ul>
                            <div class="row pt-30">
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/web-application-trichy.webp')}}" alt="video"></div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/website-trichy.webp')}}" alt="video"></div>
                                </div>
                            </div>
            <!-- FAQ Section Start -->
<div class="row  mt-60 ">
    <div class="col-lg-11">
        <div class="title-area text-center mb-40">
            <h4 class="mt-4 mb-15">Frequently Asked Questions</h4>
            {{-- <h3 class="vs-blog__title mb-2"></h3> --}}
            {{-- <span class="sec-subtitle"></span> --}}
            {{-- <h2 class="sec-title">Website Development FAQ</h2> --}}
        </div>

        <div class="accordion style3" id="websiteFaq">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button " type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqOne">
What is web design?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Web design is the process of creating the visual layout, structure, and user experience of a website.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Do you provide responsive website design?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes, all websites are fully responsive and optimized for mobile, tablet, and desktop devices.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
Is SEO included in website design?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes, every website is developed with SEO-friendly architecture and technical optimization.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
                        Is SEO included with website development?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        Yes. We implement on-page SEO best practices including
                        optimized page structure, meta tags, mobile optimization,
                        fast loading speed, and search-engine-friendly coding.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
                        Can you redesign my existing website?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        Absolutely. We can modernize your existing website,
                        improve performance, enhance user experience,
                        and optimize it for better search engine rankings.
                    </div>
                </div>
            </div>
       <div class="col-12 mt-4">
    <div class="vs-header__action d-flex justify-content-center">
        <a href="#websiteFaq" class="vs-btn vs-btn--gradient">
            Explore FAQs
            {{-- <i class="fa-solid fa-arrow-right"></i> --}}
        </a>
    </div>
</div>

        </div>
    </div>
      
</div>

<!-- FAQ Section End -->
                            <h4 class="mb-15 mt-5">Why Choose Us for Website Design ?</h4>
                            <p class="mb-20">We combine creativity, technology, and digital marketing expertise to create websites that deliver measurable business value. Our focus is not only on aesthetics but also on performance, user engagement, and search engine visibility.</p>
                            {{-- <ul class="vs-list style2">
                                <li>Personalized Retirement Roadmap</li>
                                <li>Social Security & Pension Planning</li>
                                <li>Investment & Savings Guidance</li>
                                <li>Risk Management & Insurance Planning</li>
                                <li>Tax Optimization Strategies</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area sticky-top">
                        <div class="widget widget_block widget_services">
                            <h3 class="widget__heading">Our Services</h3>
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li class="cat-item cat-item-17"><a href="{{ route('products.seo') }}">Search Engine Optimization</a></li>
                                <li class="cat-item cat-item-26"><a href="{{ route('products.erp') }}">ICRYSTAL ERP</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.app') }}">Mobile App Development</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.website') }}">Website Development</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.crm') }}">CRM Software</a></li>
                            </ul>
                        </div>
                        <!-- <div class="widget widget_block widget_newsletter bg-theme-17" data-bg-src="assets/img/elements/vs-bg-blog-sidebar-ele1.svg">
                            <h3 class="widget__heading">News Letter</h3>
                            <form action="{{ route('products.crm') }}">
                                <div class="wp-block-search__inside-wrapper">
                                    <p class="text-white">Subscribe email and get recent news and updates or offers.</p>
                                    <input placeholder="Search Here..." type="text" name="search" id="wp-search">
                                    <button class="vs-btn vs-btn--style14">Subscribe</button>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection