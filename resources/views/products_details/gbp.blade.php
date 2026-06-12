@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/seo-banner.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Google Business Profile</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">GBP</li>
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
                        <figure class="vs-blog__figure"><img class="vs-blog__img" src="assets/img/blog/vs-blog-details-img-1.jpg" alt="Blog Image">
                            <div class="overlay"></div>
                        </figure>
                        <div class="vs-blog__content">
                            <h3 class="vs-blog__title mb-2">Google Business Profile Optimization Services </h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">A strong local online presence is essential for businesses looking to attract nearby customers. At Crystree Solutions, we provide professional Google Business Profile optimization services that help businesses improve local visibility, attract more customer inquiries, and increase their presence in Google Search and Google Maps.</p>
                            <h4 class="mt-4 mb-15">Boost Your Local Business Visibility</h4>
                            <p class="mb-20">When potential customers search for products or services in their area, a well-optimized Google Business Profile can significantly improve your chances of being discovered. Our experts optimize your business profile to ensure accurate information, better rankings, and increased customer engagement.</p>
                            <p class="mb-20">Whether you run a local shop, restaurant, clinic, educational institution, or service-based business, we help you maximize the benefits of local search marketing.</p>
                            <ul class="vs-list style2">
                                <li>Google Business Profile Setup</li>
                                <li>Profile Verification Assistance</li>
                                <li>Business Information Optimization</li>
                                <li>Category & Keyword Optimization</li>
                                <li>Google Maps Optimization</li>
                               <li>Business Description Creation</li>
                                <li>Product & Service Listings</li>
                                <li>Photo & Media Management</li>
                                <li>Review Management Support</li>
                                <li>Performance Monitoring & Reporting</li>
                            </ul>
                            <div class="row pt-30">
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="assets/img/blog/vs-blog-details-img-3.jpg" alt="video"></div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="assets/img/blog/vs-blog-details-img-4.jpg" alt="video"></div>
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
What is a Google Business Profile?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
A Google Business Profile is a free business listing that allows companies to appear in Google Search and Google Maps results.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
How does Google Business Profile help my business?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
It improves local visibility, increases customer engagement, and helps potential customers find important business information quickly.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
Can you optimize an existing Google Business Profile?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We can improve existing profiles by optimizing information, categories, descriptions, images, and local SEO elements.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
How long does it take to see results?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Results vary based on competition and profile condition, but optimization can improve visibility and engagement over time.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Do you provide review management support?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We offer guidance and strategies to help businesses manage and improve customer reviews effectively.
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

                            <h4 class="mb-15 mt-5">Why Google Business Profile Matters</h4>
                            <p class="mb-20">Most customers search online before visiting a business. An optimized Google Business Profile increases your chances of appearing in local search results, Google Maps listings, and relevant customer searches. This visibility helps businesses build trust, attract more leads, and stay ahead of local competitors.</p>
                            <ul class="vs-list style2">
                                <li>Experienced Local SEO Experts</li>
                                <li>Customized Optimization Strategies</li>
                                <li>Proven Local Search Techniques</li>
                                <li>Complete Profile Management</li>
                                <li>Transparent Reporting</li>
                            </ul>
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