@extends('layouts.app')

@section('title', 'Payment Details')

@section('content')
    <h1>Payment Details</h1>

    <div>
        <p><strong>Student:</strong> {{ $payment->student->name }}</p>
        <p><strong>Amount:</strong> ${{ number_format($payment->amount, 2) }}</p>
        <p><strong>Payment Date:</strong> {{ $payment->payment_date }}</p>
    </div>

    <a href="{{ route('payments.index') }}" class="btn btn-primary">Back to Payments</a>
@endsection
