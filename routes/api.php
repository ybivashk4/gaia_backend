<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingControllerApi;
use App\Http\Controllers\EmployeeScheduleControllerApi;
use App\Http\Controllers\EmployeeTaskControllerApi;
use App\Http\Controllers\EventControllerApi;
use App\Http\Controllers\HallControllerApi;
use App\Http\Controllers\MenuControllerApi;
use App\Http\Controllers\ReviewControllerApi;
use App\Http\Controllers\ShopControllerApi;
use Illuminate\Support\Facades\Route;


Route::get('/booking', [BookingControllerApi::class, 'index']);
Route::get('/booking/{id}', [BookingControllerApi::class, 'show']);

Route::get('/event', [EventControllerApi::class, 'index']);
Route::get('/event/{id}', [EventControllerApi::class, 'show']);

Route::get('/hall', [HallControllerApi::class, 'index']);
Route::post('/hall', [HallControllerApi::class, 'store']);
route::get('/hall_total', [HallControllerApi::class, 'total']);
Route::get('/hall/{id}', [HallControllerApi::class, 'show']);
Route::get('/hall/pictures/{name}', [HallControllerApi::class, 'get_picture']);

Route::get('/menu', [MenuControllerApi::class, 'index']);
Route::get('/menu/{id}', [MenuControllerApi::class, 'show']);
Route::post('/menu/{id}', [MenuControllerApi::class, 'update']);
Route::get('/menu/delete/{id}', [MenuControllerApi::class, 'delete']);
Route::get('/menu/pictures/{name}', [MenuControllerApi::class, 'get_picture']);
Route::post('/menu', [MenuControllerApi::class, 'store']);
Route::get('/menu_total', [MenuControllerApi::class, 'total']);

Route::get('/review', [ReviewControllerApi::class, 'index']);
Route::get('/review/{id}', [ReviewControllerApi::class, 'show']);

Route::get('/shop', [ShopControllerApi::class, 'index']);
route::get('/shop_total', [ShopControllerApi::class, 'total']);
Route::get('/shop/{id}', [ShopControllerApi::class, 'show']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/employeeSchedule', [EmployeeScheduleControllerApi::class, 'index']);
    Route::get('/employeeSchedule/{id}', [EmployeeScheduleControllerApi::class, 'show']);

    Route::get('/employeeTask', [EmployeeTaskControllerApi::class, 'index']);
    Route::get('/employeeTask/{id}', [EmployeeTaskControllerApi::class, 'show']);

    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
