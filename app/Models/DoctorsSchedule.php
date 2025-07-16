<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id', 'poliklinik_id', 'day_start', 'day_end', 'time_start', 'time_end'
    ];

    // Relasi dengan model Doctor
    public function doctor()
    {
        return $this->belongsTo(Dokter::class);
    }

    // Relasi dengan model Poliklinik
    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }
}
