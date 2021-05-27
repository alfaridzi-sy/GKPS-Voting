@extends('layouts.master')

@section('page_title')
    Vote Session - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Sesi Voting
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('vote.create')}}" role="button">Add New Vote Session </a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Id Klien</th>
            <th>Id Kandidat</th>
            <th>Datetime</th>
            <th>User Agent</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($votes as $k => $v)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $v -> session -> id_sesi }}</td>
                    <td>{{ $v -> client -> id_klien }}</td>
                    <td>{{ $v -> candidate -> id_kandidat }}</td>
                    <td>{{ $v -> datetime }}</td>
                    <td>{{ $v -> user_agent }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('vote.show', ['vote' => $v->id_detail_voting])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('vote.edit', ['vote' => $v->id_detail_voting])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('vote.destroy', ['vote' => $v->id_detail_voting])}}"
                            method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" value="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>
    </p>
@endsection
