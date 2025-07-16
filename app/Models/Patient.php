<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'birth_date',
        'gender',
        'identity_number',
        'address',
        'phone_number',
        'email',
        'medical_history',
        'allergies',
        'medications',
        'family_history',
        'registration_date',
        'registration_time',
        'poliklinik_id',
        'job_status',
        'insurance_company',
        'insurance_policy_number',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_phone',
        'user_id',
        'status',
    ];

    protected $casts = [
        'examination_datetime' => 'datetime',
    ];

    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }
}
