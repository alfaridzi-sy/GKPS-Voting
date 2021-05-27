@extends('layouts.master')

@section('page_title')
    Vote Session - Voting SB GKPS
@endsection

@section('page_header')
    Update Data Sesi Voting
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <form action="{{route('vote.update', ['vote' => $votes->id_detail_voting])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="id_sesi">Id Sesi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Sesi" name="id_sesi" id="id_sesi" value="{{$votes -> session -> id_sesi}}">
        </div>
        <div class="form-group">
            <label for="id_klien">Id Klien :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Klien" name="id_klien" id="id_klien" value="{{$votes -> client -> id_klien}}">
        </div>
        <div class="form-group">
            <label for="id_kandidat">Id Kandidat :</label>
            <input type="text" class="form-control" placeholder="Masukkan Id Kandidat" name="id_kandidat" id="id_kandidat" value="{{$votes -> candidate -> id_kandidat}}">
        </div>
        <div class="form-group">
            <label for="datetime">Datetime :</label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Datetime" name="datetime" id="datetime" value="{{$votes -> datetime}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan User Agent Anda" name="user_agent" id="user_agent" onload="myFunction()" value="{{$votes -> user_agent}}">
        </div>
        <button type="submit" class="btn btn-primary" id="update">Update</button>
        <a class="btn btn-danger" href="/vote" role="button">Cancel</a>
    </form>
@endsection

@push('scripts')
	<script>
        function myFunction() {
            var x = navigator.userAgent;
            document.getElementById("user_agent").innerHTML = x;
        }
    </script>
@endpush
