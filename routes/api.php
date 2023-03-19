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
Route::get('/search', [\App\Http\Controllers\API\SearchController::class, 'search'])->name('search');
Route::resource('/cart',cartController::class);
Route::resource('/orders', OrdersController::class);
    Route::group(['middleware' =>'api_token'], function () {
        Route::post('/register', [\App\Http\Controllers\API\AuthUserController::class, 'register']);
        Route::post('/login', [\App\Http\Controllers\API\AuthUserController::class, 'login']);
        Route::post('/logout', [\App\Http\Controllers\API\AuthUserController::class, 'logout']);
        Route::get('/listuser', [\App\Http\Controllers\API\UserController::class, 'listuser']);
        Route::get('/my_acount', [\App\Http\Controllers\API\InfoUserPanelController::class, 'my_acount']);
        Route::get('/user_trust', [\App\Http\Controllers\API\InfoUserPanelController::class, 'user_trust']);
        Route::get('/user_orders', [\App\Http\Controllers\API\InfoUserPanelController::class, 'user_orders']);
        Route::get('/user_info', [\App\Http\Controllers\API\InfoUserPanelController::class, 'user_info']);
        Route::post('/edit_user', [\App\Http\Controllers\API\InfoUserPanelController::class, 'edit_user']);
        Route::post('/create_cart',[\App\Http\Controllers\API\CreateCartController::class,'create_cart']);
});
