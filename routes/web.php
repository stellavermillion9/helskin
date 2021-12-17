<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::resource('upload', UploadController::class);*/

/*Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload/proses', [UploadController::class, 'store']);
Route::post('/upload/hapus/{id}', [UploadController::class, 'destroy']);
Route::get('/upload/edit', [UploadController::class, 'edit']);
Route::post('/upload/update/{id}', [UploadController::class, 'update']);*/

/*Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-list/{id}/edit', [ProductController::class, 'edit']);
Route::post('product-list/store', [ProductController::class, 'store']);
Route::get('product-list/delete/{id}', [ProductController::class, 'destroy']);*/

Route::resource('products', ProductController::class);
