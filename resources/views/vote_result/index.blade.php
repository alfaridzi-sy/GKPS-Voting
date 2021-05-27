@extends('layouts.master')

@section('page_title')
    Vote Result - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Hasil Sesi Voting
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('vote_result.create')}}" role="button">Add New Vote Result </a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Id Kandidat</th>
            <th>Id Detail Voting</th>
            <th>Jumlah Suara</th>
            <th>Total Jumlah Suara</th>
            <th>Persentase</th>
            <th>Datetime</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($vote_results as $k => $v_r)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $v_r -> session -> id_sesi }}</td>
                    <td>{{ $v_r -> candidate -> id_kandidat }}</td>
                    <td>{{ $v_r -> vote -> id_detail_voting }}</td>
                    <td>{{ $v_r -> jumlah_suara }}</td>
                    <td>{{ $v_r -> total_jumlah_suara }}</td>
                    <td>{{ $v_r -> persentase }} %</td>
                    <td>{{ $v_r -> datetime }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('vote_result.show', ['vote_result' => $v_r->id_hasil_voting])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('vote_result.edit', ['vote_result' => $v_r->id_hasil_voting])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('vote_result.destroy', ['vote_result' => $v_r->id_hasil_voting])}}"
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
