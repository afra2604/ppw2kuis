<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::resource('/', PostController::class);
Route::get('/{posts}', [PostController::class,'show'])->name('show');
Route::get('/{posts}/edit', [PostController::class,'edit'])->name('edit');
Route::put('/{posts}', [PostController::class,'update'])->name('update');
Route::delete('/{posts}', [PostController::class,'destroy'])->name('destroy');