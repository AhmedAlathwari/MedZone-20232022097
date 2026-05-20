<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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

Route::get(
    '/admin',
    [AdminHomeController::class, 'index']
);

Route::get(
    '/admin/category',
    [AdminCategoryController::class, 'index']
);

Route::get(
    '/admin/category/create',
    [AdminCategoryController::class, 'create']
);

Route::post(
    '/admin/category/store',
    [AdminCategoryController::class, 'store']
);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});