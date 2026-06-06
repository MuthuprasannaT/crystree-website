@extends('admin.layout')

@section('title', 'View Blog Post')
@section('page_header', 'Blog Post Details')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="font-weight-bold text-dark mb-2">{{ $blog->title }}</h2>
                <div class="d-flex align-items-center gap-3 text-muted small mb-3">
                    <span><i class="fas fa-link me-1"></i> Slug: <strong>{{ $blog->slug }}</strong></span>
                    <span>&bull;</span>
                    <span><i class="fas fa-calendar-alt me-1"></i> {{ $blog->created_at->format('M d, Y H:i') }}</span>
                    <span>&bull;</span>
                    <span>
                        @if($blog->status)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning text-dark">Draft</span>
                        @endif
                    </span>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary-custom me-2">
                    <i class="fas fa-edit me-1"></i> Edit Post
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                    Back to List
                </a>
            </div>
        </div>

        @if($blog->featured_image)
            <div class="mb-4 text-center">
                <img src="{{ asset($blog->featured_image) }}" class="img-fluid rounded" style="max-height: 400px; width: 100%; object-fit: cover; border: 2px solid rgba(4, 26, 89, 0.1);" alt="{{ $blog->title }}">
            </div>
        @endif

        <h5 class="font-weight-bold text-dark mb-3"><i class="fas fa-quote-left me-2 text-primary"></i> Short Description</h5>
        <div class="p-3 bg-light rounded text-secondary mb-4" style="font-size: 1.1rem; line-height: 1.6;">{{ $blog->short_description }}</div>

        <h5 class="font-weight-bold text-dark mb-3"><i class="fas fa-align-left me-2 text-primary"></i> Blog Content</h5>
        <div class="text-dark" style="white-space: pre-wrap; font-size: 1.05rem; line-height: 1.8;">{!! e($blog->content) !!}</div>
    </div>
</div>
@endsection
