<?php

use Illuminate\Support\Facades\Route;
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
    // $user = User::creaet();
    // auth()->login($user);

    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/tasks', function () {
    return view('/mypage');
})->name('dashboard');

Route::get('/myTasks', [TasksController::class, 'index']);
Route::get('/createTasks', [TasksController::class, 'create']);
Route::post('/createTasks', [TasksController::class, 'store']);

Route::get('/supervision', [SupervisionController::class, 'index']);
