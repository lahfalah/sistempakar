<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Symptoms;
use Illuminate\Http\Request;

class UsersDiagnosisController extends Controller
{
    public function index()
    {
        
        return view('user/diagnosis',[
            "title" => "Halaman Diagnosis",
            "data" => Symptoms::all()
        ]);
    }

    public function diagnosaken(Request $request)
    {
        $deseases = $request->input("deseases");
        $diagnosa = Diagnosa::all();
        $isFound = false;
        $result = NULL;
        foreach($diagnosa as $d){
            $kontol = $d->item()->get();
            if(!$isFound){
            $temp = [];

                foreach($kontol as $ewe){
                    $temp[] = strval($ewe->gejala->id); 
                } 
                $count = count(array_diff($deseases, $temp));
                if($count == 0){
                    dd($d->penyakit()->get()->all()[0]->namapenyakit);
                    $result = $d[0]->penyakit;
                    $isFound = true;
                }
            }
            

        }

        if(!$isFound){
            dd("Eweh panyakitan");
        }
    }
    
}
