<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSchedule;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeScheduleController extends Controller
{
    //
    public function index()
    {
        return view('employeeSchedules', [
            'employeeSchedules' => EmployeeSchedule::all()
        ]);
    }

    public function create()
    {
        return view('employeeSchedules_create', [
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);
        $EmployeeSchedule_item = new EmployeeSchedule($validated);
        $EmployeeSchedule_item->save();
        return redirect('/employeeSchedule');
    }

    public function edit(string $id)
    {
        return view('employeeSchedules_edit', [
            'employeeSchedule' => EmployeeSchedule::all()->where('id', $id)->first(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);
        $EmployeeSchedule_item = EmployeeSchedule::all()->where('id', $id)->first();
        $EmployeeSchedule_item->user_id = $validated['user_id'];
        $EmployeeSchedule_item->start_time = $validated['start_time'];
        $EmployeeSchedule_item->end_time = $validated['end_time'];
        $EmployeeSchedule_item->save();
        return redirect('/employeeSchedule');
    }

    public function delete(string $id)
    {
        $EmployeeSchedule_item = EmployeeSchedule::all()->where('id', $id)->first();
        $EmployeeSchedule_item->delete();
        return redirect('/employeeSchedule');
    }

}
