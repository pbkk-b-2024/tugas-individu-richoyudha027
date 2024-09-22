<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1Controller;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['controller' => Pertemuan1Controller::class], function () {
    Route::match(['get', 'post'], '/ganjil-genap', 'genapGanjil')->name('ganjil-genap');
    Route::match(['get', 'post'], '/fibonacci', 'fibonacci')->name('fibonacci');
    Route::match(['get', 'post'], '/prima', 'bilanganPrima')->name('prima');
});

Route::get('/result-param/{param1}/{param2?}', function ($param1, $param2 = null) {
    return view('result-param', compact('param1', 'param2'));
})->name('result-param');

Route::get('/param', function () {
    return view('param');
})->name('param');

Route::fallback(function () {
    return view('fallback');
});
