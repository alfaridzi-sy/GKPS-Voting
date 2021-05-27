@extends('layouts.master')

@section('page_title')
    Client Register - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Client
@endsection

@section('content')
<hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('client.update', ['client' => $clients->id_klien])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="gelar_depan">Gelar Depan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Gelar Depan Anda" name="gelar_depan" id="gelar_depan" value="{{$clients -> gelar_depan}}">
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nama_lengkap" id="nama_lengkap" value="{{$clients -> nama_lengkap}}">
        </div>
        <div class="form-group">
            <label for="gelar_belakang">Gelar Belakang :</label>
            <input type="text" class="form-control" placeholder="Masukkan Gelar Belakang Anda" name="gelar_belakang" id="gelar_belakang" value="{{$clients -> gelar_belakang}}">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" id="email" value="{{$clients -> email}}">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" class="form-control" placeholder="Masukkan Password Anda" name="password" id="password" value="{{$clients -> password}}">
        </div>
        <div class="form-group">
            <label for="instansi">Instansi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Instansi Anda" name="instansi" id="instansi" value="{{$clients -> instansi}}">
        </div>
        <div class="form-group">
            <label for="instansi">Foto :</label>
            <input type="file" class="form-control" placeholder="Masukkan Foto Anda" name="foto" id="foto">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()" value="{{$clients -> user_agent}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update"">Udate</button>
        <a class="btn btn-danger" href="/client" role="button">Cancel</a>
    </form>
@endsection

@push('scripts')
	<script>
        function myFunction() {
            var x = navigator.userAgent;
            document.getElementById("user_agent").innerHTML = x;
        }
    </script>
@endpush
