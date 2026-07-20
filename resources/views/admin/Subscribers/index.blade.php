@extends('admin.layout')

@section('content')

<div class="container-fluid">

    @if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

    @endif

    <div class="card mb-4">

        <div class="card-header">

            <h4>Send Blog To Subscribers</h4>

        </div>

        <div class="card-body">

                     <form action="{{ route('admin.subscribers.blog.send') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-8">

                        <select class="form-control" name="blog_id" required>

                            <option value="">Select Blog</option>

                            @foreach($blogs as $blog)

                            <option value="{{ $blog->id }}">

                                {{ $blog->title }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-4">

                        <button class="btn btn-primary w-100">

                            <i class="fas fa-paper-plane"></i>

                            Send Blog

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <div class="card">

        <div class="card-header">

            <h4>Subscribers</h4>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Email</th>

                        <th>Status</th>

                        <th>Date</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($subscribers as $subscriber)

                    <tr>

                        <td>{{ $subscriber->id }}</td>

                        <td>{{ $subscriber->email }}</td>

                        <td>

                            @if($subscriber->status)

                            <span class="badge bg-success">

                                Active

                            </span>

                            @else

                            <span class="badge bg-danger">

                                Inactive

                            </span>

                            @endif

                        </td>

                        <td>{{ $subscriber->created_at->format('d-m-Y') }}</td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="4" class="text-center">

                            No Subscribers Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

            {{ $subscribers->links() }}

        </div>

    </div>

</div>

@endsection