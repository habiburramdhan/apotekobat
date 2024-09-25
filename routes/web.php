<?php

//namespace App\Http\Controllers;
// namespace untuk mengatur alamat url
use Illuminate\Support\Facades\Route;
// use = import file
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MedicineController;

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

// / slash dinamakan path(halaman default)
// static method
// Route::httpMethod('/isi-path(kebab case)', [NamaController::class, 'namaFunc'])->name('identitas_unique_route');
// httpMethod :
// 1. get -> mengambil data/menampilkan halaman
// 2. post -> menambahkan data ke db
// 3. put/patch -> mengupdate data ke db
// 4. delete -> menghapus data dari db
Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');
//mengelola data obat

Route::get('/data-obat', [MedicineController::class, 'index'])->name('data_obat');
