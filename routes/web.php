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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['role:super']], function(){
    Route::get('dashboard', App\Http\Controllers\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('dapodiksync', App\Http\Controllers\Admin\DapodikSync::class)->name('admin.dapodiksync');
    Route::get('ambildata', App\Http\Controllers\Admin\AmbilDataDapodik::class)->name('admin.ambildata');
    //Master
    Route::get('master-sekolah', App\Http\Controllers\Admin\Master\DataSekolah::class)->name('admin.master.sekolah');
    Route::get('master-guru', App\Http\Controllers\Admin\Master\DataGuru::class)->name('admin.master.guru');
    Route::get('master-peserta-didik', App\Http\Controllers\Admin\Master\DataPesertaDidik::class)->name('admin.master.pesertadidik');
    Route::get('master-kelas', App\Http\Controllers\Admin\Master\DataKelas::class)->name('admin.master.kelas');
    Route::get('master-mapel', App\Http\Controllers\Admin\Master\DataMapel::class)->name('admin.master.mapel');
});
