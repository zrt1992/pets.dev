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
Route::get('/edit/{refferal_id}', 'AddController@editRefferal')->name('refferal_edit');
Route::post('/edit/{id}', 'AddController@posteditRefferal')->name('postrefferaledit');

//Route::get('post-ad')
Route::group(['prefix' => 'ad'], function () {
    Route::get('/', 'AddController@index')->name('postadd');
    Route::get('catgories', 'AddController@getChildCats')->name('getChildCats');
    Route::post('post', 'AddController@postAdPost')->name('postAd');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::group(['prefix' => 'ad'], function () {
        Route::get('/', 'Admin\AddController@index')->name('showallads');
        Route::get('/edit-ad/{id}', 'Admin\AddController@edit')->name('editadd');
        Route::post('/edit-ad/{id}', 'Admin\AddController@postEdit')->name('posteditadd');
        Route::get('/delete-image/{id}', 'Admin\AddController@deleteimage')->name('deleteimage');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/add', 'Admin\CategoryController@showAddCategoryForm')->name('addCategory');
        Route::get('/edit/{id}', 'Admin\CategoryController@showEditCategoryForm')->name('editCategory');
        Route::post('/add', 'Admin\CategoryController@postAddCategory')->name('postaddCategory');
        Route::post('/edit/{id}', 'Admin\CategoryController@postAddCategory')->name('posteditCategory');

    });
});
