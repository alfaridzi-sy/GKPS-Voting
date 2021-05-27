@extends('layouts.master')

@section('page_title')
    Tipe Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Detail Data Tipe Pemilihan
@endsection

@section('content')

    <div class="card bg-dark text-white ">
        <div class="card-header text-center">
        </div>
        <div class="card-body">
            <table class="table text-center">
                <tr>
                    <td>Kode Pemilihan</td>
                    <td></td>
                    <td>{{$selection_types -> kode_pemilihan}}</td>
                </tr>
                <tr>
                    <td>Jenis Pemilihan</td>
                    <td></td>
                    <td>{{$selection_types -> jenis_pemilihan}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/selection_type" role="button">Back</a>
@endsection
