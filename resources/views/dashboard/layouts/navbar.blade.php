<nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item dropdown has-divider has-user-avatar">
                <a class="navbar-link">
                    <div class="avatar avatar-circular">
                        @if (auth()->user()->foto_profil)
                  <img src="{{asset('storage/'.auth()->user()->foto_profil)}}" alt="John Doe"> 
                  @else
                  <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
                  @endif
                    </div>
                    <div class="ml-3 is-user-name"><span>{{ auth()->user()->name }}</span></div>
                    {{-- <span class="icon"><i class="mdi mdi-chevron-down"></i></span> --}}
                </a>
                {{-- <div class="navbar-dropdown">
                    <a href="/profile" class="navbar-item">
                        <span class="icon"><i class="mdi mdi-account"></i></span>
                        <span>My Profile</span>
                    </a>
                    <a class="navbar-item">
                        <span class="icon"><i class="mdi mdi-settings"></i></span>
                        <span>Settings</span>
                    </a>
                    <a class="navbar-item">
                        <span class="icon"><i class="mdi mdi-email"></i></span>
                        <span>Messages</span>
                    </a>
                    <hr class="navbar-divider">
                </div> --}}
            </div>
            <form action="/logout" method="post" class="navbar-item desktop-icon-only">
                    @csrf
                    <button type="submit" name="logout" class="button button-pink button-gradient button-icon">
                        <i class="material-icons">logout</i>
                    </button>
            </form>
            
        </div>
    </div>
</nav>
