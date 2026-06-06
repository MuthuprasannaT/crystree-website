@extends('admin.layout')

@section('title', 'BTS')
@section('page_header', 'Behind The Scenes (BTS)')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <form action="{{ route('admin.bts.index') }}" method="GET" class="d-flex col-md-5 col-sm-8 p-0">
        <div class="input-group">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search BTS records...">
            <button class="btn btn-primary-custom" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
            @if($search)
                <a href="{{ route('admin.bts.index') }}" class="btn btn-outline-secondary">
                    Clear
                </a>
            @endif
        </div>
    </form>
    <a href="{{ route('admin.bts.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-1"></i> Add BTS Record
    </a>
</div>

<div class="table-responsive-custom">
    @if($btsRecords->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted mb-0">No Behind The Scenes records found.</p>
        </div>
    @else
        <table class="table table-custom table-hover">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th style="width: 120px;">Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($btsRecords as $bts)
                    <tr>
                        <td>{{ $bts->id }}</td>
                        <td>
                            @if($bts->image)
                                <img src="{{ asset($bts->image) }}" class="rounded border" style="width: 80px; height: 50px; object-fit: cover;" alt="{{ $bts->title }}">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td><strong>{{ $bts->title }}</strong></td>
                        <td>{{ Str::limit($bts->description, 100) }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('admin.bts.edit', $bts->id) }}" class="btn btn-sm btn-primary-custom">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.bts.destroy', $bts->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this BTS record?')">
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
                Showing {{ $btsRecords->firstItem() ?? 0 }} to {{ $btsRecords->lastItem() ?? 0 }} of {{ $btsRecords->total() }} records
            </p>
            {{ $btsRecords->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
