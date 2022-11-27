<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>
        Admin <b class="font-black">One</b>
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
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
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