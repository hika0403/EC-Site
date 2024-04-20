<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])
->name('items');

Route::get('/item/{id}', [ItemController::class, 'showDetail'])
->name('item');

//カテゴリー機能
Route::get('/category/{id}', [ItemController::class, 'getCategory'])
->name('category');

//ログイン機能
Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegister'])
->name('register');

Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);

Route::middleware('auth')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'profile'])
    ->name('profile');

    Route::get('/mycart',[\App\Http\Controllers\ItemController::class,'myCart'])
    ->name('mycart');

    Route::post('/addmycart',[\App\Http\Controllers\ItemController::class,'addmyCart'])
    ->name('addmycart');  
});

Route::post('logout',[\App\Http\Controllers\UserController::class,'logout'])
->name('user.logout');

Route::get('/login',[\App\Http\Controllers\UserController::class,'showLogin'])
->name('login');

Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);

//カート機能
Route::delete('/cartdelete',[\App\Http\Controllers\ItemController::class, 'deleteCart'])
->name('cartdelete'); 