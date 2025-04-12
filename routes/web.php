<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevelopperController;
use App\Http\Controllers\ExperienceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [DevelopperController::class, 'fetch_me'])->name('layouts.profile');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/create-symlink', function (){
    symlink(storage_path('/app/public'), public_path('storage'));
    echo "Symlink Created. Thanks";
});


