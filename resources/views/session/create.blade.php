@extends('layouts.master')

@section('page_title')
    Sesi Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Sesi Pemilihan
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('session.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="id_pemilihan">Id Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Pemilihan Anda" name="id_pemilihan" id="id_pemilihan">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/session" role="button">Cancel</a>
    </form>
    </div>
@endsection

