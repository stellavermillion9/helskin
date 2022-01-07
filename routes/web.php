<?php

use App\Http\Controllers\BannersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IklanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/readmore/{product}', [HomeController::class, 'readmore']);

// Route::get('index', function () {
//     return view('index');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('products', ProductController::class);

Route::resource('banners', BannersController::class);

Route::resource('testi', TestimoniController::class);

Route::resource('iklan', IklanController::class);
