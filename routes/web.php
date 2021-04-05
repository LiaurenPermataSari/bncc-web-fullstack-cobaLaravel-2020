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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Register',function(){
    return view('Register');
});

Route::post('/Welcome1','AuthController@reg');
*/

Route::get('/', function () {
    return view('AdminLTE.welcome1');
});


Route::get('/data-tables',function(){
    return view('AdminLTE.data-tables');
});


Route::get('/pertanyaan','question_table@index');
Route::get('/pertanyaan/create','question_table@create');
Route::post('/pertanyaan/store','question_table@store');
Route::post('/pertanyaan/{pertanyaan_id}/show','question_table@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit','question_table@edit');
Route::post('/pertanyaan/update','question_table@update');
Route::get('/pertanyaan/{pertanyaan_id}/destroy','question_table@destroy');