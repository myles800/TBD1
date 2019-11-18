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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::prefix('sponser')->group(function () {
    Route::get('/','SponserController@index')->name('sponser');
    Route::put('/changeTier', 'SponserController@changeTier')->name('sponser_edit_post');
});

Route::prefix('profiel')->group(function () {
    Route::get('/', 'UserController@index')->name('profiel');
    Route::put('/changePassword', 'UserController@changePassword')->name('changePassword');
    Route::put('/changeProfiel', 'UserController@changeProfiel')->name('changeProfiel');
});

Route::prefix('sessie')->group(function () {
    Route::get('/details/{id}','SessieController@details')->name('sessie_details');
    Route::get('/create','SessieController@create')->name('sessie_create');
    Route::get('/edit/{id}','SessieController@edit')->name('sessie_edit');
    Route::put('/editPost/{id}', 'SessieController@editPost')->name('sessie_edit_post');
    Route::post('/createPost', 'SessieController@createPost')->name('sessie_create_post');
});
Route::prefix('game')->group(function () {
    Route::get('/details/{id}','GameController@details')->name('game_details');
    Route::get('/create','GameController@create')->name('game_create');
    Route::get('/edit/{id}','GameController@edit')->name('game_edit');
    Route::put('/editPost/{id}', 'GameController@editPost')->name('game_edit_post');
    Route::post('/createPost', 'GameController@createPost')->name('game_create_post');
});

Route::prefix('admin')->group(function () {
    Route::get('/login','Auth\AdminLoginController@showLogin')->name('admin_login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin_login_submit');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/home','AdminHomeController@index')->name('admin_home');
});

