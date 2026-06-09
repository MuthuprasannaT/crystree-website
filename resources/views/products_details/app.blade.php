@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Mobile App Development</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Mobile App Development</li>
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
                            <h3 class="vs-blog__title mb-2">Transform Your Ideas into Powerful Mobile Applications</h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fietirll="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">A mobile app can help businesses connect with customers, streamline operations, and deliver seamless digital experiences. Our experienced app developers create feature-rich mobile applications that combine attractive design, smooth functionality, and high performance.</p>
                            <p class="pt-40">Whether you need a business application, e-commerce app, service booking platform, educational app, healthcare solution, or custom mobile application, we deliver solutions that support your business objectives and future growth.</p>
                            <h4 class="mt-4 mb-15">Why Mobile App Development is Essential</h4>
                            <p class="mb-20">Mobile applications help businesses improve customer engagement, increase accessibility, and provide a better user experience. A well-designed app allows businesses to stay connected with customers, automate processes, and create new revenue opportunities in today's competitive digital marketplace. High-performance mobile applications also improve brand loyalty, operational efficiency, and business growth.</p>
                            {{-- <ul class="vs-list style2">
                                <li>Improve Customer Engagement</li>
                                <li>Increase Brand Visibility</li>
                                <li>Enhance User Experience</li>
                                <li>Drive Business Growth</li>
                            </ul> --}}
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
            <h4 class="mt-4 mb-15">Frequently Asked Questions Website Development</h4>
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
                        What mobile platforms do you develop apps for?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        We develop applications for Android, iOS, and cross-platform environments to ensure maximum reach and compatibility.   </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
                        Can you create a custom mobile application for my business?     </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        Yes. We develop fully customized mobile applications based on your business requirements and objectives.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
                        Do you provide app maintenance services?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        Yes. We offer ongoing support, updates, bug fixes, and performance optimization services.     </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
                        How long does it take to develop a mobile app?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        The timeline depends on the complexity, features, and functionality of the application. We provide a detailed project schedule after requirement analysis.     </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
                        Can you integrate third-party services into mobile apps?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                        Yes. We can integrate payment gateways, APIs, CRM systems, cloud services, analytics tools, and other third-party solutions.
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
                           <h4 class="mb-15 mt-5">Why Choose Crystree Solutions for Mobile App Development?</h4>
                            <p class="mb-20">At Crystree Solutions, we combine innovation, technical expertise, and industry best practices to deliver mobile applications that help businesses achieve digital success. Our team focuses on creating apps that are secure, scalable, and designed to provide excellent user experiences.</p>
                            <!-- <ul class="vs-list style2">
                                <li>Android & iOS App Development</li>
                                <li>Flutter & Cross-Platform Development</li>
                                <li>Custom Mobile App Solutions</li>
                                <li>App Maintenance & Support</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area sticky-top">
                        <div class="widget widget_block widget_services">
                            <h3 class="widget__heading">Our Services</h3>
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li class="cat-item cat-item-17"><a href="#">Investment & Wealth Management</a></li>
                                <li class="cat-item cat-item-26"><a href="#">Retirement Planning Services</a></li>
                                <li class="cat-item cat-item-24"><a href="#">Tax Planning And Preparation</a></li>
                                <li class="cat-item cat-item-24"><a href="#">Risk & Insurance Advisory</a></li>
                                <li class="cat-item cat-item-24"><a href="#">Business Financial Consulting</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_block widget_newsletter bg-theme-17" data-bg-src="assets/img/elements/vs-bg-blog-sidebar-ele1.svg">
                            <h3 class="widget__heading">News Letter</h3>
                            <form action="#">
                                <div class="wp-block-search__inside-wrapper">
                                    <p class="text-white">Subscribe email and get recent news and updates or offers.</p>
                                    <input placeholder="Search Here..." type="text" name="search" id="wp-search">
                                    <button class="vs-btn vs-btn--style14">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection