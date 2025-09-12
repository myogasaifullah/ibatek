<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\KepaniitiaanController;
use App\Http\Controllers\TridharmaController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('organisasi', OrganizationController::class)->names([
    'index' => 'organisasi',
    'create' => 'organisasi.create',
    'store' => 'organisasi.store',
    'show' => 'organisasi.show',
    'edit' => 'organisasi.edit',
    'update' => 'organisasi.update',
    'destroy' => 'organisasi.destroy'
    ]);

    Route::resource('kepanitiaan', KepaniitiaanController::class)->names([
    'index' => 'kepanitiaan',
    'create' => 'kepanitiaan.create',
    'store' => 'kepanitiaan.store',
    'show' => 'kepanitiaan.show',
    'edit' => 'kepanitiaan.edit',
    'update' => 'kepanitiaan.update',
    'destroy' => 'kepanitiaan.destroy'
]);

Route::resource('magang', MagangController::class)->names([
    'index' => 'magang',
    'create' => 'magang.create',
    'store' => 'magang.store',
    'show' => 'magang.show',
    'edit' => 'magang.edit',
    'update' => 'magang.update',
    'destroy' => 'magang.destroy'
]);

Route::resource('tridharma', TridharmaController::class)->names([
    'index' => 'tridharma',
    'create' => 'tridharma.create',
    'store' => 'tridharma.store',
    'show' => 'tridharma.show',
    'edit' => 'tridharma.edit',
    'update' => 'tridharma.update',
    'destroy' => 'tridharma.destroy'
]);

Route::resource('lomba', LombaController::class)->names([
    'index' => 'lomba',
    'create' => 'lomba.create',
    'store' => 'lomba.store',
    'show' => 'lomba.show',
    'edit' => 'lomba.edit',
    'update' => 'lomba.update',
    'destroy' => 'lomba.destroy'
]);

Route::resource('fakultas', FakultasController::class)->names([
    'index' => 'fakultas',
    'create' => 'fakultas.create',
    'store' => 'fakultas.store',
    'show' => 'fakultas.show',
    'edit' => 'fakultas.edit',
    'update' => 'fakultas.update',
    'destroy' => 'fakultas.destroy'
])->parameters([
    'fakultas' => 'fakultas',
]);

Route::resource('prodi', ProdiController::class)->names([
    'index' => 'prodi',
    'create' => 'prodi.create',
    'store' => 'prodi.store',
    'show' => 'prodi.show',
    'edit' => 'prodi.edit',
    'update' => 'prodi.update',
    'destroy' => 'prodi.destroy'
]);

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::get('/kesimpulan', function () {
    return view('kesimpulan');
})->name('kesimpulan');

    Route::resource('users', \App\Http\Controllers\UserController::class)->names([
        'index' => 'user',
        'create' => 'user.create',
        'store' => 'user.store',
        'show' => 'user.show',
        'edit' => 'user.edit',
        'update' => 'user.update',
        'destroy' => 'user.destroy'
    ]);
require __DIR__ . '/auth.php';
