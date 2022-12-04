@extends('layouts.main')

@section('container')
    <!-- ====== About Section Start -->
    <section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="wow fadeInUp bg-white" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="items-center justify-between overflow-hidden border lg:flex">
                            <div
                                class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                    Tentang Siperpus
                                </span>
                                <h2 class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                    Siperpus - Sistem Informasi Perpustakaan
                                </h2>
                                <p class="mb-9 text-base leading-relaxed text-body-color">
                                    SIPERPUS atau Sistem Informasi Perpustakaan merupakan sistem perpustakaan berbasis web.
                                    Sistem ini bertujuan untuk mempermudah para peminjam buku dalam meminjam buku,
                                    mempermudah pustakawan dalam mendata dan mengkatalogkan buku di perpustakaan, dan
                                    mempermudah kepala perpustakaan dalam melihat laporan yang berkaitan dengan
                                    perpustakaan.
                                </p>
                                <p class="mb-9 text-base leading-relaxed text-body-color">
                                    Perangkat lunak ini dapat dijalankan oleh user melalui web responsive yang kami buat
                                    sehingga dapat diakses melalui perangkat komputer maupun ponsel Android. Di dalam
                                    pembuatannya, web ini menggunakan bahasa pemrograman PHP, Javascript, serta bahasa
                                    markah HTML dan CSS.
                                </p>
                                {{-- <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-lg">
                                    Learn More
                                </a> --}}
                            </div>
                            <div class="text-center">
                                <div class="relative z-10 inline-block">
                                    <img src="images/logo/siperpus-logo.svg" alt="image" class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About Section End -->
@endsection
