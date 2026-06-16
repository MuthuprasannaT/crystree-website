@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/smm-banner.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title"> Social Media Marketing</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Social Media Marketing</li>
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
                        <figure class="vs-blog__figure"><img class="vs-blog__img" src="{{ asset('assets/img/blog/smm-poster.webp')}}" alt="Blog Image">
                            <div class="overlay"></div>
                        </figure>
                        <div class="vs-blog__content">
                            <h3 class="vs-blog__title mb-2">Social Media Marketing Company </h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Social media has become an essential platform for businesses to connect with customers, increase brand visibility, and drive business growth. Our Social Media Marketing services  are designed to help businesses build a strong digital presence across popular platforms such as Facebook, Instagram, LinkedIn, YouTube, and X. By combining creative content, audience-focused strategies, and data-driven campaigns, we help brands attract potential customers, improve engagement, and generate valuable leads.</p> 
                            <p class="pt-40">Whether you are a startup, local business, or growing enterprise, our customized social media solutions help strengthen your online reputation and create meaningful connections with your target audience. From content planning and creative design to campaign management and performance analysis, we provide complete social media marketing services that support long-term business success.</p>
                            <h4 class="mt-4 mb-15">Professional Social Media Marketing Solutions for Modern Businesses</h4>
                            
                            <p class="mb-20">A strong social media presence helps businesses stay competitive in today's digital marketplace. We create engaging campaigns that showcase your products, services, and brand values while encouraging customer interaction and loyalty. Our team focuses on delivering high-quality content and targeted marketing strategies that increase reach, improve engagement rates, and drive conversions.</p>
                            <p class="mb-20">Through consistent posting, audience engagement, and strategic advertising, we help businesses maximize their social media potential and achieve measurable results. Our goal is to transform your social media profiles into effective marketing channels that contribute to sustainable business growth.</p>
                      
                                  <h4 class="mt-4 mb-15">Drive Engagement, Build Trust, and Generate Leads</h4>
                            
                            <p class="mb-20">Successful social media marketing goes beyond posting content. It requires understanding customer behavior, creating valuable content, and maintaining meaningful interactions. We help businesses develop a strong brand voice, build customer trust, and establish authority within their industry.</p>
                            <p class="mb-20">By leveraging the latest social media trends and marketing techniques, we create campaigns that capture attention, encourage engagement, and convert followers into loyal customers. Our comprehensive social media marketing approach helps businesses increase visibility, strengthen customer relationships, and achieve their marketing objectives efficiently.</p>
                                                                    <h4 class="mt-4 mb-15">Why Businesses Invest in Social Media Marketing</h4>
                            <ul class="vs-list style2">
                                <li>Increase brand awareness and recognition</li>
                                <li>Connect directly with target audiences</li>
                                <li>Improve customer engagement and loyalty</li>
                                <li>Generate qualified leads and inquiries</li>
                                <li>Promote products and services effectively</li>
                            </ul>
                            <div class="row pt-30">
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/smm.webp')}}" alt="video"></div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/social-media.webp')}}" alt="video"></div>
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
What is social media marketing?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
                       Social media marketing is the process of promoting businesses, products, and services through social media platforms to increase visibility, engagement, and sales.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Which social media platforms do you manage?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
We manage Facebook, Instagram, LinkedIn, YouTube, X (Twitter), and other platforms based on your business requirements.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
How can social media marketing help my business?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
It helps improve brand awareness, attract potential customers, increase engagement, and generate quality leads.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
Do you create content for social media?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We create professional graphics, posts, reels, videos, and promotional content tailored to your brand.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Do you run paid advertising campaigns?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We manage targeted social media advertising campaigns to increase reach, leads, and conversions.
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
                            <h4 class="mb-15 mt-5">Why Choose Us for Social Media Marketing?</h4>
                            <p class="mb-20"> At Freshora Digital Technologies, we help businesses build a powerful social media presence that drives engagement, increases brand awareness, and generates quality leads. Our team combines creativity, strategy, and data-driven marketing techniques to deliver social media campaigns that produce measurable results.
</p>
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
                                <li class="cat-item cat-item-17"><a href="{{ route('products.crm') }}">CRM Software</a></li>
                                <li class="cat-item cat-item-26"><a href="{{ route('products.brand') }}">Branding Solutions</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.reel') }}">Reel Marketing</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.email') }}">Email Marketing</a></li>
                                <li class="cat-item cat-item-24"><a href="{{ route('products.gbp') }}">Google Business Profile</a></li>
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