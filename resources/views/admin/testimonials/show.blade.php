@extends('admin.layout')

@section('title', 'View Testimonial')
@section('page_header', 'Testimonial Details')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <div class="row align-items-center mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                @if($testimonial->image)
                    <img src="{{ asset($testimonial->image) }}" class="rounded-circle border p-1" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid var(--premium-gold) !important;" alt="{{ $testimonial->name }}">
                @else
                    <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center text-white" style="width: 150px; height: 150px; font-size: 3rem;">
                        <i class="fas fa-user"></i>
                    </div>
                @endif
            </div>
            <div class="col-md-9">
                <h3 class="font-weight-bold text-dark mb-1">{{ $testimonial->name }}</h3>
                <h5 class="text-muted mb-2">{{ $testimonial->designation }}</h5>
                <p class="small text-muted mb-0">Added: {{ $testimonial->created_at->format('F d, Y H:i') }} ({{ $testimonial->created_at->diffForHumans() }})</p>
            </div>
        </div>
        
        <hr class="my-4">
        
        <h5 class="mb-3 text-dark font-weight-bold"><i class="fas fa-quote-left me-2 text-primary"></i> Client Feedback</h5>
        <div class="p-4 bg-light rounded text-dark fs-5" style="font-style: italic; line-height: 1.6; border-left: 5px solid var(--premium-gold);">
            "{{ $testimonial->testimonial }}"
        </div>
        
        <div class="d-flex gap-2 mt-4">
            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-primary-custom">
                <i class="fas fa-edit me-1"></i> Edit Testimonial
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">
                Back to List
            </a>
        </div>
    </div>
</div>
@endsection
