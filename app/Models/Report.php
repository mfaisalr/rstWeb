<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'full_name',
        'work_unit',
        'phone_number',
        'address',
        'report',
        'supporting_photo',
        'reportDetail',
    ];
}
