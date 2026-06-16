@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/reel-banner.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Reel Marketing</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Reel Marketing</li>
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
                        <figure class="vs-blog__figure"><img class="vs-blog__img" src="{{ asset('assets/img/blog/reel-creator.webp')}}" alt="Blog Image">
                            <div class="overlay"></div>
                        </figure>
                        <div class="vs-blog__content">
                            <h3 class="vs-blog__title mb-2">Reel Marketing Services </h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Short-form video content has become one of the most powerful ways to engage audiences on social media. At Crystree Solutions, we provide professional Reel Marketing services that help businesses increase brand awareness, reach new customers, and generate higher engagement through creative and impactful video content.</p>
                            <h4 class="mt-4 mb-15">Grow Your Brand with Engaging Reels</h4>
                            <p class="mb-20">Reels are designed to capture attention quickly and deliver your message in a visually appealing format. Our reel marketing strategies focus on creating content that resonates with your target audience, encourages interaction, and strengthens your online presence across social media platforms.</p>
                            <p class="mb-20">Whether you're a startup, local business, e-commerce brand, or established company, our reel marketing solutions help you connect with customers in a more engaging and effective way.</p>
                           <ul class="vs-list style2">
                                <li>Instagram Reel Marketing</li>
                                <li>Facebook Reel Promotion</li>
                                <li>Product Showcase Reels</li>
                                <li>Brand Awareness Reels</li>
                                <li>Promotional Video Reels</li>
                            </ul>
                            <div class="row pt-30">
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/reel-editor.webp')}}" alt="video"></div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/video-editor.webp')}}" alt="video"></div>
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
What is Reel Marketing?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Reel marketing involves creating and promoting short-form video content on social media platforms to increase engagement, brand awareness, and customer reach.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Which platforms support reels?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Reels can be used on Instagram, Facebook, YouTube Shorts, and other short-video platforms.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
Can reels help generate leads?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. Well-planned reels can attract potential customers, increase website visits, and generate business inquiries.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
How often should businesses post reels?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Consistency is important. Regular posting helps improve reach, engagement, and audience growth over time.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Do you provide reel creation and editing services?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We handle concept development, video editing, optimization, and publishing support for reel marketing campaigns.
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

                            <h4 class="mb-15 mt-5">Why Choose Crystree Solutions for Reel Marketing?</h4>
                            <p class="mb-20">At Crystree Solutions, we combine creativity, strategy, and social media expertise to create reel content that delivers measurable results. Our focus is on helping businesses attract attention, increase engagement, and build a strong digital presence.</p>
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