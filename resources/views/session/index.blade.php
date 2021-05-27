@extends('layouts.master')

@section('page_title')
    Sesi Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Sesi Pemilihan
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('session.create')}}" role="button">Add New Session</a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Id Sesi</th>
            <th>Id Pemilihan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($sessions as $k => $s)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $s -> id_sesi }}</td>
                    <td>{{ $s -> selection_type -> id_pemilihan }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('session.show', ['session' => $s->id_sesi])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('session.edit', ['session' => $s->id_sesi])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('session.destroy', ['session' => $s->id_sesi])}}"
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
