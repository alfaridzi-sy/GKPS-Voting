@extends('layouts.master')

@section('page_title')
    Tipe Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Tipe Pemilihan
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('selection_type.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_pemilihan">Kode Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Anda" name="kode_pemilihan" id="kode_pemilihan">
        </div>
        <div class="form-group">
            <label for="jenis_pemilihan">Jenis Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jenis Pemilihan Anda" name="jenis_pemilihan" id="jenis_pemilihan">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/absent_detail" role="button">Cancel</a>
    </form>
    </div>
@endsection

