@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Cloud Solutions</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Cloud Solutions</li>
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
                            <h3 class="vs-blog__title mb-2">Cloud Support Services in Trichy</h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Modern businesses rely on cloud technology to improve efficiency, enhance collaboration, and ensure seamless access to critical business data. At Crystree Solutions, we provide professional cloud support services that help organizations manage, monitor, secure, and optimize their cloud infrastructure for maximum performance and reliability.</p>
                            <h4 class="mt-4 mb-15">Reliable Cloud Solutions for Modern Businesses</h4>
                            <p class="mb-20">Cloud technology enables businesses to store data securely, access applications remotely, and scale operations without investing heavily in physical infrastructure. Our cloud support services ensure that your cloud environment remains secure, efficient, and fully optimized to support your business growth.</p>
                            <ul class="vs-list style2">
                                <li>Cloud Infrastructure Management</li>
                                <li>Cloud Migration Services</li>
                                <li>Cloud Security Management</li>
                                <li>Cloud Backup & Recovery Solutions</li>
                                <li>Cloud Monitoring & Maintenance</li>
                               <li>Server Management Services</li>
                                <li>Cloud Storage Optimization</li>
                                <li>Cloud Application Support</li>
                                <li>Disaster Recovery Planning</li>
                                <li>Cloud Performance Optimization</li>
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
What are cloud support services?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Cloud support services include managing, monitoring, securing, and optimizing cloud infrastructure, applications, and storage systems to ensure smooth business operations.
</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Can you help migrate our business to the cloud?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We provide complete cloud migration services, including planning, implementation, testing, and post-migration support.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
How secure is cloud computing?                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Cloud environments can be highly secure when proper security measures, monitoring, encryption, and access controls are implemented.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
Do you provide cloud backup solutions?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We offer automated backup services and disaster recovery solutions to protect critical business data.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Can you support multiple cloud platforms?                    </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. Our team can manage and support various cloud environments based on your business requirements.                    </div>
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

                            <h4 class="mb-15 mt-5">Why Choose Crystree Solutions for Cloud Support?</h4>
                            <p class="mb-20">At Crystree Solutions, we help businesses leverage cloud technology with confidence. Our cloud specialists focus on security, performance, scalability, and reliability to ensure your cloud environment supports your business objectives effectively.</p>
                            <ul class="vs-list style2">
                                <li>Public Cloud Platforms</li>
                                <li>Private Cloud Infrastructure</li>
                                <li>Hybrid Cloud Environments</li>
                                <li>Cloud-Based Applications</li>
                                <li>Virtual Servers & Hosting</li>
                                 <li>Cloud Storage Systems</li>
                                <li>Business Collaboration Platforms</li>
                                <li>Enterprise Cloud Solutions</li>
                                <li>SaaS Applications</li>
                                <li>Remote Work Infrastructure</li>
                            </ul>
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