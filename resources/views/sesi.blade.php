@extends('layouts.mster')

@section('page_title')
    Sesi | Panel Admin - Voting SB GKPS
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
                                    <h2>Daftar Sesi</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Sesi</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Semua Sesi</span>
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

    <!-- Tabel Sesi -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Sesi</h1>  <button type="button" class="btn btn-custon-rounded-two btn-success"><span class="adminpro-icon adminpro-checked-pro"><a href="http://localhost/registrasi-klien.html"></a></span> Tambahkan Sesi Baru</button>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><a href="http://localhost/registrasi-klien.html"><i class="fa fa-plus" ></i></span>
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
                                            <th data-field="id">Id Sesi</th>
                                            <th data-field="gelardepan" data-editable="true">Jenis Pemilihan</th>
                                            <th data-field="name" data-editable="true">Keterangan</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sessions as $k => $s)
                                            <tr>
                                                <td></td>
                                                <td>{{ $s -> id_sesi }}</td>
                                                <td>{{ $s -> selection_type -> jenis_pemilihan }}</td>
                                                <td>{{ $s -> keterangan_sesi }}</td>
                                                <td class="datatable-ct">
                                                    <a class="btn btn-default" href="{{route('sesi.edit', ['sesi' => $s->id_sesi])}}" aria-label="Settings">
                                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                                    </a>
                                                    <form action="{{route('sesi.destroy', ['sesi' => $s->id_sesi])}}" method="POST" style="display:inline">
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
    <!-- Tabel Sesi -->
@endsection
