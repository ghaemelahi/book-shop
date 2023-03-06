<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('index', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/', function () {
//     return Inertia::render('Dashboard');
// });


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
// Route::get('/',function(){
//     return view('index_book');
// });
Route::group(['middleware' => 'auth:api', 'perfix' => 'user'], function () {
    Route::get('/', [\App\Http\Controllers\UserpaneController::class . 'homepage'])->name('index');
    Route::get('/panel', [\App\Http\Controllers\UserpaneController::class, 'userpanel'])->name('userpanel');
    Route::get('/addtocart', function () {
        return view('shop.add_to_cart');
    });
});
Auth::routes();
Route::group(['middleware' => 'auth', 'prfix' => 'admin'], function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // });
    Route::resource('/users', UserController::class);
    Route::resource('/books', BooksController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/payments', PaymentsController::class);
    Route::resource('/trusts', TrustController::class);
    Route::post('dropzone', [\App\Http\Controllers\Book_ImageController::class, 'dropzoneUpload'])->name('dropzone');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::fallback(function () {
    return view('notfound');
});
