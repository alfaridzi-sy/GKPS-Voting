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

    <form action="{{route('absent_detail.update', ['absent_detail' => $absent__details->id_detail_absensi])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi" value="{{$absent__details -> session -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="id_klien">Id Klien :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Klien Anda" name="id_klien" id="id_klien" value="{{$absent__details -> client -> id_klien}}">
        </div>
        <div class="form-group">
            <label for="waktu_absensi">Waktu Absensi :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Waktu Absensi Anda" name="waktu_absensi" id="waktu_absensi" value="{{$absent__details -> waktu_absensi}}">
        </div>
        <div class="form-group">
            <label for="kehadiran">Kehadiran :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kehadiran Anda" name="kehadiran" id="kehadiran" value="{{$absent__details -> kehadiran}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/absent_detail" role="button">Cancel</a>
    </form>
@endsection
