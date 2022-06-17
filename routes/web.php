<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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
    return view('home');
})->middleware(['auth','verified'])->name('/');

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/product/{id}', [ProductDetailController::class, 'productDetail'])->name('productDetail');


// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth','verified'])->name('/');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/category/add', [CategoryController::class, 'create'])->name('admin.addCategory');
    Route::post('/admin/category/add', [CategoryController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.editCategory');
    Route::put('/admin/category/edit/{id}', [CategoryController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/product/add', [ProductController::class, 'create'])->name('admin.addProduct');
    Route::post('/admin/product/add', [ProductController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'editProduct'])->name('admin.editProduct');
    Route::put('/admin/product/edit/{id}', [ProductController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.deleteProduct');

    Route::post('/cart/{id}', [HomeController::class, 'addToCart'])->name('cart');
    Route::get('/cart', [HomeController::class, 'cart'])->name('showCart');
    Route::get('/cart/delete/{id}', [HomeController::class, 'deleteCart'])->name('deleteCart');
});


require __DIR__.'/auth.php';
