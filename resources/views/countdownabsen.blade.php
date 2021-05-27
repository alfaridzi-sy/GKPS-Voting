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
                                    <h2>Countdown Absensi</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Absensi</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Countdown Proses Absensi</span>
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
                        <div id="AlertModalblbgpro"
                            class="modal modal-adminpro-general FullColor-popup-AlertModal PrimaryModal-bgcolor fade">
                            <div class="modal-content">
                                <div class="modal-close-area modal-close-df">

                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('prosesvoting.index') }}">Hentikan</a>
                                    <br>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sparkline12-hd">
                                            <div class="main-sparkline12-hd">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="all-form-element-inner">
                                            <span class="adminpro-icon adminpro-warning modal-check-pro information-icon-pro"></span>
                                            <h2>
                                                Proses Absensi Klien Untuk Kode Sesi
                                                @foreach ($absent_sessions as $a_s)
                                                    <input type="text" id="input_durasi" name="minutes" value="{{ $a_s -> durasi }}">
                                                    {{ $a_s -> session -> kode_sesi }}, {{ $a_s -> session -> selection_type -> jenis_pemilihan }} ( {{ $a_s -> session -> keterangan_sesi }} )
                                                @endforeach
                                                Sedang Berjalan !
                                            </h2>
                                            <br>
                                            <div class="display">
                                                <button id="countdown_absen" type="button" class="displayTimeLeft btn btn-custon-four btn-primary btn-lg" name="status_absen_aktif"></button>
                                                <br><br><br>
                                                <h3 class="displayEndTime" style="color: white"></h3>
                                            </div><hr width="50%">
                                            <p>
                                                Admin dapat menghentikan jalannya proses absen secara manual dengan menekan tombol "Hentikan" tanpa menunggu durasi absen habis secara otomatis
                                            </p>
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
        let countdown;
        const timerDisplay = document.querySelector('.displayTimeLeft');
        const endTime = document.querySelector('.displayEndTime');
        const button = document.querySelectorAll('[data-time]');

        $(document).ready(function() {
            startTimer;
            const mins = this.minutes.value;
            console.log(mins);
            timer(mins*60);
        }


        function startTimer(){
            const seconds=parseInt(this.dataset.time);
            timer(seconds);
        }

        function timer(seconds){
            clearInterval(countdown);
            const now = Date.now();
            const then = now + seconds * 1000;
            displayTimeLeft(seconds);
            displayEndTime(then);

            countdown = setInterval(() => {
                const secondsLeft = Math.round((then - Date.now())/1000);
                displayTimeLeft(secondsLeft);
                if (secondsLeft < 0) {
                    clearInterval(countdown);
                    timerDisplay.textContent = "Waktu Proses Absensi Telah Habis";
                    document.title = "Waktu Proses Absensi Telah Habis";
                    location.replace("/prosesvoting")
                    //redirect ('/prosesvoting');
                }
            }, 1000);
        }

        function displayTimeLeft(seconds) {
            const hours = Math.floor(seconds / ( 60 * 60));
            const minutes = Math.floor((seconds % ( 60 * 60)) / ( 60));
            const remainderSeconds = Math.floor((seconds % ( 60)));
            const display=`${hours <10 && hours >= 0  ? '0' : ''}${hours}:${minutes <10 && minutes >= 0  ? '0' : ''}${minutes}:${remainderSeconds < 10 && remainderSeconds >= 0  ? '0' : ''}${remainderSeconds}`;
            document.title = display;
            document.getElementById("countdown_absen").innerHTML="abc";
        }

        function displayEndTime(timestamp) {
            const end = new Date(timestamp);
            const hour = end.getHours();
            const adjustedHour = hour > 24 ? hour - 24 : hour;
            const minutes = end.getMinutes();
            endTime.textContent= `Proses Absensi Akan Berakhir Pada Pukul ${adjustedHour}:${minutes < 10 ? '0' : ''}${minutes} WIB`;
        }

        $('#submitBtn').click(function() {
            $('#value_durasi').text($('#input_durasi').val());
        });
    </script>
@endpush
