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

Route::prefix('materials')->group(function(){
  Route::get('tanks', 'MaterialsController@getTanks');
  Route::get('basic_materials/{sessionId}/{material}', 'MaterialsController@getBasicMaterials');
  Route::get('decoration/{sessionId}', 'MaterialsController@getDecoration');
  Route::get('ornament/{sessionId}', 'MaterialsController@getOrnaments');
  Route::get('fish/{sessionId}', 'MaterialsController@getFish');
});

Route::get('packages/{sessionId}', 'MaterialsController@getPackages');
Route::get('price/{sessionId}', 'PriceController@getPrice');
Route::post('client_info', 'ClientController@setCustomer');
Route::post('rent-price', 'PriceController@rentPrice');

Route::prefix('session')->group(function(){
  Route::post('create', 'SessionController@store');
  Route::put('update', 'SessionController@update');
  Route::get('show/{sessionId}', 'SessionController@show');
  Route::delete('destroy', 'SessionController@destroy');
  Route::get('confirm/{uid}', 'SessionController@sendConfirmation');
});

Route::get('newsletter/{email}', 'ClientController@saveToNewsletter');
