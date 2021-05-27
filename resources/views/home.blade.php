@extends('layouts.mster')

@section('page_title')
    Utama | Panel Admin - Voting SB GKPS
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

    <!-- Bagian Berita Klien-->
    <div class="welcome-adminpro-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
                        <div class="welcome-adminpro-title">
                            <h1>Berita Klien</h1>
                        <p>Total Klien Terdaftar = {{$clients ->count()}} </p><br>
                        </div>
                        <div class="adminpro-message-list">
                            <ul class="message-list-menu">
                                @foreach($clients as $k => $c)
                                <li>
                                    <span class="message-serial message-cl-one">{{ $k + 1 }}</span>
                                    <span class="message-info">{{ $c -> gelar_depan }} {{ $c -> nama_lengkap }} {{ $c -> gelar_belakang }}</span>
                                    <span class="message-time">{{ $c -> waktu_pendaftaran }} [{{ $c -> user_agent }}]</span>
                                </li>
                                @endforeach
                            </ul>
                        </div> <br>
                        <div class="welcome-adminpro-title">
                            <p>Semua Klien >>> </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="dashboard-line-chart shadow-reset mg-b-30">
                        <div class="welcome-adminpro-title">
                            <h1>Grafik Pendaftaran Klien - Realtime</h1>
                        </div>
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="linechart-dash-rate">
                                    <h2>{{$clients ->Where('user_agent', 'Web Panel') -> count()}}</h2>
                                    <p>Pendaftar Via Web Panel</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="linechart-dash-rate">
                                    <h2>{{$clients ->Where('user_agent', 'Android Apps') -> count()}}</h2>
                                    <p>Pendaftar Via Android Apps</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 desplay-n-tablet">
                    <div class="dashone-adminprowrap shadow-reset mg-b-30">
                        <div class="dash-adminpro-project-title">
                            <h2>Total Klien Terdaftar</h2>
                            <p>Pendaftaran Klien Bisa Melalui Panel Admin dan Aplikasi Klien Android</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashone-doughnut">
                                    <div id="sparklinedask1"></div>
                                    <h3>Registrasi Via Web Panel</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashone-doughnut">
                                    <div id="sparklinedask2"></div>
                                    <h3>Registrasi Via Android</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashone-doughnut">
                                    <div id="sparklinedask3"></div>
                                    <h3>Jumlah Seluruh Klien = {{$clients ->count()}} client</h3>
                                </div>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="project-dashone-phara">
                                    <p>Lakukan Registrasi Klien (Manual)</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian Berita Klien-->

    <!-- Bagian Persiapan Sesi-->
    <div class="stockprice-feed-project-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-sparkline shadow-reset desplay-n-tablet-pro">
                        <div class="sparkline-hd">
                            <div class="main-spark-hd">
                                <h1>Persiapan Menuju Pengaturan Sesi ( Waktu Server Saat Ini <span id="waktu"></span> WIB )</h1>
                                <div class="outline-icon">
                                    <span class="collapse-link"><i class="fa fa-chevron-down"></i></span>
                                    <span><a href="{{route('pengaturansesi.index')}}"><i
                                                class="fa fa-wrench"></i></span>
                                    <span class="collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline-content timeline-scrollbar">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="timeline-hd-main">
                                        <div class="timeline-heading-admin">
                                            <h1>[Voting Terbaru] Sesi 111, Pemilihan Ketua SB Telah Selesai
                                                Dilakukan</h1>
                                            <p><i class="fa fa-map-marker"></i> Selesai pada Tanggal 24/08/2020
                                                Jam 14:00 WIB.
                                                Lihat Detail Sesi Voting!</p>
                                        </div>
                                        <div class="mapcontainer">
                                            <div class="map">
                                                <span>Peta Indonesia [Waktu Server]</span>
                                            </div>
                                            <div class="plotLegend"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timelinewrap-admin res-mg-b-10">
                                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                    <div class="icon-date-timeline">
                                        <i class="fa fa-briefcase"></i>
                                        <p>14:30 WIB</p>
                                        <p class="timeline-hr-cl">5 Menit Lalu</p>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn timeline-adminpro-bd-ct">
                                    <div class="timeline-content">
                                        <h3>Selesai Pelaksanaan Sesi 112 "Pemilihan Ketua Biro"</h3>
                                        <p>Sesi 112 "Pemilihan Ketua Biro" Sudah Selesai Dilakukan, Klik Untuk
                                            Detail Voting!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row timelinewrap-admin res-mg-b-10">
                                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                    <div class="icon-date-timeline">
                                        <i class="fa fa-briefcase"></i>
                                        <p>14:30 WIB</p>
                                        <p class="timeline-hr-cl">5 Menit Lalu</p>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn timeline-adminpro-bd-ct">
                                    <div class="timeline-content">
                                        <h3>Selesai Pelaksanaan Sesi 112 "Pemilihan Ketua Biro"</h3>
                                        <p>Sesi 112 "Pemilihan Ketua Biro" Sudah Selesai Dilakukan, Klik Untuk
                                            Detail Voting!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row timelinewrap-admin res-mg-b-10">
                                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                    <div class="icon-date-timeline">
                                        <i class="fa fa-briefcase"></i>
                                        <p>14:30 WIB</p>
                                        <p class="timeline-hr-cl">5 Menit Lalu</p>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn timeline-adminpro-bd-ct">
                                    <div class="timeline-content">
                                        <h3>Selesai Pelaksanaan Sesi 112 "Pemilihan Ketua Biro"</h3>
                                        <p>Sesi 112 "Pemilihan Ketua Biro" Sudah Selesai Dilakukan, Klik Untuk
                                            Detail Voting!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian Persiapan Sesi-->
@endsection

@push('scripts')
    <script>
	window.setTimeout("waktu()", 1000);
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("waktu").innerHTML = waktu.getHours()+" : "+waktu.getMinutes()+" : "+waktu.getSeconds();
	}
</script>
@endpush
