<?php

use App\Http\Controllers\AddProductForm;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AddProductForm::class, 'getFourProducts'])->name('index');

Route::get('/cart', function () {
    return view('cart-page');
});

Route::get('/magazin', [AddProductForm::class, 'index'])->name("all-products.page");

Route::get('/despre-noi', function () {
    return view('despre-noi');
})->name('despre-noi.page');
Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

Route::get('/single-product/{id}', [AddProductForm::class, 'getSingleProduct'])->name('single-product');

Route::get('/produs-cautat', [AddProductForm::class, 'getSingleProductBasedOnName'])->name('single-product-by-name');

Route::get('/admin-all-messages', [MessageController::class, 'show'])->name('admin-all-messages.page');
Route::post('/contact-post', [MessageController::class, 'index'])->name('addMessage.controller');


Route::get('/add-product', [ProductCategoryController::class, 'index'])->name('addProduct.page');
Route::post('/add-product', [AddProductForm::class, 'insertIntoDb'])->name('addProduct.controller');

Route::delete('/admin-all-products/{id}', [AddProductForm::class, 'destroyProduct'])->name('product.destroy');
Route::get('/admin-all-products', [AddProductForm::class, 'adminIndex'])->name('admin-all-products.page');

//register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerStore', [AuthController::class, 'store'])->name('register.store');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginAuthenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/clientAddOrderPage', [OrdersController::class, 'index'])->name('clientOrders.page');



Route::post('/clientAddOrder', [OrdersController::class, 'store'])->name('addOrder.store');


Route::get('locate/{lange}',[LocalizationController::class,'setLang']);
