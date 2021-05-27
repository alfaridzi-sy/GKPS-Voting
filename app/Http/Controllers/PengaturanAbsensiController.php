<?php

namespace App\Http\Controllers;

use App\Absent_Detail;
use App\Absent_Session;
use Illuminate\Http\Request;
use App\Session;
use App\Client;
use App\VoteSession;
use App\Candidate;

class PengaturanAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //session,absent_detail,client,absent_session
        $session = Session::where('status', 1)->get();
        foreach ($session as $s) {
            $id = $s->id_sesi;
            $client = Client::all();
            $absent_detail = Absent_Detail::where('id_sesi', $id)->get();
            $absent_session = Absent_Session::where('id_sesi', $id)->get();
            return view('prosesabsen', ["sessions" => $session, "absent_sessions" => $absent_session, "clients" => $client, "absent_details" => $absent_detail]);
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Absent_Session::create($request->all());
        //$absent_session = Absent_Session::with('session.selection_type')->where('id_sesi', $request->input('id_sesi'))->get();
        $request->session()->flash('countdownModal');
        //dd($absent_session);
        //$session = Session::with(['candidate.selection_type'])->where('id_sesi', $request->input('id_sesi'))->get();
        //$session = Session::with(['selection_type'])->with(['candidate'])->with(['absent_session'])->where('id_sesi', $request->input('id_sesi'))->get();
        //$absent_session = Absent_Session::where('id_sesi', $request->input('id_sesi'))->get();
        //dd($absent_session);
        //return response()->json(["kondisi" => true]);
        return redirect('/pengaturanabsensi');
        //return view('pengaturanabsensi', ["sessions" => $session, "absent_sessions" => $absent_session]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hentikan(Request $request)
    {
        $id_sesi_absen = $request->input('id_sesi_absen');
        $status = Absent_Session::find($id_sesi_absen);
        $status->update([
            'durasi'       => 0,
            'status_absen' => 0
        ]);
        return redirect('/prosesvoting');
    }

    public function gotoVote(Request $request)
    {
        $id_sesi_absen = $request->input('id_sesi_absen');
        $status = Absent_Session::find($id_sesi_absen);
        $status->update([
            'durasi'       => 0,
            'status_absen' => 0
        ]);
        return url('/prosesvoting');
    }
}
