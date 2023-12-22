<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->mi('home');

Route::get('/product', [ProductController::class, 'produk'])
    ->middleware('auth', 'admin');
Route::get('/product/product/create', [ProductController::class, 'create'])
    ->middleware('atuh', 'admin');
Route::post('/product', [ProductController::class, 'store'])
    ->middleware('atuh', 'admin');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])
    ->middleware('atuh', 'admin');
Route::put('/product/{id}', [ProductController::class, 'update'])
    ->middleware('atuh', 'admin');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])
    ->middleware('atuh', 'admin');

Route::get('/user', [UserController::class, 'user']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'profil']);
