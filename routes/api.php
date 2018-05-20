<?php

use Illuminate\Http\Request;

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

//list bags
Route::get('bags', 'BagController@index');

//list single bag
Route::get('bag/{id}', 'BagController@show');

//create new bag
Route::post('bag', 'BagController@store');

// update bag
Route::put('bag', 'BagController@store');

// Delete bag
Route::delete('bag/{id}', 'BagController@destroy');
