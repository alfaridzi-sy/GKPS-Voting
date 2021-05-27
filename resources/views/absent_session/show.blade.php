@extends('layouts.master')

@section('page_title')
    Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Sesi Absen
@endsection

@section('content')

    <div class="card bg-dark text-white ">
        <div class="card-header text-center">
        </div>
        <div class="card-body">
            <table class="table text-center">
                <tr>
                    <td>Id Sesi</td>
                    <td></td>
                    <td>{{$absent_sessions -> session -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Waktu Mulai Absen</td>
                    <td></td>
                    <td>{{$absent_sessions -> waktu_mulai_absen}}</td>
                </tr>
                <tr>
                    <td>Waktu Berakhir Absen</td>
                    <td></td>
                    <td>{{$absent_sessions -> waktu_berakhir_absen}}</td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td></td>
                    <td>{{$absent_sessions -> durasi}}</td>
                </tr>
                <tr>
                    <td>User Agent</td>
                    <td></td>
                    <td>{{$absent_sessions -> user_agent}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/client" role="button">Back</a>
@endsection
