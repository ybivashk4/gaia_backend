<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTask;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class EmployeeTaskController extends Controller
{
    //
    public function index()
    {
        return view('employeeTasks', [
            'employeeTasks' => EmployeeTask::all()
        ]);
    }

    public function create()
    {
        return view('employeeTasks_create', [
            'employeeTasks' => EmployeeTask::all(),
            'employees' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|integer',
            'task_description' => 'required|string',
            'task_status' => 'required|string',
            'task_created_at' => 'required|date',
            'task_completed_at' => 'required|date'
        ]);
        $employeeTask = new EmployeeTask($validated);
        $employeeTask->save();
        return redirect('/employeeTasks');
    }

    public function edit(string $id)
    {
        return view('employeeTasks_edit', [
            'employeeTask' => EmployeeTask::all()->where('id', $id)->first(),
            'employees' => User::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'employee_id' => 'required|integer',
            'task_description' => 'required|string',
            'task_status' => 'required|string',
            'task_created_at' => 'required|date',
            'task_completed_at' => 'required|date'
        ]);
        $employeeTask = EmployeeTask::all()->where('id', $id)->first();
        $employeeTask->employee_id = $validated['employee_id'];
        $employeeTask->task_description = $validated['task_description'];
        $employeeTask->task_status = $validated['task_status'];
        $employeeTask->task_created_at = $validated['task_created_at'];
        $employeeTask->task_completed_at = $validated['task_completed_at'];
        $employeeTask->save();
        return redirect('/employeeTasks');
    }

    public function delete(string $id)
    {
        $employeeTask = EmployeeTask::all()->where('id', $id)->first();
        $employeeTask->delete();
        return redirect('/employeeTasks');

    }
}
