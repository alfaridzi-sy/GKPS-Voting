@extends('layouts.master')

@section('page_title')
    Vote Result - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Hasil Sesi Voting
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('vote_result.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="id_kandidat">Id Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Kandidat" name="id_kandidat" id="id_kandidat">
        </div>
        <div class="form-group">
            <label for="id_detail_voting">Id Detail Voting :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Detail Voting" name="id_detail_voting" id="id_detail_voting">
        </div>
        <div class="form-group">
            <label for="jumlah_suara">Jumlah Suara :</label>
            <input type="text" class="form-control" placeholder="Masukkan Jumlah Suara" name="jumlah_suara" id="jumlah_suara">
        </div>
        <div class="form-group">
            <label for="total_jumlah_suara">Total Jumlah Suara :</label>
            <input type="text" class="form-control" placeholder="Masukkan Total Jumlah Suara" name="total_jumlah_suara" id="total_jumlah_suara">
        </div>
        <div class="form-group">
            <label for="persentase">Persentase :</label>
            <input type="text" class="form-control" placeholder="Masukkan Persentase" name="persentase" id="persentase">
        </div>
        <div class="form-group">
            <label for="datetime">Datetime :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Datetime" name="datetime" id="datetime">
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
        <a class="btn btn-danger" href="/client" role="button">Cancel</a>
    </form>
    </div>
@endsection
