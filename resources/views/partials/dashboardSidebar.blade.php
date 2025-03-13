<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ asset('back/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('dashboard/index') }}">
                    <img class="brand-logo" alt="admin logo" src="{{ asset('back/images/logo/logo.png') }}" />

                    <h3 class="brand-text">SMKS PGRI 1</h3>
                </a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link close-navbar"><i class="ft-x"></i></a>
            </li>
        </ul>
    </div>

    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ request()->is('dashboard/index*') ? 'active' : '' }}">
                <a class="menu-item" href="{{ url('dashboard/index') }}">
                    <i class="ft-file"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span>
                    <span class="badge badge-pill badge-warning float-right">1.2</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('apps*') ? 'active' : '' }}">
                <a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Master Data</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('dashboard/classrooms') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/classrooms') }}">Data Kelas</a>
                    </li>
                    <li class="{{ request()->is('dashboard/jurusan') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/jurusan') }}">Data Jurusan</a>
                    </li>
                    <li class="{{ request()->is('dashboard/teachers') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/teachers') }}">Data Guru</a>
                    </li>
                    <li class="{{ request()->is('dashboard/mapels') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/mapels') }}">Data Mapel</a>
                    </li>
                    <li class="{{ request()->is('dashboard/teachings') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/teachings') }}">Jadwal Guru</a>
                    </li>
                    <li class="{{ request()->is('dashboard/students') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/students') }}">Data Siswa</a>
                    </li>
                    <li class="{{ request()->is('dashboard/announcements') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ url('dashboard/announcements') }}">Data Pengumuman</a>
                    </li>
                </ul>
            </li>           
            <li class="nav-item {{ request()->is('dashboard/edit_profile*') ? 'active' : '' }}">
                <a class="menu-item" href="{{ url('dashboard/edit_profile') }}">
                    <i class="ft-user"></i>
                    <span class="menu-title" data-i18n="">Update Profile</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('dashboard/configs*') ? 'active' : '' }}">
                <a class="menu-item" href="{{ url('dashboard/configs') }}">
                    <i class="ft-settings"></i>
                    <span class="menu-title" data-i18n="">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>
