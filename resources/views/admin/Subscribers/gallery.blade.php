@extends('admin.layout')

@section('title', 'Gallery Newsletter')

@section('content')

<div class="container-fluid">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h4 class="mb-0">
                        <i class="fas fa-images"></i>
                        Gallery Newsletter
                    </h4>

                </div>

                <div class="card-body">

                    <form action="{{ route('admin.subscribers.gallery.send') }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-8">

                                <label class="form-label">
                                    Select Gallery
                                </label>

                                <select name="gallery_id"
                                        class="form-control"
                                        required>

                                    <option value="">
                                        Select Gallery Image
                                    </option>

                                    @foreach($galleries as $gallery)

                                        <option value="{{ $gallery->id }}">

                                            {{ $gallery->title }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">&nbsp;</label>

                                <button type="submit"
                                        class="btn btn-success w-100">

                                    <i class="fas fa-paper-plane"></i>

                                    Send Gallery

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <br>

    <div class="card shadow">

        <div class="card-header">

            <h5 class="mb-0">

                <i class="fas fa-envelope"></i>

                Subscribers List

            </h5>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>

                <tr>

                    <th width="80">#</th>

                    <th>Email</th>

                    <th width="180">Subscribed On</th>

                </tr>

                </thead>

                <tbody>

                @forelse($subscribers as $subscriber)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $subscriber->email }}</td>

                        <td>{{ $subscriber->created_at->format('d-m-Y') }}</td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            No Subscribers Found

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection