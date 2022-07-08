<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformationsRequest;
use App\Http\Requests\UpdateInformationsRequest;
use App\Models\Informations;
use Illuminate\Http\Request;

class InformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Informations::all();
        return view('admin.informations.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $data = new Informations();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->save();
        return redirect()
            ->route('informations.index')
            ->with('success', 'Informasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Informations::findOrFail($id);
        return view('admin.informations.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Informations::findOrFail($id);
        return view('admin.informations.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInformationsRequest  $request
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $data = Informations::findOrFail($id);

        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        if ($data) {
            return redirect()
                ->route('informations.index')
                ->with([
                    'success' => 'Informasi Berhasil Di Edit',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again',
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Informations::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('informations.index')
                ->with([
                    'success' => 'Informasi Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->route('informations.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again',
                ]);
        }
    }
}
