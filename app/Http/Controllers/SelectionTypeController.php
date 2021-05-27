<?php

namespace App\Http\Controllers;

use App\Selection_Type;
use Illuminate\Http\Request;

class SelectionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selection_type = Selection_Type::all();
        return view('selection_type.index', ["selection_types" => $selection_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('selection_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Selection_Type::create($request->all());
        return redirect('/selection_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Selection_Type  $selection_Type
     * @return \Illuminate\Http\Response
     */
    public function show($id_pemilihan)
    {
        $selection_type = Selection_Type::find($id_pemilihan);
        return view('selection_type.show', ["selection_types" => $selection_type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Selection_Type  $selection_Type
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemilihan)
    {
        $selection_type = Selection_Type::find($id_pemilihan);
        return view('selection_type.update', ["selection_types" => $selection_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Selection_Type  $selection_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pemilihan)
    {
        $selection_type = Selection_Type::find($id_pemilihan);
        $selection_type->update($request->all());
        return redirect('/selection_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Selection_Type  $selection_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemilihan)
    {
        Selection_Type::destroy($id_pemilihan);
        return redirect('/selection_type');
    }
}
