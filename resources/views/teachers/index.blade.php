@extends('layouts.app')

@section('title', 'Teachers List')

@section('content')
    <h1>Teachers</h1>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add New Teacher</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->subject }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info">View</a>
                        <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
