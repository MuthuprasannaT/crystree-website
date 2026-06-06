@extends('admin.layout')

@section('title', 'Edit Testimonial')
@section('page_header', 'Edit Client Testimonial')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label font-weight-bold">Client Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="designation" class="form-label font-weight-bold">Designation / Role</label>
                    <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation', $testimonial->designation) }}" required>
                    @error('designation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label font-weight-bold">Client Photo</label>
                <div class="mb-2">
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}" class="rounded-circle border mb-2" style="width: 85px; height: 85px; object-fit: cover;" alt="Current Image">
                        <div class="small text-muted mb-1">Current Image</div>
                    @endif
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                <small class="text-muted">Leave blank if you do not want to change the image. Allowed types: jpeg, png, jpg, gif, svg, webp. Max size: 2MB.</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="testimonial" class="form-label font-weight-bold">Testimonial Content</label>
                <textarea class="form-control rich-editor @error('testimonial') is-invalid @enderror" id="testimonial" name="testimonial" rows="5" required>{{ old('testimonial', $testimonial->testimonial) }}</textarea>
                @error('testimonial')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Update Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
