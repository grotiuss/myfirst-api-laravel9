<?php

use Illuminate\Support\Facades\Route;

use App\Models\Posts;

use App\Http\Controllers\PostsController;

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

Route::get('/', function() {
    $data = [
        'title' => "HOME",
        'main_text' => "Hello world"
    ];
    return view('home', $data);
});

Route::get('/about', function() {
    $data = [
        'title' => "About",
        'main_text' => "Halaman About"
    ];
    return view('about', $data);
});

Route::get('/post', [PostsController::class, 'index']);

Route::get('/post/{slug}', [PostsController::class, 'select']);


Route::get('/start', function () {
    return view('welcome');
});

// Route::get('/greeting', function () {
//     return "Hello world";
// });
