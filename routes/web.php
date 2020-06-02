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

Route::prefix('hosohocsinh')->group(function () {
    Route::get('/', 'HocsinhController@index')->name('hocsinhs.index');
    Route::post('/', 'HocsinhController@store');
    Route::get('/create', 'HocsinhController@create');
    Route::get('/delete', 'HocsinhController@delete');
    Route::delete('/', 'HocsinhController@deleted');
});

Route::prefix('lophoc')->group(function () {
    Route::get('/', 'LophocController@index')->name('lophocs.index');
    Route::post('/', 'LophocController@store');
    Route::get('/create', 'LophocController@create');
    Route::get('/delete', 'LophocController@delete');
    Route::delete('/', 'LophocController@deleted');
});
