@extends('layouts.master')

@section('page_title')
    Tipe Pemilihan - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Tipe Pemilihan
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('selection_type.create')}}" role="button">Add New Selection Type</a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Kode Pemilihan</th>
            <th>Jenis Pemilihan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($selection_types as $k => $s_t)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $s_t -> kode_pemilihan }}</td>
                    <td>{{ $s_t -> jenis_pemilihan }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('selection_type.show', ['selection_type' => $s_t->id_pemilihan])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('selection_type.edit', ['selection_type' => $s_t->id_pemilihan])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('selection_type.destroy', ['selection_type' => $s_t->id_pemilihan])}}"
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
