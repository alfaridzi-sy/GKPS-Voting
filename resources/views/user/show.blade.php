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
                    <td>Nama</td>
                    <td></td>
                    <td>{{$users -> name}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td></td>
                    <td>{{$users -> username}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td></td>
                    <td>{{$users -> email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>{{$users -> password}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/user" role="button">Back</a>
@endsection
