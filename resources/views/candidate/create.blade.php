@extends('layouts.master')

@section('page_title')
    Candidate Register - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Kandidat
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('candidate.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="nama_kandidat">Nama Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Kandidat Anda" name="nama_kandidat" id="nama_kandidat">
        </div>
        <div class="form-group">
            <label for="nomor_kandidat">Nomor Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor Kandidat Anda" name="nomor_kandidat" id="nomor_kandidat">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/candidate" role="button">Cancel</a>
    </form>
    </div>
@endsection

