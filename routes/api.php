<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Target class controller does not exist - Laravel 8 then use billow options Or write this 
|  protected $namespace = 'App\Http\Controllers' in RouteServiceProvider php file
|
*/

//Route::Resource('/products','App\Http\Controllers\ProductController');
Route::apiResource('/products','ProductController');

Route::group(['prefix'=>'products'],function(){
	Route::apiResource('/{product}/reviews','ReviewController');
});