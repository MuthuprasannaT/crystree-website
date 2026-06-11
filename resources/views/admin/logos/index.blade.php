@extends('admin.layout')

@section('title', 'Logo')
@section('page_header', 'Logo')

@section('content')


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between mb-3">
    <h3>Logo List</h3>

    <a href="{{ route('admin.logos.create') }}"
       class="btn btn-success">
       Add Logo
    </a>
</div>

<table class="table table-bordered table-striped">

    <thead>
        <tr>
            <th>ID</th>
            <th>Logo</th>
            <th>Title</th>
            {{-- <th>Created Date</th> --}}
            <th width="200">Action</th>
        </tr>
    </thead>

    <tbody>

        @forelse($logos as $logo)

        <tr>
            <td>{{ $logo->id }}</td>

            <td>
                <img src="{{ asset('uploads/logos/'.$logo->image) }}"
                     width="80">
            </td>

            <td>{{ $logo->title }}</td>

            {{-- <td>{{ $logo->created_at->format('d-m-Y') }}</td> --}}

            <td>

                <a href="{{ route('admin.logos.edit',$logo->id) }}"
                   class="btn btn-primary btn-sm">
                   Edit
                </a>

                <form action="{{ route('admin.logos.destroy',$logo->id) }}"
                      method="POST"
                      style="display:inline-block">

                    @csrf
                    @method('DELETE')

                    <button
                        onclick="return confirm('Delete this logo?')"
                        class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5" class="text-center">
                No Data Found
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection