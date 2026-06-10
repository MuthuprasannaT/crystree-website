@extends('Layouts.app')

@section('content')

<div class="breadcrumb-wrapper z-index-common overflow-hidden"
    data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg-1-1.png') }}">

    <img class="breadcrumb-wrapper__ele1"
        src="{{ asset('assets/img/elements/breadcumb-element-bar.svg') }}"
        alt="element">

    <div class="overlay"></div>

    <div class="container">
        <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
            <h1 class="breadcrumb-wrapper__title">{{ $blog->title }}</h1>

            <div class="breadcrumb-wrapper__menu--wrap">
                <ul class="breadcrumb-wrapper__menu">
                    <li class="breadcrumb-wrapper__menu--item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-wrapper__menu--item">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="breadcrumb-wrapper__menu--item">
                        {{ $blog->title }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="vs-blog--layout1 space space-extra-bottom" dir="ltr">
    <div class="container">

        <div class="row">

            <!-- Blog Details -->
            <div class="col-lg-8">

                <div class="vs-blog vs-blog--single">

                    <figure class="vs-blog__figure">
                        <img class="vs-blog__img"
                            src="{{ asset($blog->featured_image) }}"
                            alt="{{ $blog->title }}">
                    </figure>

                    <div class="vs-blog__content">

                        <div class="vs-blog__meta">
                            <span class="vs-blog__meta__text">
                                <i class="fa-solid fa-user"></i>
                                By Admin
                            </span>

                            <span class="vs-blog__meta__text">
                                <i class="fa-solid fa-calendar"></i>
                                {{ $blog->created_at->format('d M Y') }}
                            </span>
                        </div>

                        <h2 class="vs-blog__title">
                            {{ $blog->title }}
                        </h2>

                        @if(!empty($blog->short_description))
                            <p class="mb-4">
                                {{ $blog->short_description }}
                            </p>
                        @endif

                        <div class="blog-content">
                            {!! $blog->content !!}
                        </div>

                    </div>

                </div>

            </div>

            <!-- Recent Blogs Sidebar -->
            <div class="col-lg-4">

                <div class="vs-sidebar sticky-sidebar">

                    <div class="vs-sidebar__widget">

                        <h4 class="vs-sidebar__widget-title">
                            Recent Blogs
                        </h4>

                        @foreach($recentBlogs as $recent)

                            <div class="recent-blog-item">

                                <div class="recent-blog-thumb">
                                    <a href="{{ route('blog.details', $recent->slug) }}">
                                        <img src="{{ asset($recent->featured_image) }}"
                                            alt="{{ $recent->title }}">
                                    </a>
                                </div>

                                <div class="recent-blog-content">

                                    <h6>
                                        <a href="{{ route('blog.details', $recent->slug) }}">
                                            {{ Str::limit($recent->title, 50) }}
                                        </a>
                                    </h6>

                                    <span>
                                        <i class="fa-regular fa-calendar"></i>
                                        {{ $recent->created_at->format('d M Y') }}
                                    </span>

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
.vs-blog--single .vs-blog__img{
    width:100%;
    height:500px;
    object-fit:cover;
    border-radius:15px;
}

.blog-content img{
    max-width:100%;
    height:auto;
    border-radius:10px;
}

.blog-content{
    line-height:1.9;
}

.blog-content h1,
.blog-content h2,
.blog-content h3,
.blog-content h4,
.blog-content h5,
.blog-content h6{
    margin-top:25px;
    margin-bottom:15px;
}

/* Sticky Sidebar */
.sticky-sidebar{
    position:sticky;
    top:120px;
}

/* Sidebar Widget */
.vs-sidebar__widget{
    background:#fff;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.vs-sidebar__widget-title{
    margin-bottom:25px;
}

/* Recent Blogs */
.recent-blog-item{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
    padding-bottom:20px;
    border-bottom:1px solid #eee;
}

.recent-blog-item:last-child{
    border-bottom:none;
    margin-bottom:0;
    padding-bottom:0;
}

.recent-blog-thumb img{
    width:90px;
    height:80px;
    object-fit:cover;
    border-radius:10px;
}

.recent-blog-content h6{
    margin-bottom:5px;
    font-size:15px;
    line-height:1.5;
}

.recent-blog-content h6 a{
    color:#222;
    text-decoration:none;
}

.recent-blog-content h6 a:hover{
    color:var(--vs-theme-color-14);
}

.recent-blog-content span{
    font-size:13px;
    color:#777;
}
</style>
@endsection