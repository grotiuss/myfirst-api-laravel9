<?php

use Illuminate\Support\Facades\Route;

use App\Models\Posts;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;

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
Route::get('/about', [AboutController::class, 'index']);
Route::get('/post', [PostsController::class, 'index']);
Route::get('/post/{slug}', [PostsController::class, 'select']);

Route::get('/start', function () {
    return view('welcome');
});
