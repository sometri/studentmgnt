@extends('layouts.app')

@section('title', 'Enrollment Details')

@section('content')
    <h1>Enrollment Details</h1>

    <div>
        <p><strong>Student:</strong> {{ $enrollment->student->name }}</p>
        <p><strong>Course:</strong> {{ $enrollment->course->title }}</p>
        <p><strong>Enrolled At:</strong> {{ $enrollment->enrolled_at }}</p>
    </div>

    <a href="{{ route('enrollments.index') }}" class="btn btn-primary">Back to Enrollments</a>
@endsection
