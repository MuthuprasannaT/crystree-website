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
                        <div class="vs-hero__bg" data-bg-src="assets/img/hero/h2-hero-bg-1.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="vs-hero__content"><span class="vs-hero__title-sub vs-swiper-animation"><img src="assets/img/icons/vs-logo-icon.svg" alt="BigBiz"> Get Best Business Solution</span>
                                            <h1 class="vs-hero__title vs-swiper-animation">We Take Care Of <span class="text-gradient">Your Brand</span></h1>
                                            <p class="vs-hero__text vs-swiper-animation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p><a href="blog-details.html"
                                            class="vs-btn vs-btn--style3 vs-swiper-animation">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vs-hero__bg" data-bg-src="assets/img/hero/h2-hero-bg-2.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="vs-hero__content"><span class="vs-hero__title-sub vs-swiper-animation"><img src="assets/img/icons/vs-logo-icon.svg" alt="BigBiz"> Get Best Business Solution</span>
                                            <h1 class="vs-hero__title vs-swiper-animation">We Take Care Of <span class="text-gradient">Your Brand</span></h1>
                                            <p class="vs-hero__text vs-swiper-animation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p><a href="blog-details.html"
                                            class="vs-btn vs-btn--style3 vs-swiper-animation">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
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
                                <div class="vs-clients__rating" data-rate="4.5"></div><span class="vs-about__review-text">Customer Review <span>30.000</span></span>
                                <div class="vs-about__facts">
                                    <div class="vs-about__facts-images">
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-1.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-2.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-3.jpg" alt="about"> </a>
                                        <a href="#" class="vs-about__facts-img"><img src="assets/img/about/about-facts-h1-4.jpg" alt="about"></a>
                                        <div class="vs-about__facts-content main-counter" data-counter="30" data-format="comma">
                                            <div class="vs-about__facts-number">
                                                <p class="main-counter__number">0</p>k</div>
                                        </div>
                                    </div>
                                </div>
                            </div><span class="vs-about__review-radius"></span></div>
                        <div class="vs-about__images-one"><img src="assets/img/about/about-image-h2-1.jpg" alt="about image"></div>
                        <div class="vs-about__images-two"><img src="assets/img/about/about-image-h2-2.jpg" alt="about image"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vs-about__content">
                        <div class="title-area title-area--style2 mb-4"><span class="title-area__title--sub">About US</span>
                            <h2 class="title-area__title">We Are The Best, Yes We Are BigBiz!</h2>
                            <p class="fw-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                                        <div class="vs-about__video"><img src="assets/img/about/video-thumb-1-1.jpg" alt="about"> <a href="https://www.youtube.com/watch?v=mQwIYf0xmV8" class="play-btn popup-video"><i class="fa-solid fa-play"></i></a></div>
                                        <ul class="vs-list">
                                            <li>Lorem ipsum dolor sit amet, consectetur qua. </li>
                                            <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                            <li>Lorem ipsum dolor sit amet, qua. </li>
                                            <li>Lorem ipsum dolor sit.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="vs-about--story__tab-content">
                                        <div class="vs-about__video"><img src="assets/img/about/video-thumb-1-1.jpg" alt="about"> <a href="#" class="play-btn"><i class="fa-solid fa-play"></i></a></div>
                                        <ul class="vs-list">
                                            <li>Lorem ipsum dolor sit amet, consectetur qua. </li>
                                            <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                            <li>Lorem ipsum dolor sit amet, qua. </li>
                                            <li>Lorem ipsum dolor sit.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vs-about__footer"><a href="blog-details.html" class="vs-btn vs-btn--style3">Explore More <i class="fa-solid fa-arrow-right"></i> </a><img src="assets/img/about/signature.svg" alt="BigBiz Author Signature"></div>
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
                        <div class="col-lg-7 col-xl-6">
                            <div class="title-area title-area--style2 white-style"><span class="title-area__title--sub">Services</span>
                                <h2 class="title-area__title">Ensure The Best Service For Clients.</h2></div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="title-area">
                                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eimod tempor incididut ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3 vs-active-wrapper">
                        <div class="col-lg-3 vs-service__biz vs-active">
                            <div class="vs-service__biz-contain">
                                <div class="vs-service__biz-bg"></div>
                                <div class="vs-service__biz-body">
                                    <div class="vs-service__biz-icon"><img src="assets/img/icons/h2-service-icon-1.svg" alt="BigBiz Servie Icon"></div>
                                    <h3 class="vs-service__biz-heading"><a class="vs-service__biz-heading__link" href="service-details.html">Tech Innovation</a></h3>
                                    <p class="vs-service__biz-text">Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tem incididunt labore.</p><a href="blog-details.html" class="vs-btn vs-btn--style4">Learn More <i class="fa-solid fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 vs-service__biz vs-active active">
                            <div class="vs-service__biz-contain">
                                <div class="vs-service__biz-bg"></div>
                                <div class="vs-service__biz-body">
                                    <div class="vs-service__biz-icon"><img src="assets/img/icons/h2-service-icon-2.svg" alt="BigBiz Servie Icon"></div>
                                    <h3 class="vs-service__biz-heading"><a class="vs-service__biz-heading__link" href="service-details.html">Data And Analytics</a></h3>
                                    <p class="vs-service__biz-text">Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tem incididunt labore.</p><a href="blog-details.html" class="vs-btn vs-btn--style4">Learn More <i class="fa-solid fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 vs-service__biz vs-active">
                            <div class="vs-service__biz-contain">
                                <div class="vs-service__biz-bg"></div>
                                <div class="vs-service__biz-body">
                                    <div class="vs-service__biz-icon"><img src="assets/img/icons/h2-service-icon-3.svg" alt="BigBiz Servie Icon"></div>
                                    <h3 class="vs-service__biz-heading"><a class="vs-service__biz-heading__link" href="service-details.html">Cloud Computing</a></h3>
                                    <p class="vs-service__biz-text">Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tem incididunt labore.</p><a href="blog-details.html" class="vs-btn vs-btn--style4">Learn More <i class="fa-solid fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 vs-service__biz vs-active">
                            <div class="vs-service__biz-contain">
                                <div class="vs-service__biz-bg"></div>
                                <div class="vs-service__biz-body">
                                    <div class="vs-service__biz-icon"><img src="assets/img/icons/h2-service-icon-4.svg" alt="BigBiz Servie Icon"></div>
                                    <h3 class="vs-service__biz-heading"><a class="vs-service__biz-heading__link" href="service-details.html">Finance Consulting</a></h3>
                                    <p class="vs-service__biz-text">Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tem incididunt labore.</p><a href="blog-details.html" class="vs-btn vs-btn--style4">Learn More <i class="fa-solid fa-arrow-right"></i></a></div>
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
                <div class="vs-brand m-0" dir="ltr">
                    <div class="vs-brand__content vs-brand__content--style2 z-index-common bg-black-3">
                        <div class="vs-brand__ele vs-brand__ele--left vs-brand__ele--style2"></div>
                        <div class="vs-brand__ele vs-brand__ele--right vs-brand__ele--style2"></div>
                        <div class="it-carousel" id="it-carousel-1" data-direction="right" data-autoplay="true" data-autoplay-speed="0.5">
                            <div class="it-carousel__wrapper it-carousel__wrapper--style2">
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-6.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-2.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-3.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-4.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-5.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-6.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-2.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-3.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-4.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-5.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-6.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-2.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-3.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-4.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-5.svg" alt="Hero Image 1" class="img-fluid"></div>
                                <div class="it-carousel__item it-carousel__item--style2"><img src="assets/img/brand/brand-1.svg" alt="Hero Image 1" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <div class="vs-clients__carousel overflow-visible" id="testislidev2" data-xl="2" data-lg="2" data-md="1" data-autoplay="true" data-autoplay-delay="5000" data-loop="true" data-centered-slides="true" data-grab-cursor="true" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-1.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Emma Hayes</span>
                                            <p class="vs-clients__role">Developer, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-2.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">John Deo</span>
                                            <p class="vs-clients__role">Team Member, Vecuro</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-3.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Paul Andrew</span>
                                            <p class="vs-clients__role">Developer, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-4.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Bipin Hayes</span>
                                            <p class="vs-clients__role">Member, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-5.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Emma Hayes</span>
                                            <p class="vs-clients__role">Developer, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-6.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Mark Wing</span>
                                            <p class="vs-clients__role">Painter, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-1.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Sara Rahman</span>
                                            <p class="vs-clients__role">Leader, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-2.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Rose Marry</span>
                                            <p class="vs-clients__role">Developer, VecuroSoft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="vs-clients__item vs-clients__item--style2"><img src="assets/img/icons/vs-icon-quote-h2-1.svg" alt="quote-icon" class="vs-clients__quote-icon">
                                    <div class="vs-clients__rating" data-rate="4.5"></div>
                                    <p class="vs-clients__quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <div class="vs-clients__author">
                                        <div class="vs-clients__author-img"><img class="vs-clients__avatar" src="assets/img/client/client-user-img-h1-3.jpg" alt="Emma Hayes wearing a hat"></div>
                                        <div class="vs-clients__details"><span class="vs-clients__name">Sophie Mark</span>
                                            <p class="vs-clients__role">SEO Lead, VecuroSoft</p>
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
    <section class="vs-team space space-extra-bottom bg-white">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-xl-5 col-lg-6 text-center text-lg-start">
                    <div class="title-area title-area--style2" dir="ltr"><span class="title-area__title--sub">Members</span>
                        <h2 class="title-area__title">Our Most Experience Team Members</h2></div>
                </div>
                <div class="col-xl-auto col-lg-auto title-area text-center text-lg-end"><a href="blog-details.html" class="vs-btn vs-btn--style3 vs-fade-in-up" data-delay="0.4" data-duration="1">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="vs-carousel swiper vs-active-wrapper" data-xl="4" data-lg="3" data-md="2" data-autoplay="false" dir="ltr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team-member-h1-1.jpg" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Emma Watson</a></h3><a href="team-details.html" class="vs-team__item-role">Designer, BigBiz</a></div>
                                <div class="vs-team__item-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team-member-h1-2.jpg" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Rivanur R. Rafi</a></h3><a href="team-details.html" class="vs-team__item-role">Designer, BigBiz</a></div>
                                <div class="vs-team__item-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team-member-h1-3.jpg" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Margot Robbie</a></h3><a href="team-details.html" class="vs-team__item-role">Designer, BigBiz</a></div>
                                <div class="vs-team__item-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-delay="0.2" data-duration="1">
                        <div class="vs-team__item vs-team__item--style2 vs-active">
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team-member-h1-4.jpg" alt="Team Member Image"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Jhon China</a></h3><a href="team-details.html" class="vs-team__item-role">Designer, BigBiz</a></div>
                                <div class="vs-team__item-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a></div>
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
                        <div class="title-area title-area--style2 white-style text-center" dir="ltr"><span class="title-area__title--sub title-area__title--sub-center">Portfolios</span>
                            <h2 class="title-area__title">Explore Our Successfully Done Projects</h2></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 text-center vs-fade-in-up" data-duration="1.3" data-delay="0.7" data-yposition="80" dir="ltr">
                        <div class="vs-portfolio__tabs vs-portfolio__tabs--style2 d-flex flex-wrap justify-content-center">
                            <button class="vs-portfolio__tab active" data-filter="*">All</button>
                            <button class="vs-portfolio__tab" data-filter=".brand">Brand</button>
                            <button class="vs-portfolio__tab" data-filter=".mockup">Mockup</button>
                            <button class="vs-portfolio__tab" data-filter=".logo">Logo</button>
                            <button class="vs-portfolio__tab" data-filter=".consulting">Consulting</button> <span class="vs-portfolio__indicator"></span></div>
                    </div>
                </div>
                <div class="vs-portfolio__grids row grid">
                    <div class="grid-sizer col-lg-4 col-md-6"></div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 brand vs-fade-in-up" data-duration="1" data-delay="0.3">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-1.jpg" class="vs-portfolio__img" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 mockup vs-fade-in-up" data-duration="1" data-delay="0.4">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-2.jpg" class="vs-portfolio__img vs-image-effect__image" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 logo vs-fade-in-up" data-duration="1" data-delay="0.5">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-3.jpg" class="vs-portfolio__img" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 consulting vs-fade-in-up" data-duration="1" data-delay="0.6">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-4.jpg" class="vs-portfolio__img" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 brand vs-fade-in-up" data-duration="1" data-delay="0.7">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-5.jpg" class="vs-portfolio__img" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-portfolio__item vs-portfolio__item--style2 grid-item col-lg-4 col-md-6 logo mockup vs-fade-in-up" data-duration="1" data-delay="0.8">
                        <div class="vs-portfolio__content">
                            <a class="vs-portfolio__link--img d-inline-block" href="portfolio-details.html"><img src="assets/img/portfolio/p-h2-6.jpg" class="vs-portfolio__img" alt="Portfolio Item 1"></a>
                            <div class="vs-portfolio__item-overlay">
                                <div class="vs-portfolio__item-text"><a href="portfolio-details.html" class="vs-portfolio__item-tag">Design</a>
                                    <h3 class="vs-portfolio__item-heading"><a href="portfolio-details.html" class="vs-portfolio__item-heading__link">Duis aute irure dolor in...</a></h3><a href="portfolio-details.html" class="vs-portfolio__item-view"><i class="fa-solid fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-xl-5 col-lg-6 text-center text-lg-start">
                    <div class="title-area title-area--style2" dir="ltr"><span class="title-area__title--sub">News & Blog</span>
                        <h2 class="title-area__title">Our Most Latest News And Blogs</h2></div>
                </div>
                <div class="col-xl-auto col-lg-auto title-area text-center text-lg-end"><a href="blog-details.html" class="vs-btn vs-btn--style3 vs-fade-in-up" data-delay="0.4" data-duration="1">Explore More <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="vs-carousel swiper vs-active-wrapper" data-xl="3" data-lg="2" data-space-xl="30" data-loop="false" data-autoplay="false">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vs-fade-in-up" data-duration="1" data-delay="0.3" data-yposition="80">
                        <div class="vs-blog vs-blog--style3 vs-image-effect vs-active"><span class="vs-blog__date">16 <sub>Jan</sub></span>
                            <figure class="vs-blog__figure">
                                <a class="vs-blog__figure__link" href="blog-details.html" data-cursor-style="default" data-cursor-text="View!" data-cursor-bg="#196164" data-cursor-size="60px" data-cursor-blend="normal"><img class="vs-blog__img vs-image-effect__image" src="assets/img/blog/vs-blog-h1-1.jpg" alt="Blog Image">
                                    <div class="vs-image-effect__overlay"></div>
                                </a>
                            </figure>
                            <div class="vs-blog__content">
                                <div class="vs-blog__meta"><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-user"></i> By Admin </a><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-comments"></i> (03) Comments</a></div>
                                <h3
                                class="vs-blog__title"><a class="vs-blog__title__link" href="blog-details.html">Lorem ipsum dolor sit amet consectetur.</a></h3>
                                    <hr class="vs-blog__divider">
                                    <div class="vs-blog__buttons"><a href="blog-details.html" class="vs-btn vs-blog__button">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        <div class="vs-blog__social"><a class="vs-blog__social__link" href="#"><i class="fa-solid fa-share-nodes"></i></a></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-duration="1" data-delay="0.5" data-yposition="80">
                        <div class="vs-blog vs-blog--style3 vs-image-effect vs-active active"><span class="vs-blog__date">16 <sub>Jan</sub></span>
                            <figure class="vs-blog__figure" data-cursor-style="default" data-cursor-text="View!" data-cursor-bg="#196164" data-cursor-size="60px" data-cursor-blend="normal">
                                <a class="vs-blog__figure__link" href="blog-details.html"><img class="vs-blog__img vs-image-effect__image" src="assets/img/blog/vs-blog-h1-2.jpg" alt="Blog Image">
                                    <div class="vs-image-effect__overlay"></div>
                                </a>
                            </figure>
                            <div class="vs-blog__content">
                                <div class="vs-blog__meta"><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-user"></i> By Admin </a><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-comments"></i> (03) Comments</a></div>
                                <h3
                                class="vs-blog__title"><a class="vs-blog__title__link" href="blog-details.html">Lorem ipsum dolor sit amet consectetur.</a></h3>
                                    <hr class="vs-blog__divider">
                                    <div class="vs-blog__buttons"><a href="blog-details.html" class="vs-btn vs-blog__button">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        <div class="vs-blog__social"><a class="vs-blog__social__link" href="#"><i class="fa-solid fa-share-nodes"></i></a></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-duration="1" data-delay="0.7" data-yposition="80">
                        <div class="vs-blog vs-blog--style3 vs-image-effect vs-active"><span class="vs-blog__date">16 <sub>Jan</sub></span>
                            <figure class="vs-blog__figure" data-cursor-style="default" data-cursor-text="View!" data-cursor-bg="#196164" data-cursor-size="60px" data-cursor-blend="normal">
                                <a class="vs-blog__figure__link" href="blog-details.html"><img class="vs-blog__img vs-image-effect__image" src="assets/img/blog/vs-blog-h1-3.jpg" alt="Blog Image">
                                    <div class="vs-image-effect__overlay"></div>
                                </a>
                            </figure>
                            <div class="vs-blog__content">
                                <div class="vs-blog__meta"><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-user"></i> By Admin </a><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-comments"></i> (03) Comments</a></div>
                                <h3
                                class="vs-blog__title"><a class="vs-blog__title__link" href="blog-details.html">Lorem ipsum dolor sit amet consectetur.</a></h3>
                                    <hr class="vs-blog__divider">
                                    <div class="vs-blog__buttons"><a href="blog-details.html" class="vs-btn vs-blog__button">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        <div class="vs-blog__social"><a class="vs-blog__social__link" href="#"><i class="fa-solid fa-share-nodes"></i></a></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vs-fade-in-up" data-duration="1" data-delay="0.7" data-yposition="80">
                        <div class="vs-blog vs-blog--style3 vs-image-effect vs-active"><span class="vs-blog__date">16 <sub>Jan</sub></span>
                            <figure class="vs-blog__figure" data-cursor-style="default" data-cursor-text="View!" data-cursor-bg="#196164" data-cursor-size="60px" data-cursor-blend="normal">
                                <a class="vs-blog__figure__link" href="blog-details.html"><img class="vs-blog__img vs-image-effect__image" src="assets/img/blog/vs-blog-h1-4.jpg" alt="Blog Image">
                                    <div class="vs-image-effect__overlay"></div>
                                </a>
                            </figure>
                            <div class="vs-blog__content">
                                <div class="vs-blog__meta"><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-user"></i> By Admin </a><a href="blog-details.html" class="vs-blog__meta__text"><i class="fa-solid fa-comments"></i> (03) Comments</a></div>
                                <h3
                                class="vs-blog__title"><a class="vs-blog__title__link" href="blog-details.html">Lorem ipsum dolor sit amet consectetur.</a></h3>
                                    <hr class="vs-blog__divider">
                                    <div class="vs-blog__buttons"><a href="blog-details.html" class="vs-btn vs-blog__button">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        <div class="vs-blog__social"><a class="vs-blog__social__link" href="#"><i class="fa-solid fa-share-nodes"></i></a></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper("#testislidev2", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        speed: 4000, // smooth continuous movement
        grabCursor: true,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
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