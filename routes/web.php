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
Route::get('/Dashboard/All', "DashboardController@allProduct");
Route::post('/Dashboard/Login', "DashboardController@loginUsers");
Route::post('/Dashboard/Register', "DashboardController@registerUser");
Route::get('/Dashboard/Logout', "DashboardController@logoutUser");

Route::get('/Admin', "DashboardController@adminLogin");
Route::post('/loginPost', "DashboardController@postLogin");

Route::get('/Admin/Dashboard', "AdminController@index");
Route::get('/Admin/Logout', "AdminController@logout");

Route::get('/Admin/Item', "ItemController@index");
Route::get('/Admin/Item/Add', "ItemController@addItem");
Route::get('/Admin/Item/Update/{id}', "ItemController@updateItem");
Route::post('/Admin/Item/AddProccess', "ItemController@saveItem");
Route::post('/Admin/Item/Update/Save/{id}', "ItemController@updateItemSave");
Route::get('/Admin/Item/Delete/{id}', "ItemController@deleteItem");

Route::get('/Admin/Color', "ColorController@index");
Route::post('/Admin/ColorAdd', "ColorController@addColor");
Route::get('/Admin/ColorDelete/{id}', "ColorController@deleteColor");

Route::get('/Admin/Mark', "MerkController@index");
Route::post('/Admin/MarkAdd', "MerkController@addMark");
Route::get('/Admin/MarkDelete/{id}', "MerkController@deleteMark");