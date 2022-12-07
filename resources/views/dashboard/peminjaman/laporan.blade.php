@extends('dashboard.layouts.main')
@section('container')
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-finance"></i></span>
                Jumlah Peminjaman dalam Waktu Sebulan
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
            {{-- <a href="/dashboard/peminjam/create" class="button button-green my-3 mr-3 flex items-center"
                data-ripple-light="true">
                <i class="material-icons -ml-3">add</i> Daftar Peminjam
            </a> --}}
        </header>
        <div class="card-content">
            @if ($data_peminjaman->isEmpty())
                <div class="card empty">
                    <div class="card-content">
                        <div>
                            <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
                        </div>
                        <p>Data Peminjaman Kosong</p>
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
                            <th>Kode Peminjaman</th>
                            <th>Username</th>
                            <th>Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                            {{-- <th>Progress</th> --}}
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_peminjaman as $peminjaman)
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
                <td data-label="Kode Peminjaman">{{ $peminjaman->id }}</td>
                <td data-label="Username">{{ $peminjaman->user->name }}</td>
                <td data-label="Judul Buku">{{ $peminjaman->buku->judul_buku }}</td>
                <td data-label="Tanggal Peminjaman">
                    {{ $carbon::parse($peminjaman->tanggal_peminjaman)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y') }}
                </td>
                <td data-label="Tanggal Pengembalian">
                    {{ $carbon::parse($peminjaman->tanggal_pengembalian)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y') }}
                </td>

                <td data-label="Status">
                    @if ($peminjaman->status_peminjaman == 'dipinjam')
                        <button class="chip chip-pink"
                            disabled>{{ $peminjaman->status_peminjaman }}</button>
                    @elseif ($peminjaman->status_peminjaman == 'book')
                        <button class="chip chip-orange"
                            disabled>{{ $peminjaman->status_peminjaman }}</button>
                    @else 
                    <button class="chip chip-green"
                    disabled>{{ $peminjaman->status_peminjaman }}</button>
                    @endif
                </td>
                        {{-- <td data-label="Progress" class="progress-cell">
                  <progress max="100" value="79">79</progress>
                </td> --}}
                        <td class="actions-cell">
                            <div class="flex flex-row">
                                {{-- <a href="/dashboard/buku/{{ $buku->id }}" class="button button-icon button-blue mr-2" data-ripple-light="true">
                      <i class="material-icons">visibility</i>
                    </a> --}}
                                {{-- <a href="/dashboard/peminjaman/{{ $peminjaman->id }}/edit" class="button button-icon button-orange mr-2" data-ripple-light="true">
                      <i class="material-icons">edit</i>
                    </a> --}}

                                {{-- <button class="button button-icon button-red" dialog-trigger="true"
                                    data-ripple-light="true">
                                    <i class="material-icons">delete</i>
                                </button>
                                <div class="dialog">
                                    <div class="dialog-overlay" dialog-close="true"></div>
                                    <div class="modal-dialog">
                                        <div class="dialog-content">
                                            <div class="dialog-header">
                                                <h6 class="mb-0">Hapus Peminjaman</h6>
                                                <button type="button" class="me-0 button-close" dialog-close="true"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <div class="dialog-body">
                                                <p class="opacity-60">
                                                    Apakah Anda Yakin ingin menghapus data peminjaman ini?
                                                </p>
                                            </div>
                                            <div class="dialog-footer">
                                                <button class="button button-gradient button-blue mr-3 mb-0"
                                                    dialog-close="true">
                                                    Tidak
                                                </button>
                                                <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" class="ml-1"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="button button-gradient button-red" dialog-trigger="true"
                                                        data-ripple-light="true">
                                                        Ya
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </td>
                        </tr>
            @endforeach
            </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex flex-row-reverse items-center justify-between">
                    {{ $data_peminjaman->links() }}
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
