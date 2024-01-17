<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

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

Route::get('/', [ProdukController::class, 'index'])->name('index')->middleware('auth');
Route::get('/detail/{id}', [ProdukController::class, 'show'])->name('detail')->middleware('auth');
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk')->middleware('auth');
// Route::get('/p', function () {return view('product-details');})->name('');

Route::get('login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'authenticate']);
Route::get('logout', [LoginController::class,'logout']);

Route::post('register', [RegisterController::class,'store']);
Route::get('/register', function () {
    return view('register');
});

Route::post('/add-to-cart', [CartController::class, 'store'])->name('add_to_cart');
