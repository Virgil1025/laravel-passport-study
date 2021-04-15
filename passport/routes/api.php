<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

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

// Route::post('register', [RegisterController::class, 'register']);
// Route::post('login', [RegisterController::class, 'login']);
Route::post('/login', [RegisterController::class, 'login']);
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });

JsonApi::register('v1')->routes(function ($api) {
    // $api->post('register', [RegisterController::class, 'register']);
    // $api->post('login', [RegisterController::class, 'login']);
    // $api->resource('login')->controller('RegisterController');

    $api->resource('products')->middleware('auth:api');
});



