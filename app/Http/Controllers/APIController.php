<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Client;
use App\VoteSession;
use App\Absent_Session;
use App\Session;
use App\Vote;
use App\Absent_Detail;

class APIController extends Controller
{

    //Function untuk Login
    function loginAndroid(Request $request)
    {
        $client = Client::where('email_klien', $request->input('email_klien'))->get();
        if (count($client) > 0) {
            foreach ($client as $c) {
                $data = $c->password;

                if (Hash::check($request->input('password'), $data)) {
                    return response()->json(
                        [
                            "data_warning"  => true,
                            "message"       => "Success",
                            "data"          => $client
                        ]
                    );
                } else {
                    return response()->json(
                        [
                            "data_warning"  => false,
                            "message"       => "Success",
                            "data"          => "Password tidak terdaftar"
                        ]
                    );
                }
            }
        } else {
            return response()->json(
                [
                    "data_warning"  => false,
                    "message"       => "Success",
                    "data"          => "Email tidak terdaftar"
                ]
            );
        }
    }

    //Function untuk Cek Kode Sesi
    function cekKodeSesi(Request $request)
    {
        $session = Session::where('kode_sesi', $request->input('kode_sesi'))->where('status', 1)->get();
        if (count($session) > 0) {
            $data = Session::with(['selection_type'])->with(['candidate'])->where('kode_sesi', $request->input('kode_sesi'))->get();
            $warning = true;
            $respons = "Kode Sesi Sedang Aktif";
                foreach ($session as $s) {
                $absent = Absent_Detail::where('id_sesi', $s->id_sesi)->where('id_klien', $request->input('id_klien'))->get();
                if (count($absent) > 0) {
                    $data = "Anda Telah Melakukan Absen Sebelumnya";
                    $respons = "Anda Telah Melakukan Absen Sebelumnya";
                } else {
                    Absent_Detail::create([
                        'id_sesi'       => $s->id_sesi,
                        'id_klien'      => $request->input('id_klien'),
                        'kehadiran'     => 'Hadir'
                    ]);
                    $respons = "Anda Telah Berhasil Melakukan Absen";
                }
            }
        } else {
            $data = "Kode Sesi Sedang Tidak Aktif";
            $respons = "Absen Gagal. Kode Sesi Sedang TIdak AKtif";
            $warning = false;
        }

        return response()->json(
            [
                "report"        => $respons,
                "data_warning"  => $warning,
                "message"       => "Success",
                "data"          => $data
            ]
        );
    }

    //Function untuk Menambahkan Data Voting
    function insertVote(Request $request)
    {
        $vote = Vote::where('id_sesi', $request->input('id_sesi'))->where('id_klien', $request->input('id_klien'))->get();
        if(count ($vote) > 0  ){
            $respons = "Anda Telah Melakukan Vote Untuk Sesi Ini Sebelumnya";
            $data_warning = false;
        }else {
            $session = Session::where('id_sesi', $request->input('id_sesi'))->where('status', 1)->get();
            $session_off = Session::where('id_sesi', $request->input('id_sesi'))->where('status', 0)->get();
            if (count($session) > 0) {
                Vote::create([
                    'id_sesi'       => $request->input('id_sesi'),
                    'id_klien'      => $request->input('id_klien'),
                    'id_kandidat'   => $request->input('id_kandidat'),
                    'status_email'  => 0
                ]);
                $respons = "Anda Telah Berhasil Melakukan Vote";
                $data_warning = true;
            }else if(count($session_off) > 0){
                $respons = "Kode Sesi Sedang Tidak Aktif";
                $data_warning = false;
            }else{
                $respons = "Kode Sesi Tidak Terdaftar";
                $data_warning = false;
            }
        }

        return response()->json(
            [
                "data_warning"  => $data_warning,
                "message"       => "Success",
                "report"        => $respons,
            ]
        );
    }

    //Function untuk Cek Kondisi Absen
    public function kondisiAbsen()
    {
        $session = Session::where('status', 1)->get();
        if (count($session) > 0) {
            foreach ($session as $s) {
                $absen = Absent_Session::where('id_sesi', $s->id_sesi)->get();
                foreach ($absen as $a) {
                    $warning = true;
                    $durasi  = $a->durasi;
                    $status  = $a->status_absen;
                    $respons = "Sesi Absen Dimulai";
                }
            }
        } else {
            $warning = false;
            $durasi  = "";
            $status  = "";
            $respons = "Sesi Absen Tidak Aktif";
        }
        return response()->json(
            [
                "message"       => "Success",
                "data_warning"  => $warning,
                "durasi"        => $durasi,
                "status"        => $status,
                "respons"       => $respons
            ]
        );
    }

    //Function untuk Cek Kondisi Vote
    public function kondisiVote()
    {
        $session = Session::where('status', 1)->get();
        if (count($session) > 0) {
            foreach ($session as $s) {
                $vote = VoteSession::where('id_sesi', $s->id_sesi)->get();
                foreach ($vote as $a) {
                    $warning = true;
                    $durasi  = $a->durasi_vote;
                    $status  = $a->status_vote;
                    $respons = "Sesi Voting Dimulai";
                }
            }
        } else {
            $warning = false;
            $durasi  = "";
            $status  = "";
            $respons = "Sesi Voting Berakhir";
        }
        return response()->json(
            [
                "message"       => "Success",
                "data_warning"  => $warning,
                "durasi"        => $durasi,
                "status"        => $status,
                "respons"       => $respons
            ]
        );
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
