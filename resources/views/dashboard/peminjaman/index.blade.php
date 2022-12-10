@extends('dashboard.layouts.main')
@section('container')
    @if (session()->has('berhasil'))
        <div class="alert alert-gradient alert-green w-full">{{ session('berhasil') }}</div>
    @endif
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                {{ $judul }}
            </p>
            {{-- <a href="/dashboard/peminjaman/create" class="button button-green my-3 mr-3 flex items-center" data-ripple-light="true">
                <i class="material-icons -ml-3">add</i> Tambah Buku
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
                            <th>Aksi</th>
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
                                {{-- <td data-label="Created">
                                    <small class="text-gray-500"
                                        title="Oct 25, 2021">{{ $peminjaman->created_at->diffForHumans() }}</small>
                                </td> --}}
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
                                    @if ($peminjaman->status_peminjaman == 'dipinjam')
                                        <button
                                            class="button button-green mr-2 flex flex-row align-middle mb-2"
                                            dialog-trigger="true" data-ripple-light="true">
                                            <i class="material-icons -ml-3 mr-2">check</i>
                                            <div>Perpanjang</div>
                                        </button>
                                        <div class="dialog">
                                            <div class="dialog-overlay" dialog-close="true"></div>
                                            <div class="modal-dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-header">
                                                        <h6 class="mb-0">Setujui Perpanjangan</h6>
                                                        <button type="button" class="me-0 button-close" dialog-close="true"
                                                            aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </div>
                                                    <div class="dialog-body">
                                                        <p class="opacity-60">
                                                            Apakah Anda Yakin ingin menyetujui perpanjangan peminjaman buku ini?
                                                        </p>
                                                    </div>
                                                    <div class="dialog-footer">
                                                        <button class="button button-gradient button-blue mr-3 mb-0"
                                                            dialog-close="true">
                                                            Tidak
                                                        </button>
                                                        <a href="/dashboard/peminjaman/{{ $peminjaman->id }}/perpanjangan"
                                                            class="button button-gradient button-red" dialog-trigger="true"
                                                            data-ripple-light="true">
                                                            Ya
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="button button-pink mr-2 flex flex-row align-middle mb-2"
                                            dialog-trigger="true" data-ripple-light="true">
                                            <i class="material-icons -ml-3 mr-2">check</i>
                                            <div>Pengembalian</div>
                                        </button>
                                        <div class="dialog">
                                            <div class="dialog-overlay" dialog-close="true"></div>
                                            <div class="modal-dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-header">
                                                        <h6 class="mb-0">Setujui Pengembalian</h6>
                                                        <button type="button" class="me-0 button-close" dialog-close="true"
                                                            aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </div>
                                                    <div class="dialog-body">
                                                        <p class="opacity-60">
                                                            Apakah Anda Yakin ingin menyetujui pengembalian ini?
                                                        </p>
                                                    </div>
                                                    <div class="dialog-footer">
                                                        <button class="button button-gradient button-blue mr-3 mb-0"
                                                            dialog-close="true">
                                                            Tidak
                                                        </button>
                                                        <a href="/dashboard/peminjaman/{{ $peminjaman->id }}/pengembalian"
                                                            class="button button-gradient button-red" dialog-trigger="true"
                                                            data-ripple-light="true">
                                                            Ya
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <button
                                            class="button button-green mr-2 flex flex-row align-middle mb-2"
                                            dialog-trigger="true" data-ripple-light="true">
                                            <i class="material-icons -ml-3 mr-2">check</i>
                                            <div>Setujui</div>
                                        </button>
                                        <div class="dialog">
                                            <div class="dialog-overlay" dialog-close="true"></div>
                                            <div class="modal-dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-header">
                                                        <h6 class="mb-0">Setujui Peminjaman</h6>
                                                        <button type="button" class="me-0 button-close" dialog-close="true"
                                                            aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </div>
                                                    <div class="dialog-body">
                                                        <p class="opacity-60">
                                                            Apakah Anda Yakin ingin menyetujui peminjaman ini?
                                                        </p>
                                                    </div>
                                                    <div class="dialog-footer">
                                                        <button class="button button-gradient button-blue mr-3 mb-0"
                                                            dialog-close="true">
                                                            Tidak
                                                        </button>
                                                        <a href="/dashboard/peminjaman/{{ $peminjaman->id }}/update"
                                                            class="button button-gradient button-red" dialog-trigger="true"
                                                            data-ripple-light="true">
                                                            Ya
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="button button-red flex flex-row align-middle mb-2"
                                            dialog-trigger="true" data-ripple-light="true">
                                            <i class="material-icons -ml-3 mr-2">cancel</i>
                                            <div>Batalkan</div>
                                        </button>
                                        <div class="dialog">
                                            <div class="dialog-overlay" dialog-close="true"></div>
                                            <div class="modal-dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-header">
                                                        <h6 class="mb-0">Batalkan Peminjaman</h6>
                                                        <button type="button" class="me-0 button-close" dialog-close="true"
                                                            aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </div>
                                                    <div class="dialog-body">
                                                        <p class="opacity-60">
                                                            Apakah Anda Yakin ingin membatalkan peminjaman buku ini?
                                                        </p>
                                                    </div>
                                                    <div class="dialog-footer">
                                                        <button class="button button-gradient button-blue mr-3 mb-0"
                                                            dialog-close="true">
                                                            Tidak
                                                        </button>
                                                        <form action="/dashboard/peminjaman/{{ $peminjaman->id }}/delete"
                                                            class="ml-1" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="button button-gradient button-red"
                                                                dialog-trigger="true" data-ripple-light="true">
                                                                Ya
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        </div>
        @endif

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

    <!-- popper.js cdn link -->
@endsection
