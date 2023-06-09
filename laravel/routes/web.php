<?php

use Illuminate\Support\Facades\Route;

use App\Models\Pegawai;
use App\Models\JabatanPegawai;
use App\Models\Kontrak;
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

//frontend

Route::get('/', function () {

    $jumlah_pegawai = Pegawai::count();
    $jumlah_jabatan = JabatanPegawai::count();
    $jumlah_kontrak = Kontrak::count();
    return view('dashboard', [
        'jumlah_pegawai' => $jumlah_pegawai,
        'jumlah_jabatan' => $jumlah_jabatan,
        'jumlah_kontrak' => $jumlah_kontrak,
    ]);
});


Route::get('/pegawai', function () {
    return view('pegawai');
});
Route::get('/kontrak', function () {
    return view('kontrak');
});
Route::get('/jabatan', function () {
    return view('jabatan');
});

//backend

Route::apiResource('/api/pegawai', App\Http\Controllers\Api\PegawaiController::class);
Route::apiResource('/api/jabatan', App\Http\Controllers\Api\JabatanController::class);
Route::apiResource('/api/kontrak', App\Http\Controllers\Api\KontakController::class);


