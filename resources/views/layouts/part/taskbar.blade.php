<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="admin-logo logo-wrap-pro">
                        <a href="#"><img src="img/logo/log.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="adminpro-icon adminpro-chat-pro"></span><span class="indicator-ms"></span></a>
                                <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                    <div class="message-single-top">
                                        <h1>Pesan</h1>
                                    </div>
                                    <ul class="message-menu">
                                        <li>
                                            <a href="#">
                                                <div class="message-img">
                                                    <img src="img/message/1.jpg" alt="">
                                                </div>
                                                <div class="message-content">
                                                    <span class="message-date">24 Aug 2020</span>
                                                    <h2>Mintos</h2>
                                                    <p>Belum ada pesan penting [Sistem].</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="message-view">
                                        <a href="#">Lihat Semua Pesan</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                    <div class="notification-single-top">
                                        <h1>Pemberitahuan</h1>
                                    </div>
                                    <ul class="notification-menu">
                                        <li>
                                            <a href="#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-checked-pro"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">24 Aug 2020</span>
                                                    <h2>Mintos</h2>
                                                    <p>Belum ada pemberitahuan.</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="notification-view">
                                        <a href="#">Semua Pemberitahuan</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">{{ Auth::user()->name }}</span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>Pengaturan Admin</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Prosesi Voting</a>
                                    </li>
                                    <li>
                                        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="adminpro-icon adminpro-locked author-log-ic"></span>Keluar
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                    <ul class="nav nav-tabs custon-set-tab">
                                        <li class="active"><a data-toggle="tab" href="#Notes">Catatan</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#Settings">Pengaturan Prosesi Voting</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="Notes" class="tab-pane fade in active">
                                            <div class="notes-area-wrap">
                                                <div class="note-heading-indicate">
                                                    <h2><i class="fa fa-comments-o"></i> Catatan Terbaru</h2>
                                                    <p>Anda Memiliki 1 Pesan Belum Terbaca</p>
                                                </div>
                                                <div class="notes-list-area notes-menu-scrollbar">
                                                    <ul class="notes-menu-list">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notes-list-flow">
                                                                    <div class="notes-img">
                                                                        <img src="img/notification/5.jpg" alt="" />
                                                                    </div>
                                                                    <div class="notes-content">
                                                                        <p> Tes Pesan Prosesi Voting.</p>
                                                                        <span>Kemarin 2:45 pm</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Projects" class="tab-pane fade">
                                            <div class="projects-settings-wrap">
                                                <div class="note-heading-indicate">
                                                    <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                    <p> You have 20 projects. 5 not completed.</p>
                                                </div>
                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                    <ul class="projects-st-menu-list">
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Web Development</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">1 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content">
                                                                        <p>Completion with: 28%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Software Development</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">2 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content project-rating-cl">
                                                                        <p>Completion with: 68%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 68%;" class="progress-bar"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Graphic Design</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">3 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content">
                                                                        <p>Completion with: 78%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 78%;" class="progress-bar"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Web Design</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">4 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content project-rating-cl2">
                                                                        <p>Completion with: 38%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Business Card</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">5 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content">
                                                                        <p>Completion with: 28%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Ecommerce Business</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">6 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content project-rating-cl">
                                                                        <p>Completion with: 68%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 68%;" class="progress-bar"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Woocommerce Plugin</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">7 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content">
                                                                        <p>Completion with: 78%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 78%;" class="progress-bar"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="project-list-flow">
                                                                    <div class="projects-st-heading">
                                                                        <h2>Wordpress Theme</h2>
                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                        <span class="project-st-time">9 hours ago</span>
                                                                    </div>
                                                                    <div class="projects-st-content project-rating-cl2">
                                                                        <p>Completion with: 38%</p>
                                                                        <div class="progress progress-mini">
                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                        </div>
                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Settings" class="tab-pane fade">
                                            <div class="setting-panel-area">
                                                <div class="note-heading-indicate">
                                                    <h2><i class="fa fa-gears"></i> Mini Panel Pengaturan</h2>
                                                    <p> Anda Telah Melakukan 20 Voting, 18 Selesai, 2 Belum Selesai</p>
                                                </div>
                                                <ul class="setting-panel-list">
                                                    <li>
                                                        <div class="checkbox-setting-pro">
                                                            <div class="checkbox-title-pro">
                                                                <h2>Jalankan Sesi</h2>
                                                                <div class="ts-custom-check">
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                        <label class="onoffswitch-label" for="example3">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-setting-pro">
                                                            <div class="checkbox-title-pro">
                                                                <h2>Jalankan Absensi</h2>
                                                                <div class="ts-custom-check">
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                        <label class="onoffswitch-label" for="example4">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-setting-pro">
                                                            <div class="checkbox-title-pro">
                                                                <h2>Jalankan Voting</h2>
                                                                <div class="ts-custom-check">
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                        <label class="onoffswitch-label" for="example7">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-setting-pro">
                                                            <div class="checkbox-title-pro">
                                                                <h2>Reset Semua Prosesi</h2>
                                                                <div class="ts-custom-check">
                                                                    <div class="btn btn-custon-four btn-danger" button type="button" class="adminpro-icon adminpro-danger-error">
                                                                        Reset</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

