@extends('layouts.master')

@section('page_title')
    Total Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Jumlah Sesi Absen
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('total_absent_session.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="jumlah_absen_apps">Jumlah Absen Apps :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Absen Apps" name="jumlah_absen_apps" id="jumlah_absen_apps">
        </div>
        <div class="form-group">
            <label for="jumlah_absen_web">Jumlah Absen Web :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Absen Web" name="jumlah_absen_web" id="jumlah_absen_web">
        </div>
        <div class="form-group">
            <label for="jumlah_total_absen">Jumlah Total Absen :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Total Absen" name="jumlah_total_absen" id="jumlah_total_absen">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/total_absent_session" role="button">Cancel</a>
    </form>
    </div>
@endsection
