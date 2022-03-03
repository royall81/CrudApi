<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ProductController;
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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('products', 'index');
    Route::get('products/{id}', 'show');

    Route::middleware('auth:sanctum')->group( function () {
        Route::post('products', 'store');
        Route::put('products/{id}', 'update');
        Route::delete('products/{id}', 'destroy');
    });

});


Route::controller(PostController::class)->group(function(){
    Route::get('posts', 'index');
    Route::get('posts/{id}', 'show');

    Route::middleware('auth:sanctum', 'admin')->group( function () {
        Route::post('posts', 'store');
        Route::put('posts/{id}', 'update');
        Route::delete('posts/{id}', 'destroy');   
    });

});
