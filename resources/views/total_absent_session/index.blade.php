@extends('layouts.master')

@section('page_title')
    Total Absent Session - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Jumlah Sesi Absen
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('total_absent_session.create')}}" role="button">Add New Total Absent Session </a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Jumlah Absen Apps</th>
            <th>Jumlah Absen Web</th>
            <th>Jumlah Total Absen</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($total_absent_sessions as $k => $t_a_s)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $t_a_s -> session -> id_sesi }}</td>
                    <td>{{ $t_a_s -> jumlah_absen_apps }}</td>
                    <td>{{ $t_a_s -> jumlah_absen_web }}</td>
                    <td>{{ $t_a_s -> jumlah_total_absen }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('total_absent_session.show', ['total_absent_session' => $t_a_s->id_jumlah_sesi_absen])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('total_absent_session.edit', ['total_absent_session' => $t_a_s->id_jumlah_sesi_absen])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('total_absent_session.destroy', ['total_absent_session' => $t_a_s->id_jumlah_sesi_absen])}}"
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
