<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_date',
        'activity_name',
        'description',
        'attached_file',
    ];
}
