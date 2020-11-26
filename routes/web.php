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

Route::get('/', function () {
    return view('welcome');
});

Route::get('QianRen','UserController@qianren'); 
Route::get('WangJi','UserController@wangji'); 
Route::get('FenXiang','UserController@fenxiang'); 
Route::post('FenXiangDo','UserController@fenxiangdo'); 
Route::get('GanQing','UserController@ganqing'); 
Route::get('WenAan','UserController@wenan'); 
