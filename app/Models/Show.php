<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'show_day',
        'show_hour',
        'room_id',
        'movie_id',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

     public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

     public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
