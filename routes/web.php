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