@extends('layouts.app')

@section('title', 'Teacher Details')

@section('content')
    <h1>Teacher Details</h1>
    <p><strong>ID:</strong> {{ $teacher->id }}</p>
    <p><strong>Name:</strong> {{ $teacher->name }}</p>
    <p><strong>Email:</strong> {{ $teacher->email }}</p>
    <p><strong>Subject:</strong> {{ $teacher->subject }}</p>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
