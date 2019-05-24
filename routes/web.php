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
Route::get('/AdminDashboard', "AdminController@index");
Route::get('/AdminDashboard/Logout', "AdminController@logout");
