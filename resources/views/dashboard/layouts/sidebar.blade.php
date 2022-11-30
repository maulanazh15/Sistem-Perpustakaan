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
        </ul>
        <p class="menu-label">Admin</p>
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
                        <a href="#void">
                            <span>Laporan Data Buku</span>
                        </a>
                    </li>
                </ul>
            </li>
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
                  <a href="#void">
                    <span>Laporan Data Pustakawan</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="{{ Request::is('dashboard/peminjam') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Peminjam</span>
                    {{-- <span class="icon"><i class="mdi mdi-minus"></i></span> --}}
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjam">
                            <span>Data Peminjam</span>
                        </a>
                    </li>
                    <li>
                        <a href="#void">
                            <span>Laporan Data Peminjam</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/peminjaman') ? 'active' : '' }}">
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Peminjaman Buku</span>
                    <span class="icon"><i class="mdi mdi-minus"></i></span>
                </a>
                <ul>
                    <li>
                        <a href="/dashboard/peminjaman">
                            <span>Data Peminjaman Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#void">
                            <span>Laporan Data Peminjaman Buku</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/tables') ? 'active' : '' }}">
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
            </li>
        </ul>
        <p class="menu-label">About</p>
        <ul class="menu-list">
            <li>
                <a href="https://justboil.me/tailwind-admin-templates/free-dashboard/" class="has-icon">
                    <span class="icon"><i class="mdi mdi-help-circle"></i></span>
                    <span class="menu-item-label">About</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/justboil/admin-one-tailwind" class="has-icon">
                    <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                    <span class="menu-item-label">GitHub</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
