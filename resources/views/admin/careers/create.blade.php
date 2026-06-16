@extends('admin.layout')


@section('content')

<div class="container">

<div class="card">

<div class="card-header">
    Add Job Post
</div>

<div class="card-body">

<form action="{{ route('admin.careers.store') }}"
      method="POST">

@csrf

<div class="mb-3">
    <label>Job Title</label>
    <input type="text" name="job_title" class="form-control">
</div>

<div class="mb-3">
    <label>Department</label>
    <input type="text" name="department" class="form-control">
</div>

<div class="mb-3">
    <label>Location</label>
    <input type="text" name="location" class="form-control">
</div>

<div class="mb-3">
    <label>Job Type</label>
    <select name="job_type" class="form-control">
        <option>Full Time</option>
        <option>Part Time</option>
        <option>Remote</option>
        <option>Internship</option>
    </select>
</div>

<div class="mb-3">
    <label>Experience</label>
    <input type="number" name="experience" class="form-control">
</div>

<div class="mb-3">
    <label>Salary</label>
    <input type="number" name="salary" class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description"
              rows="6"
              class="form-control"></textarea>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
</div>

<button class="btn btn-success">
    Save Job
</button>

</form>

</div>

</div>

</div>

@endsection