<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubSubcategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::prefix('categories')->group(function() {
    Route::get('/create', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/', [CategoryController::class, 'index2'])->name('categories.index2');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{id}', [CategoryController::class, 'showupdate'])->name('categories.showupdate');
    Route::post('/', [CategoryController::class, 'create'])->name('categories.create');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

});

Route::prefix('sub-subcategories')->group(function () {
    Route::get('/create', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/', [CategoryController::class, 'index2'])->name('categories.index2');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{id}', [CategoryController::class, 'showupdate'])->name('categories.showupdate');
    Route::post('/', [CategoryController::class, 'create'])->name('categories.create');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::post('/', [ProductController::class, 'create'])->name('products.create');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
});
