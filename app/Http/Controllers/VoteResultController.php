<?php

namespace App\Http\Controllers;

use App\Vote_Result;
use Illuminate\Http\Request;

class VoteResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vote_result = Vote_Result::all();
        return view('vote_result.index', ["vote_results" => $vote_result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vote_result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vote_Result::create($request->all());
        return redirect('/vote_result');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote_Result  $vote_Result
     * @return \Illuminate\Http\Response
     */
    public function show($id_hasil_voting)
    {
        $vote_result = Vote_Result::find($id_hasil_voting);
        return view('vote_result.show', ["vote_results" => $vote_result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote_Result  $vote_Result
     * @return \Illuminate\Http\Response
     */
    public function edit($id_hasil_voting)
    {
        $vote_result = Vote_Result::find($id_hasil_voting);
        return view('vote_result.update', ["vote_results" => $vote_result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote_Result  $vote_Result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_hasil_voting)
    {
        $vote_result = Vote_Result::find($id_hasil_voting);
        $vote_result->update($request->all());
        return redirect('/vote_result');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote_Result  _result_Result
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_hasil_voting)
    {
        Vote_Result::destroy($id_hasil_voting);
        return redirect('/vote_result');
    }
}
