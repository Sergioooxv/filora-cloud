<?php

use Illuminate\Support\Facades\Route;



//======================================
// AUTH
//======================================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/actualizar-contrasena', function () {
    return view('auth.reset-password');
})->name('reset');

Route::get('/olvide-mi-contrasena', function () {
    return view('auth.forgot-password');
})->name('forgot');

// ================================
// DASHBOARD
// ================================
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

// ================================
// EXPLORADOR
// ================================
Route::get('/drive', function () {
    return view('explorer.index');
})->name('explorer');

Route::get('/drive/folder', function () {
    return view('explorer.folder');
})->name('explorer.folder');

Route::get('/shared', function () {
    return view('explorer.shared');
})->name('shared');

// ================================
// RECIENTES Y DESTACADOS
// ================================
Route::get('/recent', function () {
    return view('recent.index');
})->name('recent');

Route::get('/favorites', function () {
    return view('favorites.index');
})->name('favorites');

// ================================
// PAPELERA
// ================================
Route::get('/trash', function () {
    return view('trash.index');
})->name('trash');

// ================================
// ALMACENAMIENTO
// ================================
Route::get('/storage', function () {
    return view('settings.storage');
})->name('storage');

// ================================
// AJUSTES
// ================================
Route::get('/settings', function () {
    return view('settings.index');
})->name('settings');

Route::get('/settings/profile', function () {
    return view('settings.profile');
})->name('settings.profile');

Route::get('/settings/security', function () {
    return view('settings.security');
})->name('settings.security');

Route::get('/settings/notifications', function () {
    return view('settings.notifications');
})->name('settings.notifications');

Route::get('/settings/billing', function () {
    return view('settings.billing');
})->name('settings.billing');

// ================================
// ADMIN
// ================================
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

// Usuarios
Route::get('/admin/users', function () {
    return view('admin.users.index');
})->name('admin.users.index');

Route::get('/admin/users/create', function () {
    return view('admin.users.create');
})->name('admin.users.create');

Route::get('/admin/users/{id}/edit', function () {
    return view('admin.users.edit');
})->name('admin.users.edit');

Route::get('/admin/users/{id}', function () {
    return view('admin.users.show');
})->name('admin.users.show');

// Equipos
Route::get('/admin/teams', function () {
    return view('admin.teams.index');
})->name('admin.teams.index');

Route::get('/admin/teams/create', function () {
    return view('admin.teams.create');
})->name('admin.teams.create');

Route::get('/admin/teams/{id}/edit', function () {
    return view('admin.teams.edit');
})->name('admin.teams.edit');

// Logs
Route::get('/admin/logs', function () {
    return view('admin.logs.index');
})->name('admin.logs.index');

// Storage
Route::get('/admin/storage', function () {
    return view('admin.storage.index');
})->name('admin.storage.index');

// Configuración
Route::get('/admin/settings', function () {
    return view('admin.settings.index');
})->name('admin.settings.index');
