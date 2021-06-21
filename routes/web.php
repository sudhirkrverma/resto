<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('registerData','AuthController@register');
Route::post('loginData','AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::view('/','login');

// Auth::routes();
// Here we applying the middleware
Route::group(['middleware'=>'web'],function(){
    Route::get('/','RestoController@index');
    Route::get('list','RestoController@list');
    Route::get('add','RestoController@addResto');
    Route::post('add','RestoController@registerData');
    Route::get('/delete/{id}','RestoController@delete');
    Route::get('/edit/{id}','RestoController@edit');
    Route::post('/updateData','RestoController@updateData');

   
});
  
    Route::view('register','register');
    Route::view('login','login');
   





