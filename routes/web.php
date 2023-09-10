<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
Route::get('/{filter?}', [TodoController::class, 'index']); // صفحه اصلی
Route::post('/add', [TodoController::class, 'add']); // اد کردن
Route::get('/delete/{id}', [TodoController::class, 'delete']); // پاک کردن
Route::get('/done/{id}', [TodoController::class, 'done']); // پاک کردن
Route::get('/editForm/{id}', [TodoController::class, 'editForm']); // فرم ادیت
Route::post('/edit', [TodoController::class, 'edit']);