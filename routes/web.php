<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'guest'], function(){
     Route::get('/login', [UserController::class ,'index'])->name('login');
     Route::post('/login', [UserController::class ,'store']);
     Route::get('/signup', [UserController::class ,'signup']);
     Route::post('/signup', [UserController::class ,'create']);
});

Route::group(['middleware' => 'auth'],function() {
     Route::get('/logout', [UserController::class ,'logout']);

     Route::get('storage/{id}/card', [productController::class ,'cardView']);
     Route::post('storage/{id}/card', [productController::class ,'addCard']);
     Route::get('{id}/deleteCard', [productController::class, 'deleteCard']);

     Route::get('/', [UserController::class, 'default']);
     Route::get('/product', [productController::class, 'index']);
     Route::get('{id}/edit', [productController::class, 'edit']);
     Route::post('{id}/edit', [productController::class, 'update']);
     Route::get('storage/{id}', [productController::class, 'payment']);
     Route::get('discount/{id}', [productController::class, 'discount']);
     Route::post('/product', [productController::class, 'create']);
     Route::get('/bkash',[productController::class, 'bkash']);
     Route::get('/nagad',[productController::class, 'nagad']);
     Route::get('/cash',[productController::class, 'cash']);
     Route::get('/search',[productController::class, 'Search']);
     Route::get('{id}/delete', [productController::class, 'delete']);
     
});

Route::get('send-mail',[MailController::class,'index']);

