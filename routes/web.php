<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TasksCreatedByMe;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SupervisionController;

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


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TasksController::class, 'index']);
    Route::delete('/dashboard/{task}', [TasksController::class, 'destroy']);
    Route::get('/tasks_created_by_me', [TasksController::class, 'createdByMe']);
    Route::get('/tasks/create', [TasksController::class, 'create']);
    Route::post('/tasks/create', [TasksController::class, 'store']);
    Route::get('/employees', [EmployeesController::class, 'index']);
    Route::get('/employee/{user}', [EmployeesController::class, 'show']);
    Route::patch('/employee/{user}/edit', [EmployeesController::class, 'update']);
});
