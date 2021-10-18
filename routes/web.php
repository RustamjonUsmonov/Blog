<?php

use App\Http\Controllers\{CategoryController, CommentController, PostController};
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
// useless routes
// Just to demo sidebar dropdown links active states.
    Route::view('/buttons/text', 'buttons-showcase.text')->name('buttons.text');
    Route::view('/buttons/icon', 'buttons-showcase.icon')->name('buttons.icon');
    Route::view('/buttons/text-icon', 'buttons-showcase.text-icon')->name('buttons.text-icon');

    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentController::class);
});
require __DIR__ . '/auth.php';
