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

//session
Route::get('/save', 'ShowController@DataSave');
Route::get('/show', 'SaveController@Datashow');
Route::get('/clear', 'SaveController@DataClear');
