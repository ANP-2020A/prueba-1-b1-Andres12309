<?php

use App\Products;
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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('products', 'ProductsController@index');
Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('products/{product}', 'ProductsController@show');
    Route::post('products', 'ProductsController@store');
    Route::put('products/{product}', 'ProductsController@update');
    Route::delete('products/{product}', 'ProductsController@delete');
});
