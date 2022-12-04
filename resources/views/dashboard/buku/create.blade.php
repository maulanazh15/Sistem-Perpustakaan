@extends('dashboard.layouts.main')
@section('container')
    <div class="card mb-6">
      <header class="card-header flex flex-row">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Forms
        </p>
        <a href="/dashboard/buku" class="mr-3 order-last button button-icon button-red mt-2 mb-3">
          <i class="material-icons">arrow_back</i>
        </a>
      </header>
      <div class="card-content">
        <form action="/dashboard/buku" method="post" enctype="multipart/form-data">
          {{-- <div class="field">
            <label class="label">Judul Buku</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="judul_buku" placeholder="Judul Buku">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="email" placeholder="Email" value="alex@smith.com">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="field">
            <div class="field-body">
              <div class="field">
                <div class="field addons">
                  <div class="control">
                    <input class="input" value="+44" size="3" readonly>
                  </div>
                  <div class="control expanded">
                    <input class="input" type="tel" placeholder="Your phone number">
                  </div>
                </div>
                <p class="help">Do not enter the first zero</p>
              </div>
            </div>
          </div> --}}
          {{-- <div class="field">
            <label class="label">Department</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Business development</option>
                  <option>Marketing</option>
                  <option>Sales</option>
                </select>
              </div>
            </div>
          </div>
          <hr> --}}
          @csrf
          <div class="field">
            <label class="label">Judul Buku</label>
            <div class="control">
              <input class="input" type="text" name="judul_buku" placeholder="">
            </div>
            @error('judul_buku')
            <p class="help text-red-500">
              Judul Buku wajib diisi
            </p>
            @enderror
            
          </div>
          <div class="field">
            <label class="label">Penulis</label>
            <div class="control">
              <input class="input" type="text" name="penulis" placeholder="">
            </div>
            @error('penulis')
            <p class="help text-red-500">
              Penulis Buku wajib diisi
            </p>
            @enderror
          </div>
          <div class="field">
            <label class="label">Penerbit</label>
            <div class="control">
              <input class="input" type="text" name="penerbit" placeholder="">
            </div>
            @error('penerbit')
            <p class="help text-red-500">
              Penerbit buku wajib diisi
            </p>
            @enderror
          </div>
          
          <div class="field">
            <label class="label">Kategori</label>
            <div class="control">
              <div class="select">
                <select name="kategori">
                  <option value="Novel">Novel</option>
                  <option value="Majalah">Majalah</option>
                  <option value="Kamus">Kamus</option>
                  <option value="Komik">Komik</option>
                  <option value="Manga">Manga</option>
                  <option value="Ensiklopedia">Ensiklopedia</option>
                  <option value="Biografi">Biografi</option>
                  <option value="Naskah">Naskah</option>
                  <option value="Light Novel">Ligth novel</option>
                </select>
              </div>
            </div>
            @error('kategori')
            <p class="help text-red-500">
              Kategori buku wajib diisi
            </p>
            @enderror
          </div>
          <div class="field">
            <label class="label">Tahun Terbit</label>
            <div class="control">
              <input class="input" type="number" name="tahun_terbit" placeholder="">
            </div>
            @error('tahun_terbit')
            <p class="help text-red-500">
              Tahun Terbit wajib diisi
            </p>
            @enderror
          </div>
          <div class="field">
            <label class="label">ISBN</label>
            <div class="control">
              <input class="input" type="text" name="isbn" placeholder="">
            </div>
            @error('isbn')
            <p class="help text-red-500">
              Nomor ISBN buku wajib diisi
            </p>
            @enderror
          </div>
          <div class="field">
            <label class="label">Jumlah Buku</label>
            <div class="control">
              <input class="input" type="number" name="jumlah_buku" placeholder="">
            </div>
            @error('jumlah_buku')
            <p class="help text-red-500">
              Jumlah Buku tidak valid
            </p>
            @enderror
          </div>
          <div class="field">
            <label class="label">Foto Buku</label>
            <div class="control">
              <input class="mb-7" type="file" name="foto_buku">
            </div>
            @error('foto_buku')
            <p class="help text-red-500 mb-10">
              Foto tidak valid
            </p> 
            @enderror  
          </div>
          <input type="hidden" name="status_buku" value="tersedia">

          {{-- <div class="field">
            <label class="label">Question</label>
            <div class="control">
              <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
            </div>
          </div>
          <hr> --}}

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button button-green" data-ripple-light="true">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button button-red" data-ripple-light="true">
                Batal
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot-outline"></i></span>
          Custom elements
        </p>
      </header>
      <div class="card-content">
        <div class="field">
          <label class="label">Checkbox</label>
          <div class="field-body">
            <div class="field grouped multiline">
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="lorem" checked>
                  <span class="check"></span>
                  <span class="control-label">Lorem</span>
                </label>
              </div>
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="ipsum">
                  <span class="check"></span>
                  <span class="control-label">Ipsum</span>
                </label>
              </div>
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="dolore">
                  <span class="check is-primary"></span>
                  <span class="control-label">Dolore</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">Radio</label>
          <div class="field-body">
            <div class="field grouped multiline">
              <div class="control">
                <label class="radio">
                  <input type="radio" name="sample-radio" value="one" class="radio absolute z-10 cursor-pointer opacity-0" checked>
                  <span class="check"></span>
                  <span class="control-label">One</span>
                </label>
              </div>
              <div class="control">
                <label class="radio">
                  <input type="radio" name="sample-radio" value="two" class="radio absolute z-10 cursor-pointer opacity-0">
                  <span class="check"></span>
                  <span class="control-label">Two</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">Switch</label>
          <div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check"></span>
                <span class="control-label">Default</span>
              </label>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">File</label>
          <div class="field-body">
            <div class="field file">
              <label class="upload control">
                <a class="button blue">
                  Upload
                </a>
                <input type="file">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
@endsection 

