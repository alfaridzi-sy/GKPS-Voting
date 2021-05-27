@extends('layouts.master')

@section('page_title')
    Vote Session - Voting SB GKPS
@endsection

@section('page_header')
    Tambah Data Sesi Voting
@endsection

@section('content')
    <div class="center">
        <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('vote.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi" name="id_sesi" id="id_sesi">
        </div>
        <div class="form-group">
            <label for="id_klien">Id Klien :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Klien" name="id_klien" id="id_klien">
        </div>
        <div class="form-group">
            <label for="id_kandidat">Id Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Kandidat" name="id_kandidat" id="id_kandidat">
        </div>
        <div class="form-group">
            <label for="datetime">Datetime :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Datetime" name="datetime" id="datetime">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()">
        </div>
        <button type="submit" class="btn btn-primary" id="add" onclick="myFunction()">Add</button>
        <a class="btn btn-danger" href="/client" role="button">Cancel</a>
    </form>
    </div>
@endsection


@push('scripts')
	<script>
        function myFunction() {
            var x = navigator.userAgent;
            document.getElementById("user_agent").innerHTML = x;
        }
    </script>
@endpush
