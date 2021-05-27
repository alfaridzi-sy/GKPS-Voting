<?php

namespace App\Http\Controllers;

use App\Total_Absent_Session;
use Illuminate\Http\Request;

class TotalAbsentSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_absent_session = Total_Absent_Session::all();
        return view('total_absent_session.index', ["total_absent_sessions" => $total_absent_session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('total_absent_session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Total_Absent_Session::create($request->all());
        return redirect('/total_absent_session');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Total_Absent_Session  $total_Absent_Session
     * @return \Illuminate\Http\Response
     */
    public function show($id_jumlah_sesi_absen)
    {
        $total_absent_session = Total_Absent_Session::find($id_jumlah_sesi_absen);
        return view('total_absent_session.show', ["total_absent_sessions" => $total_absent_session]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Total_Absent_Session  $total_Absent_Session
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jumlah_sesi_absen)
    {
        $total_absent_session = Total_Absent_Session::find($id_jumlah_sesi_absen);
        return view('total_absent_session.update', ["total_absent_sessions" => $total_absent_session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Total_Absent_Session  $total_Absent_Session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jumlah_sesi_absen)
    {
        $total_absent_session = Total_Absent_Session::find($id_jumlah_sesi_absen);
        $total_absent_session->update($request->all());
        return redirect('/total_absent_session');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Total_Absent_Session  $total_Absent_Session
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jumlah_sesi_absen)
    {
        Total_Absent_Session::destroy($id_jumlah_sesi_absen);
        return redirect('/total_absent_session');
    }
}
