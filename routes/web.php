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
// Login dan Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// HALAMAN PENGGUNA
Route::get('/', [UsersInformationsController::class, 'index']);
//Halaman informasi selengkapnya
Route::get('/utama/{informasipengguna:id}', [UsersInformationsController::class, 'show']);
Route::get('/diagnosis', [UsersDiagnosisController::class, 'index'])->middleware('auth')->name('diagnosis');
Route::post('/diagnosis', [UsersDiagnosisController::class, 'diagnosaken'])->middleware('auth');


Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');

// HALAMAN ADMIN
Route::get('/admin', function () {
    return view('admin.layouts.index');
})->middleware('admin');

Route::resource('/admin/deseases', DeseasesController::class)->middleware('admin');
Route::resource('/admin/symptoms', SymptomsController::class)->middleware('admin');
Route::resource('/admin/informations', InformationsController::class);
Route::resource('/admin/diagnosis', DiagnosaController::class)->middleware('admin');
Route::get('/admin/rule/{id}', [DiagnosaController::class, 'rule'])
    ->name('rule')
    ->middleware('admin');

Route::post('/admin/rule', [DiagnosaController::class, 'store_diagnose'])
    ->name('store_diagnose')
    ->middleware('admin');

Route::get('/admin/users', [RegisterController::class, 'semua'])->middleware('admin');
Route::get('/admin/users/create', function () {
    return view('admin.users.create');
})->middleware('admin');

Route::post('/admin/users/create', [RegisterController::class, 'storeadmin'])->middleware('admin');
