<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmployeeScheduleController;
use App\Http\Controllers\EmployeeTaskController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/hi', function () {
    return view('init', ['param' => 'lab1']);
});


Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking/create', [BookingController::class, 'create'])->middleware('auth');
Route::get('/booking/edit/{id}', [BookingController::class, 'edit'])->middleware('auth');
Route::post('/booking', [BookingController::class, 'store'])->middleware('auth');
Route::post('/booking/update/{id}', [BookingController::class, 'update'])->middleware('auth');
Route::get('/booking/delete/{id}', [BookingController::class, 'delete'])->middleware('auth');

Route::get('/employeeSchedule', [EmployeeScheduleController::class, 'index']);
Route::get('/employeeSchedule/create', [EmployeeScheduleController::class, 'create'])->middleware('auth');
Route::post('/employeeSchedule', [EmployeeScheduleController::class, 'store'])->middleware('auth');
Route::get('/employeeSchedule/edit/{id}', [EmployeeScheduleController::class, 'edit'])->middleware('auth');
Route::post('/employeeSchedule/update/{id}', [EmployeeScheduleController::class, 'update'])->middleware('auth');
Route::get('/employeeSchedule/delete/{id}', [EmployeeScheduleController::class, 'delete'])->middleware('auth');

Route::get('/employeeTasks', [EmployeeTaskController::class, 'index']);
Route::get('/employeeTasks/create', [EmployeeTaskController::class, 'create'])->middleware('auth');
Route::post('/employeeTasks', [EmployeeTaskController::class, 'store'])->middleware('auth');
Route::get('/employeeTasks/edit/{id}', [EmployeeTaskController::class, 'edit'])->middleware('auth');
Route::post('/employeeTasks/update/{id}', [EmployeeTaskController::class, 'update'])->middleware('auth');
Route::get('/employeeTasks/delete/{id}', [EmployeeTaskController::class, 'delete'])->middleware('auth');

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/event', [EventController::class, 'store'])->middleware('auth');
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::post('/event/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::get('/event/delete/{id}', [EventController::class, 'delete'])->middleware('auth');

Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/create', [HallController::class, 'create'])->middleware('auth');
Route::post('/hall', [HallController::class, 'store'])->middleware('auth');
Route::get('/hall/edit/{id}', [HallController::class, 'edit'])->middleware('auth');
Route::post('/hall/update/{id}', [HallController::class, 'update'])->middleware('auth');
Route::get('/hall/delete/{id}', [HallController::class, 'delete'])->middleware('auth');

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create'])->middleware('auth');
Route::post('/menu', [MenuController::class, 'store'])->middleware('auth');
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->middleware('auth');
Route::post('/menu/update/{id}', [MenuController::class, 'update'])->middleware('auth');
Route::get('/menu/delete/{id}', [MenuController::class, 'delete'])->middleware('auth');

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/review/create', [ReviewController::class, 'create'])->middleware('auth');
Route::post('/review', [ReviewController::class, 'store'])->middleware('auth');
Route::get('/review/edit/{id}', [ReviewController::class, 'edit'])->middleware('auth');
Route::post('/review/update/{id}', [ReviewController::class, 'update'])->middleware('auth');
Route::get('/review/delete/{id}', [ReviewController::class, 'delete'])->middleware('auth');

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/create', [ShopController::class, 'create'])-> middleware('auth');
Route::post('/shop', [ShopController::class, 'store'])->middleware('auth');
Route::get('/shop/edit/{id}', [ShopController::class, 'edit'])->middleware('auth');
Route::post('/shop/update/{id}', [ShopController::class, 'update'])->middleware('auth');
Route::get('/shop/delete/{id}', [ShopController::class, 'delete'])->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');;
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function() {
    return view('error', ['message' => session('message')]);
    }
);
