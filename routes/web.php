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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('kategori', 'KategoriController');
Route::resource('wilayah', 'WilayahController');
Auth::routes();

Route::get('admin', 'AdminController@index');

Route::get('/', 'HomeindexController@index');

Route::get('home', 'HomeController@index');
Route::get('trending', 'HomeController@trending');
Route::get('lokasi', 'HomeController@lokasi');
Route::get('kategoris', 'HomeController@kategori');
Route::get('objeks', 'HomeController@objek');
Route::get('about', 'HomeController@about');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('user', 'UserController');
Route::resource('submit', 'SubmitController');
Route::resource('acc', 'AccController');
Route::resource('objek', 'ObjekController');
