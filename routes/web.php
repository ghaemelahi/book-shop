<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',function(){
    return view('index');
});
Route::get('/addtocart',function(){
    return view('shop.add_to_cart');
});
Auth::routes();
Route::group(['prefix'=>'admin'],function (){
    // 'middleware'=>'auth',
    Route::get('/', function () {
        return view('admin.index');
    });
    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/users',UserController::class);
    Route::resource('/books', BooksController::class);
    Route::resource('/orders',OrdersController::class);
    Route::resource('/payments',PaymentsController::class);
    Route::resource('/trusts',TrustController::class);
    // Route::post('attach', [\App\Http\Controllers\ImageController::class,'attach'])->name('image.attach');
    // Route::post('ck_upload', [\App\Http\Controllers\ImageController::class,'ck_upload'])->name('image.ck_upload');
    Route::post('dropzone', [\App\Http\Controllers\Book_ImageController::class, 'dropzoneUpload'])->name('dropzone');

    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::fallback(function () {
    return view('notfound');
});
