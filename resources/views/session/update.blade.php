@extends('layouts.master')

@section('page_title')
    Sesi Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Sesi Pemilihan
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('session.update', ['session' => $sessions->id_sesi])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Id Sesi Anda" name="id_sesi" id="id_sesi" value="{{$sessions -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="id_pemilihan">Id Pemilihan :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Pemilihan Anda" name="id_pemilihan" id="id_pemilihan" value="{{$sessions -> selection_type -> id_pemilihan}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/session" role="button">Cancel</a>
    </form>
@endsection
