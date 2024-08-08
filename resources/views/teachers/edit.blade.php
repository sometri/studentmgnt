@extends('layouts.app')

@section('title', 'Edit Teacher')

@section('content')
    <h1>Edit Teacher</h1>
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" class="form-control" value="{{ $teacher->subject }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Teacher</button>
    </form>
@endsection
