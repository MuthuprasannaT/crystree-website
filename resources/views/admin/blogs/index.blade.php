@extends('admin.layout')

@section('title', 'Blogs')
@section('page_header', 'Blog Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <form action="{{ route('admin.blogs.index') }}" method="GET" class="d-flex col-md-5 col-sm-8 p-0">
        <div class="input-group">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search blog posts...">
            <button class="btn btn-primary-custom" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
            @if($search)
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                    Clear
                </a>
            @endif
        </div>
    </form>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-1"></i> Add Blog Post
    </a>
</div>

<div class="table-responsive-custom">
    @if($blogs->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted mb-0">No blog posts found.</p>
        </div>
    @else
        <table class="table table-custom table-hover">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th style="width: 120px;">Image</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th style="width: 220px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>
                            @if($blog->featured_image)
                                <img src="{{ asset($blog->featured_image) }}" class="rounded border" style="width: 80px; height: 50px; object-fit: cover;" alt="{{ $blog->title }}">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $blog->title }}</strong>
                            <div class="small text-muted">Slug: {{ $blog->slug }}</div>
                        </td>
                        <td>
                            @if($blog->status)
                                <span class="badge bg-success"><i class="fas fa-check-circle me-1"></i> Published</span>
                            @else
                                <span class="badge bg-warning text-dark"><i class="fas fa-edit me-1"></i> Draft</span>
                            @endif
                        </td>
                        <td>{{ $blog->created_at->format('M d, Y') }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info text-white">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary-custom">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?')">
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
                Showing {{ $blogs->firstItem() ?? 0 }} to {{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() }} records
            </p>
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
