<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informations;

class UsersInformationsController extends Controller
{
    public function index()
    {
        return view('user/utama', [
            'title' => 'Halaman Utama',
            'data' => Informations::all(),
        ]);
    }
    public function show($id)
    {
        $data = Informations::findOrFail($id);
        return view(
            'user/informasipengguna',
            [
                'title' => 'Informasi',
            ],
            compact('data'),
        );
    }
}
