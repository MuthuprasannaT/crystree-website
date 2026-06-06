@extends('admin.layout')

@section('title', 'Add FAQ')
@section('page_header', 'Create New FAQ')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="question" class="form-label font-weight-bold">Question</label>
                <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question" value="{{ old('question') }}" placeholder="e.g. What are your operational hours?" required>
                @error('question')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="answer" class="form-label font-weight-bold">Answer</label>
                <textarea class="form-control rich-editor @error('answer') is-invalid @enderror" id="answer" name="answer" rows="6" placeholder="Provide the answer content..." required>{{ old('answer') }}</textarea>
                @error('answer')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Save FAQ
                </button>
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
