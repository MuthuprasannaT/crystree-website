@extends('Layouts.app')

@section('content')

    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Portfolio</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <section class="space-top space-extra-bottom">
    <div class="container">

        <div class="row g-4">

            @forelse($galleries as $gallery)

                <div class="col-lg-4 col-md-6 col-sm-6">

                    <div class="vs-portfolio__item vs-portfolio__item--style3">

                        <div class="vs-portfolio__content">

                            <a href="{{ asset($gallery->image) }}"
                               class="vs-portfolio__link--img popup-image">

                                <img src="{{ asset($gallery->image) }}"
                                     class="vs-portfolio__img"
                                     alt="{{ $gallery->title }}">
                            </a>

                            <div class="vs-portfolio__item-overlay">

                                <div class="vs-portfolio__item-text">

                                    <span class="vs-portfolio__item-tag">
                                        Gallery
                                    </span>

                                    <h3 class="vs-portfolio__item-heading">
                                        {{ $gallery->title }}
                                    </h3>

                                    <a href="{{ asset($gallery->image) }}"
                                       class="vs-portfolio__item-view popup-image">

                                        <i class="fa-solid fa-plus"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <h4>No Gallery Images Found</h4>
                </div>

            @endforelse

        </div>

    </div>
</section>




@endsection