@extends('layouts.mster')

@section('page_title')
    Pengaturan Sesi | Panel Admin SB Voting
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
                                    <h2>Pengaturan Sesi</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Sesi</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Pengaturan Sesi</span>
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
                        <div id="WarningModalblbgpro" class="modal modal-adminpro-general Customwidth-popup-WarningModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <form action="{{route('pengaturansesi.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="kode_sesi" id="kode_sesi">
                                    <input type="hidden" name="id_pemilihan" id="id_pemilihan">
                                    <input type="hidden" name="keterangan_sesi" id="keterangan_sesi">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                            <h2>Perhatian!</h2>
                                            <p>Admin akan mengatur kode sesi <span id="kode"></span> untuk <span id="jenis"></span> ( <span id="keterangan"></span> ). Selanjutnya proses Pendaftaran Kandidat.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Batalkan</button>
                                            <button type="submit" class="btn btn-primary">Lanjutkan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sparkline12-hd">
                                            <div class="main-sparkline12-hd">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="logo">
                                                            <a href="#"><img src="{{asset('tmplt/img/logo/logo_dari_mintos.png')}}" alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <form action="#">
                                                <div class="form-group-inner input-with-success">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Kode Sesi</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="number" class="form-control" id="input_kode">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Jenis Pemilihan</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="account" id="input_jenis">
                                                                    <option>Pilih Salah Satu</option>
                                                                    @foreach($selection_types as $k => $s_t)
                                                                    <option value="{{ $s_t -> id_pemilihan }}" nama="{{ $s_t -> jenis_pemilihan }}">{{ $s_t -> jenis_pemilihan }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Keterangan Sesi</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="login-textarea-area">
                                                                <textarea class="contact-message" cols="170" rows="5" placeholder="Silahkan Tambahkan Keterangan Sesi Disini" id="input_keterangan"></textarea>
                                                                <i class="fa fa-comment login-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <input type="reset" class="btn btn-white" value="Reset">
                                                                    <a href="#" id="submitBtn" class="btn btn-sm btn-primary login-submit-cs" href="#" data-toggle="modal" data-target="#WarningModalblbgpro">Simpan dan Mulai Sesi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Ikhtisar Pilihan</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input wire:model="ikhtisar" id="ikhtisar" type="text" disabled class="form-control" placeholder="" />
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
            $('#kode').text($('#input_kode').val());
            $('#jenis').text($('#input_jenis option:selected').attr("nama"));
            $('#keterangan').text($('#input_keterangan').val());
            $('#kode_sesi').val($('#input_kode').val());
            $('#id_pemilihan').val($('#input_jenis').val());
            $('#keterangan_sesi').val($('#input_keterangan').val());
            $('#jenis_pemilihan').val($('#input_jenis option:selected').attr("nama"));
        });

        $(document).ready(function() {
            $('#input_keterangan').change(function() {
                $('#ikhtisar').val("Admin memasukkan kode sesi " + $('#input_kode').val() + " untuk " + $('#input_jenis option:selected').attr("nama") + " ( " + $('#input_keterangan').val() + " ).");
            });
        });
    </script>
@endpush
