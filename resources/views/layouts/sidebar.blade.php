<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('build/assets/images/logo/ibatek.png') }}" alt="Logo" style="width: 150px; height:50px;">
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Admin &amp; Data</li>

                @php
                    $isKegiatanActive = str_starts_with(Route::currentRouteName(), 'organisasi') ||
                                        str_starts_with(Route::currentRouteName(), 'kepanitiaan') ||
                                        str_starts_with(Route::currentRouteName(), 'magang') ||
                                        str_starts_with(Route::currentRouteName(), 'tridharma') ||
                                        str_starts_with(Route::currentRouteName(), 'lomba');
                @endphp
                <li class="sidebar-item has-sub {{ $isKegiatanActive ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Kegiatan</span>
                    </a>
                    <ul class="submenu {{ $isKegiatanActive ? 'active' : '' }}">
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'organisasi') ? 'active' : '' }}">
                            <a href="{{ route('organisasi') }}">Organisasi</a>
                        </li>
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'kepanitiaan') ? 'active' : '' }}">
                            <a href="{{ route('kepanitiaan') }}">Kepanitiaan</a>
                        </li>
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'magang') ? 'active' : '' }}">
                            <a href="{{ route('magang') }}">Magang</a>
                        </li>
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'tridharma') ? 'active' : '' }}">
                            <a href="{{ route('tridharma') }}">Tridharma</a>
                        </li>
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'lomba') ? 'active' : '' }}">
                            <a href="{{ route('lomba') }}">Lomba</a>
                        </li>
                    </ul>
                </li>

                @php
                    $isAkademikActive = str_starts_with(Route::currentRouteName(), 'fakultas') ||
                                        str_starts_with(Route::currentRouteName(), 'prodi');
                @endphp
                <li class="sidebar-item has-sub {{ $isAkademikActive ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>Akademik</span>
                    </a>
                    <ul class="submenu {{ $isAkademikActive ? 'active' : '' }}">
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'fakultas') ? 'active' : '' }}">
                            <a href="{{ route('fakultas') }}">Fakultas</a>
                        </li>
                        <li class="submenu-item {{ str_starts_with(Route::currentRouteName(), 'prodi') ? 'active' : '' }}">
                            <a href="{{ route('prodi') }}">Prodi</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">User</li>


                <li class="sidebar-item {{ Route::currentRouteName() == 'upload' ? 'active' : '' }}">
                    <a href="{{ route('upload') }}" class='sidebar-link'>
                        <i class="bi bi-cloud-arrow-up-fill"></i>
                        <span>File Uploader</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::currentRouteName() == 'kesimpulan' ? 'active' : '' }}">
                    <a href="{{ route('kesimpulan') }}" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Kesimpulan</span>
                    </a>

                </li>

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item {{ Route::currentRouteName() == 'user' ? 'active' : '' }}">
                    <a href="{{ route('user') }}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>User</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
