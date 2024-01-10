<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// x------------------------------Dashboard Controller ---------------------------------------------------------x

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dash');
// x------------------------------Dashboard Controller ----------------------------------------------------------x

// x--------------------------------login Controller -------------------------------------------------------------x
// Route::get('/admin/login',[LoginController::class,'login'])->name('login');
// Route::post('/logged/in',[LoginController::class,'logged'])->name('logged');
// x----------------------------------Task Controller -----------------------------------------------------------x
    Route::get('task',[TaskController::class,'index'])->name('task.index');
    Route::post('task.post',[TaskController::class,'add'])->name('task.add');
// x---------------------------------Employee Controller ---------------------------------------------------------x
    Route::get('employee',[EmployeeController::class,'index'])->name('employee.index');
    Route::post('employee/add',[EmployeeController::class,'add'])->name('employee.add');
// x---------------------------------Employee Controller ---------------------------------------------------------x
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
