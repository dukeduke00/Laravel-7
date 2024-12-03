<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("/", [\App\Http\Controllers\HomeController::class,"index"]);

Route::get("/shop", [\App\Http\Controllers\ShopController::class, "getAllProducts"]);

Route::get("/contact", [\App\Http\Controllers\ContactController::class, "index"]);

Route::view("/about", "about");

Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, "sendContact"]);

Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, "getAllContacts"]);

Route::get("/admin/all-products", [\App\Http\Controllers\ProductController::class, "getAllProducts"]);

Route::get("/admin/add-product-form", [\App\Http\Controllers\ProductController::class, "formAddProduct"]);

Route::post("admin/add-product", [\App\Http\Controllers\ProductController::class, "addProduct"]);

Route::get("/admin/delete-product/{product}", [\App\Http\Controllers\ProductController::class, "deleteProduct"]);

Route::get("/admin/delete-contact/{contact}", [\App\Http\Controllers\ContactController::class, "deleteContact"]);
