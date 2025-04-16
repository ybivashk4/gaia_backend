<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTask;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class EmployeeTaskController extends Controller
{
    //
    public function index() {
        return view('employeeTasks', [
            'employeeTasks' => EmployeeTask::all()
        ]);
    }
}
