<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::where(['user_id' => Auth::id()])->paginate(10);

        return view('user.laporan', ['laporan' => $laporan]);
    }
    // Cetak Untuk Data Laporan
    public function cetak()
    {
        $laporan = Laporan::where(['user_id' => Auth::id()])->get();

        return view('user.cetaklaporan', ['laporan' => $laporan]);
    }
}
