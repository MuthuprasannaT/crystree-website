@extends('Layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-wrapper z-index-common overflow-hidden"
    data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg-1-1.png') }}">

    <img class="breadcrumb-wrapper__ele1"
        src="{{ asset('assets/img/elements/breadcumb-element-bar.svg') }}"
        alt="element">

    <div class="overlay"></div>

    <div class="container">
        <div class="breadcrumb-wrapper__content wow animate__fadeInUp"
            data-wow-delay="0.45s">

            <h1 class="breadcrumb-wrapper__title">Testimonials</h1>

            <div class="breadcrumb-wrapper__menu--wrap">
                <ul class="breadcrumb-wrapper__menu">
                    <li class="breadcrumb-wrapper__menu--item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-wrapper__menu--item">
                        Testimonials
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials Section -->
<section class="space space-extra-bottom">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="title-area__title--sub">
                    Testimonials
                </span>

                <h2 class="title-area__title">
                    What Our Clients Review & Feedback
                </h2>
            </div>
        </div>

        <div class="row g-4">

            @forelse($testimonials as $testimonial)

                <div class="col-xl-3 col-lg-3 col-md-6">

                    <div class="testimonial-card">

                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <div class="testimonial-content">
                            {!! Str::limit(strip_tags($testimonial->testimonial), 180) !!}
                        </div>

                        <div class="testimonial-author">

                            <div class="author-avatar">
                                {{ strtoupper(substr($testimonial->name,0,1)) }}
                            </div>

                            <div class="author-info">
                                <h4>{{ $testimonial->name }}</h4>
                                <span>{{ $testimonial->designation }}</span>
                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No Testimonials Found.
                    </div>
                </div>

            @endforelse

        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            {{ $testimonials->links() }}
        </div>

    </div>
</section>

@endsection

@push('styles')

<style>

.testimonial-card{
    background:#012f33;
    border-radius:30px;
    padding:35px;
    height:100%;
    position:relative;
    overflow:hidden;
    transition:all .4s ease;
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.testimonial-card::before{
    content:"\f10e";
    font-family:"Font Awesome 6 Free";
    font-weight:900;
    position:absolute;
    right:-20px;
    bottom:-30px;
    font-size:170px;
    color:rgba(255,255,255,.05);
}

.testimonial-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 50px rgba(0,0,0,.25);
}

/* Quote Icon */

.quote-icon{
    text-align:center;
    margin-bottom:15px;
}

.quote-icon i{
    font-size:55px;
    color:#39d353;
    transition:.4s;
}

.testimonial-card:hover .quote-icon i{
    transform:rotate(15deg) scale(1.1);
}

/* Rating */

.rating{
    text-align:center;
    margin-bottom:20px;
}

.rating i{
    color:#39d353;
    font-size:18px;
    margin:0 2px;
}

/* Content */

.testimonial-content{
    color:#ffffff;
    text-align:center;
    line-height:1.9;
    font-size:15px;
    min-height:140px;
    margin-bottom:30px;
}

/* Author */

.testimonial-author{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:15px;
}

.author-avatar{
    width:75px;
    height:75px;
    border-radius:15px;
    background:#39d353;
    color:#012f33;
    font-size:28px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.4s;
}

.testimonial-card:hover .author-avatar{
    transform:scale(1.1);
}

.author-info h4{
    margin:0;
    color:#39d353;
    font-size:24px;
    font-weight:700;
}

.author-info span{
    color:#e5e5e5;
    font-size:15px;
}

/* Pagination */

.pagination{
    gap:8px;
}

.pagination .page-link{
    border:none;
    border-radius:10px;
    padding:10px 15px;
    color:#012f33;
}

.pagination .active .page-link{
    background:#012f33;
    color:#fff;
}

/* Responsive */

@media(max-width:991px){

    .testimonial-content{
        min-height:auto;
    }

    .author-avatar{
        width:65px;
        height:65px;
        font-size:24px;
    }

    .author-info h4{
        font-size:20px;
    }
}

</style>

@endpush