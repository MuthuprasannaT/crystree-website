@extends('Layouts.app')

@section('content')


    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.png"><img class="breadcrumb-wrapper__ele1" src="assets/img/elements/breadcumb-element-bar.svg" alt="element">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">Team Members</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">Team Members</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<section class="vs-team space space-extra-bottom bg-white">
    <div class="container">
        <div class="row vs-active-wrapper">

            @forelse($teams as $team)

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                    <div class="vs-team__item vs-team__item--style6 vs-active">

                        <figure class="vs-team__item-figure">

                            <a class="vs-team__item-img-link" href="javascript:void(0)">

                                @if(!empty($team->image))
                                    <img class="vs-team__item-img"
                                         src="{{ asset($team->image) }}"
                                         alt="{{ $team->title }}">
                                @else
                                    <img class="vs-team__item-img"
                                         src="{{ asset('assets/img/team/default-user.jpg') }}"
                                         alt="{{ $team->name }}">
                                @endif

                            </a>

                        </figure>

                        <div class="vs-team__item-body">

                            <div class="vs-team__item-content">

                                <h3 class="vs-team__item-name">
                                    {{ $team->title }}
                                </h3>

                              {{-- <div class="vs-team__item-role">
    {!! $team->description !!}
</div> --}}

                            </div>

                            <div class="vs-team__item-social">

                                @if($team->facebook)
                                    <a href="{{ $team->facebook }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif

                                @if($team->linkedin)
                                    <a href="{{ $team->linkedin }}" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                @endif

                                @if($team->instagram)
                                    <a href="{{ $team->instagram }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <h4>No Team Members Found</h4>
                </div>

            @endforelse

        </div>
    </div>
</section>
    
@endsection