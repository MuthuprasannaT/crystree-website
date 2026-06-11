@extends('Layouts.app') @section('content')


<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
            <h1 class="breadcrumb-wrapper__title">About Us</h1>
            <div class="breadcrumb-wrapper__menu--wrap">
                <ul class="breadcrumb-wrapper__menu">
                    <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-wrapper__menu--item">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<section class="vs-about space space-bottom z-index-common overflow-hidden">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="vs-about__imgs-h6">
                    <div class="vs-ex style3 mb-30">
                        <div class="vs-ex__counter">
                            <div class="main-counter" data-counter="15">
                                <div class="vs-ex__counter-number">
                                    <div class="main-counter__number">0</div>+</div><span class="vs-ex__counter-title">Years Of Experience</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="vs-about__imgs-h6__img1"><img src="assets/img/about/about-h6-1.jpg" alt="about img"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="vs-about__imgs-h6__img2"><img src="assets/img/about/about-h6-2.jpg" alt="about img"></div>
                            <div class="vs-about__imgs-h6__img3"><img src="assets/img/about/about-h6-3.jpg" alt="about img"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="vs-about__content">
                    <div class="title-area title-area--style6 mb-2"><span class="title-area__title--sub"><img src="assets/img/icons/vs-icon-title-h6-1.svg" alt="vs-icon-title-star"> About US <img src="assets/img/icons/vs-icon-title-h6-1.svg" alt="vs-icon-title-star"></span>
                        <h2 class="title-area__title">Transforming Ideas Into Success</h2>
                        <p>Crystree Solutions is a trusted technology partner delivering innovative digital solutions that help businesses improve efficiency, enhance customer engagement, and achieve sustainable growth across industries.</p>
                    </div>
                    <div class="vs-about__cards">
                        <div class="vs-about__card">
                            <div class="vs-about__card-icon"><img src="assets/img/icons/vs-icon-about-h6-1.svg" alt="vs-icon"></div>
                            <div class="vs-about__card-content">
                                <h3 class="vs-about__card-title">Innovation & Excellence</h3>
                                <p class="vs-about__card-text">Creating smart digital solutions for modern businesses.</p>
                            </div>
                        </div>
                        <div class="vs-about__cards-divider"></div>
                        <div class="vs-about__card">
                            <div class="vs-about__card-icon"><img src="assets/img/icons/vs-icon-about-h6-2.svg" alt="vs-icon"></div>
                            <div class="vs-about__card-content">
                                <h3 class="vs-about__card-title">Customer Success</h3>
                                <p class="vs-about__card-text">Focused on delivering value, quality, and trust.</p>
                            </div>
                        </div>
                    </div>
                    <p class="vs-about__text style2 text-white">"Transforming ideas into innovative digital solutions that drive growth and long-term success."</p>
                    <div class="vs-about__footer"><a href="blog-details.html" class="vs-btn vs-btn--style13">Explore Services</a>
                        <div class="vs-info style9 d-none d-xl-flex">
                            <div class="vs-info__content">
                                <h6 class="vs-info__title">Talk To Our Experts</h6><a class="vs-info__label" style="text-decoration:none;" href="tel:+0019280009">+(00) 1928 0009</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vs-about space space-extra-bottom overflow-hidden z-index-common">
    <div class="vs-ele vs-ele--ele1">
        <img data-parallax='{"y":150,"smoothness":5}' src="assets/img/elements/vs-about-ele-h3-1.svg" alt="BigBiz">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="title-area title-area--style3 mb-3"><span class="title-area__title--sub"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#cclip0_2102_3911)"><path d="M14.9379 7.19687C15.2016 9.29374 14.0977 11.175 12.3187 12.2312C11.9039 12.475 11.591 12.8281 11.4574 13.2531L11.1094 14.375H6.89062L6.5707 13.3437C6.43008 12.8969 6.13125 12.4937 5.69883 12.2406C4.08516 11.2906 3.02344 9.66249 3.02344 7.81249C3.02344 4.67499 6.08203 2.17187 9.69258 2.53437C12.4242 2.80937 14.632 4.76874 14.9379 7.19687Z" fill="#01433D"/><path d="M12.319 12.2312C11.9042 12.475 11.5913 12.8281 11.4577 13.2531L11.1097 14.375H9.09873L9.34834 13.5656C9.48193 13.1406 9.79482 12.7875 10.2097 12.5437C11.9886 11.4875 13.0925 9.60624 12.8288 7.50937C12.5229 5.08124 10.3151 3.12187 7.5835 2.84687C7.37607 2.82499 7.17217 2.81562 6.96826 2.81249C7.80498 2.54374 8.72959 2.43749 9.69287 2.53437C12.4245 2.80937 14.6323 4.76874 14.9382 7.19687C15.2019 9.29374 14.0979 11.175 12.319 12.2312Z" fill="#025850"/><path d="M11.1094 17.1875L10.5996 18.0906C10.4941 18.2812 10.2867 18.4062 10.0547 18.4312C10.0266 18.4375 9.99844 18.4375 9.97031 18.4375H8.02969C8.00156 18.4375 7.97344 18.4375 7.94531 18.4312C7.71328 18.4062 7.50586 18.2812 7.40039 18.0906L6.89062 17.1875H11.1094Z" fill="#01433D"/><path d="M10.0547 18.4375V19.0625C10.0547 19.4063 9.73828 19.6875 9.35156 19.6875H8.64844C8.26172 19.6875 7.94531 19.4063 7.94531 19.0625V18.4375V18.4313C7.97344 18.4375 8.00156 18.4375 8.02969 18.4375H9.97031C9.99844 18.4375 10.0266 18.4375 10.0547 18.4313V18.4375Z" fill="#01433D"/><path d="M6.1875 15.3125V15C6.1875 14.6562 6.50391 14.375 6.89062 14.375H8.29688H9.70312H11.1094C11.4961 14.375 11.8125 14.6562 11.8125 15V15.3125V16.25V16.5625C11.8125 16.9062 11.4961 17.1875 11.1094 17.1875H6.89062C6.50391 17.1875 6.1875 16.9062 6.1875 16.5625V16.25V15.3125Z" fill="#01433D"/><path d="M9 10L9.70312 14.375H8.29688L9 10Z" fill="#01433D"/><path d="M12.8219 6.5625C12.8219 6.5625 13.1681 10 9.01425 10C9.01425 10 9.00732 9.93125 9.00732 9.80937C9.00732 9.0875 9.26002 6.5625 12.8219 6.5625Z" fill="#01433D"/><path d="M9.00723 9.80937C9.00723 9.93125 9.0003 10 9.0003 10C4.84646 10 5.19261 6.5625 5.19261 6.5625C8.75453 6.5625 9.00723 9.0875 9.00723 9.80937Z" fill="#01433D"/><path d="M6.82737 5.17946C7.35597 4.80917 7.59448 4.28793 7.3601 4.01524C7.12572 3.74255 6.5072 3.82167 5.9786 4.19196C5.45 4.56225 5.21149 5.08349 5.44587 5.35618C5.68025 5.62887 6.29877 5.54975 6.82737 5.17946Z" fill="white"/><path d="M5.98628 7.27914C5.85093 7.40133 5.85093 7.59883 5.98628 7.72102L7.37089 8.97102C7.43839 9.03195 7.52701 9.06258 7.61562 9.06258C7.70424 9.06258 7.79285 9.03195 7.86035 8.97102C7.9957 8.84883 7.9957 8.65133 7.86035 8.52914L6.47574 7.27914C6.34039 7.15695 6.12162 7.15695 5.98628 7.27914Z" fill="#FFE06E"/><path d="M12.0142 7.27914C11.8788 7.15695 11.66 7.15695 11.5247 7.27914L10.1401 8.52914C10.0047 8.65133 10.0047 8.84883 10.1401 8.97102C10.2076 9.03195 10.2962 9.06258 10.3848 9.06258C10.4734 9.06258 10.562 9.03195 10.6295 8.97102L12.0142 7.72102C12.1495 7.59883 12.1495 7.40133 12.0142 7.27914Z" fill="#FFE06E"/><path d="M8.99996 1.5625C9.19104 1.5625 9.34612 1.4225 9.34612 1.25V0.3125C9.34612 0.14 9.19104 0 8.99996 0C8.80889 0 8.65381 0.14 8.65381 0.3125V1.25C8.65381 1.4225 8.80889 1.5625 8.99996 1.5625Z" fill="#01433D"/><path d="M0.346154 8.4375H1.38462C1.57569 8.4375 1.73077 8.2975 1.73077 8.125C1.73077 7.9525 1.57569 7.8125 1.38462 7.8125H0.346154C0.155077 7.8125 0 7.9525 0 8.125C0 8.2975 0.155077 8.4375 0.346154 8.4375Z" fill="#01433D"/><path d="M2.35166 4.43977C2.41916 4.5007 2.50778 4.53133 2.59639 4.53133C2.68501 4.53133 2.77362 4.5007 2.84112 4.43977C2.97647 4.31758 2.97647 4.12008 2.84112 3.99789L1.97574 3.21664C1.84039 3.09445 1.62162 3.09445 1.48628 3.21664C1.35093 3.33883 1.35093 3.53633 1.48628 3.65852L2.35166 4.43977Z" fill="#01433D"/><path d="M1.8024 11.9398L2.66778 11.1585C2.80313 11.0363 2.80313 10.8388 2.66778 10.7166C2.53244 10.5945 2.31367 10.5945 2.17832 10.7166L1.31294 11.4979C1.17759 11.6201 1.17759 11.8176 1.31294 11.9398C1.38044 12.0007 1.46905 12.0313 1.55767 12.0313C1.64628 12.0313 1.7349 12.0007 1.8024 11.9398Z" fill="#01433D"/><path d="M5.55766 12.5C5.89931 12.7041 6.15374 13.0328 6.2735 13.4256L6.49435 14.1485C6.13574 14.296 5.88443 14.6213 5.88443 15V16.5625C5.88443 17.0088 6.23231 17.3816 6.69547 17.4756L7.11431 18.2316C7.2237 18.4291 7.40197 18.58 7.6152 18.6669V19.0625C7.6152 19.5794 8.08112 20 8.65366 20H9.34597C9.9185 20 10.3844 19.5794 10.3844 19.0625V18.6672C10.5977 18.5803 10.7759 18.4294 10.8853 18.2319L11.3042 17.476C11.7673 17.3816 12.1152 17.0088 12.1152 16.5625V15C12.1152 14.6213 11.8639 14.296 11.5049 14.1485L11.7531 13.3363C11.8549 13.0031 12.1055 12.7025 12.4579 12.4903C14.405 11.3194 15.4518 9.27845 15.1901 7.16408C14.872 4.59126 12.5721 2.51408 9.72189 2.22439C7.91912 2.04033 6.18904 2.53595 4.84874 3.6172C3.52712 4.68376 2.76904 6.21283 2.76904 7.81251C2.76904 9.7047 3.81166 11.4569 5.55766 12.5ZM9.95658 18.125H8.04304C7.91116 18.125 7.79243 18.0588 7.73358 17.9522L7.48297 17.5H10.5167L10.266 17.9522C10.2072 18.0588 10.0885 18.125 9.95658 18.125ZM9.34597 19.375H8.65366C8.46293 19.375 8.3075 19.2347 8.3075 19.0625V18.75H9.69212V19.0625C9.69212 19.2347 9.5367 19.375 9.34597 19.375ZM11.0767 16.875H6.92289C6.73216 16.875 6.57674 16.7347 6.57674 16.5625H9.69212C9.8832 16.5625 10.0383 16.4225 10.0383 16.25C10.0383 16.0775 9.8832 15.9375 9.69212 15.9375H6.57674V15.625H7.6152C7.80627 15.625 7.96135 15.485 7.96135 15.3125C7.96135 15.14 7.80627 15 7.6152 15H6.57674C6.57674 14.8278 6.73216 14.6875 6.92289 14.6875H11.0767C11.2675 14.6875 11.4229 14.8278 11.4229 15H8.99981C8.80874 15 8.65366 15.14 8.65366 15.3125C8.65366 15.485 8.80874 15.625 8.99981 15.625H11.4229V15.9375H11.0767C10.8857 15.9375 10.7306 16.0775 10.7306 16.25C10.7306 16.4225 10.8857 16.5625 11.0767 16.5625H11.4229C11.4229 16.7347 11.2675 16.875 11.0767 16.875ZM8.70662 14.0625L8.99981 12.2094L9.293 14.0625H8.70662ZM5.3105 4.08314C6.50162 3.12189 8.04097 2.68189 9.6447 2.84533C12.1765 3.10283 14.2195 4.94814 14.5023 7.23345C14.7352 9.11439 13.8051 10.9294 12.0744 11.9703C11.5832 12.266 11.2322 12.6919 11.0861 13.17L10.8133 14.0625H9.99224L9.39685 10.2997C10.597 10.2375 11.5389 9.88126 12.1948 9.23283C13.3125 8.12751 13.173 6.59876 13.1665 6.53439C13.1502 6.37345 13.0007 6.25001 12.8217 6.25001C11.436 6.25001 10.3657 6.61345 9.64089 7.3297C9.35462 7.61283 9.15143 7.92376 9.00674 8.23064C8.86204 7.92376 8.6592 7.61283 8.37258 7.3297C7.64808 6.61345 6.57777 6.25001 5.19212 6.25001C5.01316 6.25001 4.86362 6.37345 4.84735 6.53439C4.84077 6.59908 4.70127 8.12783 5.819 9.23283C6.47254 9.87876 7.40958 10.2347 8.60277 10.2991L8.00739 14.0625H7.18666L6.94124 13.2594C6.77681 12.721 6.42131 12.2663 5.93981 11.9788C4.388 11.0519 3.46135 9.49408 3.46135 7.81251C3.46135 6.39064 4.13531 5.03126 5.3105 4.08314ZM9.35566 9.67908C9.37435 9.24001 9.50139 8.3947 10.1522 7.75126C10.6821 7.2272 11.4644 6.93595 12.48 6.88376C12.4614 7.32283 12.3343 8.16814 11.6835 8.81158C11.1536 9.33533 10.3713 9.62658 9.35566 9.67908ZM8.65712 9.67876C7.64462 9.62658 6.86404 9.33658 6.33443 8.81533C5.68435 8.17564 5.55524 7.3247 5.53481 6.88376C6.54731 6.93595 7.32789 7.22595 7.8575 7.7472C8.50793 8.38689 8.63704 9.23751 8.65712 9.67876Z" fill="#FFE06E"/><path d="M9.48965 4.08741C9.8725 4.12647 10.2481 4.21491 10.606 4.35053C10.6496 4.3671 10.695 4.37491 10.7396 4.37491C10.875 4.37491 11.0034 4.30303 11.0588 4.18335C11.1328 4.02428 11.0501 3.84116 10.8736 3.77428C10.4551 3.61553 10.0155 3.51178 9.56685 3.46647C9.37888 3.44647 9.20581 3.57053 9.18435 3.7421C9.16288 3.91366 9.29962 4.06835 9.48965 4.08741Z" fill="white"/><path d="M11.9992 5.21626C12.067 5.28032 12.1581 5.31251 12.2488 5.31251C12.335 5.31251 12.4212 5.28376 12.4883 5.22563C12.6264 5.10626 12.6309 4.90813 12.4987 4.78376C12.373 4.66563 12.2387 4.55251 12.0989 4.44719C11.9521 4.33688 11.7337 4.35469 11.6115 4.48751C11.489 4.62001 11.509 4.81719 11.6562 4.92751C11.7759 5.01782 11.8915 5.11501 11.9992 5.21626Z" fill="white"/><path d="M16.269 8.125C16.269 8.2975 16.4241 8.4375 16.6152 8.4375H17.6537C17.8447 8.4375 17.9998 8.2975 17.9998 8.125C17.9998 7.9525 17.8447 7.8125 17.6537 7.8125H16.6152C16.4241 7.8125 16.269 7.9525 16.269 8.125Z" fill="#01433D"/><path d="M15.4039 4.53133C15.4925 4.53133 15.5811 4.5007 15.6486 4.43977L16.514 3.65852C16.6493 3.53633 16.6493 3.33883 16.514 3.21664C16.3786 3.09445 16.1599 3.09445 16.0245 3.21664L15.1591 3.99789C15.0238 4.12008 15.0238 4.31758 15.1591 4.43977C15.2266 4.5007 15.3152 4.53133 15.4039 4.53133Z" fill="#01433D"/><path d="M16.4426 12.0313C16.5312 12.0313 16.6198 12.0007 16.6873 11.9398C16.8227 11.8176 16.8227 11.6201 16.6873 11.4979L15.8219 10.7166C15.6866 10.5945 15.4678 10.5945 15.3325 10.7166C15.1971 10.8388 15.1971 11.0363 15.3325 11.1585L16.1979 11.9398C16.2654 12.0007 16.354 12.0313 16.4426 12.0313Z" fill="#01433D"/></g><defs><clipPath id="cclip0_2102_3911"><rect width="18" height="20" fill="white"/></clipPath></defs></svg> About Crystree Solutions</span>
                            <h2 class="title-area__title">Empowering Businesses Through Technology</h2>
                            <p class="fw-medium">Crystree Solutions is committed to helping businesses embrace digital transformation through innovative technology solutions. We provide customized software, web, mobile, and digital marketing services that improve operational efficiency, enhance customer experiences, and accelerate sustainable business growth.</p>
                        </div>
                    </div>
                    <div class="row mb-3">

                        <!-- Mission -->
                        <div class="col-lg-6">
                            <h4 class="mb-3">Our Mission</h4>
                            <ul class="vs-list">
                                <li>Deliver innovative digital solutions.</li>
                                <li>Drive business growth through technology.</li>
                                <li>Provide exceptional customer support.</li>
                                <li>Maintain quality and transparency.</li>
                                <li>Create lasting value for clients</li>
                            </ul>
                        </div>

                        <!-- Vision -->
                        <div class="col-lg-6">
                            <h4 class="mb-3">Our Vision</h4>
                            <ul class="vs-list">
                                <li>Become a trusted technology partner.</li>
                                <li>Lead digital innovation globally.</li>
                                <li>Empower businesses to succeed.</li>
                                <li>Build future-ready solutions.</li>
                                <li>Inspire growth through technology.</li>
                            </ul>
                        </div>

                    </div>

                    
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="vs-about__img-home3"><img class="rounded-20" src="assets/img/about/about-image-h3-1.jpg" alt="BigBiz"></div>
            </div>

        </div>
    </div>

    <Style>
        .vs-list h4,
