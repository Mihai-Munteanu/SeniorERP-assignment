<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
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



    Route::get('/choose-the-roles', [RoleController::class, 'index']);
    Route::patch('/choose-the-roles/{user}', [RoleController::class, 'update']); // nu functioneaza;




});
