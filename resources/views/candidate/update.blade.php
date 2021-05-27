@extends('layouts.master')

@section('page_title')
    Candidate Register - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Kandidat
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('candidate.update', ['candidate' => $candidates->id_kandidat])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi" value="{{$candidates -> session -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="nama_kandidat">Nama Kandidat :</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Kandidat Anda" name="nama_kandidat" id="nama_kandidat" value="{{$candidates -> nama_kandidat}}">
        </div>
        <div class="form-group">
            <label for="nomor_kandidat">Nomor Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor Kandidat Anda" name="nomor_kandidat" id="nomor_kandidat" value="{{$candidates -> nomor_kandidat}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/candidate" role="button">Cancel</a>
    </form>
@endsection
