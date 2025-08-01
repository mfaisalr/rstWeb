<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    public $timestamps = true;

    protected $fillable = [
        'name',
        'available_beds',
        'occupied_beds'
    ];
}
