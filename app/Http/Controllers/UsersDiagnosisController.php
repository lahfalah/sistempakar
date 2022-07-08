<?php

namespace App\Http\Controllers;

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
    
}
