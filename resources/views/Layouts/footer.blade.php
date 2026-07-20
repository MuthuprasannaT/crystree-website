
<style>
    /* Equal height columns */
.row .col-xl-3 {
    display: flex;
}

/* Branch Card */
.branch-card {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    padding: 25px;
}

/* Fixed image height */
.branch-icon img {
    width: 100%;
    height:60px;
    object-fit: cover;
    border-radius: 10px;
}

/* Keep headings same height */
.branch-card h3 {
    min-height: 35px;
    margin-top: 15px;
}

.branch-card h6 {
    min-height: 25px;
}

/* Address section grows */
.branch-info:first-of-type {
    flex: 1;
}

/* Keep button at bottom */
.branch-card .vs-btn {
    margin-top: auto;
}
</style>
<section class="branch-section py-5">

    <div class="container">

        <div class="text-center text-white mb-5">
            <!-- <span class="small-title">LOCATIONS</span> -->

            <h2 class="display-5 fw-bold mt-2 branch">
                TRICHY <span style= color:#6db422 >BRANCH</span> OFFICES
            </h2>

            <p class="branch-description">
                We are expanding across India to provide faster support and better customer service.
                Visit the nearest <span>Crystree Solutions</span> branch for all your IT needs.
            </p>
        </div>

        <div class="row g-4">

            <!-- Branch 1 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="branch-card W-100">

                    <div class="branch-icon">
                        <img src="{{asset('assets/img/about/Annamalai.webp')}}" alt="Trichy" class="img-fluid">
                    </div>

                    <h3>Annamalai Nagar</h3>
                    <h6>HEAD OFFICE</h6>

                    <div class="divider"></div>

                    <div class="branch-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                          Flat No: F9, No: 20, J.C. ABODES, Karur Bypass Rd, Annamalai Nagar, Tiruchirappalli, Tamil Nadu-620018
                        </p>
                    </div>

                    <div class="branch-info">
                        <i class="fas fa-phone"></i>
                        <p>+91 63813 24611</p>
                    </div>

                    <a href="https://www.google.com/maps/place/Crystree+Solutions+Private+Limited/@10.8312996,78.6862418,16z/data=!3m1!4b1!4m6!3m5!1s0x3baaf592ee09bc0b:0x54537b454d49b845!8m2!3d10.8312996!4d78.6862418!16s%2Fg%2F11ghfd2zlv?entry=ttu&g_ep=EgoyMDI2MDYyOS4wIKXMDSoASAFQAw%3D%3D" class="vs-btn vs-btn--gradient">
                        <i class="fas fa-location-dot me-2"></i> View Map
                    </a>

                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="branch-card">

                    <div class="branch-icon">
                      <img src="{{ asset('assets/img/about/Thillainagar.webp') }}"
     alt="Thillai Nagar"
     class="img-fluid">
                    </div>

                    <h3>Thillai Nagar</h3>
                    <h6>BRANCH OFFICE</h6>

                    <div class="divider"></div>

                    <div class="branch-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                          J.S Tower, Plot No.C71, 10th Cross St, Thillai Nagar, Tennur, Tiruchirappalli, Tamil Nadu-620018
                        </p>
                    </div>

                    <div class="branch-info">
                        <i class="fas fa-phone"></i>
                        <p>+91 9566968212</p>
                    </div>

                    <a href="https://www.google.com/maps/place/Crystree+Solutions+Private+Limited+-+Thillai+Nagar+Branch/data=!4m2!3m1!1s0x0:0x89e360f18362fb13?sa=X&ved=1t:2428&hl=en-GB&ictx=111"
                           class="vs-btn vs-btn--gradient"
                           target="_blank"
                           rel="noopener noreferrer">
                            <i class="fas fa-location-dot me-2"></i> View Map
                        </a>

                </div>
            </div>
            <!-- Branch 2 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="branch-card">

                    <div class="branch-icon">
                        <img src="{{asset('assets/img/about/Srirangam.webp')}}" alt="Chennai" class="img-fluid">
                    </div>

                    <h3>Srirangam</h3>
                    <h6>BRANCH OFFICE</h6>

                    <div class="divider"></div>

                    <div class="branch-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                         T-5, Thangam Avenue, “A” Block 3rd Floor, Ammamandapam Road, Mambala Salai Bridge, Tiruchirappalli, Tamil Nadu-620006
                        </p>
                    </div>

                    <div class="branch-info">
                        <i class="fas fa-phone"></i>
                        <p>+91 9443005808</p>
                    </div>
                    <a href="https://www.google.com/maps/place/Crystree+Solutions+Private+Limited+-+Srirangam+Branch/data=!4m2!3m1!1s0x0:0x979293cc53a08495?sa=X&ved=1t:2428&hl=en&ictx=111	" class="vs-btn vs-btn--gradient">
                        <i class="fas fa-location-dot me-2"></i> View Map
                    </a>

                </div>
            </div>

            <!-- Branch 4 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="branch-card">

                    <div class="branch-icon">
                        <img src="{{asset('assets/img/about/Puthur.webp')}}" alt="Bangalore" class="img-fluid">
                    </div>
                    <h3>Puthur</h3>
                    <h6>BRANCH OFFICE</h6>

                    <div class="divider"></div>
                    <div class="branch-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                           No. 22/72, <br> Puthur Agraharam,<br> Puthur, Trichy - 620017
                        </p>
                    </div>
                    <div class="branch-info">
                        <i class="fas fa-phone"></i>
                        <p>
                          <a href="tel:+919092166523">+91 90921 66523</a>
                        </p>
                    </div>
                    <a href="https://www.google.com/maps/place/Crystree+Solutions+Private+Limited+-+Puthur+Branch/@10.8180728,78.674284,17z/data=!3m1!4b1!4m6!3m5!1s0x3baaf5a458152e6f:0x9252d3f06041567d!8m2!3d10.8180728!4d78.674284!16s%2Fg%2F11zcr_9kf1?hl=en&entry=ttu&g_ep=EgoyMDI2MDcwNS4wIKXMDSoASAFQAw%3D%3D" class="vs-btn vs-btn--gradient">
                        <i class="fas fa-location-dot me-2"></i> View Map
                    </a>

                </div>
            </div>

        </div>

    </div>

