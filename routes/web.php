<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;

use App\Http\Controllers\Admin\ImageController as AdminImageController;



Route::get(
    '/home',
    [HomeController::class, 'index']
);

Route::get(
    '/test/{id}/{number}',
    [HomeController::class, 'calculation']
);

Route::get(
    '/product/{id}',
    [HomeController::class, 'product']
)->name('product');

Route::get(
    '/categoryproducts/{id}/{slug}',
    [
        HomeController::class,
        'categoryproducts'
    ]
)->name(
    'categoryproducts'
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



Route::prefix('admin')
->name('admin.')
->group(function () {



    Route::prefix('category')
    ->name('category.')
    ->controller(
        AdminCategoryController::class
    )
    ->group(function () {

        Route::get(
            '/',
            'index'
        )->name('index');

        Route::get(
            '/create',
            'create'
        )->name('create');

        Route::post(
            '/store',
            'store'
        )->name('store');

        Route::get(
            '/show/{id}',
            'show'
        )->name('show');

        Route::get(
            '/edit/{id}',
            'edit'
        )->name('edit');

        Route::post(
            '/update/{id}',
            'update'
        )->name('update');

        Route::get(
            '/destroy/{id}',
            'destroy'
        )->name('destroy');

    });



    Route::prefix('product')
    ->name('product.')
    ->controller(
        AdminProductController::class
    )
    ->group(function () {

        Route::get(
            '/',
            'index'
        )->name('index');

        Route::get(
            '/create',
            'create'
        )->name('create');

        Route::post(
            '/store',
            'store'
        )->name('store');

        Route::get(
            '/show/{id}',
            'show'
        )->name('show');

        Route::get(
            '/edit/{id}',
            'edit'
        )->name('edit');

        Route::post(
            '/update/{id}',
            'update'
        )->name('update');

        Route::get(
            '/destroy/{id}',
            'destroy'
        )->name('destroy');

    });



    Route::prefix('image')
    ->name('image.')
    ->controller(
        AdminImageController::class
    )
    ->group(function () {

        Route::get(
            '/{product_id}',
            'index'
        )->name('index');

        Route::post(
            '/store/{product_id}',
            'store'
        )->name('store');

        Route::get(
            '/destroy/{product_id}/{id}',
            'destroy'
        )->name('destroy');

    });

});



Route::middleware([
    'auth:sanctum',
    config(
        'jetstream.auth_session'
    ),
    'verified',
])->group(function () {

    Route::get(
        '/dashboard',
        function () {

            return view(
                'dashboard'
            );

        }

    )->name(
        'dashboard'
    );

});