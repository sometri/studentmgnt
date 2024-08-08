@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
    <h1>Student Details</h1>
    <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $student->name }}</dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $student->email }}</dd>

        <dt class="col-sm-3">Date of Birth</dt>
        <dd class="col-sm-9">{{ $student->dob }}</dd>
    </dl>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
