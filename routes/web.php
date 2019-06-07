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

Route::get('/', 'MainController@index');

Route::get('/portfolio', 'MainController@portfolio');
Route::get('/about', 'MainController@about');

Route::get('/equipment', 'MainController@equipment');
Route::get('/equipment/sound-equipment', 'MainController@sound_equipment');
Route::get('/equipment/sound-equipment/acustic-systems', 'MainController@sound_equipment_acustic');

Route::get('/test-equipment', 'MainController@test');
Route::get('/test-equipment/{category}', 'MainController@test_sub');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
