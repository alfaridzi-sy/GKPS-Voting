@extends('layouts.master')

@section('page_title')
    Absent Detail - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Detail Absen
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('user.update', ['user' => $users->id_admin])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="name">Nama :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="name" id="name" value="{{$users -> name}}">
        </div>
        <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" id="username" value="{{$users -> username}}">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" id="email" value="{{$users -> email}}">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" class="form-control" placeholder="Masukkan password Anda" name="password" id="password" value="{{$users -> password}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/user" role="button">Cancel</a>
    </form>
@endsection
