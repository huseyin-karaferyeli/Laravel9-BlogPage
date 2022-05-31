<?php

use App\Http\Controllers\AdminPanel\AdminUserConroller;
use App\Http\Controllers\AdminPanel\BlogController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']) -> name('home');

Route::get('/contact', [HomeController::class, 'contact']) -> name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage']) -> name('storemessage');
Route::post('/storecomment', [HomeController::class, 'storecomment']) -> name('storecomment');
Route::get('/about', [HomeController::class, 'about']) -> name('about');
Route::get('/references', [HomeController::class, 'references']) -> name('references');
Route::get('/detail/{id}', [HomeController::class, 'detail']) -> name('detail');
Route::get('/category/{id}/{slug}', [HomeController::class, 'category']) -> name('category');
Route::get('/like/{id}', [HomeController::class, 'like']) -> name('like');
Route::get('/faq', [HomeController::class, 'faq']) -> name('faq');
Route::view('/loginuser', 'home.login') -> name('loginuser');
Route::view('/registeruser', 'home.register') -> name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logoutuser']) -> name('logoutuser');//controller

Route::view('/loginadmin', 'admin.login') -> name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck']) -> name('loginadmincheck');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//*************************** ADMIN ****************************

Route::middleware('auth') -> group(function (){

    Route::prefix('userpanel') -> controller(UserController::class) -> name('userpanel.') -> group(function (){

        Route::get('/', 'index') -> name('index');

    });

    Route::middleware('admin') -> prefix('admin') -> name('admin.') -> group(function (){
        Route::get('/', [AdminController::class, 'index']) -> name('index');

        Route::get('/settings', [AdminController::class, 'setting']) -> name('setting');
        Route::post('/settings/update', [AdminController::class, 'settingUpdate']) -> name('setting.update');

        //*************************** CATEGORY ****************************

        Route::prefix('/category') -> name('category.') -> controller(CategoryController::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/create', 'create') -> name('create');
            Route::post('/store', 'store') -> name('store');
            Route::get('/edit/{id}', 'edit') -> name('edit');
            Route::post('/update/{id}', 'update') -> name('update');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::get('/delete/{id}', 'destroy') -> name('delete');

        });

        //*************************** BLOG ****************************

        Route::prefix('/blog') -> name('blog.') -> controller(BlogController::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/create', 'create') -> name('create');
            Route::post('/store', 'store') -> name('store');
            Route::get('/edit/{id}', 'edit') -> name('edit');
            Route::post('/update/{id}', 'update') -> name('update');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::get('/delete/{id}', 'destroy') -> name('delete');

        });

        //*************************** BLOG IMAGE GALLERY ****************************

        Route::prefix('/image') -> name('image.') -> controller(ImageController::class) -> group(function () {

            Route::get('/{pid}', 'index') -> name('index');
            Route::post('/store/{pid}', 'store') -> name('store');
            Route::get('/detail/{pid}/{id}', 'detail') -> name('detail');
            Route::get('/delete/{pid}/{id}', 'destroy') -> name('delete');

        });

        //*************************** ADMIN PANEL MESSAGES ****************************

        Route::prefix('/message') -> name('message.') -> controller(MessageController::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::post('/update/{id}', 'update') -> name('update');
            Route::get('/destroy/{id}', 'destroy') -> name('destroy');

        });

        //*************************** FAQ ****************************

        Route::prefix('/faq') -> name('faq.') -> controller(FaqController::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/create', 'create') -> name('create');
            Route::post('/store', 'store') -> name('store');
            Route::get('/edit/{id}', 'edit') -> name('edit');
            Route::post('/update/{id}', 'update') -> name('update');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::get('/delete/{id}', 'destroy') -> name('delete');

        });

        //*************************** COMMENTS ****************************

        Route::prefix('/comments') -> name('comments.') -> controller(CommentController::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::get('/delete/{id}', 'destroy') -> name('delete');
            Route::get('/update/{id}', 'update') -> name('update');

        });

        //*************************** USERS ****************************

        Route::prefix('/user') -> name('user.') -> controller(AdminUserConroller::class) -> group(function () {

            Route::get('/', 'index') -> name('index');
            Route::get('/show/{id}', 'show') -> name('show');
            Route::post('/addrole/{id}', 'addrole') -> name('addrole');
            Route::get('/delete/{id}', 'destroy') -> name('delete');
            Route::get('/deleterole/{uid}/{rid}', 'deleterole') -> name('deleterole');
            Route::get('/update/{id}', 'update') -> name('update');

        });
    });
});
