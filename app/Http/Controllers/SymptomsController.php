<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSymptomsRequest;
use App\Http\Requests\UpdateSymptomsRequest;
use App\Models\Symptoms;
use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Symptoms::all();
        return view('admin.symptoms.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.symptoms.create');
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
            'kodegejala'=>'required',
            'namagejala'=>'required',
        ]);
        $data = new Symptoms();
        $data->kodegejala=$request->kodegejala;
        $data->namagejala=$request->namagejala;
        $data->save();
        return redirect()->route('symptoms.index')->with('success', 'Gejala Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function show(Symptoms $symptoms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Symptoms::findOrFail($id);
        return view('admin.symptoms.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesymptomsRequest  $request
     * @param  \App\Models\symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kodegejala' => 'required',
            'namagejala' => 'required'
        ]);

        $data = Symptoms::findOrFail($id);

        $data->update([
            'kodegejala' => $request->kodegejala,
            'namagejala' => $request->namagejala,
        ]);

        if ($data) {
            return redirect()
                ->route('symptoms.index')
                ->with([
                    'success' => 'Data Gejala Berhasil Di Edit'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Symptoms::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('symptoms.index')
                ->with([
                    'success' => 'Data Gejala Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('symptoms.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
