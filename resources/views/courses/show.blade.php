@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
    <h1>Course Details</h1>

    <div class="form-group">
        <label for="title">Title</label>
        <p>{{ $course->title }}</p>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <p>{{ $course->description }}</p>
    </div>

    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
