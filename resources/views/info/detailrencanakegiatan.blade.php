@extends('layouts.layouts1')

@section('content')

<div class="container mt-4">
    <h2>{{ $activityPlan->activity_name }}</h2>

    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($activityPlan->activity_date)->translatedFormat('d F Y') }}</p>

    <p>{!! nl2br(e($activityPlan->description)) !!}</p>

    @if ($activityPlan->attached_file)
        @php
            $extension = pathinfo($activityPlan->attached_file, PATHINFO_EXTENSION);
        @endphp

        @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
            <div class="mt-3">
                <img src="{{ asset('storage/' . $activityPlan->attached_file) }}" alt="Lampiran Gambar" class="img-fluid rounded shadow">
            </div>
        @elseif(in_array($extension, ['pdf']))
            <div class="mt-3">
                <embed src="{{ asset('storage/' . $activityPlan->attached_file) }}" type="application/pdf" width="100%" height="600px">
            </div>
        @else
            <p><strong>Lampiran:</strong> File tidak dapat ditampilkan secara langsung.</p>
        @endif
    @endif
</div>

@endsection