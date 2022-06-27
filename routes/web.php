<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeseasesController;
use App\Http\Controllers\SymptomsController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\UsersInformationsController;

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
// HALAMAN PENGGUNA

Route::get('/', [UsersInformationsController::class, 'index']);
//Halaman informasi selengkapnya
Route::get('/utama/{informasipengguna:id}', [UsersInformationsController::class, 'show']);

Route::get('/diagnosis',  function(){
    return view('diagnosis',[
        "title"=>"Cek Diagnosis"
    ]);
});
Route::get('/laporan',  function(){
    return view('laporan',[
        "title"=>"Hasil Laporan"
    ]);
});


// KHUSUS ROUTE ADMIN DASHBOARD BERISI DATA DATA
Route::get('/admin',  function(){
    return view('admin.index');
});
Route::get('/admin/users',  function(){
    return view('admin.users.index');
});
// Route::get('/admin/informations',  function(){
//     return view('admin.informations.index');
// });
// Route::get('/admin/deseases',  function(){
//     return view('admin.deseases.index');
// });
// Route::get('/admin/symptoms',  function(){
//     return view('admin.symptom.index');
// });
Route::get('/admin/diagnosis',  function(){
    return view('admin.diagnosis.index');
});

//ROUTE CONTROLLER
Route::resource('/admin/deseases', DeseasesController::class);
Route::resource('/admin/symptoms', SymptomsController::class);
Route::resource('/admin/informations', InformationsController::class);
// Route::resource('/admin/diagnosis', DiagnosisController::class);
