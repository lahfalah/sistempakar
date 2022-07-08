<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeseasesRequest;
use App\Http\Requests\UpdateDeseasesRequest;
use Database\Seeders\DeseasesSeeder;
use App\Models\Deseases;
use Illuminate\Http\Request;

class DeseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Deseases::all();
        return view('admin.deseases.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodepenyakit' => 'required',
            'namapenyakit' => 'required',
        ]);

        $data = new Deseases();
        $data->kodepenyakit = $request->kodepenyakit;
        $data->namapenyakit = $request->namapenyakit;
        $data->save();
        return redirect()
            ->route('deseases.index')
            ->with('success', 'Penyakit Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deseases  $deseases
     * @return \Illuminate\Http\Response
     */
    public function show(Deseases $deseases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deseases  $deseases
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Deseases::findOrFail($id);
        return view('admin.deseases.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeseasesRequest  $request
     * @param  \App\Models\Deseases  $deseases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kodepenyakit' => 'required',
            'namapenyakit' => 'required',
        ]);

        $data = Deseases::findOrFail($id);

        $data->update([
            'kodepenyakit' => $request->kodepenyakit,
            'namapenyakit' => $request->namapenyakit,
        ]);

        if ($data) {
            return redirect()
                ->route('deseases.index')
                ->with([
                    'success' => 'Data Penyakit Berhasil Di Edit',
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
     * @param  \App\Models\Deseases  $deseases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Deseases::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('deseases.index')
                ->with([
                    'success' => 'Data Penyakit Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->route('deseases.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again',
                ]);
        }
    }
}
