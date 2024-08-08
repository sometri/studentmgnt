@extends('layouts.app')

@section('title', 'Add New Teacher')

@section('content')
    <h1>Add New Teacher</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Teacher</button>
    </form>
@endsection
