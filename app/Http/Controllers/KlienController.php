<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Client;

class KlienController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('klien', ["clients" => $client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrasiklienmanual');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());
        if ($request->hasFile('foto')) {
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('client', $filename, 'public');
            $client->update(['foto' => $filename]);
        }
        $client->update([
            'password' =>  Hash::make($request->input('password'))
        ]);
        return redirect('/klien');
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
    public function edit($id_klien)
    {
        $klien = Client::find($id_klien);
        return view('editklien', ["clients" => $klien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_klien)
    {
        $klien = Client::find($id_klien);
        $klien->update($request->all());
        if ($request->hasFile('foto')) {
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('klien', $filename, 'public');
            $klien->update(['foto' => $filename]);
        }
        $klien->update(['password' =>  Hash::make($request->input('password'))]);
        return redirect('/klien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_klien)
    {
        Client::destroy($id_klien);
        return redirect('/klien');
    }
}
