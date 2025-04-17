<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['user_id', 'hall_id', 'date', 'num_uf_guests', 'additional_service', 'status'];

    //
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }
}
