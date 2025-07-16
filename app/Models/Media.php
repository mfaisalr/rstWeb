<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['album_id', 'media_path', 'type'];

    // Define relationship with Album
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
