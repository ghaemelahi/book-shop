<?php

use App\Http\Controllers\API\cartController;
use App\Http\Controllers\OrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/', [\App\Http\Controllers\HomebookController::class, 'index'])->name('index');
Route::get('/books', [\App\Http\Controllers\API\BooksController::class, 'shopbooks'])->name('books');
Route::get('/introduction', [\App\Http\Controllers\API\IntrodactionController::class, 'introduction'])->name('introduction');
Route::resource('/cart',cartController::class);
Route::resource('/orders', OrdersController::class);
    Route::post('/logout', [\App\Http\Controllers\API\AuthUserController::class, 'logout']);
    Route::post('/register', [\App\Http\Controllers\API\AuthUserController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\API\AuthUserController::class, 'login']);
    Route::group(['middleware' =>'api_token'], function () {
});
