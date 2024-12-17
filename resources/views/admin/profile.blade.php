@extends('layout.dashboard')

@section('title') dashboard @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('admin/dashboard.css') }}">
@endsection

@section('content')
<div class="container">
    <h3>Admin Details</h3>
    <ul>
        <li><strong>Name:</strong> {{ ucfirst(session('admin')->name ?? 'none') }}</li>
        <li><strong>Email:</strong> {{ session('admin')->email ?? 'none' }}</li>
        <a class="btn btn-outline-danger" href="{{ route('admin.logout', encrypt(session('admin')->id)) }}">Logout</a>
    </ul>

</div>
@endsection