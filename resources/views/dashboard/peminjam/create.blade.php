@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          Daftar Peminjam
        </p>
      </header>
      <div class="card-content">
        <form action="/dashboard/peminjam" method="post">
            @csrf
          <div class="field spaced">
            <label class="label">Nama Lengkap</label>
            <div class="control icons-left">
              <input class="input" type="text" name="name" placeholder="John Doe" autocomplete="name">
              <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
            </div>
            <p class="help">
              Isikan nama valid peminjam
            </p>
          </div>
          <div class="field spaced">
            <label class="label">Username</label>
            <div class="control icons-left">
              <input class="input" type="text" name="username" placeholder="johndoe" autocomplete="username">
              <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
            </div>
            <p class="help">
              Isikan username valid
            </p>
          </div>
          <div class="field spaced">
            <label class="label">Email</label>
            <div class="control icons-left">
              <input class="input" type="email" name="email" placeholder="user@example.com" autocomplete="email">
              <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
            </div>
            <p class="help">
              Isikan email valid peminjam
            </p>
          </div>

          <div class="field spaced">
            <label class="label">Password</label>
            <p class="control icons-left">
              <input class="input" type="password" name="password" placeholder="Password" autocomplete="current-password">
              <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
            </p>
            <p class="help">
              Isikan Password Pustakawan
            </p>
          </div>

          {{-- <div class="field spaced">
            <div class="control">
              <label class="checkbox"><input type="checkbox" name="remember" value="1" checked>
                <span class="check"></span>
                <span class="control-label">Remember</span>
              </label>
            </div>
          </div> --}}

          <hr>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button button-green" data-ripple-light="true">
                Daftarkan
              </button>
            </div>
            <div class="control">
              <a href="javascript:history.back()" class="button button-red" data-ripple-light="true">
                Batal
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>
@endsection
