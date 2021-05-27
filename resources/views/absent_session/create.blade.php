@extends('layouts.master')

@section('page_title')
    Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Sesi Absen
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('absent_session.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="waktu_mulai_absen">Waktu Mulai Absen :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Mulai Absen Anda" name="waktu_mulai_absen" id="waktu_mulai_absen">
        </div>
        <div class="form-group">
            <label for="waktu_berakhir_absen">Waktu Berakhir Absen :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Berakhir Absen Anda" name="waktu_berakhir_absen" id="waktu_berakhir_absen">
        </div>
        <div class="form-group">
            <label for="durasi">Durasi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Durasi Anda" name="durasi" id="durasi">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()">
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

