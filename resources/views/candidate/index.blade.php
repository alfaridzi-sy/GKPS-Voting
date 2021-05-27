@extends('layouts.master')

@section('page_title')
    Candidate Register - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Kandidat
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('candidate.create')}}" role="button">Add New Candidate</a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Nama Kandidat</th>
            <th>Nomor Kandidat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($candidates as $k => $c)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $c -> session -> id_sesi }}</td>
                    <td>{{ $c -> nama_kandidat }}</td>
                    <td>{{ $c -> nomor_kandidat }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('candidate.show', ['candidate' => $c->id_kandidat])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('candidate.edit', ['candidate' => $c->id_kandidat])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('candidate.destroy', ['candidate' => $c->id_kandidat])}}"
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
