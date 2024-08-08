@extends('layouts.app')

@section('title', 'Enrollments List')

@section('content')
    <h1>Enrollments</h1>
    <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Add New Enrollment</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Enrolled At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->id }}</td>
                    <td>{{ $enrollment->student->name }}</td>
                    <td>{{ $enrollment->course->title }}</td>
                    <td>{{ $enrollment->enrolled_at }}</td>
                    <td>
                        <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display:inline;">
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
