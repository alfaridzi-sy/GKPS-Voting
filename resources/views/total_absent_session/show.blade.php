@extends('layouts.master')

@section('page_title')
    Total Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Jumlah Sesi Absen
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
                    <td>{{$total_absent_sessions -> session -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Jumlah Absen Apps</td>
                    <td></td>
                    <td>{{$total_absent_sessions ->  jumlah_absen_apps}}</td>
                </tr>
                <tr>
                    <td>Jumlah Absen Web</td>
                    <td></td>
                    <td>{{$total_absent_sessions ->  jumlah_absen_web}}</td>
                </tr>
                <tr>
                    <td>Jumlah Total Absen</td>
                    <td></td>
                    <td>{{$total_absent_sessions ->  jumlah_total_absen}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/absent_detail" role="button">Back</a>
@endsection