</section>

<style>
    /* ===========================
   Branch Section
=========================== */

.branch-section {
background: white;
    padding: 100px 0 70px;
    position: relative;
    overflow: hidden;
}

/* World Map Background */
.branch-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url('assets/img/world-map.png') center top no-repeat;
    background-size: contain;
    opacity: .08;
    pointer-events: none;
}

.branch-section .container {
    position: relative;
    z-index: 2;
}

.small-title {
    color: #85ff03;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 15px;
    font-weight: 700;
}

.branch-description {
    max-width: 700px;
    margin: 20px auto 0;
    color: rgba(9, 9, 9, 0.85);
    line-height: 1.8;
    font-size: 16px;
}

.branch-description span {
    color: #6db422;
    font-weight: 600;
}

/* ===========================
   Branch Card
=========================== */

.branch-card {
    position: relative;
    background: #fff;
    border-radius: 25px;
    padding: 80px 16px 35px;
    height: 100%;
    box-shadow: 0 15px 40px rgba(4, 28, 72, 0.35);
    transition: .35s;
}

.branch-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(0,0,0,.20);
}

/* ===========================
   Icon
=========================== */

.branch-icon {
    position: absolute;
    top: -45px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 120px;
    background: #08285d;
    border-radius: 50%;
    border: 5px solid #7ac943;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 25px rgba(0,0,0,.25);
}

.branch-icon img {
    width: 60px;
}

/* ===========================
   Title
=========================== */

.branch-card h3 {
    text-align: center;
    color: #3f9c35;
    font-weight: 700;
    font-size:27px;
    margin-bottom: 5px;
    /* letter-spacing: 1px; */
}

.branch-card h6 {
    text-align: center;
    color: #0d2757;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.divider {
    width: 70px;
    height: 3px;
    background: #7ac943;
    margin: 18px auto 25px;
    border-radius: 10px;
}

