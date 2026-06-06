@extends('admin.layout')

@section('title', 'Contact Us Submissions')
@section('page_header', 'Contact Us Submissions')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0;
        margin-left: 0;
    }
    div.dataTables_wrapper div.dataTables_filter label {
        font-weight: 500;
        margin-bottom: 15px;
    }
    .table-custom-dt {
        width: 100% !important;
        border-collapse: collapse;
    }
    .table-custom-dt th {
        background-color: var(--primary-color) !important;
        color: #fff !important;
        font-family: 'Outfit', sans-serif;
        font-weight: 600;
        padding: 14px 16px;
        border: none;
    }
    .table-custom-dt td {
        padding: 14px 16px;
        vertical-align: middle;
        font-family: 'Inter', sans-serif;
        color: #495057;
        border-bottom: 1px solid #eef2f6;
    }
</style>
@endsection

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="table-responsive">
        <table id="contacts-table" class="table table-striped table-hover table-custom-dt">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Submission Date</th>
                    <th style="width: 150px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->fname }}</td>
                        <td>{{ $contact->lname }}</td>
                        <td><a href="mailto:{{ $contact->email }}" class="text-decoration-none" style="color: var(--primary-color);">{{ $contact->email }}</a></td>
                        <td>{{ $contact->phone }}</td>
                        <td title="{{ $contact->message }}">{{ Str::limit($contact->message, 45) }}</td>
                        <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('admin.contact-us.show', $contact->id) }}" class="btn btn-sm btn-info text-white">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.contact-us.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this submission?')">
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
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contacts-table').DataTable({
            "order": [[ 0, "desc" ]],
            "pageLength": 10,
            "language": {
                "search": "Search submissions:"
            }
        });
    });
</script>
@endsection
