@extends('layouts.master')

@section('page_title')
    Candidate Register - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Kandidat
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
                    <td>{{$candidates -> session -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Nama Kandidat</td>
                    <td></td>
                    <td>{{$candidates -> nama_kandidat}}</td>
                </tr>
                <tr>
                    <td>Nomor Kandidat</td>
                    <td></td>
                    <td>{{$candidates -> nomor_kandidat}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/session" role="button">Back</a>
@endsection
