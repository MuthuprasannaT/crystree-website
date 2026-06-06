@extends('admin.layout')

@section('title', 'FAQs')
@section('page_header', 'Frequently Asked Questions')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <form action="{{ route('admin.faqs.index') }}" method="GET" class="d-flex col-md-5 col-sm-8 p-0">
        <div class="input-group">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search FAQs...">
            <button class="btn btn-primary-custom" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
            @if($search)
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">
                    Clear
                </a>
            @endif
        </div>
    </form>
    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-1"></i> Add FAQ
    </a>
</div>

<div class="table-responsive-custom">
    @if($faqs->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted mb-0">No FAQs found.</p>
        </div>
    @else
        <table class="table table-custom table-hover">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td><strong>{{ $faq->question }}</strong></td>
                        <td>{{ Str::limit($faq->answer, 100) }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-sm btn-primary-custom">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="text-muted small mb-0">
                Showing {{ $faqs->firstItem() ?? 0 }} to {{ $faqs->lastItem() ?? 0 }} of {{ $faqs->total() }} records
            </p>
            {{ $faqs->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
