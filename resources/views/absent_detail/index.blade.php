@extends('layouts.master')

@section('page_title')
    Absent Detail - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Absent Detail
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('absent_detail.create')}}" role="button">Add New Absent Detail </a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Id Klien</th>
            <th>Waktu Absensi</th>
            <th>Kehadiran</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($absent__details as $k => $a_d)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $a_d -> session -> id_sesi }}</td>
                    <td>{{ $a_d -> client -> id_klien }}</td>
                    <td>{{ $a_d -> waktu_absensi }}</td>
                    <td>{{ $a_d -> kehadiran }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('absent_detail.show', ['absent_detail' => $a_d->id_detail_absensi])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('absent_detail.edit', ['absent_detail' => $a_d->id_detail_absensi])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('absent_detail.destroy', ['absent_detail' => $a_d->id_detail_absensi])}}"
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
