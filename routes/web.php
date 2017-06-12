<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('homeMain');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider')->name('facebooklogin');
Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

//Route::get('post-ad')


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::group(['prefix' => 'category'], function () {
        Route::get('/add', 'Admin\CategoryController@showAddCategoryForm')->name('addCategory');
        Route::get('/edit/{id}', 'Admin\CategoryController@showEditCategoryForm')->name('editCategory');
        Route::post('/add', 'Admin\CategoryController@postAddCategory')->name('postaddCategory');
        Route::post('/edit/{id}', 'Admin\CategoryController@postAddCategory')->name('posteditCategory');

    });
});
