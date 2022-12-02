@extends('layouts.main')

@section('container')
    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container">
          @if (session()->has('berhasil'))
      <div class="alert alert-gradient alert-green w-50">{{ session('berhasil') }}</div>
      @endif
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($data_buku as $buku)
                    <div class="card">
                        <div class="card-header mx-4 mt-6">
                            <a href="#" blur-shadow-image="true">
                                <img class="w-auto rounded-lg" src="images/blog/cover.png" alt="card image" />
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="font-medium"> {{ $buku->judul_buku }}</h4>
                            </a>
                            <p class="opcacity-60 mb-3">
                            <div class="flex flex-col">
                                <p>Penulis : {{ $buku->penulis }}</p>
                                <p>Penerbit : {{ $buku->penerbit }}</p>
                                <p>Tahun : {{ $buku->tahun_terbit }}</p>
                            </div>
                            </p>
                        </div>
                        <div class="flex justify-between mx-4 mb-3">
                            @if ($buku->status_buku == 'book')
                            <button class="chip chip-orange" disabled>Book</button>
                            @else
                            <button class="chip chip-teal" disabled>Tersedia</button>
                            @endif 
                            <button class="button button-orange">Detail</button>
                            <button class="button button-green order-last" dialog-trigger="true" id="pinjam">Pinjam</button>
                            <div class="dialog">
                              <div class="dialog-overlay" dialog-close="true"></div>
                              <div class="modal-dialog">
                                <div class="dialog-content">
                                  <div class="dialog-header">
                                    <h6 class="mb-0 capitalize text-dark-500">
                                      Peminjaman Buku
                                    </h6>
                                    <button
                                      type="button"
                                      class="me-0 button-close"
                                      dialog-close="true"
                                      aria-label="Close"
                                    >
                                      <i class="material-icons">close</i>
                                    </button>
                                  </div>
                                  <div class="dialog-body">
                                    <div class="py-3 text-center">
                                      <i class="fa fa-star text-3xl text-dark-500"></i>
                                      <h4 class="mt-4 text-red-500">Anda harus baca ini!</h4>
                                      <p class="opacity-60">
                                        Apakah anda yakin ingin meminjam buku ini?
                                      </p>
                                    </div>
                                  </div>
                                  <div class="dialog-footer">
                                    <button dialog-close="true" class="button button-gradient button-deep-orange mb-0 mr-2">
                                      Batal
                                    </button>
                                    <form action="/booking" method="post">
                                      @csrf
                                      <input type="hidden" name="buku_id" value="{{ $buku->id }}">
                                      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                      <button type="submit" class="button button-gradient button-green mb-0">
                                        Pinjam
                                      </button>
                                    </form>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="w-full px-4 md:w-1/4 sm:w-1/3 lg:w-3/4 bg-white drop-shadow-2xl p-2 rounded-md">
                <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                  <div class="mb-8 overflow-hidden rounded">
                    <a href="/blog-details" class="block">
                      <img
                        src="images/blog/cover.png"
                        alt="image"
                        class="w-full"
                      />
                    </a>
                  </div>
                  <div>
                    <span
                      class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
                    >
                      {{ $buku->kategori }}
                    </span>
                    <h3>
                      <a
                        href="blog-details.html"
                        class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                      >
                        {{ $buku->judul_buku }}
                      </a>
                    </h3>
                    <p class="text-base text-body-color">
                      {{ $buku->penulis }}
                    </p>
                    
                  </div>
                  
                </div>
                
              </div>  --}}
                @endforeach
            </div>
        </div>
    </section>
    <!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <!-- ====== Blog Section End -->
    <!-- <script>
        $(document).ready(function() {
            $('#pinjam').click(function () {
              
            })
        });
    </script> -->
@endsection
