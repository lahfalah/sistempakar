<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeseasesController;
use App\Http\Controllers\SymptomsController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\UsersInformationsController;
use App\Http\Controllers\UsersDiagnosisController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DiagnosasItemController;
use App\Http\Controllers\LaporanController;
use App\Models\Diagnosa;

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
// CONTROLLER LOGIN REGISTER
// Controller Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Controller Login dan Logout
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// CONTROLLER USER
// Controller Informasi
Route::get('/', [UsersInformationsController::class, 'index']);
Route::get('/utama/{informasipengguna:id}', [UsersInformationsController::class, 'show']);
// Controller Diagnosis
Route::get('/diagnosis', [UsersDiagnosisController::class, 'index'])
    ->middleware('auth')
    ->name('diagnosis');
Route::post('/diagnosis', [UsersDiagnosisController::class, 'diagnosaken'])->middleware('auth');
// Controller Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');
Route::get('/cetak', [LaporanController::class, 'cetak'])->middleware('auth');

// CONTROLLER ADMIN
// Controller Halaman Utama
Route::get('/admin', function () {
    return view('admin.layouts.index');
})->middleware('admin');
// Controller Data Penyakit (Desesase)
Route::resource('/admin/deseases', DeseasesController::class)->middleware('admin');
// Controller Data Gejala (Symptom)
Route::resource('/admin/symptoms', SymptomsController::class)->middleware('admin');
// Controller Data Informasi
Route::resource('/admin/informations', InformationsController::class)->middleware('admin');
// Controller Data Aturan/Diagnosis
Route::resource('/admin/diagnosis', DiagnosaController::class)->middleware('admin');
Route::get('/admin/rule/{id}', [DiagnosaController::class, 'rule'])
    ->name('rule')
    ->middleware('admin');
Route::post('/admin/rule', [DiagnosaController::class, 'store_diagnose'])
    ->name('store_diagnose')
    ->middleware('admin');
//Controller Data Pengguna
Route::get('/admin/users', [RegisterController::class, 'semua'])->middleware('admin');
Route::get('/admin/users/create', function () {
    return view('admin.users.create');
})->middleware('admin');
Route::post('/admin/users/create', [RegisterController::class, 'storeadmin'])->middleware('admin');
