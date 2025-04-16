<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSchedule;
use Illuminate\Http\Request;

class EmployeeScheduleController extends Controller
{
    //
    public function index () {
        return view('employeeSchedules', [
            'employeeSchedules' => EmployeeSchedule::all()
        ]);
    }
}
