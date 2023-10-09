<?php

use App\Http\Controllers\PostController;
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
Route::get('/',[PostController::class,'index'])->name('index');
Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/create',[PostController::class,'store'])->name('store');
Route::get('/{post}/edit',[PostController::class,'edit'])->name('edit');
Route::put('/{post}/edit',[PostController::class,'update'])->name('update');
Route::delete('/{post}',[PostController::class,'delete'])->name('delete');
Route::get('/{post}/show',[PostController::class,'show'])->name('show');
