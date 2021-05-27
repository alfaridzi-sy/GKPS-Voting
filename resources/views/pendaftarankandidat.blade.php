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
                                    <h2>Pendaftaran Kandidat</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Kandidat</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Pendaftaran Kandidat</span>
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
                        <div id="PrimaryModalblbgpro" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-check modal-check-pro"></i>
                                        <h2>Beberapa Langkah Lagi!</h2>
                                        <p>Anda Akan Memasukkan '#jumlah_kandidat' Pada Sesi '#id_sesi', Untuk Pemilihan '#keterangan_pemilihan'</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Batalkan</a>
                                        <a href="{{ route('pengaturanabsensi.index')}}">Proses</a>
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
                                                        <a href="#"><img src="{{asset('tmplt/img/logo/logo_dari_mintos.png')}}" alt="" />
                                                        </a>
                                                    </div>    <br><br>
                                                    <div class="tab-content-details shadow-reset">
                                                        <h2>
                                                            Halaman Pendaftaran Kandidat Untuk Kode Sesi
                                                            @foreach ($sessions as $s)
                                                                {{ $s -> kode_sesi }}, {{ $s -> selection_type -> jenis_pemilihan }} ( {{ $s -> keterangan_sesi }} )
                                                            @endforeach
                                                        </h2>
                                                        <p>Pada bagian Ini, Admin dapat memasukkan jumlah kandidat dan informasi kandidat yang mengikuti pemilihan dari sesi ini.
                                                        </h2></p>
                                                        <img src="{{asset('tmplt/img/warning_system.png')}}" alt="" />
                                                    </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <form method="post" action="{{route('pendaftarankandidat.store')}}">
                                                @csrf
                                                    @foreach ($sessions as $s)
                                                        <input type="hidden" name="id_sesi" id="id_sesi" value="{{ $s -> id_sesi }}">
                                                    @endforeach
                                                <div class="row"  id="newRow">
                                                    <div class="sparkline12-hd" id="inputFormRow">
                                                        <div class="form-group-inner input-with-success">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Pencarian Nama Kandidat</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-select-list">
                                                                        <input type="text" name="cari_nama" id="nama_lengkap_0" class="form-control m-input" placeholder="Cari Nama Kandidat...">
                                                                        <div id="list_nama">
                                                                        </div>
                                                                        {{ csrf_field() }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br><br><br>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button id="addRow" type="button" class="btn btn-success">Tambahkan</button>
                                                                    @php
                                                                        //<a href="#" class="btn btn-sm btn-primary login-submit-cs" href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Daftarkan Jumlah Kandidat</a>
                                                                    @endphp
                                                                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
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
    <script type="text/javascript">
        var rowcount = 0 ;

        $(document).ready(function(){
            $('#nama_lengkap_'+rowcount).keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete.fetch') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#list_nama').fadeIn();
                            $('#list_nama').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#nama_lengkap_'+rowcount).val($(this).text());
                $('#list_nama').fadeOut();
            });
        });

        // add row
        $("#addRow").click(function () {
            rowcount++;
            var html = '<div class="sparkline12-hd"  id="inputFormRow"><div class="form-group-inner input-with-success"><div class="row"><div class="col-lg-3"><label class="login2 pull-right pull-right-pro">Nomor Kandidat</label></div><div class="col-lg-4"><div class="form-select-list"><input type="number" name="nomor_kandidat[]" class="form-control m-input" placeholder="Masukkan Nomor Kandidat" autocomplete="off"></div></div><div class="col-lg-1"></div></div><div class="row"><div class="col-lg-7"></div><div class="col-lg-1"><button id="removeRow" type="button" class="btn btn-danger">Hapus</button></div></div><div class="row"><div class="col-lg-3"><label class="login2 pull-right pull-right-pro">Nama Kandidat</label></div><div class="col-lg-4"><div class="form-select-list"><input type="text" name="nama_lengkap[]" id="nama_lengkap_' + rowcount +'" class="form-control m-input" placeholder="Masukkan Nama Kandidat">{{ csrf_field() }}</div></div></div></div></div>';
            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });

    </script>
@endpush
