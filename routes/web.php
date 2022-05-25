<?php

use App\Http\Controllers\AdminPanel\BlogController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
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

Route::get('/about', [HomeController::class, 'about']) -> name('about');
Route::get('/references', [HomeController::class, 'references']) -> name('references');

Route::get('/detail/{id}', [HomeController::class, 'detail']) -> name('detail');

Route::get('/category/{id}/{slug}', [HomeController::class, 'category']) -> name('category');

Route::get('/like/{id}', [HomeController::class, 'like']) -> name('like');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//*************************** ADMIN ****************************

Route::prefix('admin') -> name('admin.') -> group(function (){
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
});
