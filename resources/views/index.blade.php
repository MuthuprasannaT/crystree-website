@extends('Layouts.app')

@section('content')

<style>
    .vs-hero--home2 .vs-hero__bg::before, .vs-hero--home3 .vs-hero__bg::before, .vs-hero--home6 .vs-hero__bg::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: linear-gradient(285.98deg, rgba(4, 42, 45, 0.6) 2.69%, var(--vs-title-color) 100%);
    opacity: .9;
    z-index: -1;
}
</style>



        </form>
    </div>

    <section class="vs-hero vs-hero--home2 overflow-hidden">
        <div class="vs-hero__inner">
            <div class="vs-carousel swiper" data-xl="1" data-lg="1" data-md="1" data-sm="1" data-effect="fade" data-grab-cursor="true" data-loop="false">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="vs-hero__bg" data-bg-src="{{ asset('assets/img/bg/crystree_solution.webp')}}" alt="crystree_solution" loading="lazy">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="vs-hero__content"><span class="vs-hero__title-sub vs-swiper-animation"><img src="assets/img/icons/vs-logo-icon.svg" alt="BigBiz"> Crystree Solutions Digital Services</span>
                                            <h1 class="vs-hero__title vs-swiper-animation">Grow Your Business <span class="text-gradient">With Crystree Solutions</span></h1>
                                            <p class="vs-hero__text vs-swiper-animation">Crystree Solutions provides website development, mobile app development, ERP software, CRM solutions and custom business software services that help companies improve efficiency, increase visibility and accelerate digital growth.</p><a href=""
                                            class="vs-btn vs-btn--style3 vs-swiper-animation">Explore Services <i class="fa-solid fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vs-hero__bg" data-bg-src="{{ asset('assets/img/bg/SEO,GBP.webp')}}" alt="SEO services, Google Business Profile" loading="lazy">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="vs-hero__content"><span class="vs-hero__title-sub vs-swiper-animation"><img src="assets/img/icons/vs-logo-icon.svg" alt="BigBiz"> Local SEO & Digital Marketing Experts </span>
                                            <h1 class="vs-hero__title vs-swiper-animation">Boost Your Brand <span class="text-gradient">With Local SEO Solutions</span></h1>
                                            <p class="vs-hero__text vs-swiper-animation">Crystree Solutions delivers SEO services, Google Business Profile optimization, social media marketing and digital growth solutions that help businesses improve rankings, attract local customers and increase online visibility.</p><a href=""
                                            class="vs-btn vs-btn--style3 vs-swiper-animation">Explore Services <i class="fa-solid fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="vs-about space space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center gx-60">
                <div class="col-lg-6 col-md-auto mb-30">
                    <div class="vs-about__images">
                        <div class="vs-about__review">
                            <div class="vs-about__review-content">
                                <div class="vs-clients__rating" data-rate="4.5"></div><span class="vs-about__review-text">Customer Review <span>1000+</span></span>
                                <div class="vs-about__facts">
                                    <div class="vs-about__facts-images">
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-1.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-2.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-3.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-4.jpg" alt="about"></a>
                                        <div class="vs-about__facts-content main-counter" data-counter="1" data-format="comma">
                                            <div class="vs-about__facts-number">
                                                <p class="main-counter__number">0</p>k</div>
                                        </div>
                                    </div>
                                </div>
                            </div><span class="vs-about__review-radius"></span></div>
                        <div class="vs-about__images-one"><img src="{{ asset('assets/img/about/About_US_1.webp') }}" alt="about image"></div>
                        <div class="vs-about__images-two"><img src="{{ asset('assets/img/about/About_US_2.webp') }}" alt="about image"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vs-about__content">
                        <div class="title-area title-area--style2 mb-4"><span class="title-area__title--sub">About US</span>
                            <h2 class="title-area__title">Empowering Businesses With Smart Digital Solutions</h2>
                            <p class="fw-medium">Crystree Solutions is a leading Website Development, Mobile App Development, ERP Software, CRM Solutions and Digital Marketing company dedicated to helping businesses grow through innovative technology, creative strategies and result-driven digital solutions.</p>
                        </div>
                        <div class="vs-about--story">
                            <div class="vs-about--story__tab mb-30">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="true">Our Mission</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false" tabindex="-1">Our Vision</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
                                    <div class="vs-about--story__tab-content">
                                        <div class="vs-about__video"><img src="{{ asset('assets/img/about/mission.webp') }}" alt="mission"> </div>
                                        <ul class="vs-list">
                                            <li>Deliver innovative and scalable digital solutions. </li>
                                            <li>Improve business productivity through automation.</li>
                                            <li>Provide reliable technology and marketing services. </li>
                                            <li>Create measurable growth for every client.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="vs-about--story__tab-content">
                                        <div class="vs-about__video"><img src="{{ asset('assets/img/about/vision.webp') }}" alt="vission"> </div>
                                        <ul class="vs-list">
                                            <li>Build strong and lasting client relationships. </li>
                                            <li>Drive innovation through modern technology.</li>
                                            <li>Support business growth with digital strategies.</li>
                                            <li>Become a leading digital solutions provider.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vs-about__footer"><a href="" class="vs-btn vs-btn--style3">Explore More <i class="fa-solid fa-arrow-right"></i> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="vs-service section-outer">
    <div class="bg-title space rounded-30 z-index-common overflow-hidden">
        <div class="vs-ele vs-ele--circle vs-ele--circle--service1"></div>
        <div class="vs-ele vs-ele--circle vs-ele--circle--service2"></div>

        <div class="space-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="title-area title-area--style2 white-style">
                            <span class="title-area__title--sub">Our Digital Products & Services</span>
                            <h2 class="title-area__title">
                                Web, Software & Business Growth Solutions
                            </h2>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6">
                        <div class="title-area">
                            <p class="text-white mb-0">
                                Crystree Solutions delivers innovative digital products,
                                business software, mobile applications, ERP systems,
                                CRM platforms, SEO services and digital marketing
                                solutions designed to help businesses improve efficiency,
                                increase visibility and accelerate growth.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gy-3 vs-active-wrapper">

                    <!-- Web Development -->
                    <div class="col-lg-3 vs-service__biz vs-active active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-1.svg"
                                         alt="Website Development Company">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Website Development Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Professional website development services including responsive web design, eCommerce websites, custom web applications and SEO - friendly solutions that help businesses grow and attract clients.
                                </p>
                               <a href="{{ route('products.website') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- App Development -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-2.svg"
                                         alt="Mobile App Development Services">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Mobile App Development Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Custom Android and iOS mobile app development services with modern UI design, secure architecture and scalable features that improve customer engagement and support business growth.

                                </p>
                                <a href="{{ route('products.app') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Software Development -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-3.svg"
                                         alt="Custom Software Development">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Software Development Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Custom software development solutions designed to automate workflows, improve productivity and streamline business operations through secure, scalable and efficient technology systems.

                                </p>
                                <a href="{{ route('products.software') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ERP -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-4.svg"
                                         alt="SEO Services Company">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                       Enterprise ERP Software Solutions
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Advanced ERP software solutions for inventory management, finance, HR and business operations that improve efficiency, reduce manual work and support organizational growth.

                                </p>
                                <a href="{{ route('products.erp') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CRM -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-1.svg"
                                         alt="CRM Software Solutions">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Customer Management Solutions
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Powerful CRM software solutions for customer management, lead tracking and sales automation that strengthen relationships, improve conversions and increase customer retention.

                                </p>
                                <a href="{{ route('products.oracle') }}"  class="vs-btn vs-btn--style4 business_1">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- SMM -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-2.svg"
                                         alt="Social Media Marketing Services">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Social Media Marketing Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Strategic social media marketing services focused on brand awareness, audience engagement, lead generation and digital growth across major social media platforms.

                                </p>
                                <a href="{{ route('products.smm') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- GBP -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-3.svg"
                                         alt="Google Business Profile Optimization">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Google Business Profile Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Google Business Profile optimization services that improve Google Maps visibility, local search rankings, customer engagement and online credibility to attract more nearby customers.
                                </p>
                                <a href="{{ route('products.gbp') }}"  class="vs-btn vs-btn--style4 business">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <style>
                        
                            @media (max-width: 1300px) {
                                .vs-service__biz-text {
                                    height: 150px !important;
                                }

                                /* .business {
                                    margin-top: 25px !important;
                                } */
                                 
                                .business_1{
                            margin-top: -10px
                                }
                            }

                            @media (max-width: 1600px) {
                                .vs-service__biz-text {
                                    height: 150px !important;
                                }
                            }
                    </style>
                    <!-- SEO -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/icons/h2-service-icon-4.svg"
                                         alt="SEO Services Company">
                                </div>
                                <h3 class="vs-service__biz-heading">
                                    <a class="vs-service__biz-heading__link" href="#">
                                        Search Engine Optimization Services
                                    </a>
                                </h3>
                                <p class="vs-service__biz-text">
                                    Professional SEO services including keyword research, on-page optimization, technical SEO and link building that improve search rankings, organic traffic and qualified business leads.
                                </p>
                                <a href="{{ route('products.seo') }}" class="vs-btn vs-btn--style4">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
                   
        <div class="container d-none d-lg-block">
            <div class="vs-divider-line"></div>
        </div>

        <div class="container">
            <hr class="vs-service__divider">
         <style>
                .it-carousel__item--style2{
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    padding:15px;
                }

                .it-carousel__item--style2 img{
                    max-height:80px;
                    max-width:180px;
                    width:auto;
                    height:auto;
                    object-fit:contain;
                }
                </style>

