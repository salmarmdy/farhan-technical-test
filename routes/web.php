<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

Route::get('/', [HomeController::class, 'index'])->name('home');

//News
Route::get('/news', [NewsController::class, 'index'])->name('index');
Route::post('/news/create', [NewsController::class, 'create'])->name('create');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('edit');
Route::post('/news/{id}/update', [NewsController::class, 'update'])->name('update');
Route::get('/news/{id}/delete', [NewsController::class, 'delete'])->name('delete');

//api
Route::get('/', [HomeController::class, 'getNewsApi']);