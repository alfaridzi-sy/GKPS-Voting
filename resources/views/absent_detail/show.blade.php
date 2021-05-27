@extends('layouts.master')

@section('page_title')
    Client Register - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Client
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
                    <td>{{$absent__details -> session -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Id Klien</td>
                    <td></td>
                    <td>{{$absent__details -> client -> id_klien}}</td>
                </tr>
                <tr>
                    <td>Waktu Absensi</td>
                    <td></td>
                    <td>{{$absent__details -> waktu_absensi}}</td>
                </tr>
                <tr>
                    <td>Kehadiran</td>
                    <td></td>
                    <td>{{$absent__details -> kehadiran}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/absent_detail" role="button">Back</a>
@endsection
