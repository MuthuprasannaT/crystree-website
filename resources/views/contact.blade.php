@extends('Layouts.app')

@section('content')

    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="/assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="/assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Contact Us</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="/">Home</a></li>
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
                        <h3 class="vs-contact__block-heading">Our Address</h3>
                        <p class="vs-contact__block-text">Flat No:F9, No:20, J.C. ABODES, Karur Bypass Rd, Annamalai Nagar, Tiruchirappalli, Tamil Nadu 620018</p><span class="vs-contact__block-icon1"><i class="fas fa-map-marker-alt"></i></span> <span class="vs-contact__block-icon2"><i class="fas fa-map-marker-alt"></i></span></div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-contact__block mb-30">
                        <h3 class="vs-contact__block-heading">Our Contact Number</h3><a class="vs-contact__block-text" href="tel:+916381324611">+91- 9566968212</a>
                        <br><a class="vs-contact__block-text" href="tel:+91-6381324611">+91- 6381324611</a> <span class="vs-contact__block-icon1"><i class="fas fa-phone"></i></span> <span class="vs-contact__block-icon2"><i class="fas fa-phone"></i></span></div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-contact__block mb-30">
                        <h3 class="vs-contact__block-heading">Our Email Address</h3><a class="vs-contact__block-text" href="mailto:leads@crystreesolutions.com">leads@crystreesolutions.com</a>
                        <br><a class="vs-contact__block-text" href="mailto:support@crystreesolutions.com">support@crystreesolutions.com</a> <span class="vs-contact__block-icon1"><i class="fas fa-envelope"></i></span> <span class="vs-contact__block-icon2"><i class="fas fa-envelope"></i></span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-contact space-bottom">
        <div class="container">
            <div class="vs-contact__wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area title-area--style6 mb-30 text-center"><span class="title-area__title--sub"><img src="/assets/img/icons/vs-icon-title-h6-1.svg" alt=""> Contact Us <img src="/assets/img/icons/vs-icon-title-h6-1.svg" alt=""></span>
                            <h2 class="title-area__title">Get In Touch With BigBiz</h2></div>
                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
                @endif @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('contact.store') }}" method="post" class="form-style ajax-contact wow animate__fadeInUp" data-wow-delay="0.95s">
                    @csrf
                    <div class="row gy-3 gx-3">
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" value="{{ old('fname') }}" required> <i class="fa-solid fa-user"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name" value="{{ old('lname') }}" required> <i class="fa-solid fa-user"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required> <i class="fa-solid fa-envelope"></i></div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                        </div>
                        <div class="col-12 form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message Here..." rows="5" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="vs-btn"><span class="vs-btn__border"></span>Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>
        <style>
            .vs-btn {
    background: #019297;
}
        </style>
    </section>
    <div>
        <div class="vs-map wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.738674937346!2d78.68366687480574!3d10.831299589320839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf592ee09bc0b%3A0x54537b454d49b845!2sCrystree%20Solutions%20Private%20Limited!5e0!3m2!1sen!2sin!4v1780999987263!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a class="gmap_canvas__credit" href="https://embed-googlemap.com/">embed google map</a></div>
            </div>
        </div>
    </div>
@endsection