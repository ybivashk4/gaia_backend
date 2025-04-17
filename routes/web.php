<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmployeeScheduleController;
use App\Http\Controllers\EmployeeTaskController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use App\Models\EmployeeSchedule;
use App\Models\EmployeeTask;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return view('init', ['param' => 'lab1']);
});


Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking/create', [BookingController::class, 'create']);
Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
Route::post('/booking', [BookingController::class, 'store']);
Route::post('/booking/update/{id}', [BookingController::class, 'update']);
Route::get('/booking/delete/{id}', [BookingController::class, 'delete']);

Route::get('/employeeSchedule', [EmployeeScheduleController::class, 'index']);
Route::get('/employeeSchedule/create', [EmployeeScheduleController::class, 'create']);
Route::post('/employeeSchedule', [EmployeeScheduleController::class, 'store']);
Route::get('/employeeSchedule/edit/{id}', [EmployeeScheduleController::class, 'edit']);
Route::post('/employeeSchedule/update/{id}', [EmployeeScheduleController::class, 'update']);
Route::get('/employeeSchedule/delete/{id}', [EmployeeScheduleController::class, 'delete']);

Route::get('/employeeTasks', [EmployeeTaskController::class, 'index']);
Route::get('/employeeTasks/create', [EmployeeTaskController::class, 'create']);
Route::post('/employeeTasks', [EmployeeTaskController::class, 'store']);
Route::get('/employeeTasks/edit/{id}', [EmployeeTaskController::class, 'edit']);
Route::post('/employeeTasks/update/{id}', [EmployeeTaskController::class, 'update']);
Route::get('/employeeTasks/delete/{id}', [EmployeeTaskController::class, 'delete']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event', [EventController::class, 'store']);
Route::get('/event/edit/{id}', [EventController::class, 'edit']);
Route::post('/event/update/{id}', [EventController::class, 'update']);
Route::get('/event/delete/{id}', [EventController::class, 'delete']);


Route::get('/menu', [MenuController::class, 'index']);
Route::get('/hall', [HallController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
