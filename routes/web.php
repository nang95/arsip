<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('referensi', 'ReferensiController@index')->name('referensi');
    Route::get('referensi/create', 'ReferensiController@create')->name('referensi.create');
    Route::get('referensi/edit', 'ReferensiController@edit')->name('referensi.edit');

    Route::get('surat_masuk', 'SuratMasukController@index')->name('surat_masuk');
    Route::get('surat_masuk/create', 'SuratMasukController@create')->name('surat_masuk.create');
    Route::get('surat_masuk/edit', 'SuratMasukController@edit')->name('surat_masuk.edit');
    
    Route::get('disposisi', 'DisposisiController@index')->name('disposisi');
    Route::get('disposisi/create', 'DisposisiController@create')->name('disposisi.create');
    Route::get('disposisi/edit', 'DisposisiController@edit')->name('disposisi.edit');
    
    Route::get('surat_keluar', 'SuratKeluarController@index')->name('surat_keluar');
    Route::get('surat_keluar/create', 'SuratKeluarController@create')->name('surat_keluar.create');
    Route::get('surat_keluar/edit', 'SuratKeluarController@edit')->name('surat_keluar.edit');

    Route::get('agenda_surat_masuk', 'AgendaSuratMAsukController@index')->name('agenda_surat_masuk');
    Route::get('agenda_surat_masuk/cetak', 'AgendaSuratMAsukController@cetak')->name('agenda_surat_masuk.cetak');
});