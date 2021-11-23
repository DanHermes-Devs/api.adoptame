<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'store'])->name('api.register');

// Rutas para crear nuevas Categorias de post
Route::get('categories', [CategoryController::class, 'index'])->name('api.categories.index');
Route::post('categories', [CategoryController::class, 'store'])->name('api.categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('api.categories.show');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('api.categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('api.categories.destroy');

// Rutas para crear nuevos Tags
Route::get('tags', [TagController::class, 'index'])->name('api.tags.index');
Route::post('tags', [TagController::class, 'store'])->name('api.tags.store');
Route::get('tags/{tag}', [TagController::class, 'show'])->name('api.tags.show');
Route::put('tags/{tag}', [TagController::class, 'update'])->name('api.tags.update');
Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('api.tags.destroy');

// Rutas para crear nuevas Imagenes
Route::get('images', [ImageController::class, 'index'])->name('api.images.index');
Route::post('images', [ImageController::class, 'store'])->name('api.images.store');
Route::get('images/{image}', [ImageController::class, 'show'])->name('api.images.show');
Route::put('images/{image}', [ImageController::class, 'update'])->name('api.images.update');
Route::delete('images/{image}', [ImageController::class, 'destroy'])->name('api.images.destroy');

// Rutas para crear nuevos Posts
Route::get('posts', [PostController::class, 'index'])->name('api.posts.index');
Route::post('posts', [PostController::class, 'store'])->name('api.posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('api.posts.show');
Route::put('posts/{post}', [PostController::class, 'update'])->name('api.posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('api.posts.destroy');

// Rutas para crear nuevos Pets
Route::get('pets', [PetController::class, 'index'])->name('api.pets.index');
Route::post('pets', [PetController::class, 'store'])->name('api.pets.store');
Route::get('pets/{pet}', [PetController::class, 'show'])->name('api.pets.show');
Route::put('pets/{pet}', [PetController::class, 'update'])->name('api.pets.update');
Route::delete('pets/{pet}', [PetController::class, 'destroy'])->name('api.pets.destroy');
