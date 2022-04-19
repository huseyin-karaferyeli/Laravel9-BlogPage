<?php

use App\Http\Controllers\AdminPanel\BlogController;
use App\Http\Controllers\AdminPanel\CategoryController;
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

Route::get('/blog', [HomeController::class, 'blog']) -> name('blog');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//*************************** ADMIN ****************************

Route::prefix('admin') -> name('admin.') -> group(function (){
    Route::get('/', [AdminController::class, 'index']) -> name('index');

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
});
