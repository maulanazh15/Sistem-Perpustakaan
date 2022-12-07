@extends('dashboard.layouts.main')
{{-- index.blade.php --}}
@section('container')
    @can('peminjam')
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Peminjaman Buku yang pernah dilakukan
              </h3>
              <h1>
                {{ $jumlah_peminjaman }}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-book mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Denda Anda
              </h3>
              <h1>
                @if ($denda > 0)
                    Rp{{ $denda }}
                @else
                    Rp0
                @endif
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-currency-usd mdi-48px"></i></span>
          </div>
        </div>
      </div>
      {{-- <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Buku yang pernah dipinjam
              </h3>
              <h1>
                {{ $jumlah_buku }}
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-book mdi-48px"></i></span>
          </div>
        </div>
      </div> --}}
    </div>
    @endcan
    @can('pustakawan')
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Peminjam
              </h3>
              <h1>
                {{ $jumlah_peminjam }}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Buku
              </h3>
              <h1>
                {{ $jumlah_buku }}
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-book mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Denda
              </h3>
              <h1>
                @if ($denda > 0)
                    Rp{{ $denda }}
                @else
                    Rp0
                @endif
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-currency-usd mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Peminjaman Buku
              </h3>
              <h1>
                {{ $jumlah_peminjaman }}
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
          </div>
        </div>
      </div>
    </div>
    @endcan
    @can('kepala')
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Pustakawan
              </h3>
              <h1>
                {{ $jumlah_pustakawan }}
              </h1>
            </div>
            <span class="icon widget-icon text-teal-500"><i class="mdi mdi-account mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Peminjam
              </h3>
              <h1>
                {{ $jumlah_peminjam }}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Buku
              </h3>
              <h1>
                {{ $jumlah_buku }}
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-book mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Denda
              </h3>
              <h1>
                @if ($denda > 0)
                    Rp{{ $denda }}
                @else
                    Rp0
                @endif
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-currency-usd mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Jumlah Peminjaman Buku
              </h3>
              <h1>
                {{ $jumlah_peminjaman }}
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
          </div>
        </div>
      </div>
    </div>
    @endcan
    

    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-finance"></i></span>
          Jumlah Peminjaman Buku Hari Ini
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
    @can('kepala')
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
         Pustakawan
        </p>
        {{-- <a href="/dashboard/pustakawan/create" class="button button-green my-3 mr-3 flex items-center" data-ripple-light="true">
         <i class="material-icons -ml-3">add</i> Daftar Pustakawan 
        </a> --}}
      </header>
      <div class="card-content">
        @if ($data_pustakawan->isEmpty())
        <div class="card empty">
            <div class="card-content">
              <div>
                <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
              </div>
              <p>Data Pustakawan Kosong</p>
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
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Status</th>
              {{-- <th>Bergabung</th>
              {{-- <th>Progress</th>
              <th>Aksi</th> --}}
            </tr>
            </thead>
            <tbody>
              @foreach ($data_pustakawan as $pustakawan)
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
                <td data-label="Nama">{{ $pustakawan->name }}</td>
                <td data-label="Username">{{ $pustakawan->username}}</td>
                <td data-label="Email">{{ $pustakawan->email }}</td>
                <td data-label="Status">
                  @if ($pustakawan->isAktif)
                  <button class="chip chip-green">Online</button></td>
                  @else
                  <button class="chip chip-red">Offline</button></td>  
                  @endif
                  
                {{-- <td data-label="Created">
                  <small class="text-gray-500" title="Oct 25, 2021">{{ $pustakawan->created_at->diffForHumans() }}</small>
                </td> --}}
                {{-- <td data-label="Progress" class="progress-cell">
                  <progress max="100" value="79">79</progress>
                </td> --}}
                {{-- <td class="actions-cell">
                  <div class="flex flex-row">
                    {{-- <a href="/dashboard/buku/{{ $buku->id }}" class="button button-icon button-blue mr-2" data-ripple-light="true">
                      <i class="material-icons">visibility</i>
                    </a> 
                    <a href="/dashboard/pustakawan/{{ $pustakawan->id }}/edit" class="button button-icon button-orange mr-2" data-ripple-light="true">
                      <i class="material-icons">edit</i>
                    </a>
                    <button class="button button-icon button-red" dialog-trigger="true" data-ripple-light="true">
                      <i class="material-icons">delete</i>
                    </button>
                    <div class="dialog">
                      <div class="dialog-overlay" dialog-close="true"></div>
                      <div class="modal-dialog">
                        <div class="dialog-content">
                          <div class="dialog-header">
                            <h6 class="mb-0">Hapus Pustakawan</h6>
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
                            <p class="opacity-60">
                             Apakah Anda Yakin ingin menghapus data pustakawan ini?
                            </p>
                          </div>
                          <div class="dialog-footer">
                            <button
                              class="button button-gradient button-blue mr-3 mb-0"
                              dialog-close="true"
                            >
                              Tidak
                            </button>
                            <form action="{{ route('pustakawan.destroy', $pustakawan->id) }}" class="ml-1" method="post">
                              @method('delete')
                              @csrf
                              <button class="button button-gradient button-red" dialog-trigger="true" data-ripple-light="true">
                                Ya
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="table-pagination">
            <div class="flex flex-row-reverse items-center justify-between">
                {{ $data_pustakawan->links() }}
            </div>
        </div>
        @endif
       
      </div>
    </div>
    @endcan
    @can('pustakawan')
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Peminjam
        </p>
      </header>
      <div class="card-content">
        @if ($data_peminjam->isEmpty())
        <div class="card empty">
            <div class="card-content">
              <div>
                <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
              </div>
              <p>Data Peminjam Kosong</p>
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
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Status</th>
              {{-- <th>Bergabung</th> --}}
              {{-- <th>Progress</th> --}}
              {{-- <th>Aksi</th> --}}
            </tr>
            </thead>
            <tbody>
              @foreach ($data_peminjam as $peminjam)
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
                <td data-label="Nama">{{ $peminjam->name }}</td>
                <td data-label="Username">{{ $peminjam->username}}</td>
                <td data-label="Email">{{ $peminjam->email }}</td>
                <td data-label="Status">
                  @if ($peminjam->isAktif)
                  <button class="chip chip-green">Online</button></td>
                  @else
                  <button class="chip chip-red">Offline</button></td>  
                  @endif
                  
                {{-- <td data-label="Created">
                  <small class="text-gray-500" title="Oct 25, 2021">{{ $peminjam->created_at->diffForHumans() }}</small>
                </td> --}}
                {{-- <td data-label="Progress" class="progress-cell">
                  <progress max="100" value="79">79</progress>
                </td> --}}

              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="table-pagination">
            <div class="flex flex-row-reverse items-center justify-between">
                {{ $data_peminjam->links() }}
            </div>
        </div>
        @endif
       
      </div>
    </div>  
    @endcan
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

