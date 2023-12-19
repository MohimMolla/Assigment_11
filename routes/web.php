<?php

use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resources([
    'product' => ProductController::class,
]);

Route::get('/sellshow/{id}', [ProductController::class, 'sellshow']);
//Route::post('/sell', [ProductController::class, 'sell']);
Route::post('/product/sell/{id}/{quantity}', [ProductController::class, 'sell']);

Route::get('/delet-product/{id}', [ProductController::class, 'delete']);

