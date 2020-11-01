<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/create', [DemoController::class, 'PopulateData']);
Route::get('/getPage1Data', [DemoController::class, 'GetPage1Data']);
Route::get('/getAllCategories', [DemoController::class, 'GetAllCategories']);
Route::get('/getAllProducts', [DemoController::class, 'GetAllProducts']);
Route::get('/getProductDetails/{id}', [DemoController::class, 'ProductDetails']);