@extends('layouts.master')

@section('page_title')
    Vote Session - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Sesi Voting
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
                    <td>{{$votes -> session -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Id Klien</td>
                    <td></td>
                    <td>{{$votes -> client -> id_klien}}</td>
                </tr>
                <tr>
                    <td>Id Kandidat</td>
                    <td></td>
                    <td>{{$votes -> candidate -> id_kandidat}}</td>
                </tr>
                <tr>
                    <td>Datetime</td>
                    <td></td>
                    <td>{{$votes -> datetime}}</td>
                </tr>
                <tr>
                    <td>User Agent</td>
                    <td></td>
                    <td>{{$votes -> user_agent}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/absent_detail" role="button">Back</a>
@endsection
