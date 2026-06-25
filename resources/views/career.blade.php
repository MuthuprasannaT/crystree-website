@extends('Layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-wrapper z-index-common overflow-hidden"
     data-bg-src="{{ asset('assets/img/bg/contact.webp') }}">

    <div class="overlay"></div>

    <div class="container">
        <div class="breadcrumb-wrapper__content wow animate__fadeInUp"
             data-wow-delay="0.45s">

            <h1 class="breadcrumb-wrapper__title">
                Careers
            </h1>

            <div class="breadcrumb-wrapper__menu--wrap">
                <ul class="breadcrumb-wrapper__menu">
                    <li class="breadcrumb-wrapper__menu--item">
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-wrapper__menu--item">
                        Careers
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Career Section -->
<section class="career-section space space-extra-bottom">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <div class="title-area">

                    <span class="title-area__title--sub">
                        Join Our Team
                    </span>

                    <h2 class="title-area__title">
                        Build Your Career With Crystree Solutions
                    </h2>

                    <p>
                        Explore exciting opportunities and become part of our
                        innovative team delivering cutting-edge digital solutions.
                    </p>

                </div>

            </div>

        </div>

        <div class="row">

            @forelse($careers as $career)

            <div class="col-lg-6 mb-4">

                <div class="career-card">

                    <div class="career-card__header">

                        <h3>
                            {{ $career->job_title }}
                        </h3>

                        <span class="career-badge">
                            {{ $career->job_type }}
                        </span>

                    </div>

                    <div class="career-meta">

                        <span>
                            <i class="fas fa-building"></i>
                            {{ $career->department }}
                        </span>

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $career->location }}
                        </span>

                    </div>

                    <div class="career-meta">

                        <span>
                            <i class="fas fa-user-clock"></i>
                            {{ $career->experience }}+ Years
                        </span>

                        <span>
                            <i class="fas fa-money-bill-wave"></i>
                            ₹{{ number_format($career->salary) }}
                        </span>

                    </div>

                    <div class="career-description">

                        {!! Str::limit(strip_tags($career->description), 180) !!}

                    </div>
                    <!-- Google reCAPTCHA -->
<div class="col-12 mb-4 text-center">
    <div class="g-recaptcha"
         data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
    </div>

    @error('captcha')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

                    <div class="career-footer">

                      <button
                            type="button"
                            class="vs-btn applyBtn"
                            data-id="{{ $career->id }}"
                            data-position="{{ $career->job_title }}">

                            <span class="vs-btn__border"></span>

                            Apply Now

                            <i class="fa-solid fa-arrow-right"></i>

                        </button>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12">

                <div class="empty-career">

                    <i class="fas fa-briefcase"></i>

                    <h3>
                        No Open Positions Available
                    </h3>

                    <p>
                        Please check back later for future opportunities.
                    </p>

                </div>

            </div>

            @endforelse

        </div>

    </div>

</section>

<!-- =========================
     JOB APPLICATION FORM
========================= -->

<!-- =========================
     CAREER APPLICATION FORM
========================= -->

<section class="career-form-section space" id="applicationForm">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="career-form-box">

                    <div class="text-center mb-5">

                        <span class="career-form-sub">
                            Join Our Team
                        </span>

                        <h2 class="career-form-title">
                            Apply For Your Dream Job
                        </h2>

                        <p class="career-form-text">
                            Complete the application form below and upload your resume.
                            Our recruitment team will review your profile and contact you soon.
                        </p>

                    </div>

                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('career.apply') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <input type="hidden"
                               name="career_id"
                               id="career_id">

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6 mb-4">

                                <label class="career-label">
                                    Full Name *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>

                                    <input type="text"
                                           name="name"
                                           class="form-control career-input"
                                           placeholder="Enter Full Name"
                                           required>

                                </div>

                            </div>

                            <!-- Mobile -->
                            <div class="col-md-6 mb-4">

                                <label class="career-label">
                                    Mobile Number *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa fa-phone"></i>
                                    </span>

                                    <input type="text"
                                           name="mobile"
                                           class="form-control career-input"
                                           placeholder="Enter Mobile Number"
                                           required>

                                </div>

                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-4">

                                <label class="career-label">
                                    Email Address *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>

                                    <input type="email"
                                           name="email"
                                           class="form-control career-input"
                                           placeholder="Enter Email Address"
                                           required>

                                </div>

                            </div>

                            <!-- Position -->
                            <div class="col-md-6 mb-4">

                                <label class="career-label">
                                    Applying Position *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa fa-briefcase"></i>
                                    </span>

                                    <input type="text"
                                           name="position"
                                           id="position"
                                           class="form-control career-input"
                                           placeholder="Selected Position"
                                           readonly>

                                </div>

                            </div>

                            <!-- Resume -->
                            <div class="col-12 mb-4">

                                <label class="career-label">
                                    Upload Resume *
                                </label>

                                <input type="file"
                                       name="resume"
                                       class="form-control career-input"
                                       accept=".pdf,.doc,.docx"
                                       required>

                                <small class="text-light">
                                    Allowed formats: PDF, DOC, DOCX (Max 2MB)
                                </small>

                            </div>

                            <!-- Description -->
                            <div class="col-12 mb-4">

                                <label class="career-label">
                                    About Yourself
                                </label>

                                <textarea name="description"
                                          rows="6"
                                          class="form-control career-input"
                                          placeholder="Tell us about your skills, experience and achievements"></textarea>

                            </div>

                            <!-- Button -->
                            <div class="col-12 text-center">

                                <button type="submit"
                                        class="career-submit-btn">

                                    <i class="fa-solid fa-paper-plane"></i>

                                    Submit Application

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

