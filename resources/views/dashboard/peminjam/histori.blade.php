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
                        <p>Histori Peminjaman Kosong, sepertinya Anda belum pernah meminjamm buku</p>
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
                            {{-- <th>Kode Peminjaman</th> --}}
                            {{-- <th>Username</th> --}}
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
                                {{-- <td data-label="Name">{{ $peminjaman->id }}</td> --}}
                                {{-- <td data-label="Company">{{ $peminjaman->user->name }}</td> --}}
                                <td data-label="Judul Buku">{{ $peminjaman->buku->judul_buku }}</td>
                                <td data-label="Tanggal Peminjaman">{{ $carbon::parse($peminjaman->tanggal_peminjaman)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y') }}</td>
                                <td data-label="Tanggal Pengembalian">{{ $carbon::parse($peminjaman->tanggal_pengembalian)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y') }}</td>
                                {{-- <td data-label="Created">
                                    <small class="text-gray-500"
                                        title="Oct 25, 2021">{{ $peminjaman->created_at->diffForHumans() }}</small>
                                </td> --}}
                                <td data-label="Status"><button
                                        class="chip @if ($peminjaman->status_peminjaman == 'dipinjam') {{ 'chip-pink' }} @elseif($peminjaman->status_peminjaman == 'book') {{ 'chip-orange' }} @else {{'chip-green'}} @endif"
                                        disabled>{{ $peminjaman->status_peminjaman }}</button></td>
                                {{-- <td data-label="Progress" class="progress-cell">
                <progress max="100" value="79">79</progress>
              </td> --}}
                                
                        </tr>
        @endforeach
        </tbody>
        </table>
        {{-- <div class="table-pagination">
            <div class="flex items-center justify-between">
                <div class="buttons">
                    <button type="button" class="button active">1</button>
                    <button type="button" class="button">2</button>
                    <button type="button" class="button">3</button>
                </div>
                <small>Page 1 of 3</small>
            </div>
        </div> --}}
        @endif

    </div>
    </div>
    </section>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

    <!-- popper.js cdn link -->
@endsection
