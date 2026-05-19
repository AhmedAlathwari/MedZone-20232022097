<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

Route::get(
    '/home',
    [HomeController::class, 'index']
);

Route::get(
    '/test/{id}/{number}',
    [HomeController::class, 'calculation']
);

Route::get(
    '/form',
    [HomeController::class, 'form']
);

Route::post(
    '/save',
    [HomeController::class, 'saveData']
);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get(
    '/admin',
    [AdminHomeController::class, 'index']
);

});