.career-form-section{
    background:#f4f8fc;
}

.career-form-box{
    background:#00030e;
    padding:60px;
    border-radius:25px;
    border:1px solid rgba(132,255,0,.3);
    box-shadow:0 20px 60px rgba(0,0,0,.15);
}

.career-form-sub{
    color:#84ff00;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:2px;
}

.career-form-title{
    color:#fff;
    font-size:42px;
    font-weight:700;
    margin-top:10px;
}

.career-form-text{
    color:#b8c1d1;
    max-width:700px;
    margin:auto;
}

.career-label{
    color:#fff;
    font-weight:600;
    margin-bottom:8px;
    display:block;
}

.input-group-text{
    background:#011548;
    color:#84ff00;
    border:none;
    width:55px;
    justify-content:center;
}

.career-input{
    background:#0b1320;
    border:1px solid rgba(255,255,255,.15);
    color:#fff;
    border-radius:0 10px 10px 0;
}

.career-input:focus{
    background:#0b1320;
    color:#fff;
    border-color:#84ff00;
    box-shadow:none;
}

.career-input::placeholder{
    color:#9aa3b2;
}

textarea.career-input{
    border-radius:10px;
}

.career-submit-btn{
    background:linear-gradient(90deg,#011548,#84ff00);
    color:#fff;
    border:none;
    padding:15px 40px;
    border-radius:50px;
    font-size:16px;
    font-weight:600;
    transition:.4s;
}

.career-submit-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(132,255,0,.25);
}

@media(max-width:768px){

    .career-form-box{
        padding:30px;
    }

    .career-form-title{
        font-size:30px;
    }

}

</style>

<style>

/* ===================================
   CAREER PAGE
=================================== */

.career-section{
    background:#f8fafc;
}

.career-card{
    background:#00030e;
    border-radius:20px;
    padding:30px;
    height:100%;
    position:relative;
    overflow:hidden;
    border:1px solid #eee;
    transition:.4s;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.career-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:linear-gradient(
        90deg,
        #84ff00,
        #84ff00
    );
}

.career-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 50px rgba(0,0,0,.15);
}

.career-card__header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
}

.career-card__header h3{
    margin:0;
    font-size:24px;
    font-weight:700;
    color: #fff
}

.career-badge{
    background:#011548;
    color:#fff;
    padding:8px 18px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

.career-meta{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
    margin-bottom:12px;
}

.career-meta span{
    color:#fff;
    font-size:15px;
}

.career-meta i{
    color:#84ff00 ;
    margin-right:6px;
}

.career-description{
    margin-top:20px;
    color:#fff;
    line-height:1.8;
    min-height:110px;
}

.career-footer{
    margin-top:25px;
}
.vs-btn--gradient {
    background: linear-gradient(90deg, #011548 0%, #85ff03 100%) !important;
}

.vs-btn{
    background:#0b1320;
    color:#fff;
}

.vs-btn:hover{
    background:#84ff00;
}

.empty-career{
    background:#fff;
    padding:80px 30px;
    text-align:center;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.empty-career i{
    font-size:60px;
    color:#ff6b35;
    margin-bottom:20px;
}

.empty-career h3{
    margin-bottom:10px;
}

.title-area__title{
    font-size:42px;
    margin-bottom:15px;
}

.title-area__title--sub{
    color:#fff;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:1px;
}

@media(max-width:768px){

    .career-card{
        padding:25px;
    }

    .career-card__header{
        flex-direction:column;
        align-items:flex-start;
    }

    .title-area__title{
        font-size:30px;
    }

}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.applyBtn').forEach(function(btn){

        btn.addEventListener('click', function(){

            document.getElementById('career_id').value =
                this.dataset.id;

            document.getElementById('position').value =
                this.dataset.position;

            document.getElementById('applicationForm')
                .scrollIntoView({
                    behavior: 'smooth'
                });

        });

    });

});
</script>

@endsection