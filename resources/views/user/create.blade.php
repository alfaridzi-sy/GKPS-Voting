@extends('layouts.master')

@section('page_title')
    Absent Detail - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Detail Absen
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" class="form-control" placeholder="Masukkan password Anda" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/absent_detail" role="button">Cancel</a>
    </form>
    </div>
@endsection


