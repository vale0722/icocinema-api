<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'show_id',
       'chair_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }
}
