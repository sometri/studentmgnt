@extends('layouts.app')

@section('title', 'User Details')

@section('content')
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users List</a>
@endsection
