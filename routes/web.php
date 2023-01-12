<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('referensi', 'ReferensiController@index')->name('referensi');
    Route::get('referensi/create', 'ReferensiController@create')->name('referensi.create');
    Route::get('referensi/edit', 'ReferensiController@edit')->name('referensi.edit');
});