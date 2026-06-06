@extends('admin.layout')

@section('title', 'Gallery')
@section('page_header', 'Gallery Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <form action="{{ route('admin.gallery.index') }}" method="GET" class="d-flex col-md-5 col-sm-8 p-0">
        <div class="input-group">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search gallery...">
            <button class="btn btn-primary-custom" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
            @if($search)
                <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">
                    Clear
                </a>
            @endif
        </div>
    </form>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-1"></i> Add Gallery Item
    </a>
</div>

<div class="table-responsive-custom">
    @if($galleries->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted mb-0">No gallery items found.</p>
        </div>
    @else
        <table class="table table-custom table-hover">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th style="width: 150px;">Image</th>
                    <th>Title</th>
                    <th style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->id }}</td>
                        <td>
                            @if($gallery->image)
                                <img src="{{ asset($gallery->image) }}" class="rounded border shadow-sm" style="width: 100px; height: 60px; object-fit: cover;" alt="{{ $gallery->title }}">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td><strong>{{ $gallery->title }}</strong></td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-sm btn-primary-custom">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this gallery item?')">
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
                Showing {{ $galleries->firstItem() ?? 0 }} to {{ $galleries->lastItem() ?? 0 }} of {{ $galleries->total() }} records
            </p>
            {{ $galleries->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
