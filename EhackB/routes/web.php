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
    $sponser=\App\Sponser::all();
    $sessie=\App\Sessie::all();
    $game=\App\Game::all();
    return view('layouts/master',["sponser"=>$sponser,"sessie"=>$sessie,"game"=>$game]);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::put('/edit', 'Auth\RegisterController@edit')->name('edit');

Route::prefix('sessie')->group(function () {

    Route::get('/create','SessieController@create')->name('sessie_create');

    Route::get('/edit/{id}','SessieController@edit')->name('sessie_edit');

    Route::put('editPost/{id}', 'SessieController@editPost')->name('sessie_edit_post');

    Route::post('createPost', 'SessieController@createPost')->name('sessie_create_post');

});
Route::prefix('game')->group(function () {

    Route::get('/create','GameController@create')->name('game_create');

    Route::get('/edit/{id}','GameController@edit')->name('game_edit');

    Route::put('editPost/{id}', 'GameController@editPost')->name('game_edit_post');

    Route::post('createPost', 'GameController@createPost')->name('game_create_post');

});

Route::prefix('admin')->group(function () {

    Route::get('/login','Auth\AdminLoginController@showLogin')->name('admin_login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin_login_submit');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/home','AdminHomeController@index')->name('admin_home');


});

