@extends('admin.layout')



@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header d-flex justify-content-between">

            <h4>Job Posts</h4>

            <a href="{{ route('admin.careers.create') }}"
               class="btn btn-primary">
                Add Job
            </a>

        </div>

        <div class="card-body">

            <form method="GET" class="mb-3">

                <input type="text"
                       class="form-control"
                       name="search"
                       value="{{ $search }}"
                       placeholder="Search Jobs...">

            </form>

            <table class="table table-bordered">

                <thead>

                <tr>
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Department</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th width="180">Action</th>
                </tr>

                </thead>

                <tbody>

                @foreach($careers as $career)

                <tr>

                    <td>{{ $career->id }}</td>
                    <td>{{ $career->job_title }}</td>
                    <td>{{ $career->department }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->job_type }}</td>
                    <td>{{ $career->status }}</td>

                    <td>

                        <a href="{{ route('admin.careers.edit',$career->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.careers.destroy',$career->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete Job?')">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

                </tbody>

            </table>

            {{ $careers->links() }}

        </div>

    </div>

</div>

@endsection