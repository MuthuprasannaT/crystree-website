@extends('admin.layout')

@section('title', 'Add BTS Record')
@section('page_header', 'Create New BTS Record')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.bts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label font-weight-bold">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Enter BTS title" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label font-weight-bold">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                <small class="text-muted">Allowed types: jpeg, png, jpg, gif, svg, webp. Max size: 2MB.</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="form-label font-weight-bold">Description</label>
                <textarea class="form-control rich-editor @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Enter BTS description details...">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Save BTS Record
                </button>
                <a href="{{ route('admin.bts.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
