<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Client;
use App\Session;
use App\Absent_Session;

class PendaftaranKandidatController extends Controller
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
        $candidate = Candidate::all();
        return view('pendaftarankandidat', ["candidates" => $candidate]);
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
        $data = ($request->all());
        //dd($data);
        /*
        foreach ($data['nomor_kandidat'] as $item => $value) {
            $data2 = array(
                'id_sesi'           => $data['id_sesi'],
                'nomor_kandidat'    => $data['nomor_kandidat'][$item],
                'nama_kandidat'    => $data['nama_lengkap'][$item],
            );
            Candidate::create($data2);
        }
        */
        $session = Session::with(['selection_type'])->where('id_sesi', $data['id_sesi'])->get();
        $absent_session = Absent_Session::all();
        //dd($session);
        return view('pengaturanabsensi', ["sessions" => $session, "absent_sessions" => $absent_session]);
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

    public function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = Client::where('nama_lengkap', 'LIKE', "%{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '<li><a href="#">' . $row->gelar_depan . ". " . $row->nama_lengkap . ", " . $row->gelar_belakang . '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function indexData()
    {
        return view('autocomplete');
    }
}
