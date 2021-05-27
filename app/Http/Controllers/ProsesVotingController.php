<?php

namespace App\Http\Controllers;

use App\Absent_Detail;
use Illuminate\Http\Request;
use App\Session;
use App\VoteSession;
use App\Vote;
use App\Client;
use App\Candidate;
use App\Absent_Session;

class ProsesVotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Session::with(['selection_type'])->where('status', 1)->get();
        foreach ($session as $s) {
            $id = $s->id_sesi;
            $absent_session = Absent_Session::where('id_sesi', $id)->get();
            $client = Client::all();
            $absent_detail = Absent_Detail::where('id_sesi', $id)->get();
            return view('prosesvoting', ["sessions" => $session, "absent_sessions" => $absent_session, "clients" => $client, "absent_details" => $absent_detail]);
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
        VoteSession::create($request->all());
        //$absent_session = Absent_Session::with('session.selection_type')->where('id_sesi', $request->input('id_sesi'))->get();
        //dd($absent_session);
        //$session = Session::with(['candidate.selection_type'])->where('id_sesi', $request->input('id_sesi'))->get();
        $session = Session::with(['selection_type'])->with(['candidate'])->with(['absent_session'])->where('id_sesi', $request->input('id_sesi'))->get();
        $vote_session = VoteSession::where('id_sesi', $request->input('id_sesi'))->get();
        //dd($absent_session);
        //return response()->json(["kondisi" => true]);
        return redirect('/hasilvoting');
    }

    public function hentikanVote(Request $request)
    {
        //dd($request->all());
        $id_sesi_vote = $request->input('id_sesi_vote');
        $status = VoteSession::find($id_sesi_vote);
        $status->update([
            'durasi_vote' => 0,
            'status_vote' =>  0
        ]);
        //$session = Session::with(['selection_type'])->where('id_sesi', $request->input('id_sesi'))->get();
        //$vote_session = VoteSession::all();
        //return view('prosesvoting', ["sessions" => $session, "vote_sessions" => $vote_session]);
        //$session        = Session::with(['selection_type'])->where('id_sesi', $request->input('id_sesi'))->get();
        //$vote_session   = VoteSession::where('id_sesi', $request->input('id_sesi'))->get();
        //$vote           = Vote::where('id_sesi', $request->input('id_sesi'))->get();
        //$client         = Client::all();
        //$absent         = Absent_Detail::where('id_sesi', $request->input('id_sesi'))->get();
        //$absent_session = Absent_Session::where('id_sesi', $request->input('id_sesi'))->get();
        //$candidate      = Candidate::where('id_sesi', $request->input('id_sesi'))->orderBy('nama_kandidat', 'DESC')->get();
        //return view('hasil', ["sessions" => $session, "vote_sessions" => $vote_session, "votes" => $vote, "clients" => $client, "absent_details" => $absent, "candidates" => $candidate, "absent_sessions" => $absent_session]);
        return redirect('/hasilvoting');
    }

    public function gotoHasil(Request $request)
    {
        $id_sesi_vote = $request->input('id_sesi_vote');
        $status = Absent_Session::find($id_sesi_vote);
        $status->update([
            'durasi_vote' => 0,
            'status_vote' => 0
        ]);
        return url('/hasilvoting');
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
}
