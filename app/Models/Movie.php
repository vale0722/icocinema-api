<?php

namespace App\Models;

use App\Models\Concerns\Repositories\MovieRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    use MovieRepository;

    protected $fillable = [
        'name',
        'description',
        'duration',
        'min_age',
        'genre_id',
        'image'
        ];

}