/* ===========================
   Information
=========================== */

.branch-info {
    display: flex;
    align-items: flex-start;
    gap: 5px;
    margin-bottom: 18px;
}

.branch-info i {
    color: #6dbb36;
    font-size: 18px;
    margin-top: 4px;
    min-width: 18px;
}

.branch-info p {
    margin: 0;
    color: #000;
    line-height: 1.7;
    font-size: 15px;
    text-align:left;
}

/* ===========================
   Button
=========================== */

.btn-map {
    margin-top: 15px;
    background: #08285d;
    color: #fff;
    padding: 12px 28px;
    border-radius: 10px;
    font-weight: 600;
    text-transform: uppercase;
    transition: .3s;
    display: inline-block;
}

.btn-map:hover {
    background: #7ac943;
    color: #fff;
}

/* ===========================
   Bottom Skyline
=========================== */

.branch-card::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 70px;
    background: url('assets/img/city-line.png') center bottom no-repeat;
    background-size: contain;
    opacity: .25;
}

/* ===========================
   Responsive
=========================== */

@media (max-width:1200px) {

    .branch-card{
        margin-top:60px;
    }

}

@media (max-width:992px){

    .branch-description{
        max-width:100%;
    }

}

@media (max-width:768px){

    .branch-section{
        padding:80px 0 50px;
    }

    .display-5{
        font-size:2rem;
    }

    .branch-card{
        padding:75px 20px 30px;
    }

    .branch-icon{
        width:100px;
        height:100px;
        top:-50px;
    }

    .branch-icon img{
        width:50px;
    }

}

@media (max-width:576px){

    .branch-card{
        margin-top:55px;
    }

    .branch-description{
        font-size:15px;
    }

}
    </style>

<div class="vs-footer vs-footer--layout2 section-outer pb-40" dir="ltr">
    <div class="bg-title rounded-30 space-top z-index-common overflow-hidden">
        <div class="vs-ele vs-ele--circle vs-ele--circle--service1"></div>
        <div class="vs-ele vs-ele--circle vs-ele--circle--service2"></div>
        <div class="vs-footer__top pb-30 z-index-common">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mb-30 vs-fade-in-up" data-duration="1" data-delay="0.3" data-yposition="80" data-scale="1">
                        <div class="vs-footer__widget">
                            <div class="vs-footer__logo mb-30 text-center">
                                <a href="{{ route('home') }}" class="vs-footer__logo-link">
                                    <img src="{{ asset('assets/img/logo/footlogo.png') }}" alt="Crystree Solutions Pvt Ltd - Software Development Company in Trichy" class="footer-logo" loading="lazy">
                                </a>
                            </div>
                            <p class="vs-footer__desc text-white">
                                Crystree Solutions Pvt Ltd is a leading Software Development Company in Trichy providing Website Development, Mobile App Development, ERP Software, CRM Software, E-Commerce Solutions, SEO Services, Digital Marketing, Cloud Solutions, AI Solutions and
                                Custom Software Development services across India.
                            </p>
                          <form action="{{ route('subscribe.store') }}"
      method="POST"
      class="vs-subscribe vs-subscribe--style2 mt-40">

    @csrf

    <input type="email"
           name="email"
           class="vs-subscribe__field"
           placeholder="Your Email Address"
           required>

    <button class="vs-subscribe__btn vs-btn" type="submit">
        <i class="fa-solid fa-paper-plane"></i>
        <span>Subscribe</span>
    </button>

