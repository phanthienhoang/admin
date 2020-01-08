<?php

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

Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/test', function () {
    return view('admin.layouts.master');
});

Route::get('/list', function () {
    return view('admin.pages.table.listproductline');
});

Route::get('/admin/loaisanpham','Home\HomeController@index')->name('productline.index');