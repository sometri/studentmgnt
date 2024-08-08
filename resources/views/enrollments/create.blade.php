@extends('layouts.app')

@section('title', 'Create New Enrollment')

@section('content')
    <h1>Create New Enrollment</h1>

    <form method="POST" action="{{ route('enrollments.store') }}">
        @csrf
        <div class="form-group">
            <label for="student_id">Student</label>
            <select class="form-control" id="student_id" name="student_id" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="course_id">Course</label>
            <select class="form-control" id="course_id" name="course_id" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="enrolled_at">Enrolled At</label>
            <input type="datetime-local" class="form-control" id="enrolled_at" name="enrolled_at" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Enrollment</button>
    </form>
@endsection
