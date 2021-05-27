@extends('layouts.mster')

@section('page_title')
    Master Data Jenis Pemilihan| Panel Admin SB Voting
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
                                    <li><a href="#">Master Data</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Tambah Jenis Pemilihan</span>
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
                        <div id="InformationproModalblbgpro"
                            class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade"
                            role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i
                                                class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span
                                            class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro">
                                        </span>
                                        <h2>Data Jenis Pemilihan Sudah Berhasil Ditambahkan</h2>
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
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="logo">
                                                            <a href="#"><img src="{{asset('tmplt/img/logo/logo_dari_mintos.png')}}" alt="" />
                                                            </a>
                                                            <br><br>
                                                        </div>
                                                        <h2>Halaman Master Data "Tambah Jenis Pemilihan"</h2>
                                                        <img src="img/checklist_system.png" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <form action="{{route('tambahjenispemilihan.store')}}" method="POST">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">
                                                                Kode Pemilihan
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="col-lg-6">
                                                                <input type="number" class="form-control" placeholder="Masukkan Kode Pemilihan" name="kode_pemilihan" id="kode_pemilihan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Jenis
                                                                Pemilihan</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" placeholder="Masukkan Jenis Pemilihan" name="jenis_pemilihan" id="jenis_pemilihan">
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
                                                                    <button type="submit" class="btn btn-info"
                                                                        href="#" data-toggle="modal"
                                                                        data-target="#InformationproModalblbgpro">Simpan
                                                                        Data</button>
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
        var x = setInterval(function () {

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
            document.getElementById("countdown_absen").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endpush
