@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Contact Us</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-contact space space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="vs-contact__block mb-30">
                        <h3 class="vs-contact__block-heading">Our Location / Address</h3>
                        <p class="vs-contact__block-text">Willow Creek Ranch, Colorado, United States Of America</p><span class="vs-contact__block-icon1"><i class="flaticon flaticon-map"></i></span> <span class="vs-contact__block-icon2"><i class="flaticon flaticon-map"></i></span></div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-contact__block mb-30">
                        <h3 class="vs-contact__block-heading">Our Contact Number</h3><a class="vs-contact__block-text" href="tel:+0019280009">+(00) 1928 0009</a>
                        <br><a class="vs-contact__block-text" href="tel:+0019280009">+(00) 1928 0089</a> <span class="vs-contact__block-icon1"><i class="flaticon flaticon-phone"></i></span> <span class="vs-contact__block-icon2"><i class="flaticon flaticon-phone"></i></span></div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-contact__block mb-30">
                        <h3 class="vs-contact__block-heading">Our official Email Address</h3><a class="vs-contact__block-text" href="mailto:info@bigbiz.com">info@bigbiz.com</a>
                        <br><a class="vs-contact__block-text" href="mailto:example@bigbiz.com">example@bigbiz.com</a> <span class="vs-contact__block-icon1"><i class="flaticon flaticon-mail"></i></span> <span class="vs-contact__block-icon2"><i class="flaticon flaticon-mail"></i></span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-contact space-bottom">
        <div class="container">
            <div class="vs-contact__wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area title-area--style6 mb-30 text-center"><span class="title-area__title--sub"><img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""> Contact Us <img src="assets/img/icons/vs-icon-title-h6-1.svg" alt=""></span>
                            <h2 class="title-area__title">Get In Touch With BigBiz</h2></div>
                    </div>
                </div>
                <form action="https://html.vecurosoft.com/bigbiz/demo/mail.php" method="post" class="form-style ajax-contact wow animate__fadeInUp" data-wow-delay="0.95s">
                    <div class="row gy-3 gx-3">
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name"> <i class="fa-solid fa-user"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name"> <i class="fa-solid fa-user"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address"> <i class="fa-solid fa-envelope"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Select Service">
                        </div>
                        <div class="col-12 form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message Here..." rows="5">
                            </textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="vs-btn"><span class="vs-btn__border"></span>Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>
    </section>
    <div>
        <div class="vs-map wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" style="width: 100%; height: 447px; border: 0; overflow: hidden;" src="https://maps.google.com/maps?width=600&amp;height=447&amp;hl=en&amp;q=2880%20Broadway,%20New%20York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    allowfullscreen></iframe><a class="gmap_canvas__credit" href="https://embed-googlemap.com/">embed google map</a></div>
            </div>
        </div>
    </div>
@endsection