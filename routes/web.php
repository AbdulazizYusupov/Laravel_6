<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UniversityController::class,'index']);
Route::get('/create-univer', [UniversityController::class, 'create']);
Route::post('/univer', [UniversityController::class, 'store']);
Route::post('/delete-univer', [UniversityController::class, 'destroy']);
Route::put('/update-univer/{univer}', [UniversityController::class, 'update'])->name('univer.update');
Route::get('/univer-search', [UniversityController::class, 'search'])->name('univer.search');
