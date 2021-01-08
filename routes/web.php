<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\EmployeeController;
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
    Route::get('/welcome', [UserController::class, 'index']);
    Route::get('/dashboard', [TasksController::class, 'index']);
    Route::delete('/dashboard/{task}', [TasksController::class, 'destroy']);
    Route::get('/create-a-task', [TasksController::class, 'create']);
    Route::post('/create-a-task', [TasksController::class, 'store']);

    Route::get('/employee-list', [EmployeeController::class, 'index']);
    Route::get('/employee-list/edit/{user}', [EmployeeController::class, 'show']);
    Route::patch('/employee-list/edit/{user}', [EmployeeController::class, 'update']);


});
