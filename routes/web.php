<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/actualizar-contrasena', function(){
    return view('auth.reset-password');
})->name('reset');

Route::get('/olvide-mi-contrasena', function(){
    return view('auth.forgot-password');
})->name('forgot');