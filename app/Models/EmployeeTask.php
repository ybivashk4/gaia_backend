<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeTask extends Model
{
    protected $table = 'employeeTasks';
    //
    public function employee () : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
