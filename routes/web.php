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
Route::view('/applist', 'applist');
Route::get('app/{id}', function ($id) {
    return 'App '.$id;
});
Route::view('/up', 'up');
Route::get('/upload',  'UploadController@index');
Route::post('/upload', 'UploadController@uploadFile');