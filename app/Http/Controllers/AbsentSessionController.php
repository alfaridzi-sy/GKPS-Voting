<?php

namespace App\Http\Controllers;

use App\Absent_Session;
use Illuminate\Http\Request;

class AbsentSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absent_session = Absent_Session::all();
        return view('absent_session.index', ["absent_sessions" => $absent_session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absent_session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absent_Session::create($request->all());
        return redirect('/absent_session');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absent_Session  $absent_Session
     * @return \Illuminate\Http\Response
     */
    public function show($id_sesi_absen)
    {
        $absent_session = Absent_Session::find($id_sesi_absen);
        return view('absent_session.show', ["absent_sessions" => $absent_session]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absent_Session  $absent_Session
     * @return \Illuminate\Http\Response
     */
    public function edit($id_sesi_absen)
    {
        $absent_session = Absent_Session::find($id_sesi_absen);
        return view('absent_session.update', ["absent_sessions" => $absent_session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absent_Session  $absent_Session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sesi_absen)
    {
        $absent_session = Absent_Session::find($id_sesi_absen);
        $absent_session->update($request->all());
        return redirect('/absent_session');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absent_Session  $absent_Session
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sesi_absen)
    {
        Absent_Session::destroy($id_sesi_absen);
        return redirect('/absent_session');
    }
}
