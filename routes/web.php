<?php

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

//Admin Panel Routes

Route::get('/admin', [AdminController::class, 'index']) -> name('admin');


//Admin Category Routes

Route::get('/admin/category', [CategoryController::class, 'index']) -> name('admin_category');
Route::get('/admin/category/create', [CategoryController::class, 'create']) -> name('admin_category_create');
Route::post('/admin/category/store', [CategoryController::class, 'store']) -> name('admin_category_store');
