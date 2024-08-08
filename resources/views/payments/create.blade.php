@extends('layouts.app')

@section('title', 'Create New Payment')

@section('content')
    <h1>Create New Payment</h1>

    <form method="POST" action="{{ route('payments.store') }}">
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
            <label for="amount">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" class="form-control" id="payment_date" name="payment_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Payment</button>
    </form>
@endsection
