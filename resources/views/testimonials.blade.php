@extends('Layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-wrapper z-index-common overflow-hidden"
    data-bg-src="{{ asset('assets/img/bg/testimonal.webp')}}">



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


    <section class="vs-clients vs-clients--area space overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area title-area--style2 text-center">
                    <span class="title-area__title--sub title-area__title--sub-center">
                        Testimonials
                    </span>
                    <h2 class="title-area__title">
                        What Our Clients Review & Feedback
                    </h2>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Bottom Slider --}}
    <div class="container mb-5">
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

    {{-- Top Slider --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="vs-clients__carousel" id="testimonialTop">
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



   

<style>
/* Both Swiper sliders */
#testimonialBottom .swiper-wrapper,
#testimonialTop .swiper-wrapper{
    align-items: stretch;
}

#testimonialBottom .swiper-slide,
#testimonialTop .swiper-slide{
    display: flex;
    height: auto;
}

#testimonialBottom .vs-clients__item,
#testimonialTop .vs-clients__item{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    min-height: 320px; /* Adjust as needed */
    padding: 30px;
    border-radius: 12px;
}

/* Review content */
#testimonialBottom .vs-clients__quote,
#testimonialTop .vs-clients__quote{
    flex: 1;
    margin: 20px 0;
}

/* Keep author at bottom */
#testimonialBottom .vs-clients__author,
#testimonialTop .vs-clients__author{
    margin-top: auto;
    display: flex;
    align-items: center;
}

/* Image */
.vs-clients__avatar{
    width:65px;
    height:65px;
    border-radius:50%;
    object-fit:cover;
}

.vs-clients__avatar-placeholder{
    width:65px;
    height:65px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:600;
    color:#fff;
    background:#0d6efd;
}

/* Optional: limit text to keep cards uniform */
#testimonialBottom .vs-clients__quote,
#testimonialTop .vs-clients__quote{
    overflow:hidden;
    display:-webkit-box;
    -webkit-line-clamp:6;
    -webkit-box-orient:vertical;
}

    .vs-clients__carousel {
    overflow: hidden;
    position: relative;
}

#testimonialTop {
    z-index: 2;
}

#testimonialBottom {
    z-index: 1;
}

.vs-clients__carousel .swiper-wrapper {
    transition-timing-function: linear !important;
}

.vs-clients__item--style2 {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.vs-clients__quote {
    flex-grow: 1;
}

.vs-clients__author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.vs-clients__author-img {
    width: 70px;
    height: 70px;
    min-width: 70px;
}

.vs-clients__avatar,
.vs-clients__avatar-placeholder {
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.vs-clients__avatar {
    object-fit: cover;
    display: block;
    border: 3px solid #fff;
}

.vs-clients__avatar-placeholder {
    background: #0d6efd;
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    border: 3px solid #fff;
}

.vs-clients__quote p {
    margin-bottom: 0;
}

.swiper-slide {
    pointer-events: auto;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Initialize Top Swiper
    const topSwiper = new Swiper("#testimonialTop", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        speed: 3000, // Reduced for smoother hover stop
        allowTouchMove: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            stopOnLastSlide: false
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            }
        }
    });

    // Initialize Bottom Swiper
    const bottomSwiper = new Swiper("#testimonialBottom", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        speed: 3000,
        allowTouchMove: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            reverseDirection: true,
            stopOnLastSlide: false
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            }
        }
    });

    // Add linear transition
    topSwiper.wrapperEl.style.transitionTimingFunction = "linear";
    bottomSwiper.wrapperEl.style.transitionTimingFunction = "linear";

    // HOVER FUNCTIONALITY - Stop on hover, resume on leave
    const topElement = document.querySelector("#testimonialTop");
    const bottomElement = document.querySelector("#testimonialBottom");

    if (topElement) {
        topElement.addEventListener("mouseenter", function() {
            topSwiper.autoplay.stop();
            console.log("Top slider stopped"); // Debug
        });
        
        topElement.addEventListener("mouseleave", function() {
            topSwiper.autoplay.start();
            console.log("Top slider started"); // Debug
        });
    }

    if (bottomElement) {
        bottomElement.addEventListener("mouseenter", function() {
            bottomSwiper.autoplay.stop();
            console.log("Bottom slider stopped"); // Debug
        });
        
        bottomElement.addEventListener("mouseleave", function() {
            bottomSwiper.autoplay.start();
            console.log("Bottom slider started"); // Debug
        });
    }

});
</script>
@endsection
