@extends('admin.layout')

@section('title', 'Testimonials')
@section('page_header', 'Client Testimonials')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <form action="{{ route('admin.testimonials.index') }}" method="GET" class="d-flex col-md-5 col-sm-8 p-0">
        <div class="input-group">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search testimonials...">
            <button class="btn btn-primary-custom" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
            @if($search)
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">
                    Clear
                </a>
            @endif
        </div>
    </form>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-1"></i> Add Testimonial
    </a>
</div>

<div class="table-responsive-custom">
    @if($testimonials->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted mb-0">No testimonials found.</p>
        </div>
    @else
        <table class="table table-custom table-hover">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th style="width: 100px;">Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Testimonial</th>
                    <th style="width: 200px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td>
                            @if($testimonial->image)
                                <img src="{{ asset($testimonial->image) }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid var(--premium-gold);" alt="{{ $testimonial->name }}">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td><strong>{{ $testimonial->name }}</strong></td>
                        <td><span class="text-muted">{{ $testimonial->designation }}</span></td>
                        <td>{{ Str::limit($testimonial->testimonial, 60) }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('admin.testimonials.show', $testimonial->id) }}" class="btn btn-sm btn-info text-white">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-primary-custom">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
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
                Showing {{ $testimonials->firstItem() ?? 0 }} to {{ $testimonials->lastItem() ?? 0 }} of {{ $testimonials->total() }} records
            </p>
            {{ $testimonials->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
