<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Category;
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
/*

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/




//Collection API
Route::apiResource('/category', 'CategoryController')->only(['show','store','update','destroy']);



// Single API

//Show item by id 
Route::get('/item/{id}', 'ItemController@show');



//Create item 
Route::post('/item', 'ItemController@create');

//Update item 
Route::put('/item/{id}', 'ItemController@update');

//Delete item 
Route::delete('/item/{id}', 'ItemController@delete');

