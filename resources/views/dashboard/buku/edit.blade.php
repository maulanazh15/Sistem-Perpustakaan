@extends('dashboard.layouts.main')
@section('container')
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Forms
        </p>
      </header>
      <div class="card-content">
        <form action="/dashboard/buku/{{ $buku->id }}" method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="field">
            <label class="label">Judul Buku</label>
            <div class="control">
              <input class="input" type="text" name="judul_buku" placeholder="" value="{{ old('judul_buku', $buku->judul_buku) }}">
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
              <input class="input" type="text" name="penulis" placeholder="" value="{{ old('penulis', $buku->penulis) }}">
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
              <input class="input" type="text" name="penerbit" placeholder="" value="{{ old('penerbit', $buku->penerbit) }}">
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
              <input class="input" type="text" name="kategori" placeholder="" value="{{ old('kategori', $buku->kategori) }}">
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
              <input class="input" type="number" name="tahun_terbit" placeholder="" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
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
              <input class="input" type="text" name="isbn" placeholder="" value="{{ old('isbn', $buku->isbn) }}">
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
              <input class="input" type="number" name="jumlah_buku" placeholder="" value="{{ old('jumlah_buku', $buku->jumlah_buku) }}">
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


@endsection 

