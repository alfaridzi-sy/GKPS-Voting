@extends('layouts.master')

@section('page_title')
    Sesi Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Sesi Pemilihan
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
                    <td>{{$sessions -> id_sesi}}</td>
                </tr>
                <tr>
                    <td>Id Pemilihan</td>
                    <td></td>
                    <td>{{$sessions -> selection_type -> id_pemilihan}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/session" role="button">Back</a>
@endsection
