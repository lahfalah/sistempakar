<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5'],
            'kota' => ['required'],
            'tanggal' => ['required'],
            'level' => ['required'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Daftar Akun Berhasil');
    }

    public function storeadmin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5'],
            'level' => ['required'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/users')->with('success', 'Daftar Admin Berhasil');
    }

    public function semua()
    {
        $data = User::all();
        return view('admin.users.index', compact('data'));
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('users.index')
                ->with([
                    'success' => 'Data Admin Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->route('users.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again',
                ]);
        }
    }
}
