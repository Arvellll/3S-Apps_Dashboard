<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("/", 'landing.login.login')->name('login');
Route::get('/', function () {
    return view('landing.login.login');
})->name('login');
Route::get('dashboard', function () {
    return view('landing.dashboard.dashboard');
})->name('dashboard');


// Route::get('onboarding', function () {
//     return view('landing.onboarding.onboarding');
// })->name('onboarding');
Route::get('contract', function () {
    return view('landing.contract.contract');
})->name('contract');
// Route::get('resign', function () {
//     return view('landing.resign.resign');
// })->name('resign');
// Route::get('surat', function () {
//     return view('landing.surat.surat');
// })->name('surat');
Route::get('pengaturan', function () {
    return view('landing.pengaturan.pengaturan');
})->name('pengaturan');


Route::name('onboarding.')->prefix('onboarding.')->group(function () {
            Route::view('/', 'landing.onboarding.onboarding')->name('index');
            Route::view('/detail', 'landing.onboarding.onboarding-detail')->name('detail');
            
        });
Route::name('resign.')->prefix('resign.')->group(function () {
            Route::view('/', 'landing.resign.resign')->name('index');
            Route::view('/paklaring', 'landing.resign.resign-paklaring')->name('paklaring');
            
        });

Route::name('surat.')->prefix('surat.')->group(function () {
    Route::view('/', 'landing.surat.surat')->name('index');
    Route::view('/tambah', 'landing.surat.tambah-surat')->name('tambah');
    Route::view('/detail', 'landing.surat.detail-surat')->name('detail');
    
});

Route::name('karyawan.')->prefix('karyawan')->group(function () {
    Route::view('/', 'landing.karyawan.karyawan')->name('index');

    Route::name('internal.')->prefix('internal')->group(function () {
        Route::view('/', 'landing.karyawan.internal.karyawan')->name('index');
        Route::view('/internal', 'landing.karyawan.internal.internal')->name('internal');
        Route::view('/detail', 'landing.karyawan.internal.detail-kar')->name('detail');
    });

    Route::name('eksternal.')->prefix('eksternal')->group(function () {
        Route::view('/', 'landing.karyawan.eksternal.eksternal')->name('index');
        Route::view('/eksternal', 'landing.karyawan.eksternal.eksternal')->name('eksternal');
        Route::view('/tambah', 'landing.karyawan.eksternal.tambah-karyawan')->name('tambah');
        Route::view('/detail', 'landing.karyawan.eksternal.detail-kar-eks')->name('detail');
        Route::view('/hapus', 'landing.karyawan.eksternal.hapus-karyawan-modal')->name('hapus');
        Route::view('/detail-contract', 'landing.karyawan.eksternal.detail-contract')->name('detail-contract');
        Route::view('/unggah-file', 'landing.karyawan.eksternal.unggah-file')->name('unggah-file');
        Route::view('/detail-pwkt', 'landing.karyawan.eksternal.detail-pwkt')->name('detail-pwkt');
          });
});


    