<div class="vs-brand m-0" dir="ltr">
    <div class="vs-brand__content vs-brand__content--style2 z-index-common bg-black-3">
        
        <div class="vs-brand__ele vs-brand__ele--left vs-brand__ele--style2"></div>
        <div class="vs-brand__ele vs-brand__ele--right vs-brand__ele--style2"></div>

        <div class="it-carousel"
             id="it-carousel-1"
             data-direction="right"
             data-autoplay="true"
             data-autoplay-speed="0.5">

            <div class="it-carousel__wrapper it-carousel__wrapper--style2">

@forelse($logos as $logo)
    <div class="it-carousel__item it-carousel__item--style2">
        <img
            src="{{ asset('uploads/logos/'.$logo->image) }}"
            alt="{{ $logo->title }}"
            loading="lazy">
    </div>
@empty
    <div class="it-carousel__item it-carousel__item--style2">
        <p class="text-white mb-0">No Logos Found</p>
    </div>
@endforelse

            </div>

        </div>

    </div>
</div>
        </div>
    </div>
</section>

<style>
    .vs-active-wrapper .vs-service__biz:nth-child(4),
.vs-active-wrapper .vs-service__biz:nth-child(8){
    border-right: 0 !important;
}
.vs-service__biz:nth-child(4)::after,
.vs-service__biz:nth-child(8)::after {
    display: none !important;
}
</style>


    <section class="vs-clients vs-clients--area space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area title-area--style2 text-center" dir="ltr"><span class="title-area__title--sub title-area__title--sub-center">Testimonials</span>
                        <h2 class="title-area__title">What Our Clients Review & Feedback</h2></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               <div class="col-12">
                <div class="vs-clients__carousel" id="testimonialBottom">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="vs-clients__item vs-clients__item--style2">

                                <img src="{{ asset('assets/img/icons/vs-icon-quote-h2-1.svg') }}"
                                     alt="quote"
                                     class="vs-clients__quote-icon">

                                <div class="vs-clients__rating"
                                     data-rate="{{ $testimonial->rating ?? 5 }}">
                                </div>

                                <div class="vs-clients__quote">
                                    {!! $testimonial->testimonial !!}
                                </div>

                                <div class="vs-clients__author">

                                    <div class="vs-clients__author-img">

                                        @if(!empty($testimonial->image) && file_exists(public_path($testimonial->image)))

                                            <img
                                                class="vs-clients__avatar"
                                                src="{{ asset($testimonial->image) }}"
                                                alt="{{ $testimonial->name }}">

                                        @else

                                            <div class="vs-clients__avatar-placeholder">
                                                {{ strtoupper(substr($testimonial->name,0,2)) }}
                                            </div>

                                        @endif

                                    </div>

                                    <div class="vs-clients__details">
                                        <span class="vs-clients__name">
                                            {{ $testimonial->name }}
                                        </span>

                                        <p class="vs-clients__role">
                                            {{ $testimonial->designation }}
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section class="vs-team space space-extra-bottom bg-white">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-xl-8 col-lg-8 text-center text-lg-start">
                    <div class="title-area title-area--style2" dir="ltr"><span class="title-area__title--sub">Industries We Serve</span>
                        <h2 class="title-area__title">Industries We Serve with Custom Web, Software & Digital Marketing Solutions</h2></div>
                </div>
                <div class="col-xl-auto col-lg-auto title-area text-center text-lg-end"><a href="" class="vs-btn vs-btn--style3 vs-fade-in-up" data-delay="0.4" data-duration="1">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="vs-carousel swiper vs-active-wrapper" data-xl="4" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-loop="true" data-autoplay="true" data-autoplay-delay="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind8.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Startup & Enterprise</a></h3><a href="" class="vs-team__item-role">Web, App & Software Solutions</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind7.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Finance & Business</a></h3><a href="" class="vs-team__item-role">CRM & Digital Marketing Solutions</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img"src="{{ asset('uploads/ind/Ind1.webp') }}"alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Retail & eCommerce</a></h3><a href="" class="vs-team__item-role">Online Store & Web Solutions</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind2.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Real Estate Services</a></h3><a href="" class="vs-team__item-role">Property & Lead Generations</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind3.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Healthcare & Clinics</a></h3><a href="" class="vs-team__item-role">Patient & Booking Management</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind4.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Education & Training</a></h3><a href="" class="vs-team__item-role">Student & Learning Management</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind5.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Manufacturing Sector</a></h3><a href="" class="vs-team__item-role">ERP & Business Automations</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind6.webp') }}" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="">Hotels & Restaurants</a></h3><a href="" class="vs-team__item-role">Local SEO & Digital solutions</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="vs-portfolio section-outer space-top">
        <div class="bg-title z-index-common overflow-hidden rounded-30 space">
            <div class="vs-ele vs-ele--circle vs-ele--circle--service1" data-ele-move="zoom" data-ele-move-speed="2"></div>
            <div class="vs-ele vs-ele--circle vs-ele--circle--service2" data-ele-move="zoom" data-ele-move-speed="2"></div>
            <div class="container">
                <div class="row justify-content-center align-items-end">
                    <div class="col-lg-6">
                        <div class="title-area title-area--style2 white-style text-center" dir="ltr"><span class="title-area__title--sub title-area__title--sub-center">Our Core Expertise</span>
                            <h2 class="title-area__title">Explore Our Web, Software & Digital Marketing Solutions</h2></div>
                    </div>
                </div>
            <div class="vs-portfolio__grids row grid">

    <div class="grid-sizer col-lg-4 col-md-6"></div>

    @foreach($galleries as $gallery)

    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 vs-fade-in-up"
        data-duration="1"
        data-delay="0.3">

        <div class="vs-portfolio__content">

            <a class="vs-portfolio__link--img d-inline-block"
                href="{{ asset($gallery->image) }}">

                <img src="{{ asset($gallery->image) }}"
                    class="vs-portfolio__img"
                    alt="{{ $gallery->title }}">
            </a>

            <div class="vs-portfolio__item-overlay">

                <div class="vs-portfolio__item-text">

                    <a href="#"
                        class="vs-portfolio__item-tag">
                        {{ $gallery->category ?? 'Portfolio' }}
                    </a>

                    <h3 class="vs-portfolio__item-heading">
                        <a href="#"
                            class="vs-portfolio__item-heading__link">
                            {{ $gallery->title }}
                        </a>
                    </h3>

                    <a href="{{ asset($gallery->image) }}"
                        class="vs-portfolio__item-view">

                        <i class="fa-solid fa-plus"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

    @endforeach

</div>

<style>
    .vs-portfolio__img{
    width:100%;
    height:350px;
    object-fit:cover;
    border-radius:15px;
}

.vs-portfolio__content{
    overflow:hidden;
    border-radius:15px;
}
</style>
</div>
        </div>
    </section>


    <section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
    <div class="container">

        <div class="row">

            @foreach($blogs->take(6) as $blog)

            <div class="col-lg-4 col-md-6 mb-4 d-flex">

                <div class="vs-blog vs-blog--style8 blog-card w-100">

                    <figure class="vs-blog__figure blog-card-image">

                        <a class="vs-blog__figure__link"
                            href="{{ route('blog.details', $blog->slug) }}">

                            <img class="vs-blog__img"
                                src="{{ asset($blog->featured_image) }}"
                                alt="{{ $blog->title }}">

                        </a>

                        <span class="vs-blog__date">
                            {{ optional($blog->created_at)->format('d') }}
                            <sub>{{ optional($blog->created_at)->format('M') }}</sub>
                        </span>

                    </figure>

                    <div class="vs-blog__content blog-card-content">

                        <h3 class="vs-blog__title blog-title">
                            <a class="vs-blog__title__link"
                                href="{{ route('blog.details', $blog->slug) }}">
                                {{ $blog->title }}
                            </a>
                        </h3>

                        <p class="blog-description">
                            {{ Str::limit(strip_tags($blog->short_description), 140) }}
                        </p>

                        <hr class="vs-blog__divider">

                        <div class="vs-blog__buttons">

                            <a href="{{ route('blog.details', $blog->slug) }}"
                                class="vs-btn vs-blog__button">
                                Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

