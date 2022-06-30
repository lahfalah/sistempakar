<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Deseases;
use App\Models\Symptoms;
use App\Models\DiagnosaItem;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Diagnosa::all();
        return view('admin.diagnosis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Deseases::all();
        return view('admin.diagnosis.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'deseases_id'=>'required',
        ]);

        $data = new Diagnosa();
        $data->deseases_id=$request->deseases_id;
        $data->save();
        return redirect()->route('diagnosis.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function store_diagnose(Request $request)
    {
        $request->validate([
            'diagnosas_id'=>'required',
            'symptoms_id'=>'required',
        ]);

        $data = new DiagnosaItem();
        $data->diagnosas_id=$request->diagnosas_id;
        $data->symptoms_id=$request->symptoms_id;
        $data->save();
        return redirect()->route('diagnosis.index')->with('success', 'Rule Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Diagnosa::findOrFail($id);
        $gejala = DiagnosaItem::where(['diagnosas_id' => $id])->get();
        return view('admin.diagnosis.show', compact('data','gejala', "id"));
    }

    public function rule($id)
    {
        $gejala = Symptoms::all();
        return view("admin.diagnosis.rule", compact('gejala', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Diagnosa::findOrFail($id);
        return view('admin.diagnosis.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'deseases_id' => 'required',
        ]);

        $data = Diagnosa::findOrFail($id);

        $data->update([
            'deseases_id' => $request->deseases_id,
        ]);
        if ($data) {
            return redirect()
                ->route('diagnosis.index')
                ->with([
                    'success' => 'Data Berhasil Di Edit'
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
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Diagnosa::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('diagnosis.index')
                ->with([
                    'success' => 'Data Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('diagnosis.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
