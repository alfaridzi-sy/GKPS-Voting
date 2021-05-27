<?php

namespace App\Http\Controllers;

use App\Absent_Detail;
use Illuminate\Http\Request;

class AbsentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absent_detail = Absent_Detail::all();
        return view('absent_detail.index', ["absent__details" => $absent_detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absent_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absent_Detail::create($request->all());
        return redirect('/absent_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absent_Detail  $absent_Detail
     * @return \Illuminate\Http\Response
     */
    public function show($id_detail_absensi)
    {
        $absent_detail = Absent_Detail::find($id_detail_absensi);
        return view('absent_detail.show', ["absent__details" => $absent_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absent_Detail  $absent_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id_detail_absensi)
    {
        $absent_detail = Absent_Detail::find($id_detail_absensi);
        return view('absent_detail.update', ["absent__details" => $absent_detail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absent_Detail  $absent_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_detail_absensi)
    {
        $absent_detail = Absent_Detail::find($id_detail_absensi);
        $absent_detail->update($request->all());
        return redirect('/absent_detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absent_Detail  $absent_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detail_absensi)
    {
        Absent_Detail::destroy($id_detail_absensi);
        return redirect('/absent_detail');
    }
}
