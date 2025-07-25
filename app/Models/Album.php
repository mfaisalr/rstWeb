<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Define relationship with Media
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
