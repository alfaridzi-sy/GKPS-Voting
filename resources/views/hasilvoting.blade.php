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
    <div class="project-details-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="project-details-wrap shadow-reset">
                        <div class="row">
                            <div class="tab-content-details shadow-reset">
                                <h2>Berikut Ini Merupakan Hasil Voting Untuk Sesi '#id_sesi', Untuk Pemilihan '#keterangan_sesi'</h2>
                            </div>
                            <br><br>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="project-details-title">
                                    <h2><span class="profile-details-name-nn">Informasi Hasil</span> Voting</h2>
                                </div>
                                <ul id="adminpro-demo2" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Profile</a>
                                    </li>
                                    <li><a href="#">Turn on Profile</a>
                                    </li>
                                    <li><a href="#">Turn off Profile</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div class="admin-comment-month project-details-action">
                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Kode Sesi:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <select class="form-control custom-select-value" name="account">
                                                    <option>112</option>
                                                    <option>'#id_sesi'</option>
                                                    <option>'#id_sesi'</option>
                                                    <option>'#id_sesi'</option>
                                                    <option>'#id_sesi'</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Prosesi:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="btn-group project-list-ad">
                                                <button class="btn btn-white btn-xs">Absensi</button>
                                            </div>
                                            <div class="btn-group project-list-ad">
                                                <button class="btn btn-white btn-xs">Voting</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Operator Web Admin:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>Sebastian Saragih (Admin)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Jumlah Suara Masuk:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>400 Suara</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Jumlah Peserta Hadir Absen:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>400 Orang</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Jumlah Kandidat:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>7 Kandidat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Waktu Mulai Absensi:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>31.08.2020 Pukul 13:15:55 WIB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Waktu Mulai Voting:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-dt">
                                                <span>31.08.2020 Pukul 14:15:55 WIB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-mg">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="project-details-st">
                                                <span><strong>Peserta:</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="project-details-img">
                                                <a href="#"><img src="{{ asset('tmplt/img/notification/1.jpg') }}" alt="" />
                                                </a>
                                                <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="" />
                                                </a>
                                                <a href="#"><img src="{{ asset('tmplt/img/notification/3.jpg') }}" alt="" />
                                                </a>
                                                <a href="#"><img src="{{ asset('tmplt/img/notification/4.jpg') }}" alt="" />
                                                </a>
                                                <a href="#"><img src="{{ asset('tmplt/img/notification/5.jpg') }}" alt="" />
                                                    <a href="#"><img src="{{ asset('tmplt/img/notification/1.jpg') }}" alt="" />
                                                    </a>
                                                    <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="" />
                                                    </a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="project-pregress-details">
                                    <span><strong>Persentase Peserta [Hadir Absen] Ikut Voting </strong></span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="skill-content-3 project-details-progress">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>100%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="project-details-tab">
                                    <ul class="nav nav-tabs res-pd-less-sm">
                                        <li class="active"><a data-toggle="tab" href="#grafik">Grafik Voting</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#informasi">Informasi Voting Sesi '#id_sesi'</a>
                                        </li>
                                        </li>
                                        <li><a data-toggle="tab" href="#tabel">Tabel Database Voting</a>
                                    </ul>
                                    <div class="tab-content res-tab-content-project">
                                        <div id="grafik" class="tab-pane fade in active animated zoomInLeft">
                                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                                <div id="bar1-chart">
                                                    <canvas id="barchart1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="informasi" class="tab-pane fade animated bounceInUp">
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-profile-comment-list">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="user-profile-comment-img projuct-details-img-tab">
                                                            <a href="#"><img src="{{ asset('tmplt/img/notification/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="user-profile-comment-content">
                                                            <p><strong>No Kandidat '#no_kandidat', '#nama_kandidat'</strong> Memperoleh 245 Suara Pada '#keterangan_sesi'.</p>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="comment-date-profile profile-details-name-nn">
                                                                        <span>12.06.2018</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tabel" class="tab-pane fade animated bounceInUp">
                                            <div class="project-details-completeness">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>Title</th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Comments</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                            </td>
                                                            <td>
                                                                Create project in webapp
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                            </td>
                                                            <td>
                                                                Various versions
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                There are many variations
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                            </td>
                                                            <td>
                                                                Latin words
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    Latin words, combined with a handful of model sentence structures
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                            </td>
                                                            <td>
                                                                The generated Lorem
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                The first line
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                            </td>
                                                            <td>
                                                                The standard chunk
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                            </td>
                                                            <td>
                                                                Lorem Ipsum is that
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                Contrary to popular
                                                            </td>
                                                            <td>
                                                                12.07.2018 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2018 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="prject-details-small">
                                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="project-details-descri project-details-mg-t-30 shadow-reset">
                        <h2>INFORMASI!</h2>
                        <p>Apabila Ada Kendala Teknis Dalam Pelaksanaan Pengambilan Surat Suara (Proses Voting), Administrator Panel Admin Dapat Melakukan Pemungutan Surat Suara Manual Melaui Tombol Dibawah Ini.</p><br>
                        <a href="{{ route('suratsuaraviaadmin.index') }}" class="btn btn-info">Tambah Surat Suara</a>
                    </div>
                    <div class="sparkline7-list shadow-reset mg-t-30">
                        <div class="sparkline7-hd">
                            <div class="main-spark7-hd">
                                <h1>Jumlah Kandidat Voting Sesi '#id_sesi'</h1>
                                <div class="sparkline7-outline-icon">
                                    <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline7-graph project-details-price-hd">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#03a9f4" data-thickness=".10" data-readonly="true" disabled>
                                </div>
                                <div class="progress-circular1 project-details-price">
                                    <h2>7 Orang</h2>
                                    <p>Kandidat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline7-list shadow-reset mg-t-30">
                        <div class="sparkline7-hd">
                            <div class="main-spark7-hd">
                                <h1>Jumlah Peserta Voting Sesi '#id_sesi'</h1>
                                <div class="sparkline7-outline-icon">
                                    <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline7-graph project-details-price-hd">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#03a9f4" data-thickness=".10" data-readonly="true" disabled>
                                </div>
                                <div class="progress-circular1 project-details-price">
                                    <h2>400 Hadir Absen / 400 Suara Masuk</h2>
                                    <p>Peserta [Hadir Absen] Mengikuti Voting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian Informasi Hasil Voting-->
@endsection

@push('scripts')

@endpush
