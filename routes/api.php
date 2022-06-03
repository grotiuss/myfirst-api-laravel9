<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Blog;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['get', 'post'], '/test', function(Request $request) { 
    //we can use more than one different method for the same route without create more
    $data = [
        'status' => 200,
        'messagge' => "Hello motto!!!"
    ];
    return response()->json($data, $data['status']);
});

Route::get('/test-get', function(Request $request) {
    $data = [
        'status' => 200,
        'message' => "Hello world"
    ];
    return response()->json($data, $data['status']);
});

Route::post('/test-post', function(Request $request) {
    $data = [
        'status' => 200,
        'message' => "Hello world"
    ];
    return response()->json($data, $data['status']);
});
