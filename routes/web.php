<?php

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

Route::get('/', function() {
    $data = [
        'main_text' => "Hello world",
        'tab_label' => "HOME"
    ];
    return view('home', $data);
});

Route::get('/start', function () {
    return view('welcome');
});

// Route::get('/greeting', function () {
//     return "Hello world";
// });
