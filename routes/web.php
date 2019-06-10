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

Route::get('/Dashboard', "DashboardController@index");
Route::get('/Admin', "DashboardController@adminLogin");
Route::post('/loginPost', "DashboardController@postLogin");

Route::get('/Admin/Dashboard', "AdminController@index");
Route::get('/Admin/Logout', "AdminController@logout");

Route::get('/Admin/Item', "ItemController@index");
Route::get('/Admin/Color', "ItemController@index");
Route::get('/Admin/Mark', "ItemController@index");