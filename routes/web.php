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
    Route::post('/', 'HocsinhController@destroy');
});

Route::prefix('lophoc')->group(function () {
    Route::get('/', 'LophocController@index')->name('lophocs.index');
    Route::get('/create', 'LophocController@create');
    Route::post('/create', 'LophocController@store1');
    Route::get('/add', 'LophocController@add');
    Route::post('/add', 'LophocController@store2');
});

Route::prefix('monhoc')->group(function () {
    Route::get('/', 'MonhocController@index')->name('monhocs.index');
    Route::get('/create', 'MonhocController@create');
    Route::post('/create', 'MonhocController@store');
    Route::get('/delete', 'MonhocController@delete');
    Route::delete('/', 'MonhocController@destroy');
});

Route::prefix('diem')->group(function() {
    Route::get('/', 'DiemmonhocController@index')->name('diemmonhocs.index');
    Route::get('/add', 'DiemmonhocController@add');
    Route::get('/edit', 'DiemmonhocController@edit');
    Route::post('/', 'DiemmonhocController@store');
});
