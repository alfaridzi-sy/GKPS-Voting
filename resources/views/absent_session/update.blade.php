@extends('layouts.master')

@section('page_title')
    Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Sesi Absen
@endsection

@section('content')
<hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('absent_session.update', ['absent_session' => $absent_sessions->id_sesi_absen])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi" value="{{$absent_sessions -> session -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="waktu_mulai_absen">Waktu Mulai Absen :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Mulai Absen Anda" name="waktu_mulai_absen" id="waktu_mulai_absen" value="{{$absent_sessions -> waktu_mulai_absen}}">
        </div>
        <div class="form-group">
            <label for="waktu_berakhir_absen">Waktu Berakhir Absen :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Berakhir Absen Anda" name="waktu_berakhir_absen" id="waktu_berakhir_absen" value="{{$absent_sessions -> waktu_berakhir_absen}}">
        </div>
        <div class="form-group">
            <label for="durasi">Durasi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Durasi Anda" name="durasi" id="durasi" value="{{$absent_sessions -> durasi}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()" value="{{$absent_sessions -> user_agent}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update"">Udate</button>
        <a class="btn btn-danger" href="/absent_session" role="button">Cancel</a>
    </form>
@endsection
