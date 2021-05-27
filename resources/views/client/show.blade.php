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
                    <td>Gelar Depan</td>
                    <td></td>
                    <td>{{$clients -> gelar_depan}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td></td>
                    <td>{{$clients -> nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Gelar Belakang</td>
                    <td></td>
                    <td>{{$clients -> gelar_belakang}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td></td>
                    <td>{{$clients -> email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>{{$clients -> password}}</td>
                </tr>
                <tr>
                    <td>Instansi</td>
                    <td></td>
                    <td>{{$clients -> instansi}}</td>
                </tr>
                <tr>
                    <td>User Agent</td>
                    <td></td>
                    <td>{{$clients -> user_agent}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/client" role="button">Back</a>
@endsection
