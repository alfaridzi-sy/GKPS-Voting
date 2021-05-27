@extends('layouts.mster')

@section('page_title')
    Proses Absen | Panel Admin - Voting SB GKPS
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
                                    <h2>Proses Absen</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Absen</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Proses Absen</span>
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

    <!-- Bagian Informasi Proses Absen-->
    <div class="data-table-area mg-b-15"  id="refreshTable">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="tab-content-details shadow-reset">
                        <h2>Berikut Ini Merupakan Proses Absen Untuk Sesi
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
                        <h2 style="color: white"><strong>Jumlah Peserta Absen:</strong></h2>
                        <h3 style="color: white">{{$absent_details ->count()}} Orang / {{$clients ->count()}} Klien Terdaftar </h3>
                        <br>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                        <br>
                        <form action="{{route('pengaturanabsensi.hentikan')}}" method="POST">
                            @csrf
                            @foreach ($absent_sessions as $a_s)
                                <input type="hidden" id="id_sesi_absen" name="id_sesi_absen" value="{{ $a_s -> id_sesi_absen }}">
                            @endforeach
                            @foreach ($sessions as $s)
                                <input type="hidden" id="id_sesi" name="id_sesi" value="{{ $s -> id_sesi }}">
                            @endforeach
                            <button type="submit" class="btn btn-lg btn-danger right">Hentikan</button>
                        </form>
                        <br>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <!-- Bagian Informasi Proses Absen-->
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

