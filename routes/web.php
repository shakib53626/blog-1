<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});
Route::get('/contact', [ContactController::class, 'Contact'])->name('admin.contact');
Route::get('/', [ContactController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/create/task', [TaskController::class, 'create'])->name('create.task');
Route::post('/insert/task', [TaskController::class, 'store'])->name('insert.task');
Route::get('/Task', [TaskController::class, 'index'])->name('task.index');
Route::get('/Task/{id}', [TaskController::class, 'show'])->name('task.show');
Route::get('/Task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/Task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/Task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');


