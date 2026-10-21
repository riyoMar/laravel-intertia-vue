<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Main
Route::get('/', [ProductController::class, 'home']);
Route::get('home', [ProductController::class, 'home']);
Route::get('product', [ProductController::class, 'product']);
Route::get('about-us', [ProductController::class, 'aboutUs']);


// Admin
Route::post('store-product', [ProductController::class, 'storeProduct'])->middleware('auth');
Route::post('login', [AdminController::class, 'login']);
Route::post('logout', [AdminController::class, 'logout']);

Route::inertia('admin', 'AdminLogIn')->name('login')->middleware('guest');
Route::get('admin-view', [ProductController::class, 'productList'])->middleware('auth');
Route::inertia('create-product', 'AdminCreateProduct')->middleware('auth');
Route::get('editProduct/{product}', [ProductController::class, 'editProduct'])->middleware('auth');
Route::get('edit-contact/{contact}', [ContactController::class, 'editContact'])->middleware('auth');

Route::post('submit-edit-product/{product}', [ProductController::class, 'updateProduct'])->middleware('auth');
Route::post('update-contact/{contact}', [ContactController::class, 'updateContact'])->middleware('auth');

Route::delete('deleteProduct/{product}', [ProductController::class, 'dellProduct'])->middleware('auth');
Route::delete('deleteImage/{product}', [ProductController::class, 'dellImage'])->middleware('auth');
