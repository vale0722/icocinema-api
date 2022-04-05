<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'show_day',
        'show_hour',
        'room_id',
        'movie_id',
    ];
}
