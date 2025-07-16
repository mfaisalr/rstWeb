@extends('layouts.layoutUser')

@section('content')
    <h1>Patient Details</h1>

    <div>
        <p><strong>Name:</strong> {{ $patient->full_name }}</p>
        <p><strong>Status:</strong> {{ $patient->status }}</p>
        <p><strong>Registered On:</strong> {{ \Carbon\Carbon::parse($patient->created_at)->format('d F Y') }}</p>
        
    </div>

    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to Patients List</a>
@endsection