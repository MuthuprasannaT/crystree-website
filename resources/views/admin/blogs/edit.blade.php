@extends('admin.layout')

@section('title', 'Edit Blog Post')
@section('page_header', 'Edit Blog Post')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label font-weight-bold">Blog Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="slug" class="form-label font-weight-bold">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}">
                    <small class="text-muted">Only lowercase alphanumeric characters and dashes.</small>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-3">
                    <label for="featured_image" class="form-label font-weight-bold">Featured Image</label>
                    <div class="mb-2">
                        @if($blog->featured_image)
                            <img src="{{ asset($blog->featured_image) }}" class="img-thumbnail mb-2" style="max-height: 120px; object-fit: cover;" alt="Current Image">
                            <div class="small text-muted mb-1">Current Image</div>
                        @endif
                    </div>
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image" accept="image/*">
                    <small class="text-muted">Leave blank if you do not want to change the image. Allowed types: jpeg, png, jpg, gif, svg, webp. Max size: 2MB.</small>
                    @error('featured_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="status" class="form-label font-weight-bold">Status</label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="1" {{ old('status', $blog->status ? '1' : '0') == '1' ? 'selected' : '' }}>Published</option>
                        <option value="0" {{ old('status', $blog->status ? '1' : '0') == '0' ? 'selected' : '' }}>Draft</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="short_description" class="form-label font-weight-bold">Short Description</label>
                <textarea class="form-control rich-editor @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" required>{{ old('short_description', $blog->short_description) }}</textarea>
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="form-label font-weight-bold">Full Content</label>
                <textarea class="form-control rich-editor @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Update Blog Post
                </button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
