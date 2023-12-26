<?php

use Illuminate\Support\Facades\Route;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/',  [TaskController::class, 'homepage'])->name('home');
    Route::post('/save',  [TaskController::class, 'saveTask'])->name('save');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::post('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::get('/delete-task/{id}',  [TaskController::class, 'delete'])->name('delete.task');
});

Auth::routes();
