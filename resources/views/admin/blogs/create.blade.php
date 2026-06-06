@extends('admin.layout')

@section('title', 'Add Blog Post')
@section('page_header', 'Create New Blog Post')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label font-weight-bold">Blog Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Enter blog title" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="slug" class="form-label font-weight-bold">Slug (Optional)</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" placeholder="auto-generated-from-title">
                    <small class="text-muted">Only lowercase alphanumeric characters and dashes.</small>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-3">
                    <label for="featured_image" class="form-label font-weight-bold">Featured Image</label>
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image" accept="image/*" required>
                    <small class="text-muted">Allowed types: jpeg, png, jpg, gif, svg, webp. Max size: 2MB.</small>
                    @error('featured_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="status" class="form-label font-weight-bold">Status</label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Published</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Draft</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="short_description" class="form-label font-weight-bold">Short Description</label>
                <textarea class="form-control rich-editor @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" placeholder="Write a brief overview of the blog post..." required>{{ old('short_description') }}</textarea>
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="form-label font-weight-bold">Full Content</label>
                <textarea class="form-control rich-editor @error('content') is-invalid @enderror" id="content" name="content" rows="10" placeholder="Write the main blog content..." required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Save Blog Post
                </button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
