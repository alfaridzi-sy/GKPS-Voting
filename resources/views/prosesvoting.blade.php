@extends('layouts.mster')

@section('page_title')
    Proses Voting | Panel Admin SB Voting
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
                                    <h2>Proses Voting</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Voting</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Jalankan Proses Voting</span>
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

    <!-- Formulir Sesi Dengan Modal Start-->
    <div class="basic-form-area adminpro-pd mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="modal-bootstrap shadow-reset">
                        <div id="InformationproModalblbgpro" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span
                                                class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro">
                                            </span>
                                            <h2>Proses Voting Akan Segera Dimulai</h2>
                                            <p>
                                                Admin akan menjalankan proses voting untuk kode sesi
                                                @foreach ($sessions as $s)
                                                    <input type="hidden" name="id" id="id"  value="{{ $s -> id_sesi }}" disabled >
                                                    {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                                                @endforeach
                                                dengan durasi <span id="value_durasi"></span> menit. Dimulai ketika tombol "Mulai" ditekan.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('prosesvoting.store')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_sesi" id="id_sesi">
                                                <input type="hidden" name="durasi_vote" id="durasi_vote">
                                                <input type="hidden" name="status_vote" id="status_vote"  value="1" >
                                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Batalkan</button>
                                                <button type="submit" class="btn btn-primary" id="btnMulai">Mulai</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sparkline12-hd">
                                            <div class="main-sparkline12-hd">
                                                <div class="logo">
                                                    <a href="#"><img src="{{ asset('tmplt/img/logo/logo_dari_mintos.png') }}" alt="" /></a>
                                                </div>
                                                <br><br>
                                                <div class="tab-content-details shadow-reset">
                                                    <h2>Halaman Pengaturan Voting Untuk Sesi
                                                    @foreach ($sessions as $s)
                                                        {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                                                    @endforeach
                                                    </h2>
                                                    <p>Silahkan Atur Durasi Voting Sebelum Memulai Proses Voting</p>
                                                    <img src="{{ asset('tmplt/img/system_voting_ready.png') }}" alt="" />
                                                    <img src="{{ asset('tmplt/img/system_voting_ready.png') }}" alt="" />
                                                    <img src="{{ asset('tmplt/img/system_voting_ready.png') }}" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <br>
                                                <h1 style="color: white"><strong>Jumlah Peserta Absen:</strong></h1>
                                                <h2 style="color: white">{{$absent_details ->count()}} Orang / {{$clients ->count()}} Klien Terdaftar </h2>
                                                <br>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="all-form-element-inner">
                                            <form name="customForm" id="custom">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">
                                                                Durasi Vote
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="touchspin-inner">
                                                                @foreach ($sessions as $s)
                                                                    <input type="hidden" name="id" id="id"  value="{{ $s -> id_sesi }}" disabled >
                                                                @endforeach
                                                                <input class="form-control touchspin2" type="text" placeholder="" id="input_durasi_vote" name="minutes" value="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div
                                                                    class="login-horizental cancel-wp pull-left">
                                                                    <input type="reset" class="btn btn-white" value="Reset">
                                                                    <a href="#" id="submitBtn" class="btn btn-warning" data-toggle="modal" data-target="#InformationproModalblbgpro">Jalankan Proses Voting</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Formulir Sesi Dengan Modal Start-->
@endsection

@push('script')
    <script>
        $('#submitBtn').click(function() {
            $('#id_sesi').val($('#id').val());
            $('#durasi_vote').val($('#input_durasi_vote').val());
            $('#value_durasi').text($('#input_durasi_vote').val());
        });
    </script>
@endpush
