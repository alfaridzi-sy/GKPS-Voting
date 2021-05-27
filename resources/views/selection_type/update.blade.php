@extends('layouts.master')

@section('page_title')
    Tipe Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Tipe Pemilihan
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('selection_type.update', ['selection_type' => $selection_types->id_pemilihan])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="kode_pemilihan">Kode Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Pemilihan Anda" name="kode_pemilihan" id="kode_pemilihan" value="{{$selection_types -> kode_pemilihan}}">
        </div>
        <div class="form-group">
            <label for="jenis_pemilihan">Jenis Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jenis Pemilihan Anda" name="jenis_pemilihan" id="jenis_pemilihan" value="{{$selection_types -> jenis_pemilihan}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/selection_type" role="button">Cancel</a>
    </form>
@endsection
