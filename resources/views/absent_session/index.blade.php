@extends('layouts.master')

@section('page_title')
    Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Sesi Absen
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('absent_session.create')}}" role="button">Add New Absent Session Data </a>
    </div>


    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Waktu Mulai</th>
            <th>Waktu Berakhir</th>
            <th>Durasi</th>
            <th>User Agent</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($absent_sessions as $k => $a_s)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $a_s -> session -> id_sesi }}</td>
                    <td>{{ $a_s -> waktu_mulai_absen }}</td>
                    <td>{{ $a_s -> waktu_berakhir_absen }}</td>
                    <td>{{ $a_s -> durasi }} menit</td>
                    <td>{{ $a_s -> user_agent }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('absent_session.show', ['absent_session' => $a_s->id_sesi_absen])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('absent_session.edit', ['absent_session' => $a_s->id_sesi_absen])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('absent_session.destroy', ['absent_session' => $a_s->id_sesi_absen])}}"
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
