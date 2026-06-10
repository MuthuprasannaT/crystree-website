@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Graphic Design</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Graphic Design</li>
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
                            <h3 class="vs-blog__title mb-2">Graphic Design Services </h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Visual communication plays a vital role in building a strong brand identity and attracting customers. At Crystree Solutions, we provide professional graphic design services  that help businesses create impactful visuals, strengthen brand recognition, and communicate their message effectively across digital and print platforms.</p>
                            <h4 class="mt-4 mb-15">Creative Designs That Make Your Brand Stand Out</h4>
                            <p class="mb-20">A well-designed graphic not only captures attention but also creates a lasting impression on your audience. Our graphic design solutions combine creativity, strategy, and branding expertise to deliver visually appealing designs that support your marketing goals and business growth.</p>
                            <ul class="vs-list style2">
                                <li>Logo Design</li>
                                <li>Social Media Creative Design</li>
                                <li>Brochure Design</li>
                                <li>Flyer Design</li>
                                <li>Poster Design</li>
                                 <li>Business Card Design</li>
                                <li>Banner & Flex Design</li>
                                <li>Packaging Design</li>
                                <li>Corporate Branding Materials</li>
                                <li>Digital Marketing Creatives</li>
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
What graphic design services do you offer?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
We provide logo design, social media creatives, brochures, flyers, banners, posters, business cards, branding materials, and custom graphic design solutions.
</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Can you create designs for social media marketing?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We design engaging creatives optimized for platforms such as Facebook, Instagram, LinkedIn, WhatsApp, and other digital channels.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
Do you provide print-ready files?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. All designs are delivered in high-resolution formats suitable for professional printing and digital use.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
Can you design according to my brand guidelines?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Absolutely. We ensure every design aligns with your brand colors, typography, style, and business objectives.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Do you offer branding design services?
                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We provide complete branding solutions including logo design, visual identity development, and marketing collateral design.
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

                            <h4 class="mb-15 mt-5">Why Choose Crystree Solutions for Graphic Design?</h4>
                            <p class="mb-20">At Crystree Solutions, we believe every design should reflect the unique personality of a brand. Our experienced designers create visually engaging and professionally crafted graphics that help businesses communicate effectively and achieve their marketing objectives.</p>
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