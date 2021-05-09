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
Route::get('/bible-study-request-form','BiblestudyController@index');
Route::post('/bible-study-form-create', 'BiblestudyController@create');
Route::get('/bible-study-requests', 'BiblestudyController@tableform');
Route::get('/thank-you','BiblestudyController@popup');

//Route::get('/thank-you ','BsformController@popup');
  