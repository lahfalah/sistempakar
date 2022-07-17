<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Laporan;
use App\Models\Symptoms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersDiagnosisController extends Controller
{
    public function index()
    {
        return view('user/diagnosis', [
            'title' => 'Halaman Diagnosis',
            'data' => Symptoms::all(),
        ]);
    }

    public function diagnosaken(Request $request)
    {
        //Cari Id Input Aturan
        $deseases = $request->input('deseases');
        if (!$request->input('deseases')) {
            return redirect()
                ->route('diagnosis')
                ->with([
                    'aturan' => 'Isi Gejala..!!',
                ]);
        }
        $diagnosa = Diagnosa::all();
        $isFound = false;
        $result = null;
        foreach ($diagnosa as $d) {
            $aturan = $d->item()->get();
            if (!$isFound) {
                $temp = [];

                foreach ($aturan as $ditemukan) {
                    $temp[] = strval($ditemukan->gejala->id);
                }

                if ($deseases == $temp) {
                    $result = $d
                        ->penyakit()
                        ->get()
                        ->all()[0]->namapenyakit;
                    Laporan::create(['diagnosas_id'=> $d->id, 'user_id' => Auth::id()]);
                    return view('user.found', ['hasil' => $result]);
                    $result = $d[0]->penyakit;
                    $isFound = true;
                }
            }
        }
        if (!$isFound) {
            return redirect()
                ->route('diagnosis')
                ->with([
                    'maaf' => 'Penyakit Tidak Ditemukan',
                ]);
        }
    }
}
