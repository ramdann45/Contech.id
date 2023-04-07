<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// HOME CONTROLLER
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// ABOUT CONTROLLER
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// SERVICES CONTROLLER
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// PRODUCTS CONTROLLER
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// BLOGS CONTROLLER
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

// PORTOFOLIO CONTROLLER
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');

// CONTACT CONTROLLER
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('login.dashboard')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
