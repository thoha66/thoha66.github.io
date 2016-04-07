<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('pentadbir.laman_utama_pentadbir');
    });

    Route::get('/laman-utama', function () {
        return view('pentadbir.laman_utama_pentadbir');
    })->name('laman-utama');

    Route::get('/buat-pengumuman', function () {
        return view('pentadbir.buat_pengumuman');
    })->name('buat-pengumuman');

    Route::get('/daftar-guru', function () {
        return view('pentadbir.daftar_guru');
    })->name('daftar-guru');

    Route::get('/daftar-pelajar', function () {
        return view('pentadbir.daftar_pelajar');
    })->name('daftar-pelajar');

    Route::get('/daftar-subjek', function () {
        return view('pentadbir.daftar_subjek');
    })->name('daftar-subjek');

    Route::get('/daftar-kelas', function () {
        return view('pentadbir.daftar_kelas');
    })->name('daftar-kelas');

    Route::get('/daftar-kelas-subjek', function () {
        return view('pentadbir.daftar_kelas_subjek');
    })->name('daftar-kelas-subjek');
});
