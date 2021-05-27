<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="{{asset('tmplt/img/avatar.png')}}" style="width: 150px; height : 150px;" alt="" />
            </a>
            <h3>{{ Auth::user()->name }}</h3>
            <p>{{ Auth::user()->username }}</p>
            <strong>VP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span
                            class="mini-dn">Halaman Utama</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('home')}}" class="dropdown-item">Statistik</a>
                        <a href="{{route('pengaturansesi.index')}}" class="dropdown-item">Mulai Pengaturan Sesi</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span
                            class="mini-dn">Klien / Peserta Voting</span> <span
                            class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('klien.index') }}" class="dropdown-item">Semua Klien</a>
                        <a href="{{ route('klien.create') }}" class="dropdown-item">Registrasi Klien Via Admin Panel
                            (Manual)</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span
                            class="mini-dn">Sesi</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('sesi.index') }}" class="dropdown-item">Semua Sesi</a>
                        <a href="{{ route('pengaturansesi.index') }}" class="dropdown-item">Mulai Pengaturan Sesi</a>
                        <a href="{{ route('pendaftarankandidat.index') }}" class="dropdown-item">Pendaftaran Kandidat</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span
                            class="mini-dn">Absensi Peserta</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('pengaturanabsensi.index') }}" class="dropdown-item">Pengaturan Absensi Peserta</a>
                        <a href="{{ route('absenviaadmin.index') }}" class="dropdown-item">Absensi Klien Via Admin Panel
                            (Manual)</a>
                        <a href="data-absensi.html" class="dropdown-item">Semua Data Absensi</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span
                            class="mini-dn">Proses Voting</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu"
                        class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="{{ route('prosesvoting.index') }}" class="dropdown-item">Lakukan Proses Voting</a>
                        <a href="{{ route('hasilvoting.index') }}" class="dropdown-item">Hasil Voting</a>
                        <a href="{{ route('suratsuaraviaadmin.index') }}" class="dropdown-item">Penambahan Surat Suara Via Admin
                            Panel (Manual)</a>
                    </div>
                </li>

                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span
                            class="mini-dn">MASTER DATA</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu"
                        class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                        <a href="{{route('tambahjenispemilihan.index')}}" class="dropdown-item">Tambah Jenis Pemilihan</a>

                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span
                            class="mini-dn">SYSTEM</span> <span class="indicator-right-menu mini-dn"><i
                                class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu"
                        class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                        <a href="backupdb.html" class="dropdown-item">Backup/Download Database</a>
                        <a href="backupdb.html" class="dropdown-item">Restore Database</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
