<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vote = Vote::all();
        return view('vote.index', ["votes" => $vote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vote::create($request->all());
        return redirect('/vote');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show($id_detail_voting)
    {
        $vote = Vote::find($id_detail_voting);
        return view('vote.show', ["votes" => $vote]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit($id_detail_voting)
    {
        $vote = Vote::find($id_detail_voting);
        return view('vote.update', ["votes" => $vote]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_detail_voting)
    {
        $vote = Vote::find($id_detail_voting);
        $vote->update($request->all());
        return redirect('/vote');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detail_voting)
    {
        Vote::destroy($id_detail_voting);
        return redirect('/vote');
    }
}
