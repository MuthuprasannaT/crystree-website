@extends('Layouts.app')

@section('content')

<style>
    .vs-blog--style8 {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #fff;
    }

    .vs-blog__figure {
        height: 250px;
        overflow: hidden;
        margin-bottom: 0;
    }

    .vs-blog__img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: 0.4s;
    }

    .vs-blog__content {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 25px;
    }

    .vs-blog__title {
        min-height: 60px;
    }

    .vs-blog__content p {
        min-height: 75px;
    }

    .vs-blog__buttons {
        margin-top: 10px;
    }
</style>
    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/blog.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Blog</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
        <div class="container">
               <div class="row">
    @foreach($blogs as $blog)
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="vs-blog vs-blog--style8 w-100">

                <figure class="vs-blog__figure">
                    <a class="vs-blog__figure__link"
                        href="{{ route('blog.details', $blog->slug) }}">

                        <img class="vs-blog__img"
                             src="{{ asset($blog->featured_image) }}"
                             alt="{{ $blog->title }}">
                    </a>

                    <span class="vs-blog__date">
                        {{ optional($blog->created_at)->format('d') }}
                        <sub>{{ optional($blog->created_at)->format('M') }}</sub>
                    </span>

                    <div class="overlay"></div>
                </figure>

                <div class="vs-blog__content">

                    {{-- <div class="vs-blog__meta mb-2">
                        <span class="vs-blog__meta__text">
                            <i class="fa-solid fa-user"></i>
                            By Admin
                        </span>
                    </div> --}}

                    <h3 class="vs-blog__title">
                        <a class="vs-blog__title__link"
                            href="{{ route('blog.details', $blog->slug) }}">
                            {{ $blog->title }}
                        </a>
                    </h3>

                    <p>
                        {{ Str::limit(strip_tags($blog->short_description), 120) }}
                    </p>

                    <hr class="vs-blog__divider">

                    <div class="vs-blog__buttons">
                        <a href="{{ route('blog.details', $blog->slug) }}"
                           class="vs-btn vs-blog__button">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        {{-- <div class="vs-blog__social">
                            <a class="vs-blog__social__link" href="#">
                                <i class="fa-solid fa-share-nodes"></i>
                            </a>
                        </div> --}}
                    </div>

                </div>

            </div>
        </div>
    @endforeach
</div>
            </div>
        </div>
    </section>


@endsection