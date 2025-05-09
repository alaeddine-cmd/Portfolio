<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevelopperController;

Route::get('/', [DevelopperController::class, 'fetch_me']);
Route::get('/profile', [DevelopperController::class, 'fetch_me'])->name('layouts.profile');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
