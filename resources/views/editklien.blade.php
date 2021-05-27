@extends('layouts.mster')

@section('page_title')
    Edit Data Klien | Panel Admin SB Voting
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
                                    <h2>Edit Data Klien</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Klien</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Edit Data</span>
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

    <!-- Formulir Pendaftaran-->
    <div class="login-form-area mg-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3"></div>
                    <form id="adminpro-register-form" class="adminpro-form" action="{{route('klien.update', ['klien' => $clients->id_klien])}}" method="POST"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="col-lg-6">
                            <div class="login-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="logo">
                                            <a href="#"><img src="{{ asset('tmplt/img/logo/logo_dari_mintos.png') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-title">
                                            <h1>Formulir Edit Data Klien</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Email Aktif  </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                        <input type="email"  placeholder="Masukkan Email Aktif" name="email_klien" id="email_klien" value="{{ $clients -> email_klien}}">
                                            <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Kata Sandi</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="password" placeholder="******" name="password" id="password">
                                            <i class="fa fa-lock login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Ulangi Kata Sandi</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="password" placeholder="******" name="re-password" id="re-password">
                                            <i class="fa fa-lock login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Gelar Depan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="login-input-area register-mg-rt">
                                                    <input type="text" placeholder="Gelar Depan Anda" name="gelar_depan" id="gelar_depan" value="{{ $clients -> gelar_depan}}">
                                                    <i class="fa fa-user login-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Nama Lengkap</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" placeholder="Masukkan Nama Lengkap Anda" name="nama_lengkap" id="nama_lengkap" value="{{ $clients -> nama_lengkap}}">
                                            <i class="fa fa-user login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Gelar Belakang</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="login-input-area register-mg-rt">
                                                    <input type="text" placeholder="Gelar Belakang Anda" name="gelar_belakang" id="gelar_belakang" value="{{ $clients -> gelar_belakang}}">
                                                    <i class="fa fa-user login-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>WhatsApp</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" placeholder="Masukkan Nomor WhatsApp Anda" name="wa" id="wa" value="{{ $clients -> wa}}">
                                            <i class="fa fa-user login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Instansi</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" placeholder="Masukkan Instansi" name="instansi" id="instansi" value="{{ $clients -> instansi}}">
                                            <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Utusan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <select id="sektor" class="form-control" name="sektor">
                                                <option value="">- Masukkan Utusan -</option>
                                                <option value="Majelis Pendeta">Majelis Pendeta</option>
                                                <option value="Majelis Pendeta">Majelis Pendeta</option>
                                                <option value="Majelis Penginjil">Majelis Penginjil</option>
                                                <option value="Perutusan Resort">Perutusan Resort</option>
                                                <option value="Namaposo">Namaposo</option>
                                                <option value="Bapa">Bapa</option>
                                                <option value="Inang">Inang</option>
                                                <option value="Sekolah Minggu">Sekolah Minggu</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Upload Foto</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <div class="login-horizental cancel-wp pull-left">
                                            <input type="reset" class="btn btn-white" value="Reset">
                                            <input type="submit" id="basicSuccessImageKlien" class="btn btn-success" type="submit" value="Update Data Klien">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- Formulir Pendaftaran-->
@endsection
