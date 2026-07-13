@extends('Layouts.app')

@section('content')


    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/bts.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">BTS</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">BTS</li>
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
    <div class="team-card">

        <div class="team-image">
            @if(!empty($team->image))
                <img src="{{ asset($team->image) }}"
                     alt="{{ $team->title }}"
                     loading="lazy">
            @else
                <img src="{{ asset('assets/img/team/default-user.jpg') }}"
                     alt="{{ $team->title }}"
                     loading="lazy">
            @endif

            <div class="team-overlay">
                <h4>{{ $team->title }}</h4>

                {{-- Uncomment if you want description --}}
                {{-- <p>{!! $team->description !!}</p> --}}

                <div class="team-social">
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
</div>
<style>
    .team-card{
    overflow: hidden;
    border-radius: 10px;
}

.team-image{
    position: relative;
    overflow: hidden;
}

.team-image img{
    width:100%;
    height:320px;
    object-fit:cover;
    display:block;
    transition:0.5s;
}

.team-overlay{
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.65);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:#fff;

    opacity:0;
    visibility:hidden;
    transition:.4s ease;
}

.team-overlay h4{
    color:#fff;
    margin-bottom:12px;
    font-size:22px;
    font-weight:600;
}

.team-social{
    display:flex;
    gap:12px;
}

.team-social a{
    width:40px;
    height:40px;
    background:#fff;
    color:#000;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.3s;
}

.team-social a:hover{
    background:#ff6600;
    color:#fff;
}

.team-image:hover img{
    transform:scale(1.08);
}

.team-image:hover .team-overlay{
    opacity:1;
    visibility:visible;
}
</style>
            @empty

                <div class="col-12 text-center">
                    <h4>No Team Members Found</h4>
                </div>

            @endforelse

        </div>
    </div>
</section>
    
@endsection