<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::view('/donaciones','layouts.donaciones');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');






