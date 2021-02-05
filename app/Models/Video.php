<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVideoUrlAttribute()
    {
        return str_contains($this->youtube_url,'http') ? $this->youtube_url : 'https://www.youtube.com/embed/' . $this->youtube_url;
    }
}
