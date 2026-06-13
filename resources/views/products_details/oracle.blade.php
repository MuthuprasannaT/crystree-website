@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/oracle-banner.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Oracle ERP</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Oracle ERP</li>
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
                        <figure class="vs-blog__figure"><img class="vs-blog__img" src="{{ asset('assets/img/blog/oracle-erp.webp')}}" alt="Blog Image">
                            <div class="overlay"></div>
                        </figure>
                        <div class="vs-blog__content">
                            <h3 class="vs-blog__title mb-2">Oracle ERP Solution Services</h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Modern businesses require intelligent and integrated systems to manage finance, operations, procurement, human resources, and supply chain activities efficiently. At Crystree Solutions, we provide Oracle ERP solutions that help organizations streamline business processes, improve operational visibility, and accelerate digital transformation through a unified enterprise management platform.</p>
                            <h4 class="mt-4 mb-15">Transform Business Operations with Oracle ERP</h4>
                            <p class="mb-20">Oracle ERP is a comprehensive enterprise resource planning solution designed to automate workflows, improve productivity, and provide real-time business insights. By integrating core business functions into a single system, organizations can make faster decisions, reduce operational costs, and improve overall efficiency.</p>
                            <ul class="vs-list style2">
                                <li>Oracle ERP Implementation</li>
                                <li>Oracle ERP Consulting</li>
                                <li>Oracle ERP Customization</li>
                                <li>Oracle ERP Support & Maintenance</li>
                                <li>Oracle Supply Chain Management</li>
                            </ul>
                            <div class="row pt-30">
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/oracle-maintance.webp')}}" alt="video"></div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="vs-blog__video">
                                        <div class="overlay"></div><img src="{{ asset('assets/img/blog/oracle-support.webp')}}" alt="video"></div>
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
What is Oracle ERP?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Oracle ERP is an enterprise resource planning solution that integrates finance, procurement, human resources, project management, and other business functions into a unified platform.
</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqTwo">
Is Oracle ERP suitable for large organizations?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. Oracle ERP is designed for businesses of all sizes, including large enterprises that require scalable and advanced business management capabilities.                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqThree">
Can Oracle ERP be customized?      </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. Oracle ERP can be configured and customized according to specific business processes and operational requirements.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFour">
Does Oracle ERP support cloud deployment?
                    </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. Oracle offers cloud-based ERP solutions that provide flexibility, security, and remote accessibility.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqFive">
Do you provide Oracle ERP support services?</button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse"
                    data-bs-parent="#websiteFaq">
                    <div class="accordion-body">
Yes. We offer implementation, customization, migration, maintenance, and technical support services for Oracle ERP solutions.  </div>
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

                            <h4 class="mb-15 mt-5">Why Choose Crystree Solutions for Oracle ERP?</h4>
                            <p class="mb-20">At Crystree Solutions, we help businesses maximize the value of Oracle ERP through strategic implementation, customization, and ongoing support. Our team focuses on delivering ERP solutions that improve efficiency, reduce complexity, and support business growth.</p>
                            <ul class="vs-list style2">
                                <li>Customized Implementation Approach</li>
                                <li>Experienced ERP Consultants</li>
                                <li>Industry-Specific Expertise</li>
                                <li>Secure Data Migration Services</li>
                                <li>End-to-End ERP Support</li>
                            </ul>
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