<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\CetakController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('barang.dashboard');
    })->name('dashboard');
    Route::get('barangmasuk', function () {
        return view('page.barangmasuk');
    })->name('barangmasuk');
    Route::get('barangkeluar', function () {
        return view('page.barangkeluar');
    })->name('barangkeluar');

    Route::get('cetak', [CetakController::class, 'cetakData'])->name('cetak');


    // Route::get('/cetak', 'CetakController@cetak')->name('cetak');
    // Route::get('/cetak', function () {
    //     return view('page.cetak');
    // })->name('cetak');

    Route::resource('barang', barangController::class);
});



















// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('index', function () {
//     return view('barang.index');
// })->name('index');
// Route::get('create', function () {
//     return view('barang.create');
// })->name('create');
