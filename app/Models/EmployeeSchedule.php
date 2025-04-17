<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeSchedule extends Model
{
    //
    protected $table = 'employeeSchedules';
    protected $fillable = ['user_id', 'start_time', 'end_time'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
