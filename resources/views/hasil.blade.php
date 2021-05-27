@extends('layouts.mster')

@section('page_title')
    Hasil Voting | Panel Admin - Voting SB GKPS
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
                                    <h2>Hasil Voting</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Voting</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Hasil Voting</span>
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

    <!-- Bagian Informasi Hasil Voting-->
    <div class="data-table-area mg-b-15"  id="refreshTable">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="tab-content-details shadow-reset">
                        <h2>Berikut Ini Merupakan Hasil Voting Untuk Sesi
                            @foreach ($sessions as $s)
                                {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                            @endforeach
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <div class="tab-content-details shadow-reset">
                            <br><br>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <br>
                        <h2 style="color: white"><strong>Jumlah Suara Masuk:</strong></h2>
                        <h3 style="color: white">{{ $votes ->count() }} Suara / {{$absent_details ->count()}} Orang</h3>
                        <br>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline13-list shadow-reset">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id_kandidat">ID</th>
                                                <th data-field="nomor_kandidat" data-editable="true">Nomor Kandidat</th>
                                                <th data-field="nama_kandidat" data-editable="true">Nama Kandidat</th>
                                                <th data-field="jumlah_suara" data-editable="true">Jumlah Suara</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($candidates as $c)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $c -> id_kandidat }}</td>
                                                    <td>{{ $c -> nomor_kandidat }}</td>
                                                    <td>{{ $c -> nama_kandidat }}</td>
                                                    <td>{{$votes -> Where('id_kandidat', $c -> id_kandidat)->count()}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                        <form action="{{route('hasilvoting.akhiri')}}" method="POST">
                            @csrf
                            @foreach ($sessions as $s)
                                <input type="hidden" id="id_sesi" name="id_sesi" value="{{ $s -> id_sesi }}">
                            @endforeach
                            <button type="submit" class="btn btn-lg btn-danger right">Akhiri Sesi</button>
                        </form>
                        <br><br>
                    </div>
                </div>
                <?php
                    /*
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline13-list shadow-reset">
                                    <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="true"></th>
                                                        <th data-field="id_detail_voting">ID</th>
                                                        <th data-field="kode_sesi" data-editable="true">Kode Sesi</th>
                                                        <th data-field="nama_lengkap" data-editable="true">Nama Klien</th>
                                                        <th data-field="nomor_kandidat" data-editable="true">Nomor Kandidat</th>
                                                        <th data-field="nama_kandidat" data-editable="true">Nama Kandidat</th>
                                                        <th data-field="datetime" data-editable="true">Waktu Memilih</th>
                                                        <th data-field="user_agent" data-editable="true">User Agent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($votes as $v)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $v -> id_detail_voting }}</td>
                                                            <td>{{ $v -> session -> kode_sesi }}</td>
                                                            <td>{{ $v -> client -> gelar_depan }}. {{ $v -> client ->  nama_lengkap }}, {{ $v -> client ->  gelar_belakang }}</td>
                                                            <td>{{ $v -> candidate -> nomor_kandidat }}</td>
                                                            <td>{{ $v -> candidate -> nama_kandidat }}</td>
                                                            <td>{{ $v -> datetime }}</td>
                                                            <td>{{ $v -> user_agent }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    */
                ?>
            </div>
        </div>
    </div>
    <!-- Bagian Informasi Hasil Voting-->
@endsection

@push('script')
    <script>
        $(document).ready(function() {

        setTimeout(function(){
            location.reload()
        }, 3000); //refresh every 2 seconds

        function RefreshTable() {
            location.reload()
        }
        $("#refresh").on("click", RefreshTable);

        // OR CAN THIS WAY
        //
        // $("#refresh-btn").on("click", function() {
        //    $( "#mytable" ).load( "your-current-page.html #mytable" );
        // });
        });
    </script>
@endpush

