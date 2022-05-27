<?php

use Illuminate\Support\Facades\Route;

use App\Models\Posts;

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

Route::get('/post', function() {
    $data = [
        'title' => "Post",
        'main_text' => "These datas are taken from Posts model",
        'posts' => Posts::select()
    ];

    return $data;
});

Route::get('/post/{slug}', function($slug) {
    $data = [
        'title' => "Post",
        'main_text' => "These datas are taken from Posts model",
        'posts' => Posts::select($slug)
    ];

    return $data;
});


Route::get('/start', function () {
    return view('welcome');
});

// Route::get('/greeting', function () {
//     return "Hello world";
// });
