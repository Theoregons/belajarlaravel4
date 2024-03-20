<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/angka/{angka}', function ($angka) {
    return 'nilai : '. $angka;
});

Route::get('/penjumlahan/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil penjumlahan : '. $angka + $angka2;
});

Route::get('/pengurangan/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil pengurangan : '. $angka - $angka2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'lampu', 'pensil', 'buku'];
    return view('table', compact('data'));
});


// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class);
