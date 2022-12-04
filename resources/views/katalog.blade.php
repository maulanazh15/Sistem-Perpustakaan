@extends('layouts.main')

@section('container')
    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-gradient-to-r from-cyan-500 to-blue-500">
        <div class="container">
            @if (session()->has('berhasil'))
                <div class="alert alert-gradient alert-green w-50">{{ session('berhasil') }}</div>
            @endif
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 rounded-lg p-2">
                @foreach ($data_buku as $buku)
                    <div class="card">
                        <div class="card-header mx-4 mt-6">
                            <a href="/{{ $buku->id }}/detail-buku" blur-shadow-image="true">
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
                                <button class="chip chip-orange" disabled>Booked</button>
                            @elseif($buku->status_buku == 'dipinjam')
                                <button class="chip chip-pink" disabled>Dipinjam</button>
                            @else 
                                <button class="chip chip-green" disabled>Tersedia</button>
                            @endif
                            
                            @auth
                                @if ($buku->status_buku == 'book' || $buku->status_buku == 'dipinjam')
                                {{-- <button class="button button-pink order-last" dialog-trigger="true"
                                id="pinjam" disabled>Pinjam</button> --}}
                                @else
                                <button class="button button-green order-last" dialog-trigger="true"
                                    id="pinjam">Pinjam</button>
                                <div class="dialog">
                                    <div class="dialog-overlay" dialog-close="true"></div>
                                    <div class="modal-dialog">
                                        <div class="dialog-content">
                                            <div class="dialog-header">
                                                <h6 class="mb-0 capitalize text-dark-500">
                                                    Peminjaman Buku
                                                </h6>
                                                <button type="button" class="me-0 button-close" dialog-close="true"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <div class="dialog-body">
                                                <div class="py-3 text-center">
                                                    <h5 class="mt-2 text-red-500">{{ $buku->judul_buku }}</h5>
                                                    <div class="flex flex-col mb-2 border border-blue-gray-600 p-2 rounded-lg">
                                                        <img class="w-1/3 rounded-lg self-center mb-2" src="images/blog/cover.png" alt="card image"/>
                                                        <p>Penulis     : {{ $buku->penulis }}</p>
                                                        <p>Penerbit    : {{ $buku->penerbit }}</p>
                                                        <p>Tahun       : {{ $buku->tahun_terbit }}</p>
                                                        <p>Kategori    : {{ $buku->kategori }}</p>
                                                        <p>Jumlah Buku : {{ $buku->jumlah_buku }}</p>
                                                        <p>ISBN        : {{ $buku->isbn }}</p>
                                                    </div>
                                                    <p class="opacity-60">
                                                        Apakah anda yakin ingin meminjam buku ini?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dialog-footer">
                                                <button dialog-close="true"
                                                    class="button button-gradient button-deep-orange mb-0 mr-2">
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
                            @endif
                            @endauth
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
            $('#pinjam').click(function() {

            })
        });
    </script> -->
@endsection
