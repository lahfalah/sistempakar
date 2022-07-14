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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


// HALAMAN PENGGUNA

Route::get('/', [UsersInformationsController::class, 'index']);
//Halaman informasi selengkapnya
Route::get('/utama/{informasipengguna:id}', [UsersInformationsController::class, 'show']);

Route::get('/diagnosis', [UsersDiagnosisController::class, 'index']);

Route::get('/laporan',  function(){
    return view('user.laporan',[
        "title"=>"Hasil Laporan"
    ]);
});


// KHUSUS ROUTE ADMIN DASHBOARD BERISI DATA DATA
Route::get('/admin',  function(){
    return view('admin.layouts.index');
});
Route::get('/admin/users', [RegisterController::class, 'semua']);
// Route::get('/admin/informations',  function(){
//     return view('admin.informations.index');
// });
// Route::get('/admin/deseases',  function(){
//     return view('admin.deseases.index');
// });
// Route::get('/admin/symptoms',  function(){
//     return view('admin.symptom.index');
// });
// Route::get('/admin/diagnosis',  function(){
//     return view('admin.diagnosis.index');
// });

//ROUTE CONTROLLER
Route::resource('/admin/deseases', DeseasesController::class);
Route::resource('/admin/symptoms', SymptomsController::class);
Route::resource('/admin/informations', InformationsController::class);
Route::resource('/admin/diagnosis', DiagnosaController::class);
Route::get('/admin/rule/{id}', [DiagnosaController::class, 'rule'])->name('rule');
Route::post('/admin/rule', [DiagnosaController::class, 'store_diagnose'])->name('store_diagnose');

// Route::resource('/admin/diagnosis', DiagnosasController::class);
