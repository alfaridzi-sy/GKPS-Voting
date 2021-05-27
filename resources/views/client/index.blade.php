@extends('layouts.master')

@section('page_title')
    Client Register - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Client
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('client.create')}}" role="button">Add New Client</a>
    </div>


    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Gelar Depan</th>
            <th>Nama Lengkap</th>
            <th>Gelar Belakang</th>
            <th>Email</th>
            <th>Password</th>
            <th>Instansi</th>
            <th>Waktu Pendaftaran</th>
            <th>User Agent</th>
            <th>Foto</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clients as $k => $c)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $c -> gelar_depan }}</td>
                    <td>{{ $c -> nama_lengkap }}</td>
                    <td>{{ $c -> gelar_belakang }}</td>
                    <td>{{ $c -> email }}</td>
                    <td>{{ $c -> password }}</td>
                    <td>{{ $c -> instansi }}</td>
                    <td>{{ $c -> waktu_pendaftaran }}</td>
                    <td>{{ $c -> user_agent }}</td>
                    <td>{{ $c -> foto }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('client.show', ['client' => $c->id_klien])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('client.edit', ['client' => $c->id_klien])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('client.destroy', ['client' => $c->id_klien])}}"
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
