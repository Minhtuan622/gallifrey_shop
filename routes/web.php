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
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\BannerController;

Route::get('/', static function () {
  return view('welcome');
});

Route::middleware(['auth:admin', 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function (Router $route) {
    $route->get('/', [DashboardController::class, 'show'])->name('dashboard.show');

    $route->get('/orders', [OrderController::class, 'show'])->name('orders.show');
    $route->get('/orders/detail', [OrderController::class, 'detail'])->name('orders.detail');

    $route->prefix('products')
      ->name('products.')
      ->group(function () use ($route) {
        $route->get('/', [ProductController::class, 'index'])->name('show');
        $route->get('/create', [ProductController::class, 'create'])->name('create');
        $route->post('/create', [ProductController::class, 'store'])->name('store');
        $route->get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        $route->put('/update/{product}', [ProductController::class, 'update'])->name('update');
        $route->delete('/delete/{product}', [ProductController::class, 'destroy'])->name('delete');
      });

    Route::prefix('blogs')
      ->name('blogs.')
      ->group(function () use ($route) {
        $route->get('/', [BlogController::class, 'index'])->name('show');
        $route->get('/create', [BlogController::class, 'create'])->name('create');
        $route->post('/create', [BlogController::class, 'store'])->name('store');
        $route->get('/edit/{blog}', [BlogController::class, 'edit'])->name('edit');
        $route->put('/update/{blog}', [BlogController::class, 'update'])->name('update');
        $route->delete('/delete/{blog}', [BlogController::class, 'destroy'])->name('delete');
      });

    $route->get('/users', [UserController::class, 'show'])->name('users.show');
    $route->get('/users/edit', [UserController::class, 'showEdit'])->name('users.showEdit');

    Route::resource('banners', BannerController::class);

  });

Route::middleware(['auth', 'verified'])
  ->prefix('user')
  ->name('user.')
  ->group(function (Router $route) {
    $route->get('/home', [HomeController::class, 'show'])->name('home.show');

    $route->get('/products', [ProductsController::class, 'show'])->name('products.show');
    $route->get('/products/detail', [ProductsController::class, 'detail'])->name('products.detail');

    $route->get('/blogs', [UserBlogController::class, 'show'])->name('blogs.show');
    $route->get('/blogs/detail/{blog}', [UserBlogController::class, 'showDetail'])->name('blogs.showDetail');

    $route->get('/cart', [CartController::class, 'show'])->name('cart.show');
    $route->get('/about-us', [AboutUsController::class, 'show'])->name('about-us.show');
    $route->get('/contact', [ContactController::class, 'show'])->name('contact.show');
    $route->get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy.show');
    $route->get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms-of-service.show');
  });

Route::middleware(['auth'])
  ->prefix('user')
  ->name('profile.')
  ->group(function (Router $route) {
    $route->get('/profile', [ProfileController::class, 'edit'])->name('edit');
    $route->patch('/profile', [ProfileController::class, 'update'])->name('update');
    $route->delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
  });

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
