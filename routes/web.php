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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'asset_categories',
], function () {
    Route::get('/', 'AssetCategoriesController@index')
         ->name('asset_categories.asset_category.index');
    Route::get('/create','AssetCategoriesController@create')
         ->name('asset_categories.asset_category.create');
    Route::get('/show/{assetCategory}','AssetCategoriesController@show')
         ->name('asset_categories.asset_category.show')->where('id', '[0-9]+');
    Route::get('/{assetCategory}/edit','AssetCategoriesController@edit')
         ->name('asset_categories.asset_category.edit')->where('id', '[0-9]+');
    Route::post('/', 'AssetCategoriesController@store')
         ->name('asset_categories.asset_category.store');
    Route::put('asset_category/{assetCategory}', 'AssetCategoriesController@update')
         ->name('asset_categories.asset_category.update')->where('id', '[0-9]+');
    Route::delete('/asset_category/{assetCategory}','AssetCategoriesController@destroy')
         ->name('asset_categories.asset_category.destroy')->where('id', '[0-9]+');
});
