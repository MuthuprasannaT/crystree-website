@extends('admin.layout')

@section('title', 'Edit Gallery Item')
@section('page_header', 'Edit Gallery Item')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label font-weight-bold">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $gallery->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="form-label font-weight-bold">Image</label>
                <div class="mb-2">
                    @if($gallery->image)
                        <img src="{{ asset($gallery->image) }}" class="img-thumbnail mb-2" style="max-height: 120px; object-fit: cover;" alt="Current Image">
                        <div class="small text-muted mb-1">Current Image</div>
                    @endif
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                <small class="text-muted">Leave blank if you do not want to change the image. Allowed types: jpeg, png, jpg, gif, svg, webp. Max size: 2MB.</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Update Gallery Item
                </button>
                <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
