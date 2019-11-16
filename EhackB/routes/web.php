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
    return view('layouts/master',["sponser"=>$sponser]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::put('/edit', 'Auth\RegisterController@edit')->name('edit');

Route::name('Sessie.')->group(function () {

    Route::get('sessieDetails/{id}', 'SessieController@details')->name('details');



    Route::put('editPost/{id}', 'UseController@editPost')->name('editPost');

    Route::post('createPost', 'UseController@createPost')->name('createPost');

});

Route::prefix('admin')->group(function () {

    Route::get('/login','Auth\AdminLoginController@showLogin')->name('admin_login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin_login_submit');
    Route::get('/', 'AdminController@index')->name('admin');

});

