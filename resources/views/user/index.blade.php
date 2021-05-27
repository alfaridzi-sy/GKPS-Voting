@extends('layouts.master')

@section('page_title')
    Admin Register - Voting SB GKPS
@endsection

@section('page_header')
    Data Master Admin
@endsection

@section('content')
    <hr style="width:50%; margin: auto;" />
    <br>

    <div style="margin: 10px">
        <a class="btn btn-primary" href="{{route('user.create')}}" role="button">Add New Admin</a>
    </div>

    <table class="table">
        <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $k => $u)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $u -> name }}</td>
                    <td>{{ $u -> username }}</td>
                    <td>{{ $u -> email }}</td>
                    <td>{{ $u -> password }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('user.show', ['user' => $u->id_admin])}}" role="button"><i class="fa fa-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('user.edit', ['user' => $u->id_admin])}}" role="button"><i class="fa fa-edit"></a></td>
                    <td>
                        <form action="{{route('user.destroy', ['user' => $u->id_admin])}}"
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
