@extends('layouts.layout')

@section('content')
<div class="container">
    <h2>Edit Patient</h2>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" class="form-control" name="full_name" value="{{ old('full_name', $patient->full_name) }}" required>
        </div>
        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date', $patient->birth_date) }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" name="gender" required>
                <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="identity_number">Identity Number:</label>
            <input type="text" class="form-control" name="identity_number" value="{{ old('identity_number', $patient->identity_number) }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" name="address" required>{{ old('address', $patient->address) }}</textarea>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $patient->phone_number) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email (if any):</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $patient->email) }}">
        </div>
        <div class="form-group">
            <label for="medical_history">Medical History:</label>
            <textarea class="form-control" name="medical_history">{{ old('medical_history', $patient->medical_history) }}</textarea>
        </div>
        <div class="form-group">
            <label for="allergies">Allergies (if any):</label>
            <textarea class="form-control" name="allergies">{{ old('allergies', $patient->allergies) }}</textarea>
        </div>
        <div class="form-group">
            <label for="medications">Medications:</label>
            <textarea class="form-control" name="medications">{{ old('medications', $patient->medications) }}</textarea>
        </div>
        <div class="form-group">
            <label for="family_history">Family History:</label>
            <textarea class="form-control" name="family_history">{{ old('family_history', $patient->family_history) }}</textarea>
        </div>
        <div class="form-group">
            <label for="registration_date">Registration Date:</label>
            <input type="date" class="form-control" name="registration_date" value="{{ old('registration_date', $patient->registration_date) }}" required>
        </div>
        <div class="form-group">
            <label for="registration_time">Registration Time:</label>
            <input type="time" class="form-control" name="registration_time" value="{{ old('registration_time', $patient->registration_time) }}" required>
        </div>
        <div class="form-group">
            <label for="poliklinik_id">Poli/Spesialisasi:</label>
            <select class="form-control" name="poliklinik_id" required>
                @foreach ($polikliniks as $poliklinik)
                    <option value="{{ $poliklinik->id }}" {{ old('poliklinik_id', $patient->poliklinik_id) == $poliklinik->id ? 'selected' : '' }}>{{ $poliklinik->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doctor_name">Doctor Name (if determined):</label>
            <input type="text" class="form-control" name="doctor_name" value="{{ old('doctor_name', $patient->doctor_name) }}">
        </div>
        <div class="form-group">
            <label for="registration_method">Registration Method:</label>
            <input type="text" class="form-control" name="registration_method" value="{{ old('registration_method', $patient->registration_method) }}" required>
        </div>
        <div class="form-group">
            <label for="job_status">Job Status:</label>
            <input type="text" class="form-control" name="job_status" value="{{ old('job_status', $patient->job_status) }}">
        </div>
        <div class="form-group">
            <label for="insurance_company">Health Insurance (if any):</label>
            <input type="text" class="form-control" name="insurance_company" value="{{ old('insurance_company', $patient->insurance_company) }}">
        </div>
        <div class="form-group">
            <label for="insurance_policy_number">Insurance Policy Number:</label>
            <input type="text" class="form-control" name="insurance_policy_number" value="{{ old('insurance_policy_number', $patient->insurance_policy_number) }}">
        </div>
        <div class="form-group">
            <label for="emergency_contact_name">Emergency Contact Name:</label>
            <input type="text" class="form-control" name="emergency_contact_name" value="{{ old('emergency_contact_name', $patient->emergency_contact_name) }}" required>
        </div>
        <div class="form-group">
            <label for="emergency_contact_relationship">Relationship with Emergency Contact:</label>
            <input type="text" class="form-control" name="emergency_contact_relationship" value="{{ old('emergency_contact_relationship', $patient->emergency_contact_relationship) }}" required>
        </div>
        <div class="form-group">
            <label for="emergency_contact_phone">Emergency Contact Phone:</label>
            <input type="text" class="form-control" name="emergency_contact_phone" value="{{ old('emergency_contact_phone', $patient->emergency_contact_phone) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Patient</button>
    </form>
</div>
@endsection
