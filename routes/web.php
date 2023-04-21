<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactInfosController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [SiteController::class, 'index'])->name('home-page');

Route::prefix('posts')->group(function () {
    Route::get('{name}', [PostsController::class, 'customerShow'])->name('show-customer-post');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/template', [TemplateController::class, 'index'])->name('template');
    Route::get('/template/{id}', [TemplateController::class, 'edit'])->name('edit-template');
    Route::put('/template/{id}', [TemplateController::class, 'update'])->name('update-template');

    Route::get('/links', [LinksController::class, 'edit'])->name('edit-links');
    Route::put('/links', [LinksController::class, 'update'])->name('update-links');

    Route::get('/contatos', [ContactInfosController::class, 'index'])->name('contact');
    Route::put('/contatos', [ContactInfosController::class, 'update'])->name('contact-update');

    Route::get('/menus', [MenuController::class, 'index'])->name('menus');
    Route::get('/menus/create', [MenuController::class, 'create'])->name('create-menu');
    Route::get('/menus/{id}', [MenuController::class, 'show'])->name('show-menu');
    Route::post('menus', [MenuController::class, 'store'])->name('store-menu');
    Route::put('/menus/{id}/status', [MenuController::class, 'updateStatus'])->name('update-menu-status');

    Route::post('/posts/store', [PostsController::class, 'store'])->name('store-post');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('create-post');
    Route::get('/posts', [PostsController::class, 'index'])->name('list-posts');
    Route::get('/posts/{url}', [PostsController::class, 'show'])->name('show-post');
});
