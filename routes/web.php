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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return view('init', ['param' => 'lab1']);
});

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/hall', [HallController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/employeeSchedule', [EmployeeScheduleController::class, 'index']);
Route::get('/employeeTask', [EmployeeTaskController::class, 'index']);
