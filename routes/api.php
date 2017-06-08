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
Route::group(['prefix' => 'v1', 'middleware' => ['cors']], function () {
    /**
     * Auth
     */
    //Logout
    Route::post('logout', 'Api\UserController@logout');
    Route::post('login', 'Api\UserController@authenticate');
    //Register user
    Route::post('register', 'Api\UserController@create');
    //Password reset
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    //Storing  ad
    Route::post('pets', 'Api\PetsController@store');
    //Showing Categories
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'Api\Category@index');
        //Showing parent cats
        Route::get('parents', 'Api\Category@getParents');
    });
});
