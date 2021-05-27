@extends('layouts.mster')

@section('page_title')
    Pengaturan Absensi | Panel Admin SB Voting
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
                                    <h2>Pengaturan Absensi</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Absensi</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Jalankan Proses Absensi</span>
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
                                            <h2>Proses Absen Akan Segera Dimulai</h2>
                                            <p>
                                                Admin akan menjalankan proses absensi peserta voting untuk kode sesi
                                                @foreach ($sessions as $s)
                                                    <input type="hidden" name="id" id="id"  value="{{ $s -> id_sesi }}" disabled >
                                                    {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                                                @endforeach
                                                dengan durasi <span id="value_durasi"></span> menit. Dimulai ketika tombol "Mulai" ditekan.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('pengaturanabsensi.store')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_sesi" id="id_sesi">
                                                <input type="hidden" name="durasi" id="durasi">
                                                <input type="hidden" name="status_absen" id="status_absen"  value="1" >
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
                                                    <a href="#"><img src="{{ asset('tmplt/img/logo/logo_dari_mintos.png') }}"
                                                            alt="" />
                                                    </a>
                                                </div> <br><br>
                                                <div class="tab-content-details shadow-reset">
                                                    <h2>Halaman Pengaturan Absensi Klien Untuk Sesi
                                                    @foreach ($sessions as $s)
                                                        {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                                                    @endforeach
                                                    </h2>
                                                    <p>Silahkan Atur Durasi Absen Sebelum Memulai Absensi</p>
                                                    <img src="{{ asset('tmplt/img/checklist_system.png') }}" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <form name="customForm" id="custom">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">
                                                                Durasi Absen
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="touchspin-inner">
                                                                @foreach ($sessions as $s)
                                                                    <input type="hidden" name="id" id="id"  value="{{ $s -> id_sesi }}" disabled >
                                                                @endforeach
                                                                <input class="form-control touchspin2" type="text" placeholder="" id="input_durasi" name="minutes" value="10">
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
                                                                    <a href="#" id="submitBtn" class="btn btn-warning" data-toggle="modal" data-target="#InformationproModalblbgpro">Aktifkan Proses Absensi Peserta Voting</a>
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
            $('#durasi').val($('#input_durasi').val());
            $('#value_durasi').text($('#input_durasi').val());
        });
    </script>
@endpush

