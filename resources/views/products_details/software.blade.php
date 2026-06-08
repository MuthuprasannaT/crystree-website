@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Software Development Services</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Services Details</li>
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
                            <h3 class="vs-blog__title mb-2">Retirement Planning Services</h3>
                            <svg width="120" height="10" viewBox="0 0 120 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H59.1716C59.702 0 60.2107 0.210714 60.5858 0.585786L66.5858 6.58579C67.8457 7.84572 66.9534 10 65.1716 10H2C0.89543 10 0 9.10457 0 8V2Z" fill="#014E4E" />
                                <path d="M73.4142 3.41421C72.1543 2.15428 73.0466 0 74.8284 0H109.172C109.702 0 110.211 0.210714 110.586 0.585786L116.586 6.58579C117.846 7.84572 116.953 10 115.172 10H80.8284C80.298 10 79.7893 9.78929 79.4142 9.41421L73.4142 3.41421Z"
                                fill="#FACF61" />
                            </svg>
                            <p class="pt-40">Software Development is essential for businesses looking to automate operations, improve efficiency, and accelerate digital transformation. Our custom software development solutions are designed to meet unique business requirements through secure, scalable, and performance-driven applications. Whether you need enterprise software, business management systems, workflow automation tools, or custom web-based applications, we develop solutions that streamline processes, improve productivity, and support long-term business growth. Our software is built with modern technologies and industry best practices to ensure reliability, security, and future scalability.</p>
                            <h4 class="mt-4 mb-15">Why Software Development is Essential</h4>
                            <p class="mb-20">As businesses grow, manual processes and generic software solutions often become inefficient. Custom software development helps organizations automate workflows, centralize data management, improve operational control, and enhance decision-making. A well-developed software solution increases productivity, reduces errors, improves customer service, and provides a competitive advantage in today's digital business environment. Custom software can also adapt to changing business needs and support future expansion:</p>
                            <ul class="vs-list style2">
                                <li>Automate Business Processes</li>
                                <li>Improve Operational Efficiency</li>
                                <li>Centralize Data Management</li>
                                <li>Support Business Growth</li>
                                {{-- <li>Minimize Taxes</li> --}}
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
                            <h4 class="mb-15">Our Comprehensive Software Development Services</h4>
                            <p class="mb-20">We provide end-to-end software development services tailored to your business goals and operational requirements. Our process includes requirement analysis, system architecture design, UI/UX planning, software development, quality testing, deployment, and ongoing maintenance. We develop custom business software, enterprise applications, automation systems, inventory management solutions, CRM and ERP modules, and web-based software platforms that help businesses achieve greater efficiency and productivity. Every solution is designed to be secure, scalable, and aligned with your organization's objectives.</p>
                            <ul class="vs-list style2">
                                <li>Custom Business Software Development</li>
                                <li>Enterprise Software & Automation Solutions</li>
                                <li>CRM, ERP & Management Systems</li>
                                <li>Software Maintenance & Technical Support</li>
                                {{-- <li>Tax Optimization Strategies</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area">
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