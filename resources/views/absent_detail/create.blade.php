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

    <form action="{{route('absent_detail.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="id_klien">Id Klien :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Klien Anda" name="id_klien" id="id_klien">
        </div>
        <div class="form-group">
            <label for="waktu_absensi">Waktu Absensi :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Absensi Anda" name="waktu_absensi" id="waktu_absensi">
        </div>
        <div class="form-group">
            <label for="kehadiran">Kehadiran :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kehadiran Anda" name="kehadiran" id="kehadiran">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/absent_detail" role="button">Cancel</a>
    </form>
    </div>
@endsection
