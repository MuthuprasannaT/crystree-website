@extends('admin.layout')

@section('title', 'Add Logo')
@section('page_header', 'Create New Logo')

@section('content')

<div class="card">
    <div class="card-header">
        Add Logo
    </div>

    <div class="card-body">

        <form action="{{ route('admin.logos.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Title</label>
                <input type="text"
                       name="title"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Logo Image</label>
                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            <button class="btn btn-success">
                Save
            </button>

        </form>

    </div>
</div>

@endsection