.col-lg-6 h4{
    color:#01433D;
    font-weight:700;
    margin-bottom:20px;
}

.vs-list li{
    margin-bottom:10px;
}
        .vs-about{
           position: relative;
           overflow: hidden;
        }

        .vs-ele--ele1{
           position: absolute;
           left: 150px;   /* move further left */
           top: 30%;
           transform: translateY(-50%);
           z-index: 0;
        }

        .vs-ele--ele1 img{
            width: 180px;
            height: auto;
            display: block;
        }
    </Style>
</section>

<section class="vs-features z-index-common space" data-bg-src="assets/img/features/h5-features-bg-1.jpg">
    <div class="overlay bg-theme-14 z-index-n1" data-opacity="93%"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area title-area--style5 text-center mb-20"><span class="title-area__title--sub text-white"><img src="assets/img/icons/vs-icon-sec-h5-1.svg" alt="Icon"> Leadership Team <img src="assets/img/icons/vs-icon-sec-h5-1.svg" alt="Icon"></span>
                    <h2 class="title-area__title text-white">Meet The Leaders Behind Crystree Solutions</h2></div>
            </div>
        </div>
        <div class="vs-features__wrapper" data-bg-src="assets/img/elements/vs-featured-bg.svg">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-4 order-0">
                    <div class="vs-features__charging">
                        <div class="vs-features__charging-icon"><i class="flaticon flaticon-gdpr"></i></div>
                        <h3 class="vs-features__charging-title">Managing Director</h3>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="vs-features__charging">
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-auto order-2 order-lg-1">
                    <div class="vs-features__img"><img src="assets/img/logo/crystree-11.png" alt="vs-features"></div>
                </div>
                <div class="col-md-6 col-lg-4 order-1 order-lg-2">
                    <div class="vs-features__charging vs-features__charging--right">
                        <div class="vs-features__charging-icon"><i class="flaticon flaticon-operation"></i></div>
                        <h3 class="vs-features__charging-title">Chief Executive Officer</h3>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="vs-features__charging vs-features__charging--right">
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="vs-features__charging-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vs-team space space-extra-bottom">
    <div class="container">

        <div class="row justify-content-center align-items-end">
            <div class="col-xl-6 col-lg-6">
                <div class="title-area title-area--style3 text-center mb-title">
                    <span class="title-area__title--sub">
                        Team Members
                    </span>

                    <h2 class="title-area__title">
                        Meet Our Professional Team
                    </h2>
                </div>
            </div>
        </div>

        <div class="vs-carousel swiper"
             data-xl="4"
             data-lg="3"
             data-md="2"
             data-sm="2"
             data-xs="1"
             data-autoplay="true"
             dir="ltr">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team1.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Muthu Prasanna T</a></h3><a href="team-details.html" class="vs-team__item-role">Team Lead</a></div>
                            </div>
                        </div>
                </div>

                 <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team2.png" alt="Sangeetha"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Sangeetha R</a></h3><a href="team-details.html" class="vs-team__item-role">Lead Creative Designer</a></div>
                            </div>
                        </div>
                </div>

                 <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team3.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Gopala Krishnan T</a></h3><a href="team-details.html" class="vs-team__item-role">Lead Software Engineer</a></div>
                            </div>
                        </div>
                </div>


                <!-- <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team4.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Swathi</a></h3><a href="team-details.html" class="vs-team__item-role">Lead Digital Marketing</a></div>
                            </div>
                        </div>
                </div> -->

                <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team5.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Dharani A</a></h3><a href="team-details.html" class="vs-team__item-role">Sr. App Developer</a></div>
                            </div>
                        </div>
                </div>


                <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team6.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Lakshana R</a></h3><a href="team-details.html" class="vs-team__item-role">Sr. UI/UX Designer</a></div>
                            </div>
                        </div>
                </div>

                <div class="swiper-slide">
                        <div class="vs-team__item vs-team__item--style3 social-clickable">
                            <div class="vs-team__item-social">
                                <ul class="vs-team__item-social__list">
                                    <li>
                                        <button class="social-clickable__button"><i class="fa-solid fa-share-nodes"></i></button>
                                        <ul class="social-clickable__toggle">
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <figure class="vs-team__item-figure">
                                <a class="vs-team__item-img-link" href="team-details.html"><img class="vs-team__item-img" src="assets/img/team/team7.png" alt="Muthu"></a>
                            </figure>
                            <div class="vs-team__item-body">
                                <div class="vs-team__item-content">
                                    <h3 class="vs-team__item-name"><a href="team-details.html">Premkumar R</a></h3><a href="team-details.html" class="vs-team__item-role">Sr. Software Engineer</a></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vs-service vs-service--layout1 bg-theme-3 space space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="title-area text-center px-4" dir="ltr"><span class="title-area__title--sub"><img src="img/icons/vs-icon-title-star.svg" alt="vs-icon-title-star"> <span class="textify-style15" data-color="#C4F500" data-duration="0.8">Services</span> <img src="img/icons/vs-icon-title-star.svg"
                    alt="vs-icon-title-star"></span>
                    <h2 class="title-area__title textify-style21" data-filter="blur(2px) drop-shadow(0 0 10px #C4F500)" data-duration="1">Ensure The Best Service For Clients.</h2></div>
            </div>
        </div>
        <div class="vs-service__grid vs-service__grid-row1">
            <div class="vs-service__grid-item active vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-1.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Brand Strategy</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-target-market"></i></div>
                    </div>
                </div>
            </div>
            <div class="vs-service__grid-item vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-2.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Logo Design</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-layer"></i></div>
                    </div>
                </div>
            </div>
            <div class="vs-service__grid-item vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-3.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Visual Identity</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-brand"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vs-service__grid vs-service__grid-row2">
            <div class="vs-service__grid-item vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-4.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Brand Messaging</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-promotion"></i></div>
                    </div>
                </div>
            </div>
            <div class="vs-service__grid-item vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-5.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Creative Campaigns</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-consultant"></i></div>
                    </div>
                </div>
            </div>
            <div class="vs-service__grid-item active vs-fade-in-up">
                <div class="vs-service__card">
                    <div class="vs-service__card-figure">
                        <div class="vs-service__card-figure__inner">
                            <a class="vs-service__card-img-link" href="service-details.html"><img class="vs-service__card-img" src="{{ asset('assets/img/services/service-img-h1-6.jpg') }}" alt="Service Image"></a>
                        </div>
                    </div>
                    <div class="vs-service__card-content">
                        <h3 class="vs-service__card-title"><a class="vs-service__card-title__link" href="service-details.html">Brand Consultation</a></h3>
                        <p class="vs-service__card-text">Lorem ipsum dolor sit amet, conse pns elit. Ut elit tellus, luctus nec corper matis, pulvinar dapibus leo.</p><a href="service-details.html" class="vs-service__card-link"><span class="vs-service__card-link__text">View Details </span><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__card-icon"><i class="flaticon flaticon-branding"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vs-service bg-theme-9 space space-extra-bottom">
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-7 col-xl-6">
                <div class="title-area title-area--style6 mb-title"><span class="title-area__title--sub"><img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""> Services <img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""></span>
                    <h2 class="title-area__title">Ensure The Best Service For Clients.</h2></div>
            </div>
            <div class="col-md-auto">
                <div class="carousel-arrows style4 vs-active-wrapper mb-title">
                    <button id="service-carousel-prev" class="carousel-arrows__prev vs-active"><i class="fa-solid fa-arrow-left"></i></button>
                    <button id="service-carousel-next" class="carousel-arrows__next vs-active active"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="vs-carousel swiper vs-active-wrapper" data-xl="4" data-lg="3" data-md="2.5" data-loop="false" data-autoplay="false" data-nav-next="#service-carousel-next" data-nav-prev="#service-carousel-prev">
            <div class="swiper-wrapper">
                <div class="swiper-slide mb-30">
                    <div class="vs-service__financial vs-active active"><a href="service-details.html" class="vs-service__financial-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__financial-content"><span class="vs-service__financial-icon"><i class="flaticon flaticon-financial-growth"></i></span>
                            <h3 class="vs-service__financial-heading"><a href="service-details.html" class="vs-service__financial-heading__link">Investment & Wealth Management</a></h3>
                            <p class="vs-service__financial-text">Helping clients grow and protect their wealth with personalized investment strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-30">
                    <div class="vs-service__financial vs-active"><a href="service-details.html" class="vs-service__financial-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__financial-content"><span class="vs-service__financial-icon"><i class="flaticon flaticon-retirement-plan"></i></span>
                            <h3 class="vs-service__financial-heading"><a href="service-details.html" class="vs-service__financial-heading__link">Retirement Planning Services</a></h3>
                            <p class="vs-service__financial-text">Helping clients grow and protect their wealth with personalized investment strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-30">
                    <div class="vs-service__financial vs-active"><a href="service-details.html" class="vs-service__financial-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__financial-content"><span class="vs-service__financial-icon"><i class="flaticon flaticon-taxes"></i></span>
                            <h3 class="vs-service__financial-heading"><a href="service-details.html" class="vs-service__financial-heading__link">Tax Planning And Preparation</a></h3>
                            <p class="vs-service__financial-text">Helping clients grow and protect their wealth with personalized investment strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-30">
                    <div class="vs-service__financial vs-active"><a href="service-details.html" class="vs-service__financial-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__financial-content"><span class="vs-service__financial-icon"><i class="flaticon flaticon-risk-management"></i></span>
                            <h3 class="vs-service__financial-heading"><a href="service-details.html" class="vs-service__financial-heading__link">Risk & Insurance Advisory</a></h3>
                            <p class="vs-service__financial-text">Helping clients grow and protect their wealth with personalized investment strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-30">
                    <div class="vs-service__financial vs-active"><a href="service-details.html" class="vs-service__financial-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                        <div class="vs-service__financial-content"><span class="vs-service__financial-icon"><i class="flaticon flaticon-financial-growth"></i></span>
                            <h3 class="vs-service__financial-heading"><a href="service-details.html" class="vs-service__financial-heading__link">Investment & Wealth Management</a></h3>
                            <p class="vs-service__financial-text">Helping clients grow and protect their wealth with personalized investment strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vs-clients vs-clients--area space space-extra-bottom overflow-hidden">
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-7 col-xl-6">
                <div class="title-area title-area--style6 mb-title"><span class="title-area__title--sub"><img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""> FAQs <img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""></span>
                    <h2 class="title-area__title">Frequently Asked Any Questions</h2></div>
            </div>
            <div class="col-md-auto">
                <div class="mb-title"><a href="blog-details.html" class="vs-btn vs-btn--style13">Explore More</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-4 mb-30">
                <div class="vs-clients__card-review style2 text-center"><img class="vs-clients__card-review__logo" src="assets/img/logo-version-5.svg" alt="BigBiz Logo">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="vs-clients__rating" data-rate="5"></div><span class="vs-about__review-text">Customer Review <span>30.000</span></span>
                    <div class="vs-about__facts">
                        <div class="vs-about__facts-images vs-active-wrapper">
                            <a href="#" class="vs-about__facts-img vs-active"><img src="assets/img/about/about-facts-h1-1.jpg" alt="about"> </a>
                            <a href="#" class="vs-about__facts-img vs-active"><img src="assets/img/about/about-facts-h1-2.jpg" alt="about"> </a>
                            <a href="#" class="vs-about__facts-img vs-active"><img src="assets/img/about/about-facts-h1-3.jpg" alt="about"> </a>
                            <a href="#" class="vs-about__facts-img vs-active active"><img src="assets/img/about/about-facts-h1-4.jpg" alt="about"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-30">
                <div class="accordion style3" id="faqVersion1">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can you help me grow my investments?</button></h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">No! Financial planning is essential for everyone, regardless of income level. Whether you’re just starting your financial journey or managing significant assets, we offer customized solutions to help you achieve financial stability
                                and growth.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do I need a high income to work with a financial advisor?</button></h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">No! Financial planning is essential for everyone, regardless of income level. Whether you’re just starting your financial journey or managing significant assets, we offer customized solutions to help you achieve financial stability
                                and growth.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Who can benefit from your financial advisory services?</button></h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">No! Financial planning is essential for everyone, regardless of income level. Whether you’re just starting your financial journey or managing significant assets, we offer customized solutions to help you achieve financial stability
                                and growth.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What is retirement planning, and when should I start?</button></h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">No! Financial planning is essential for everyone, regardless of income level. Whether you’re just starting your financial journey or managing significant assets, we offer customized solutions to help you achieve financial stability
                                and growth.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How much do your financial advisory services cost?</button></h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">No! Financial planning is essential for everyone, regardless of income level. Whether you’re just starting your financial journey or managing significant assets, we offer customized solutions to help you achieve financial stability
                                and growth.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection