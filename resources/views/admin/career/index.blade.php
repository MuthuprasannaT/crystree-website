@extends('admin.layout')


@section('content')

<div class="container-fluid">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Career Applications
            </h4>

            <form method="GET">

                <div class="input-group">

                    <input type="text"
                           class="form-control"
                           name="search"
                           value="{{ $search }}"
                           placeholder="Search Applications...">

                    <button class="btn btn-primary">
                        Search
                    </button>

                </div>

            </form>

        </div>

        <div class="card-body">

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Resume</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($applications as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->name }}</td>

                            <td>{{ $item->position }}</td>

                            <td>{{ $item->email }}</td>

                            <td>{{ $item->mobile }}</td>

                            <td>

                                @if($item->resume)

                                    <a href="{{ asset('uploads/resumes/'.$item->resume) }}"
                                       target="_blank"
                                       class="btn btn-sm btn-success">

                                        View Resume

                                    </a>

                                @endif

                            </td>

                            <td>
                                {{ $item->created_at->format('d M Y') }}
                            </td>

                            <td>

                                <form action="{{ route('admin.career.destroy',$item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this application?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Delete

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="8" class="text-center">
                                No Applications Found
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $applications->links() }}

            </div>

        </div>

    </div>

</div>

@endsection