</form>

                            <div class="col-auto mt-2 text-center text-lg-start w-100 w-lg-auto">
                                <div class="social-style style3"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-auto mb-30 vs-fade-in-up" data-duration="1" data-delay="0.5" data-yposition="80" data-scale="1">
                        <div class="vs-footer__widget">
                            <h3 class="vs-footer__title">Quick Link <span class="vs-footer__title--dividers"><span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span></span></h3>
                            <ul class="vs-footer__menu--list style2">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('bts') }}">BTS</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-auto mb-30 vs-fade-in-up" data-duration="1" data-delay="0.7" data-yposition="80" data-scale="1">
                        <div class="vs-footer__widget">
                            <h3 class="vs-footer__title">Popular <span class="vs-footer__title--dividers"><span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span></span></h3>
                            <ul class="vs-footer__menu--list style2">
                                <li><a href="{{ route('products.website') }}">Website Development</a></li>
                                <li><a href="{{ route('products.app') }}">Mobile App Development</a></li>
                                <li><a href="{{ route('products.gbp') }}">Google Business Profile</a></li>
                                <li><a href="{{ route('products.seo') }}">SEO Services</a></li>
                                <li><a href="{{ route('products.erp') }}">iCrystal ERP Solution</a></li>
                                <li><a href="{{ route('products.crm') }}">CRM Software</a></li>
                                <li><a href="{{ route('products.design') }}">Graphic Design</a></li>
                                <li><a href="{{ route('products.uiux') }}">UI/UX Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-30 vs-fade-in-up" data-duration="1" data-delay="0.9" data-yposition="80" data-scale="1">
                        <div class="vs-footer__widget">
                            <h3 class="vs-footer__title">Explore <span class="vs-footer__title--dividers"><span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span> <span class="vs-footer__title--divider"></span></span></h3>
                            <ul class="vs-footer__menu--list style2">
                                <li><a href="{{ route('products.smm') }}">Social Media Marketing</a></li>
                                <li><a href="{{ route('products.poster') }}">Poster Design</a></li>
                                <li><a href="{{ route('products.ai') }}">AI Solutions</a></li>
                                <li><a href="{{ route('products.sms') }}">Bulk SMS Services</a></li>
                                <li><a href="{{ route('products.ads') }}">Google & Meta Ads</a></li>
                                <li><a href="{{ route('products.cloud') }}">Cloud Solutions</a></li>
                                <li><a href="{{ route('products.saas') }}">SaaS Solutions</a></li>
                                <li><a href="{{ route('products.software') }}">Custom Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="vs-footer__middle" dir="ltr">
                <div class="vs-footer__middle--row">
                    <div class="vs-footer__middle--col">
                        <div class="vs-info style2">
                            <div class="vs-info__icon--box"><i class="vs-info__icon"><img src="{{ asset('assets/img/icons/vs-icon-location-h2.svg') }}" alt="Location Icon" loading="lazy"></i></div>
                            <div class="vs-info__content">
                                <span class="vs-info__label">
                                   Flat No:F9, No:20, J.C. ABODES, Karur Bypass Rd, Annamalai Nagar, Tiruchirappalli, Tamil Nadu 620018</span></div>
                        </div>
                    </div>
                    <div class="vs-footer__middle--col">
                        <div class="vs-info style2">
                            <div class="vs-info__icon--box"><i class="vs-info__icon"><img src="{{ asset('assets/img/icons/vs-icon-email-h2.svg') }}"  alt="Location Icon" loading="lazy"></i></div>
                            <div class="vs-info__content">
                                <a class="vs-info__label" href="mailto:support@crystreesolutions.com">support@crystreesolutions.com</a>
                                <br>
                                <a class="vs-info__label" href="mailto:leads@crystreesolutions.com">leads@crystreesolutions.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-footer__middle--col">
                        <div class="vs-info style2">
                            <div class="vs-info__icon--box"><img src="{{ asset('assets/img/icons/vs-icon-support-h2.svg') }}" alt="Location Icon" loading="lazy"></i></div>
                            <div class="vs-info__content">
                                <a class="vs-info__label" href="tel:+919566968212">+91- 9566968212</a>
                                <br> <a class="vs-info__label" href="tel:+916381324611">+91- 6381324611</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="industry-wrapper">

                <!-- Main Button -->
                <button type="button" class="industry-main-toggle">
                    Solutions for Every Industry
                </button>

                <!-- Categories -->
               <div class="industry-content" style="display:none;">

                    <div class="row">

                        @foreach($categories as $category => $keywords)

                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="industry-category">

                                <!-- Category Heading -->
                                <button class="category-toggle">
                                    {{ $category }}
                                    <span>+</span>
                                </button>

                                <!-- Category Details -->
                                <div class="category-content" style="display:none;">

                                    <ul class="service-list">

                                        @foreach($keywords as $index => $keyword)

                                        <li class="seo-item {{ $index >= 5 ? 'd-none extra-item' : '' }}">
                                            <a href="#">
                                                {{ $keyword->keyword }}
                                            </a>
                                        </li>

                                        @endforeach

                                    </ul>

                                    @if(count($keywords) > 5)
                                        <button class="load-more-btn">
                                            View More
                                        </button>
                                    @endif

                                </div>

                            </div>

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

            <style>
                .mt-40 {
margin-top:5px
}
            .industry-wrapper{
                max-width:100%;
            }

            .industry-main-toggle{
                width:100%;
                padding:18px 25px;
                background:#0b2b5c;
                color:#fff;
                border:none;
                border-radius:8px;
                font-size:20px;
                font-weight:600;
                cursor:pointer;
            }

           .industry-category{
                border:1px solid #eee;
                border-radius:8px;
                overflow:hidden;
                background:#fff;
            }

            .category-toggle{
                width:100%;
                background:#fff;
                border:none;
                padding:18px 20px;
                text-align:left;
                font-size:18px;
                font-weight:600;
                display:flex;
                justify-content:space-between;
                align-items:center;
                cursor:pointer;
            }



            .category-toggle span{
                font-size:24px;
            }

            .category-content{
                padding:20px;
                background:#fafafa;
            }

            .service-list{
                list-style:none;
                padding:0;
                margin:0;
            }

            .service-list li{
                padding:8px 0;
            }

            .service-list li a{
                text-decoration:none;
                color:#333;
            }

            .load-more-btn{
                margin-top:15px;
                background:#0b2b5c;
                color:#fff;
                border:none;
                padding:10px 18px;
                border-radius:5px;
            }
                                        </style>
        </div>
        <div class="vs-footer__bottom">
            <div class="container">
                <div class="row justify-content-center  align-items-center gy-3 flex-column-reverse flex-lg-row">
                    <div class="col-auto">
                        <p class="vs-footer__copyright mb-0"> © <span id="currentYear"></span> All rights reserved By <a href="https://www.crystreesolutions.com/">Crystree Solutions Pvt Ltd</a>.</p>
                    </div>

                </div>
            </div>
        </div>


