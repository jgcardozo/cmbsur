<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::view('/donaciones','layouts.donaciones');

/* Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin'); */

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/roles', function () {
        return view('admin.roles');
    })->name('admin.roles');

    Route::get('/permisos', function () {
        return view('admin.permisos');
    })->name('admin.permisos');

    Route::get('/nosotros', function () {
        return view('admin.nosotros');
    })->name('admin.nosotros');

    Route::get('/nuestracasa', function () {
        return view('admin.nuestracasa');
    })->name('admin.nuestracasa');
});






