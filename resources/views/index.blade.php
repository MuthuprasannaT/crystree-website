@extends('Layouts.app')

@section('content')

<style>


.vs-btn--gradient {
    background: linear-gradient(90deg, #011548 0%, #85ff03 100%);
}
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


.vs-hero__bg{
    position:relative;
    background-size:cover;
    background-position:center;
    height:100vh;
    display:flex;
    border-radius:30px;
    align-items:center;
}

.hero-overlay{
    position:absolute;
    inset:0;
    /* background:rgba(4,18,35,.65); */
}

.hero-content{
    position:relative;
    z-index:10;
}

.hero-logo{
    width:130px;
    margin-bottom:20px;
    filter:drop-shadow(0 0 20px rgba(255,255,255,.35));
}

.hero-title{
    font-size:85px;
    font-weight:800;
background: linear-gradient(
90deg,
#D9ECFF 0%,
#B6D8FF 20%,
#7BBF32 65%,
#66FF00 100%
);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
    /* text-shadow: 5px 3px 8px rgba(255, 255, 255, 0.6); */
    line-height:1;
    margin-bottom:15px;
}

/* .hero-title span{
background: linear-gradient(
90deg,
#D9ECFF 0%,
#B6D8FF 20%,
#7BBF32 65%,
#66FF00 100%
);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
} */

.hero-subtitle{
    color:#fff;
    font-size:55px;
    font-weight:300;
    letter-spacing:8px;
    margin-bottom:25px;
}

.hero-tagline{
    color:#d6d6d6;
    font-size:22px;
    letter-spacing:2px;
    margin-bottom:20px;
    text-align:center;
}

.hero-description{
    color:#ececec;

    margin:auto;
    font-size:20px;
    line-height:34px;
}

.hero-btn{
    display:inline-block;
    margin-top:5px;
    padding:16px 42px;
    border:2px solid #57d46b;
    color:#fff;
    border-radius:50px;
    text-decoration:none;
    transition:.4s;
    font-size:18px;
    font-weight:600;
}

.hero-btn:hover{
    background:linear-gradient(90deg, #011548 0%, #85ff03 100%);
    color:#fff;
}

@media (max-width: 1475px) {

    .hero-content {
        margin-top: -175px;
    }

    .hero-title {
        font-size: 70px;
        line-height: 1.1;
    }

    .hero-subtitle {
        font-size: 47px;
        line-height: 1.2;
    }

    .hero-description {
        font-size: 17px;
        line-height: 1.7;
        margin-left: 150px;
    }
    .hero-tagline{
        
    }

}

@media (max-width: 1275px) {

    .hero-content {
        margin-top: -160px;
    }
    .hero-logo {
    width: 102px;
    /* margin-bottom: 20px; */
    filter: drop-shadow(0 0 20px rgba(255, 255, 255, .35));
}

    .hero-title {
        font-size: 58px;
        line-height: 1.1;
    }

    .hero-subtitle {
        font-size: 39px;
        line-height: 1.2;
    }

    .hero-description {
        font-size: 17px;
        line-height: 1.7;
        margin-left: 25px;
    }
    .hero-tagline{
        font-size:18px;
    }
}



@media screen and (min-width: 1200px) and (max-width: 1280px)
and (min-height: 500px) and (max-height: 560px) {
    .hero-content {
        margin-top: -170px;
    }
    .hero-subtitle {
margin-bottom: 5px;
}
.hero-title {
    font-size: 65px;
    margin-bottom: 5px;
}
.hero-subtitle {
    font-size: 45px;
}
.hero-tagline{
    font-size: 15px;
}
.hero-description {
    font-size: 17px
}
.hero-logo {
    margin-bottom: 5px;
}
}
@media(max-width:991px){

.hero-logo{
    width:90px;
}

.hero-title{
    font-size:48px;
}

.hero-subtitle{
    font-size:28px;
    letter-spacing:3px;
}

.hero-tagline{
    font-size:16px;
}

.hero-description{
    font-size:15px;
    line-height:28px;
}

.hero-btn{
    padding:14px 30px;
}

}
</style>



        </form>
    </div>

<section class="vs-hero vs-hero--home2 overflow-hidden">
    <div class="vs-hero__inner">
        <div class="vs-carousel swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="vs-hero__bg"
                        style="background-image:url('{{ asset('assets/img/home/Home2.png') }}');">

                        <div class="hero-overlay"></div>

                        <div class="container h-100">
                            <div class="row h-100 align-items-center justify-content-center">

                                <div class="col-lg-10">

                                    <div class="hero-content text-center">

                                        <!-- Logo -->
                                        <img src="{{ asset('assets/img/logo/logoicon.png') }}"
                                            class="hero-logo"
                                            alt="Crystree Solutions">

                                        <!-- Company Name -->
                                        <h1 class="hero-title">
                                            Crystree
                                            Solutions
                                        </h1>

                                        <h2 class="hero-subtitle">
                                            Private Limited
                                        </h2>

                                        <!-- Tagline -->
                                        <p class="hero-tagline">
                                            • Trust • Credibility • Confidence
                                        </p>

                                        <!-- Description -->
                                        <p class="hero-description">
                                            Empowering Businesses with Smart Digital
                                            Solutions, Web Development, Mobile Apps,
                                            Digital Marketing & Branding.
                                        </p>

                                        <!-- Button -->
                                        <a href="{{route('about')}}" class="hero-btn">
                                            Explore More
                                            <i class="fas fa-arrow-right ms-2"></i>
                                        </a>

                                    </div>

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
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-1.jpg" alt="about" loading="lazy"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-2.jpg" alt="about" loading="lazy"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-3.jpg" alt="about" loading="lazy"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-4.jpg" alt="about" loading="lazy"></a>
                                        <div class="vs-about__facts-content main-counter" data-counter="1" data-format="comma">
                                            <div class="vs-about__facts-number">
                                                <p class="main-counter__number">0</p>k</div>
                                        </div>
                                    </div>
                                </div>
                            </div><span class="vs-about__review-radius"></span></div>
                        <div class="vs-about__images-one"><img src="{{ asset('assets/img/home/About_1.webp') }}" alt="about image" loading="lazy"></div>
                        <div class="vs-about__images-two"><img src="{{ asset('assets/img/home/About_2.webp') }}" alt="about image" loading="lazy"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vs-about__content">
                        <div class="title-area title-area--style2 mb-4"><span class="title-area__title--sub"><strong>About US</strong></span>
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
                                        <div class="vs-about__video"><img src="assets/img/about/mission.png" alt="about" loading="lazy"></div>
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
                                        <div class="vs-about__video"><img src="assets/img/about/vision.png" alt="about" loading="lazy"></div>
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
                        <div class="vs-about__footer"><a href="{{route('about')}}" class="vs-btn vs-btn--style3">Explore More <i class="fa-solid fa-arrow-right"></i> </a></div>
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

                    <div class="col-xl-6 col-lg-6">
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
                                    <img src="assets/img/favicons/Web.png" alt="Website Development Company" loading="lazy">
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
                                    <img src="assets/img/favicons/App.png" alt="Mobile App Development Services" loading="lazy">
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
                                    <img src="assets/img/favicons/Software.png"
                                         alt="Custom Software Development" loading="lazy">
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
                                    <img src="assets/img/favicons/ERP.png"
                                         alt="SEO Services Company" loading="lazy">
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
                                    <img src="assets/img/favicons/CRM.png"
                                         alt="CRM Software Solutions" loading="lazy">
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
                                    <img src="assets/img/favicons/SMM.png"
                                         alt="Social Media Marketing Services" loading="lazy">
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
                                    <img src="assets/img/favicons/GBP.png"
                                         alt="Google Business Profile Optimization" loading="lazy">
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
                        
                            @media (min-width: 1300px) {
                                .vs-service__biz-text {
                                    height: 140px !important;
                                }

                                /* .business {
                                    margin-top: 25px !important;
                                } */
                                 
                                .business_1{
                            margin-top: -10px
                                }
                            }

                            @media (min-width: 1600px) {
                                .vs-service__biz-text {
                                    height: 120px !important;
                                }
                            }

                              @media (min-width: 1200px) {
                                 .vs-service__biz-text {
                                    height: 130px !important;
                                }
                              }

                               @media (max-width: 768px) {
                                 .vs-service__biz-text {
                                    height: 60px !important;
                                }
                              }
                              
                               @media (max-width: 425px) {
                                 .vs-service__biz-text {
                                    height: 125px !important;
                                }
                              }
                    </style>
                    <!-- SEO -->
                    <div class="col-lg-3 vs-service__biz vs-active">
                        <div class="vs-service__biz-contain">
                            <div class="vs-service__biz-bg"></div>
                            <div class="vs-service__biz-body">
                                <div class="vs-service__biz-icon">
                                    <img src="assets/img/favicons/Icon2.png"
                                         alt="SEO Services Company" loading="lazy">
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
                

                <div class="col-lg-12 col-xl-12">
    <div class="title-area title-area--style2 white-style text-center">
        <span class="title-area__title--sub">
            Trusted By Leading Brands
        </span>
        <h2 class="title-area__title">
            Our Valued Clients
        </h2>
    </div>
</div>

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
            src="{{ asset('/uploads/logos/'.$logo->image) }}"
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


/* Make all slides equal height */
#testimonialBottom .swiper-slide {
    display: flex;
    height: auto;
}

/* Testimonial Card */
.vs-clients__item {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    padding: 30px;
    border-radius: 12px;
    background: #00030e;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

/* Quote section grows */
.vs-clients__quote {
    flex: 1;
    margin: 20px 0;
}

.vs-clients__quote p{
    margin-bottom:0;
}

/* Author stays at bottom */
.vs-clients__author {
    display: flex;
    align-items: center;
    margin-top: auto;
}

/* Avatar */
.vs-clients__avatar,
.vs-clients__avatar-placeholder {
    width: 65px;
    height: 65px;
    border-radius: 50%;
}

.vs-clients__avatar {
    object-fit: cover;
}

.vs-clients__avatar-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0d6efd;
    color: #fff;
    font-weight: 600;
}

/* Equal spacing */
.vs-clients__details {
    margin-left: 15px;
}

.vs-clients__name {
    display: block;
    font-size: 18px;
    font-weight: 600;
}

.vs-clients__role {
    margin: 0;
    color: #777;
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
                                     class="vs-clients__quote-icon" loading="lazy">

                                <div class="vs-clients__rating"
                                     data-rate="{{ $testimonial->rating ?? 5 }}">
                                </div>

                                <div class="vs-clients__quote">
                                    {!! $testimonial->testimonial !!}
                                </div>

                                <div class="vs-clients__author">

                                    <div class="vs-clients__author-img">

                                        @if(!empty($testimonial->image) && file_exists(public_path($testimonial->image)))

                                           <div class="vs-clients__avatar-placeholder">
                                                {{ strtoupper(substr(trim($testimonial->name), 0, 2)) }}
                                            </div>

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
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <div class="title-area title-area--style2" dir="ltr"><span class="title-area__title--sub">Industries We Serve</span>
                        <h2 class="title-area__title">Industries We Serve with Custom Web, Software & Digital Marketing Solutions</h2></div>
                </div>
                <div class="col-xl-auto col-lg-auto title-area text-center text-lg-end"><a href="{{ route('blog') }}" class="vs-btn vs-btn--style3 vs-fade-in-up" data-delay="0.4" data-duration="1">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="vs-carousel swiper vs-active-wrapper" data-xl="4" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-loop="true" data-autoplay="true" data-autoplay-delay="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind8.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Startup & Enterprise</a></h3><p class="vs-team__item-role">Web, App & Software Solutions</></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind7.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Finance & Business</a></h3><a href="#" class="vs-team__item-role">CRM & Digital Marketing Solutions</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img"src="{{ asset('uploads/ind/Ind1.webp') }}"alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Retail & eCommerce</a></h3><a href="#" class="vs-team__item-role">Online Store & Web Solutions</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind2.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Real Estate Services</a></h3><a href="#" class="vs-team__item-role">Property & Lead Generations</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind3.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Healthcare & Clinics</a></h3><a href="#" class="vs-team__item-role">Patient & Booking Management</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind4.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Education & Training</a></h3><a href="#" class="vs-team__item-role">Student & Learning Management</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind5.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Manufacturing Sector</a></h3><a href="#" class="vs-team__item-role">ERP & Business Automations</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="#"><img class="vs-team__item-img" src="{{ asset('uploads/ind/Ind6.webp') }}" alt="Team Member Image" loading="lazy"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="#">Hotels & Restaurants</a></h3><a href="#" class="vs-team__item-role">Local SEO & Digital solutions</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Equal height cards */
.vs-carousel .swiper-slide {
    height: auto;

}

.vs-team__item--style2 {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
}

/* Image height */
.vs-team__item--style2 .vs-team__item-figure {
    margin: 0;
}

.vs-team__item--style2 .vs-team__item-img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
}

/* Content area */
.vs-team__item--style2 .vs-team__item-body {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
}

/* Title */
.vs-team__item--style2 .vs-team__item-name {
    min-height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Subtitle */
.vs-team__item--style2 .vs-team__item-role {
    min-height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
}
  
  .gallery-slider{
    width:100%;
    overflow:hidden;
    position:relative;
}

.gallery-track{
    display:flex;
    width:max-content;
    animation: scrollGallery 30s linear infinite;
}

.gallery-item{
    position:relative;
    flex:0 0 auto;
    width:320px;
    margin-right:20px;
}

.gallery-item img{
    width:100%;
    height:400px;
    object-fit:cover;
    border-radius:15px;
}

.overlay{
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    color:#fff;
    padding:15px;
    border-radius:0 0 15px 15px;
}

.gallery-track:hover{
    animation-play-state:paused;
}

@keyframes scrollGallery{
    from{
        transform:translateX(0);
    }
    to{
        transform:translateX(-50%);
    }
}
  </style>

    
<section class="vs-portfolio section-outer space-top">
    <div class="container">

        <div class="title-area text-center mb-5">
            <span class="title-area__title--sub">Our Core Expertise</span>
            <h2 class="title-area__title">
                Explore Our Web, Software & Digital Marketing Solutions
            </h2>
        </div>

        <div class="gallery-slider">

            <div class="gallery-track">

                @foreach($galleries as $gallery)
                <div class="gallery-item">
                    <a href="{{ asset($gallery->image) }}"
                       data-fancybox="gallery"
                       data-caption="{{ $gallery->title }}">
                        <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">
                    </a>
                </div>
                @endforeach

                {{-- Duplicate for infinite scrolling --}}
                @foreach($galleries as $gallery)
                <div class="gallery-item">
                   @php
                            $slug = \Illuminate\Support\Str::slug($gallery->title);
                        @endphp

                        <a href="{{ asset($gallery->image) }}"
                        data-fancybox="gallery"
                        data-caption="{{ $gallery->title }}"
                        data-slug="{{ $slug }}">
                            <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">
                        </a>
                </div>
                @endforeach

            </div>

        </div>

    </div>
</section>

    <section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
    <div class="container">
         <div class="row justify-content-between align-items-end">
               <div class="col-xl-8 col-lg-6 text-center text-lg-start">
    <div class="title-area title-area--style2" dir="ltr">

        <span class="title-area__title--sub">
            Latest Blogs & Insights
        </span>

        <h2 class="title-area__title">
            Explore Our Latest Articles, Technology Trends & Business Insights
        </h2>


    </div>
</div>
                <div class="col-xl-auto col-lg-auto title-area text-center text-lg-end"><a href="{{ route('blog') }}" class="vs-btn vs-btn--style3 vs-fade-in-up" data-delay="0.4" data-duration="1">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>

        <div class="row">

            @foreach($blogs->take(6) as $blog)

            <div class="col-lg-4 col-md-6 mb-4 d-flex">

                <div class="vs-blog vs-blog--style8 blog-card w-100">

                    <figure class="vs-blog__figure blog-card-image">

                        <a class="vs-blog__figure__link"
                            href="{{ route('blog.details', $blog->slug) }}">

                            <img class="vs-blog__img"
                                src="{{ asset($blog->featured_image) }}"
                                alt="{{ $blog->title }}" loading="lazy">

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
/* Equal height columns */


/* Card */
.blog-card {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    border: 1px solid #eee;
}

/* Image */
.blog-card-image {
    margin: 0;
}

.blog-card-image img {
    width: 100%;
    height: 250px; /* Same image height */
    object-fit: cover;
    display: block;
}

/* Content */
.blog-card-content {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 20px;
}

/* Title - fixed lines */
.blog-title {
    min-height: 60px;
}

.blog-title a {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Max 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Description - fixed lines */
.blog-description {
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 4; /* Max 4 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Push button to bottom */
.vs-blog__buttons {
    margin-top: auto;
}
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
    height:100%;
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
        height:100%;
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