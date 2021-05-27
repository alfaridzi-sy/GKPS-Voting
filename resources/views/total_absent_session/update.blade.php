@extends('layouts.master')

@section('page_title')
    Total Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Jumlah Sesi Absen
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('total_absent_session.update', ['total_absent_session' => $total_absent_sessions->id_jumlah_sesi_absen])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi" name="id_sesi" id="id_sesi" value="{{$total_absent_sessions -> session -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="jumlah_absen_apps">Jumlah Absen Apps :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Absen Apps" name="jumlah_absen_apps" id="jumlah_absen_apps" value="{{$total_absent_sessions ->  jumlah_absen_apps}}">
        </div>
        <div class="form-group">
            <label for="jumlah_absen_web">Jumlah Absen Web :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Absen Web" name="jumlah_absen_web" id="jumlah_absen_web" value="{{$total_absent_sessions ->  jumlah_absen_web}}">
        </div>
        <div class="form-group">
            <label for="jumlah_total_absen">Jumlah Total Absen :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Total Absen" name="jumlah_total_absen" id="jumlah_total_absen" value="{{$total_absent_sessions ->  jumlah_total_absen}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/total_absent_session" role="button">Cancel</a>
    </form>
@endsection
