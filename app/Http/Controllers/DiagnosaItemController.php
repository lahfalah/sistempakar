<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiagnosaItemRequest;
use App\Http\Requests\UpdateDiagnosaItemRequest;
use App\Models\DiagnosaItem;

class DiagnosaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiagnosaItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiagnosaItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiagnosaItem  $diagnosaItem
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosaItem $diagnosaItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiagnosaItem  $diagnosaItem
     * @return \Illuminate\Http\Response
     */
    public function edit(DiagnosaItem $diagnosaItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiagnosaItemRequest  $request
     * @param  \App\Models\DiagnosaItem  $diagnosaItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiagnosaItemRequest $request, DiagnosaItem $diagnosaItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiagnosaItem  $diagnosaItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiagnosaItem $diagnosaItem)
    {
        //
    }
}
