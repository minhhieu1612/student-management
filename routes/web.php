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

Route::get('/', 'HocsinhController@index')->name('hocsinhs.index');

Route::prefix('hosohocsinh')->group(function () {
    Route::get('/', 'HocsinhController@index')->name('hocsinhs.index');
    Route::get('/taomoi', 'HocsinhController@create');
    Route::post('/', 'HocsinhController@store');
    Route::post('/import', 'HocsinhController@import');
    Route::get('/xem/{MaHocSinh}', 'HocsinhController@show');
    Route::get('/sua/{MaHocSinh}', 'HocsinhController@edit');
    Route::get('/xoa/{MaHocSinh}', 'HocsinhController@delete');
    Route::put('/sua/{MaHocSinh}', 'HocsinhController@update');
});

Route::prefix('lophoc')->group(function () {
    Route::get('/', 'LophocController@index')->name('lophocs.index');
    Route::get('/taomoi', 'LophocController@create');
    Route::post('/taomoi', 'LophocController@store1');
    Route::get('/xem/{id}', 'LophocController@show');
    Route::get('/sua/{id}', 'LophocController@show_edit');
    Route::post('/sua/{id}', 'LophocController@edit');
    Route::get('/xoa/{id}', 'LophocController@delete');
    Route::get('/them', 'LophocController@add');
    Route::post('/them', 'LophocController@store2');
});

Route::prefix('monhoc')->group(function () {
    Route::get('/', 'MonhocController@index')->name('monhocs.index');
    Route::get('/taomoi', 'MonhocController@create');
    Route::post('/taomoi', 'MonhocController@store');
    Route::get('/xem/{id}', 'MonhocController@show');
    Route::get('/sua/{id}', 'MonhocController@show_edit');
    Route::post('/sua/{id}', 'MonhocController@edit');
    Route::get('xoa', 'MonhocController@delete');
    Route::delete('/', 'MonhocController@destroy');
});

Route::prefix('diem')->group(function() {
    Route::get('/', 'DiemmonhocController@index')->name('diemmonhocs.index');
    Route::get('/them', 'DiemmonhocController@add');
    Route::get('/sua', 'DiemmonhocController@viewEdit');
    Route::post('/sua', 'DiemmonhocController@edit');
    Route::post('/', 'DiemmonhocController@store');
    Route::post('/xem', 'DiemmonhocController@show');
});

Route::prefix('baocao')->group(function() {
    Route::get('/theomon', 'BaocaoController@bySubject')->name('baocaos.bySubject');
    Route::get('/theohocky', 'BaocaoController@bySemester');
});

Route::prefix('cauhinh')->group(function() {
    Route::get('/', 'CauhinhController@index')->name('cauhinhs.index');
    Route::get('/sua', 'CauhinhController@edit');
});
