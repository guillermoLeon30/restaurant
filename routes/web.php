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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function (){
  Route::prefix('local')->group(function (){
    Route::get('menusLocal/{local}', 'localController@menusLocal');
    Route::post('agregarMenu', 'localController@agregarMenu');
  });
  Route::resource('local', 'localController');
  
  Route::resource('menu', 'menuController');
  Route::prefix('menu')->group(function (){
    Route::get('items/{menu}', 'MenuController@items');
  });

  Route::resource('item', 'itemController');
});
