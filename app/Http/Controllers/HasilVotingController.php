<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\VoteSession;
use App\Vote;
use App\Client;
use App\Absent_Detail;
use App\Absent_Session;
use App\Candidate;

class HasilVotingController extends Controller
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
            $vote_session = VoteSession::where('id_sesi', $id)->get();
            $vote = Vote::where('id_sesi', $id)->get();
            $client = Client::all();
            $absent = Absent_Detail::where('id_sesi', $id)->get();
            $absent_session = Absent_Session::where('id_sesi', $id)->get();
            $candidate = Candidate::where('id_sesi', $id)->get();
            return view('hasil', ["sessions" => $session, "vote_sessions" => $vote_session, "votes" => $vote, "clients" => $client, "absent_details" => $absent, "candidates" => $candidate, "absent_sessions" => $absent_session]);
        }
    }

    public function akhiriVote(Request $request)
    {
        $session = Session::find($request->input('id_sesi'));
        $session->update(['status' => 0]);
        return redirect('/pengaturansesi');
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
        //
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
