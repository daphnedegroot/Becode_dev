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


Route::get('/game','ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessages');

Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/game', 'GamesController@index')->name('game');

//Route::post('/send','ChatsController@send');


Route::get('/home', 'HomeController@index')->name('home');


