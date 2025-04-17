<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeTask extends Model
{
    protected $table = 'employeeTasks';
    protected $fillable = ['employee_id', 'task_description', 'task_status', 'task_created_at', 'task_completed_at'];

    //
    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
