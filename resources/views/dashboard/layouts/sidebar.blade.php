<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div class="pl-3">
            <a href="/" class="text-white">
                {{-- SI<b class="font-black">PERPUS</b> --}}
                <img src="/images/logo/siperpus-logo-white.svg" alt="siperpus" sizes="30" width="100" height="50">
            </a>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
                <a href="/dashboard/profile">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Profil</span>
                </a>
            </li>
        </ul>
        @can('kepala')
        <p class="menu-label">Kepala</p>
        <ul class="menu-list">
            <li class="{{ Request::is('dashboard/pustakawan') ? 'active' : '' }}">
              <a class="dropdown">
                <span class="icon"><i class="mdi mdi-account-supervisor"></i></span>
                <span class="menu-item-label">Pustakawan</span>
                {{-- <span class="icon"><i class="mdi mdi-plus"></i></span> --}}
              </a>
              <ul>
                <li>
                  <a href="/dashboard/pustakawan">
                    <span>Data Pustakawan</span>
                  </a>
                </li>
                <li>
                  <a href="/dashboard/pustakawan/laporan">
                    <span>Laporan Data Pustakawan</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="{{ Request::is('dashboard/buku/laporan') ? 'active' : '' }}">
                <a href="/dashboard/buku/laporan">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Laporan Buku</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/peminjam/laporan') ? 'active' : '' }}">
                <a href="/dashboard/peminjam/laporan">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Laporan Peminjam</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/peminjaman/laporan') ? 'active' : '' }}">
                <a href="/dashboard/peminjaman/laporan">
                    <span class="icon"><i class="mdi mdi-history"></i></span>
                    <span class="menu-item-label">Laporan Peminjaman</span>
                </a>
            </li>
            {{-- <li class="{{ Request::is('dashboard/peminjam') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Peminjam</span>
                    {{-- <span class="icon"><i class="mdi mdi-minus"></i></span> 
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjam">
                            <span>Data Peminjam</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/peminjam/laporan">
                            <span>Laporan Data Peminjam</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="{{ Request::is('dashboard/peminjaman') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Peminjaman Buku</span>
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjaman">
                            <span>Data Peminjaman Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/peminjaman/laporan">
                            <span>Laporan Data Peminjaman Buku</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="{{ Request::is('dashboard/histori') ? 'active' : '' }}">
                <a href="/dashboard/histori">
                    <span class="icon"><i class="mdi mdi-history"></i></span>
                    <span class="menu-item-label">Histori Peminjaman</span>
                </a>
            </li> --}}
            {{-- <li class="{{ Request::is('dashboard/tables') ? 'active' : '' }}">
                <a href="/dashboard/tables">
                    <span class="icon"><i class="mdi mdi-table"></i></span>
                    <span class="menu-item-label">Tables</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/forms') ? 'active' : '' }}">
                <a href="/dashboard/forms">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Forms</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
                <a href="/dashboard/profile">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Profile</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/login') ? 'active' : '' }}">
                <a href="/dashboard/login">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Login</span>
                </a>
            </li>
            <li>
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Submenus</span>
                    <span class="icon"><i class="mdi mdi-plus"></i></span>
                </a>
                <ul>
                    <li>
                        <a href="#void">
                            <span>Sub-item One</span>
                        </a>
                    </li>
                    <li>
                        <a href="#void">
                            <span>Sub-item Two</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        @endcan
        @can('pustakawan')
        <p class="menu-label">Pustakawan</p>
        <ul class="menu-list">
            <li class="{{ Request::is('dashboard/buku') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Buku</span>
                    {{-- <span class="icon"><i class="mdi mdi-plus"></i></span> --}}
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/buku">
                            <span>Data Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/buku/laporan">
                            <span>Laporan Data Buku</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/peminjam') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Peminjam</span>
                    {{-- <span class="icon"><i class="mdi mdi-minus"></i></span>  --}}
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjam">
                            <span>Data Peminjam</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/peminjam/laporan">
                            <span>Laporan Data Peminjam</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/peminjaman') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Peminjaman Buku</span>
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjaman">
                            <span>Data Peminjaman Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/peminjaman/laporan">
                            <span>Laporan Data Peminjaman Buku</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @endcan
        @can('peminjam')
        <p class="menu-label">Peminjam</p>
        <ul class="menu-list">
            <li class="{{ Request::is('dashboard/histori') ? 'active' : '' }}">
                <a href="/dashboard/histori">
                    <span class="icon"><i class="mdi mdi-history"></i></span>
                    <span class="menu-item-label">Histori Peminjaman</span>
                </a>
            </li>
        </ul>
        @endcan
    </div>
</aside>
