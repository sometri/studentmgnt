@extends('layouts.app')

@section('title', 'Create Course')

@section('content')
    <h1>Create Course</h1>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
@endsection
