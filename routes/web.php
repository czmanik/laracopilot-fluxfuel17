<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\PublicController;

// Public routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/o-nas', [PublicController::class, 'about'])->name('about');
Route::get('/sluzby', [PublicController::class, 'services'])->name('services');
Route::get('/produkty', [PublicController::class, 'products'])->name('products');
Route::get('/produkty/fotacek', [PublicController::class, 'fotacek'])->name('products.fotacek');
Route::get('/produkty/gastrotech', [PublicController::class, 'gastrotech'])->name('products.gastrotech');
Route::get('/produkty/mapOnCulture', [PublicController::class, 'maponculture'])->name('products.maponculture');
Route::get('/produkty/vyvoj-na-miru', [PublicController::class, 'custom'])->name('products.custom');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PublicController::class, 'blogPost'])->name('blog.post');
Route::get('/kontakt', [PublicController::class, 'contact'])->name('contact');
Route::post('/kontakt', [PublicController::class, 'contactStore'])->name('contact.store');

// Admin Auth
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Admin Projects
Route::get('/admin/projekty', [ProjectController::class, 'index'])->name('admin.projects.index');
Route::get('/admin/projekty/vytvorit', [ProjectController::class, 'create'])->name('admin.projects.create');
Route::post('/admin/projekty', [ProjectController::class, 'store'])->name('admin.projects.store');
Route::get('/admin/projekty/{id}/upravit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
Route::put('/admin/projekty/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
Route::delete('/admin/projekty/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');

// Admin Clients
Route::get('/admin/klienti', [ClientController::class, 'index'])->name('admin.clients.index');
Route::get('/admin/klienti/vytvorit', [ClientController::class, 'create'])->name('admin.clients.create');
Route::post('/admin/klienti', [ClientController::class, 'store'])->name('admin.clients.store');
Route::get('/admin/klienti/{id}/upravit', [ClientController::class, 'edit'])->name('admin.clients.edit');
Route::put('/admin/klienti/{id}', [ClientController::class, 'update'])->name('admin.clients.update');
Route::delete('/admin/klienti/{id}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');

// Admin Blog
Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/vytvorit', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
Route::get('/admin/blog/{id}/upravit', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::put('/admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

// Admin Messages
Route::get('/admin/zpravy', [MessageController::class, 'index'])->name('admin.messages.index');
Route::get('/admin/zpravy/{id}', [MessageController::class, 'show'])->name('admin.messages.show');
Route::delete('/admin/zpravy/{id}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');