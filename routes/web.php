<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TaskController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

Route::get('/tasks/search', [TaskController::class, 'search'])->name('tasks.search');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
