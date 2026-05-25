<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;

use App\Http\Controllers\Admin\ImageController as AdminImageController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
Route::get(
    '/home',
    [HomeController::class, 'index']
);
Route::get(
'/faq',
[HomeController::class,'faq']
)->name('faq');
Route::get(
    '/test/{id}/{number}',
    [HomeController::class, 'calculation']
);

Route::get(
    '/product/{id}',
    [HomeController::class, 'product']
)->name('product');

Route::get(
    '/about',
    [HomeController::class, 'about']
)->name('about');

Route::get(
    '/references',
    [HomeController::class, 'references']
)->name('references');

Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contact');

Route::get(
    '/logoutuser',
    [
        HomeController::class,
        'logoutuser'
    ]
)->name(
    'logoutuser'
);

Route::get(
    '/admin/login',
    function ()
    {
        return view(
            'admin.login.login'
        );
    }
)->name(
    'adminlogin'
);

Route::post(
    '/admin/logincheck',
    [
        HomeController::class,
        'logincheck'
    ]
)->name(
    'adminlogincheck'
);


Route::post(
    '/storemessage',
    [
        HomeController::class,
        'storemessage'
    ]
)->name(
    'storemessage'
);
Route::post(
    '/storecomment',
    [
        CommentController::class,
        'store'
    ]
)->name(
    'storecomment'
);





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

Route::get(
    '/setting',
    [
        AdminHomeController::class,
        'settings'
    ]
)->name(
    'setting'
);

Route::post(
    '/setting/update',
    [
        AdminHomeController::class,
        'settingUpdate'
    ]
)->name(
    'setting.update'
);

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

Route::prefix('message')
->name('message.')
->controller(
    AdminMessageController::class
)
->group(function () {

    Route::get(
        '/',
        'index'
    )->name('index');

    Route::get(
        '/show/{id}',
        'show'
    )->name('show');

    Route::post(
        '/update/{id}',
        'update'
    )->name('update');

    Route::get(
        '/destroy/{id}',
        'destroy'
    )->name('destroy');

});

Route::prefix('faq')
->name('faq.')
->controller(
AdminFaqController::class
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

   

});

Route::get(
    '/admin/user',
    [
        AdminUserController::class,
        'index'
    ]
)->name(
    'admin.user.index'
);

Route::get(
    '/admin/user/{id}',
    [
        AdminUserController::class,
        'show'
    ]
)->name(
    'admin.user.show'
);

Route::post(
    '/admin/user/store/{id}',
    [
        AdminUserController::class,
        'store'
    ]
)->name(
    'admin.user.store'
);

Route::get(
    '/admin/user/delete/{userid}/{roleid}',
    [
        AdminUserController::class,
        'destroy'
    ]
)->name(
        'admin.user.delete'
);




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