<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductsController;
use App\Http\Controllers\User\BlogController as  UserBlogController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:admin', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::get('/orders', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/detail', [OrderController::class, 'detail'])->name('orders.detail');
    Route::get('/products', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/edit', [ProductController::class, 'showEdit'])->name('products.showEdit');
    Route::get('/blogs', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/edit', [BlogController::class, 'showEdit'])->name('blogs.showEdit');
    Route::get('/users', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/edit', [UserController::class, 'showEdit'])->name('users.showEdit');
});

Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function () {
    Route::get('/home', [HomeController::class, 'show'])->name('home.show');
    Route::get('/products', [ProductsController::class, 'show'])->name('products.show');
    Route::get('/products/detail', [ProductsController::class, 'detail'])->name('products.detail');
    Route::get('/blogs', [UserBlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/edit', [UserBlogController::class, 'showDetail'])->name('blogs.showDetail');
    Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
    Route::get('/about-us', [AboutUsController::class, 'show'])->name('about-us.show');
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy.show');
    Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms-of-service.show');
});

Route::middleware(['auth'])->prefix('user')->name('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
