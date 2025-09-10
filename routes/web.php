<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/organisasi', function () {
        return view('kegiatan.organisasi');
    })->name('organisasi');

    Route::get('/kepanitiaan', function () {
        return view('kegiatan.kepanitiaan');
    })->name('kepanitiaan');

    Route::get('/magang', function () {
        return view('kegiatan.magang');
    })->name('magang');

    Route::get('/tridharma', function () {
        return view('kegiatan.tridharma');
    })->name('tridharma');

    Route::get('/lomba', function () {
        return view('kegiatan.lomba');
    })->name('lomba');

    Route::get('/fakultas', function () {
        return view('akademik.fakultas');
    })->name('fakultas');

    Route::get('/prodi', function () {
        return view('akademik.prodi');
    })->name('prodi');

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
});
require __DIR__ . '/auth.php';