<style>
    .industry-content{
    display:none;
}

.industry-wrapper.active .industry-content{
    display:block;
}

.industry-main-toggle {
    width: 100%;
    padding: 5px;
    border: none;
    border-radius: 20px;
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(90deg, #011548 0%, #85ff03 100%);
    cursor: pointer;
    margin-bottom: 10px;
}

.widget__heading{
    background:#011548;
    color:#fff;
    text-align:center;
    padding:12px;
}
</style>
<style>

    .d-none{
    display:none;
}

.load-more-btn{
    width:40%;
    padding:6px;
    border:none;
    background:#011548;
    color:#fff;
    cursor:pointer;
    display:block;
    margin:5px auto;
    border-radius:25px;
    text-align:center;
}

@media(max-width:768px){
    .load-more-btn{
        width:60%;
    }
}
    .service-group{
    display:none;
}

.widget_services_new.active .service-group{
    display:block;
}

.service-toggle{
    width:100%;
    border:none;
    cursor:pointer;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.service-toggle i{
    font-size:16px;
    transition:.3s;
}

.widget_services_new.active .service-toggle i{
    transform:rotate(180deg);
}
    .widget_services_new{
    background:#f5f5f5;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    height:100%;
}

.widget__heading{
    background: linear-gradient(90deg, #011548 0%, #85ff03 100%);
    color:#fff;
    padding:15px;
    margin:0;
    font-size:18px;
    font-weight:600;
    text-align:center;
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.service-list{
    list-style:none;
    padding:20px;
    margin:0;
}

.service-list li{
    border-bottom:1px solid #e5e5e5;
}

.service-list li:last-child{
    border-bottom:none;
}

.service-list li a{
    display:block;
    padding:12px 0;
    color:#011548;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}
</style>



<script>

document.addEventListener("DOMContentLoaded", function () {

    // Main Industries Toggle
    const mainBtn = document.querySelector(".industry-main-toggle");
    const industryContent = document.querySelector(".industry-content");

    mainBtn.addEventListener("click", function () {
        industryContent.classList.toggle("active");
    });

    // Category Toggle
    document.querySelectorAll(".category-toggle").forEach(function (btn) {

        btn.addEventListener("click", function () {

            const currentContent = this.nextElementSibling;
            const icon = this.querySelector("span");

            // Close other categories
            document.querySelectorAll(".category-toggle").forEach(function(btn){

    btn.addEventListener("click", function(){

        const current = this.closest(".industry-category");
        const currentContent = current.querySelector(".category-content");
        const currentIcon = this.querySelector("span");

        // Close all other categories
        document.querySelectorAll(".industry-category").forEach(function(card){

            if(card !== current){
                card.querySelector(".category-content").style.display = "none";
                card.querySelector(".category-toggle span").textContent = "+";
            }

        });

        // Toggle current category
        if(currentContent.style.display === "block"){
            currentContent.style.display = "none";
            currentIcon.textContent = "+";
        }else{
            currentContent.style.display = "block";
            currentIcon.textContent = "−";
        }

    });

});

            if (currentContent.style.display === "block") {

                currentContent.style.display = "none";
                icon.innerHTML = "+";

            } else {

                currentContent.style.display = "block";
                icon.innerHTML = "−";

            }

        });

    });

    // View More / View Less
    document.querySelectorAll(".load-more-btn").forEach(function (btn) {

        btn.addEventListener("click", function () {

            const hiddenItems = this.parentElement.querySelectorAll(".extra-item");
            const expanded = this.classList.contains("expanded");

            if (!expanded) {

                hiddenItems.forEach(function (item) {
                    item.classList.remove("d-none");
                });

                this.innerText = "View Less";
                this.classList.add("expanded");

            } else {

                hiddenItems.forEach(function (item) {
                    item.classList.add("d-none");
                });

                this.innerText = "View More";
                this.classList.remove("expanded");

            }

        });

    });

});

    
document.addEventListener('DOMContentLoaded', function(){

    document.querySelectorAll('.widget_services_new').forEach(function(card){

        let btn = card.querySelector('.load-more-btn');

        if(!btn) return;

        let items = card.querySelectorAll('.seo-item');

        btn.addEventListener('click', function(){

            if(btn.innerText.trim() === 'View More'){

                items.forEach(function(item){
                    item.classList.remove('d-none');
                });

                btn.innerText = 'View Less';

            }else{

                items.forEach(function(item,index){

                    if(index >= 5){
                        item.classList.add('d-none');
                    }

                });

                btn.innerText = 'View More';

            }

        });

    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function(){

    const mainBtn = document.querySelector('.industry-main-toggle');
    const content = document.querySelector('.industry-content');

    if(mainBtn && content){

        mainBtn.addEventListener('click', function(){

            if(content.style.display === 'block'){
                content.style.display = 'none';
            }else{
                content.style.display = 'block';
            }

        });

    }

});
</script>


<style>
    .vs-footer__logo{
    display:flex;
    justify-content:center;
    align-items:center;
    width:100%;
    text-align:center;
}

.vs-footer__logo-link{
    display:inline-flex;
    justify-content:center;
    align-items:center;
}

.footer-logo{
    width:60%;
    max-width:280px;
    height:auto;
    object-fit:contain;
    display:block;
    margin:0 auto;
}

/* Tablet */
@media (max-width:991px){
    .footer-logo{
        max-width:220px;
    }
}

/* Mobile */
@media (max-width:768px){
    .footer-logo{
        max-width:180px;
    }
}

/* Small Mobile */
@media (max-width:480px){
    .footer-logo{
        max-width:150px;
    }
}
</style>