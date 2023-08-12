<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RefugeController;

// Auth::routes();

Route::get('/', [PageController::class, 'accueil'])->name('login');

Route::resource('gestion_enquete', InfoController::class)->middleware('auth');
Route::get('/home', [PageController::class, 'home'])->name('home')->middleware('auth');
Route::get('print_info/{id}', [InfoController::class, 'print'])->middleware('can:isAdmin');
Route::get('print_info2/{id}', [InfoController::class, 'print2']);
Route::get('destroyInfo/{id}', [InfoController::class, 'destroy']);
Route::get('export_data', [InfoController::class, 'export_data'])->name('export_data');

Route::get('destroyUser/{id}', [UserController::class, 'destroy']);
Route::resource('gestion_users', UserController::class)->middleware('can:isAdmin');
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::get('form_des_users', [UserController::class, 'form_user'])->name('form_user');
Route::get('list_des_users', [UserController::class, 'list_user'])->name('list_user');
Route::post('add_User', [UserController::class, 'store2'])->name('store2');

Route::post('auth', [AuthController::class, 'login'])->name('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('gestion_alerts', AlertController::class)->middleware('auth');
Route::get('destroyAlert/{id}', [AlertController::class, 'destroy']);

Route::resource('gestion_posts', PostController::class)->middleware('auth');
Route::get('destroyPost/{id}', [PostController::class, 'destroy']);

Route::resource('gestion_comment', CommentController::class)->middleware('auth');

Route::resource('gestion_refuge', RefugeController::class)->middleware('auth');
