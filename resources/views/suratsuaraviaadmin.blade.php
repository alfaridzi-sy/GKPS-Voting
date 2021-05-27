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
                                    <h2>Voting</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Voting</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Voting Manual Via Admin</span>
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
                                        <span class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro"> </span>
                                        <h2>Apakah Anda Yakin Untuk Mengisikan Surat Suara Secara Manual?</h2>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Batalkan</a>
                                        <a class="Alert Alert-color" href="{{ route('hasilvoting.index') }}">Simpan</a>
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
                                                        <a href="#"><img src="{{ asset('tmplt/img/logo/logo_dari_mintos.png') }}" alt="" />
                                                        </a>
                                                    </div>    <br><br>
                                                    <div class="tab-content-details shadow-reset">
                                                        <h2>Halaman Pengisian Surat Suara Untuk Sesi '#id_sesi', '#keterangan_sesi' Secara Manual Via Admin Panel</h2>
                                                        <img src="{{ asset('tmplt/img/checklist_system.png') }}" alt="" /><img src="{{ asset('tmplt/img/checklist_system.png') }}" alt="" /><img src="{{ asset('tmplt/img/checklist_system.png') }}" alt="" />
                                                    </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <form action="#">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Kode Sesi</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="account">
                                                                    <option>Silahkan Pilih Sesi</option>
                                                                    <option>112</option>
                                                                    <option>'#id_sesi'</option>
                                                                    <option>'#id_sesi'</option>
                                                                    <option>'#id_sesi'</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Jenis Pemilihan</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" disabled class="form-control" placeholder="#jenis_pemilihan" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Keterangan Sesi</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="login-textarea-area">
                                                                <textarea class="contact-message" cols="110" rows="5" placeholder="#keterangan_sesi" disabled></textarea>
                                                                <i class="fa fa-comment login-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Nama Peserta</label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="account">
                                                                <option>Peserta</option>
                                                                <option>Michael Purba</option>
                                                                <option>'#nama_peserta'</option>
                                                                <option>'#dari_database'</option>
                                                                <option>'#dari_database'</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">ID Peserta</label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" disabled class="form-control" placeholder="#id_klien" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Instansi</label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" disabled class="form-control" placeholder="#instansi" />
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Apakah Melakukan Absensi?</label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="account" disabled>
                                                                <option>YA</option>
                                                                <option>TIDAK</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div> <br><br>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Pilihan Nomor Kandidat</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="account">
                                                                    <option>Silahkan Pilih Kandidat</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Nama Kandidat *Optional</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" disabled class="form-control" placeholder="#nama_kandidat" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <input type="reset" class="btn btn-white" value="Reset">
                                                                    <a href="#" class="btn btn-info" href="#" data-toggle="modal" data-target="#InformationproModalblbgpro">Simpan Data</a>
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

@push('scripts')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Aug 31, 2020 01:59:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countdown_absen").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endpush
