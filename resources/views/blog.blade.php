@extends('Layouts.app')

@section('content')

<style>
.vs-blog--style8 {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;
    border-radius: 10px;
}

.vs-blog__figure {
    height: 250px;
    overflow: hidden;
    margin-bottom: 0;
    flex-shrink: 0;
}

.vs-blog__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s;
}

.vs-blog__content {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 25px;
}

.vs-blog__title {
    margin-bottom: 15px;
}

.vs-blog__content p {
    flex-grow: 1;
    margin-bottom: 20px;
}

.vs-blog__buttons {
    margin-top: auto;
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
        <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <div class="vs-blog vs-blog--style8 w-100">

                <figure class="vs-blog__figure">
                    <a class="vs-blog__figure__link"
                        href="{{ route('blog.details', $blog->slug) }}">

                        <img class="vs-blog__img" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" loading="lazy">
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