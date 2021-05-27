@extends('layouts.mster')

@section('page_title')
    Klien | Panel Admin - Voting SB GKPS
@endsection

@section('content')
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                    <h2>Registrasi Klien (Manual)</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Klien</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Registrasi Manual</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Registrasi Manual</h1>
                                <br>
                                <a href="{{ route('klien.create') }}" class="btn btn-custon-rounded-two btn-success">
                                    <span class="adminpro-icon adminpro-checked-pro"></span> Registrasi Klien
                                </a>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><a href="{{ route('klien.create') }}"><i class="fa fa-plus" ></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="all">Ekspor Semua</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id_klien">ID</th>
                                            <th data-field="gelar_depan" data-editable="true">Gelar Depan</th>
                                            <th data-field="nama_lengkap" data-editable="true">Nama Lengkap</th>
                                            <th data-field="gelar_belakang" data-editable="true">Gelar Belakang</th>
                                            <th data-field="email_klien" data-editable="true">Email</th>
                                            <th data-field="password" data-editable="true">Password</th>
                                            <th data-field="instansi" data-editable="true">Instansi</th>
                                            <th data-field="sektor" data-editable="true">Utusan</th>
                                            <th data-field="wa" data-editable="true">WhatsApp</th>
                                            <th data-field="foto" data-editable="true">Foto</th>
                                            <th data-field="waktu_pendaftaran" data-editable="true">Waktu Pendaftaran</th>
                                            <th data-field="user_agent" data-editable="true">User Agent</th>
                                            <th data-field="action" colspan="2" data-editable="true">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $c)
                                            <tr>
                                                <td></td>
                                                <td>{{ $c -> id_klien }}</td>
                                                <td>{{ $c -> gelar_depan }}</td>
                                                <td>{{ $c -> nama_lengkap }}</td>
                                                <td>{{ $c -> gelar_belakang }}</td>
                                                <td>{{ $c -> email_klien }}</td>
                                                <td input type="password" id="password">{{ $c -> password }}</td>
                                                <td>{{ $c -> instansi }}</td>
                                                <td>{{ $c -> sektor }}</td>
                                                <td>{{ $c -> wa }}</td>
                                                <td>
                                                    <img src="/storage/client/{{ $c -> foto }}" class="img-rounded" style="width: 100px; height:100px" >
                                                </td>
                                                <td>{{ $c -> waktu_pendaftaran }}</td>
                                                <td>{{ $c -> user_agent }}</td>
                                                <td>
                                                    <a class="btn btn-default" href="{{route('klien.edit', ['klien' => $c->id_klien])}}" aria-label="Settings">
                                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{route('klien.destroy', ['klien' => $c->id_klien])}}" method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" value="Delete">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
