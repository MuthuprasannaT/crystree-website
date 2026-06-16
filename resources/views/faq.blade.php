@extends('Layouts.app')

@section('content')


    <div class="breadcrumb-wrapper z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/bg/faq.webp')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
                <h1 class="breadcrumb-wrapper__title">FAQ</h1>
                <div class="breadcrumb-wrapper__menu--wrap">
                    <ul class="breadcrumb-wrapper__menu">
                        <li class="breadcrumb-wrapper__menu--item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-wrapper__menu--item">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
             <div class="col-lg-10 mb-30">
                <div class="accordion style3" id="faqVersion1">

                    @forelse($faqs as $faq)

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq{{ $faq->id }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="faq{{ $faq->id }}">

                                    {{ $faq->question }}

                                </button>
                            </h2>

                            <div
                                id="faq{{ $faq->id }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                data-bs-parent="#faqVersion1">

                                <div class="accordion-body">
                                    {!! $faq->answer !!}
                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="alert alert-info">
                            No FAQs found.
                        </div>

                        @endforelse

                </div>
                        </div>
                       <div class="d-flex justify-content-center mt-5">
                            {{ $faqs->links() }}
                        </div>
            </div>
        </div>
    </section>

@endsection