@extends('admin.layout')

@section('title', 'Edit Logo')
@section('page_header', 'Edit Logo')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Logo
    </div>

    <div class="card-body">

        <form action="{{ route('admin.logos.update',$logo->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Title</label>

                <input type="text"
                       name="title"
                       value="{{ $logo->title }}"
                       class="form-control">
            </div>

            <div class="mb-3">
                <img src="{{ asset('uploads/logos/'.$logo->image) }}"
                     width="120">
            </div>

            <div class="mb-3">
                <label>Change Logo</label>

                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>

@endsection