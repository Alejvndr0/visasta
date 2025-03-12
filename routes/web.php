<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return 'Panel de administrador';
        });
        Route::resource('users', UserController::class); // Rutas para gestionar usuarios
    });

    Route::resource('clients', ClientController::class);
});

// En routes/web.php
Route::get('/visa', function () {
    return view('visa');
})->name('visa');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/package', function () {
    return view('package');
})->name('package');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');