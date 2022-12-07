@extends('dashboard.layouts.main')
@section('container')
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-finance"></i></span>
                Jumlah Buku berdasarkan kategori
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <div class="chart-area">
                <div class="h-full">
                    {!! $chart->container() !!}
                    
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('berhasil'))
        <div class="alert alert-gradient alert-green w-full">{{ session('berhasil') }}</div>
    @endif
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                {{ $judul }}
            </p>
        </header>
        <div class="card-content">
            @if ($data_buku->isEmpty())
                <div class="card empty">
                    <div class="card-content">
                        <div>
                            <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
                        </div>
                        <p>Data Buku Kosong</p>
                    </div>
                </div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            {{-- <th class="checkbox-cell">
              <label class="checkbox">
                <input type="checkbox">
                <span class="check"></span>
              </label>
            </th> --}}
                            {{-- <th class="image-cell"></th> --}}
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Jumlah Buku</th>
                            <th>Ditambahkan</th>
                            <th>Status</th>
                            {{-- <th>Progress</th> --}}
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_buku as $buku)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox">
                  <span class="check"></span>
                </label>
              </td> --}}
                                {{-- <td class="image-cell">
                <div class="image">
                  <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
                </div>
              </td> --}}
                                <td data-label="Judul Buku">{{ $buku->judul_buku }}</td>
                                <td data-label="Penulis">{{ $buku->penulis }}</td>
                                <td data-label="Kategori">{{ $buku->kategori }}</td>
                                <td data-label="Jumlah Buku">{{ $buku->jumlah_buku }}</td>
                                <td data-label="Tanggal Masuk">
                                    <small class="text-gray-500"
                                        title="Oct 25, 2021">{{ $buku->created_at->diffForHumans() }}</small>
                                </td>
                                <td data-label="Status"><button class="chip  @if($buku->status_buku == 'dipinjam') {{'chip-pink'}} @elseif($buku->status_buku == 'book'){{'chip-orange'}} @else {{'chip-green'}} @endif">{{ $buku->status_buku }}</button></td>
                                {{-- <td data-label="Progress" class="progress-cell">
                <progress max="100" value="79">79</progress>
              </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="table-pagination">
                    <div class="flex flex-row-reverse items-center justify-between">
                        {{ $data_buku->links() }}
                    </div>
                </div>
            @endif

        </div>
    </div>
    </section>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
    <!-- popper.js cdn link -->

@endsection
