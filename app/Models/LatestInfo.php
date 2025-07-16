<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'date', 'title', 'description', 'image',
    ];
}
