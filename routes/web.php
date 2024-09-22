<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index']);

// Route untuk login
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [SessionController::class, 'index'])->name('login');  
    Route::post('/login', [SessionController::class, 'login']); 
});

// Route untuk halaman yang butuh login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD event routes (menggunakan middleware auth)
    Route::resource('/crud-event', EventController::class);

    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

// Fallback route jika tidak ditemukan halaman
Route::fallback(function () {
    return view('fallback');
});

Route::get('/my-events', [EventController::class, 'myEvents'])->name('my-events');
Route::post('/book-event/{event_id}', [EventController::class, 'bookEvent'])->name('book-event');
