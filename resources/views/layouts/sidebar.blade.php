<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
            <ul class="nav-menu custom-scrollbar" style="height: 500px;">
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                @if(Auth::user()->role_id == 1)
                <li class="sidebar-main-title">
                    <div>
                        <h6>Admin Dasboard</h6>
                    </div>
                </li>
                @endif
                @if(Auth::user()->role_id == 3)
                <li class="sidebar-main-title">
                    <div>
                        <h6>Wali Kelas Dasboard</h6>
                    </div>
                </li>
                @endif
                @if(Auth::user()->role_id == 4)
                <li class="sidebar-main-title">
                <div>
                    <h6>Siswa Dasboard</h6>
                </div>
                @endif
                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="globe"></i><span>Dashboard</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ route('home') }}" class="">Default</a></li>
                        <li><a href="https://laravel.pixelstrap.com/viho/dashboard/dashboard-02" class="">Ecommerce</a></li>
                    </ul>
                </li>
                @if(Auth::user()->role_id == 1)
                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ url('guru') }}" class="">Guru</a></li>
                        <li><a href="{{ route('siswa.index') }}" class="">Siswa</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="{{ route('thpelajaran.index') }}"><i data-feather="clipboard"></i><span>Tahun Pelajaran</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="{{ route('mapel.index') }}"><i data-feather="book"></i><span>Mata Pelajaran</span></a>
                </li>
                @endif

                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="home"></i><span>Kelas</span></a>
                    <ul class="nav-submenu menu-content"  style="display: none;">
                        <li><a href="{{ route('kelas_siswa.index') }}" class="">Kelas Siswa</a></li>
                        <li><a href="{{ route('kelas_mapel.index') }}" class="">Kelas Mapel</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="edit"></i><span>Nilai</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ route('nilai.index') }}" class="">Nilai</a></li>
                        <li><a href="{{ route('nilai.index') }}" class="">Nilai PTS</a></li>
                        <li><a href="{{ route('nilai.index') }}" class="">Nilai PAS</a></li>

                    </ul>
                </li>

                @if(Auth::user()->role_id == 4)
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="{{ route('berita.index') }}"><i data-feather="bookmark"></i><span>Jadwal Pelajaran</span></a>
                </li>
                @endif
                @if(Auth::user()->role_id == 1)
                <li class="sidebar-main-title">
                    <div>
                        <h6>Web Profile</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="{{ route('berita.index') }}"><i data-feather="clipboard"></i><span>Berita</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="{{ route('galeri.index') }}"><i data-feather="image"></i><span>Galeri</span></a>
                </li>
                @endif

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>
