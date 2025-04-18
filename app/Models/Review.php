<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    //
    protected $table = 'reviews';

    protected $fillable = ['user_id', 'rating', 'review', 'image', 'date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
