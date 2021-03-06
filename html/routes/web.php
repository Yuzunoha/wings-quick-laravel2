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
Route::get('test', 'TestController@index');
Route::get('hello', 'HelloController@index');
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list');
Route::get('hello/list', 'HelloController@list');
Route::get('view/escape', 'ViewController@escape');
Route::get('view/isset', 'ViewController@isset');
Route::get('view/while', 'ViewController@while');
Route::get('view/master', 'ViewController@master');
Route::get('route/param/{id?}', 'RouteController@param');
Route::get('ctrl/plain', 'CtrlController@plain');
Route::get('ctrl', 'CtrlController@index');
Route::get('ctrl/form', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');
