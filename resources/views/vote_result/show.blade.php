@extends('layouts.master')

@section('page_title')
    Vote Result - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Hasil Sesi Voting
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
                    <td>{{$vote_results -> session -> id_sesi }}</td>
                </tr>
                <tr>
                    <td>Id Kandidat</td>
                    <td></td>
                    <td>{{$vote_results -> candidate -> id_kandidat}}</td>
                </tr>
                <tr>
                    <td>Id Detail Voting</td>
                    <td></td>
                    <td>{{$vote_results -> vote -> id_detail_voting }}</td>
                </tr>
                <tr>
                    <td>Jumlah Suara</td>
                    <td></td>
                    <td>{{$vote_results -> jumlah_suara}}</td>
                </tr>
                <tr>
                    <td>Total Jumlah Suara</td>
                    <td></td>
                    <td>{{$vote_results -> total_jumlah_suara}}</td>
                </tr>
                <tr>
                    <td>Presentase</td>
                    <td></td>
                    <td>{{$vote_results -> persentase}}</td>
                </tr>
                <tr>
                    <td>Datetime</td>
                    <td></td>
                    <td>{{$vote_results -> datetime}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/absent_detail" role="button">Back</a>
@endsection