<style>

/* Card */
.blog-card{
    display:flex;
    flex-direction:column;
    height:100%;
    border-radius:20px;
    overflow:hidden;
}

/* Image Section */
.blog-card-image{
    position:relative;
    overflow:hidden;
    border-radius:20px;
    margin-bottom:20px;
}

.blog-card-image img{
    width:100%;
    height:280px;
    object-fit:cover;
    border-radius:20px;
    transition:all .4s ease;
}

.blog-card:hover .blog-card-image img{
    transform:scale(1.05);
}

/* Content */
.blog-card-content{
    /* display:flex; */
    flex-direction:column;
    flex:1;
    padding:0 10px;
}

/* Title */
.blog-title{
    min-height:70px;
    margin-bottom:15px;
}

.blog-title a{
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
    text-decoration:none;
}

/* Description */
.blog-description{
    min-height:90px;
    line-height:1.8;

    display:-webkit-box;
    -webkit-line-clamp:3;
    -webkit-box-orient:vertical;

    overflow:hidden;
    text-overflow:ellipsis;
}

/* Divider */
.vs-blog__divider{
    margin-top:auto;
}

/* Button */
.vs-blog__buttons{
    margin-top:20px;
}

.vs-blog__button{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
}

/* Mobile */
@media(max-width:991px){

    .blog-card-image img{
        height:250px;
    }

    .blog-title{
        min-height:auto;
    }

    .blog-description{
        min-height:auto;
    }
}

</style>
    


   <script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper("#testimonialBottom", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        speed: 4000,
        grabCursor: true,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            }
        }
    });

});
</script>
@endsection