@extends('layouts.master')

@section('page_title')
    Client Register - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Client
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('client.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="gelar_depan">Gelar Depan :</label>
            <input type="text" placeholder="Masukkan Gelar Depan Anda" name="gelar_depan" id="gelar_depan">
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap :</label>
            <input type="text" placeholder="Masukkan Nama Lengkap Anda" name="nama_lengkap" id="nama_lengkap">
        </div>
        <div class="form-group">
            <label for="gelar_belakang">Gelar Belakang :</label>
            <input type="text" placeholder="Masukkan Gelar Belakang Anda" name="gelar_belakang" id="gelar_belakang">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" placeholder="Masukkan Email Anda" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" placeholder="Masukkan Password Anda" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="instansi">Instansi :</label>
            <input type="text" placeholder="Masukkan Instansi Anda" name="instansi" id="instansi">
        </div>
        <div class="form-group">
            <label for="instansi">Foto :</label>
            <input type="file" placeholder="Masukkan Foto Anda" name="foto" id="foto">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()">
        </div>
        <button type="submit" class="btn btn-primary" id="add" onclick="myFunction()">Add</button>
        <a class="btn btn-danger" href="/client" role="button">Cancel</a>
    </form>
    </div>
@endsection


@push('scripts')
	<script>
        function myFunction() {
            var x = navigator.userAgent;
            document.getElementById("user_agent").innerHTML = x;
        }
    </script>
@endpush

