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
    Route::get('/taomoi', 'HocsinhController@create');
    Route::post('/', 'HocsinhController@store');
    Route::post('/import', 'HocsinhController@import');
    Route::get('/xem/{MaHocSinh}', 'HocsinhController@show');
    Route::get('/sua/{MaHocSinh}', 'HocsinhController@edit');
    Route::put('/sua/{MaHocSinh}', 'HocsinhController@update');
    Route::delete('/xoa/{MaHocSinh}', 'HocsinhController@destroy');
});

Route::prefix('lophoc')->group(function () {
    Route::get('/', 'LophocController@index')->name('lophocs.index');
    Route::get('/taomoi', 'LophocController@create');
    Route::post('/taomoi', 'LophocController@store1');
    Route::get('/xem', 'LophocController@show');
    Route::get('/sua/{MaLopHoc}', 'LophocController@edit');
    Route::get('/them', 'LophocController@add');
    Route::post('/them', 'LophocController@store2');
});

Route::prefix('monhoc')->group(function () {
    Route::get('/', 'MonhocController@index')->name('monhocs.index');
    Route::get('/taomoi', 'MonhocController@create');
    Route::post('/taomoi', 'MonhocController@store');
    Route::get('/xem/{MaMonHoc}', 'MonhocController@show');
    Route::get('/sua/{MaMonHoc}', 'MonhocController@edit');
    Route::get('xoa', 'MonhocController@delete');
    Route::delete('/', 'MonhocController@destroy');
});

Route::prefix('diem')->group(function() {
    Route::get('/', 'DiemmonhocController@index')->name('diemmonhocs.index');
    Route::get('/them', 'DiemmonhocController@add');
    Route::get('/sua', 'DiemmonhocController@viewEdit');
    Route::post('/sua', 'DiemmonhocController@edit');
    Route::post('/', 'DiemmonhocController@store');
});

Route::prefix('baocao')->group(function() {
    Route::get('/theomon', 'BaocaoController@bySubject')->name('baocaos.bySubject');
    Route::get('/theohocky', 'BaocaoController@bySemester');
});

Route::prefix('cauhinh')->group(function() {
    Route::get('/', 'CauhinhController@index')->name('cauhinhs.index');
    Route::get('/sua', 'CauhinhController@edit');
});
