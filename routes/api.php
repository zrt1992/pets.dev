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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix' => 'v1'], function () {
    /**
     * Auth
     */
    Route::post('logout', 'Api\UserController@logout');
    Route::post('login', 'Api\UserController@authenticate');
    Route::post('register', 'Api\UserController@create');
    Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::resource('pets', 'Api\PetsController');
    Route::resource('search', 'Api\SearchController');
    /**
     * Product
     */
    Route::get('product', 'Api\ProductController@index');
    /**
     * Laundries
     */
    Route::post('nearest-laundry', 'Api\LaundryController@getNearByLocation');
    Route::get('laundries', 'Api\LaundryController@laundries');
    Route::group(['middleware' => 'jwt.auth',], function () {
        Route::post('order', 'Api\OrdersController@store');
        Route::post('password/change', 'Api\UserController@changePassword');
    });
});
