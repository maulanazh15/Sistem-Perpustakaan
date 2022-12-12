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
        <a href="/dashboard/pustakawan/create" class="button button-green my-3 mr-3 flex items-center" data-ripple-light="true">
         <i class="material-icons -ml-3">add</i> Daftar Pustakawan 
        </a>
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
              <th>Bergabung</th>
              {{-- <th>Progress</th> --}}
              <th>Aksi</th>
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
                <td data-label="Name">{{ $pustakawan->name }}</td>
                <td data-label="Company">{{ $pustakawan->username}}</td>
                <td data-label="City">{{ $pustakawan->email }}</td>
                <td data-label="City">
                  @if ($pustakawan->isAktif)
                  <button class="chip chip-green">Online</button></td>
                  @else
                  <button class="chip chip-red">Offline</button></td>  
                  @endif
                  
                <td data-label="Created">
                  <small class="text-gray-500" title="Oct 25, 2021">{{ $pustakawan->created_at->diffForHumans() }}</small>
                </td>
                {{-- <td data-label="Progress" class="progress-cell">
                  <progress max="100" value="79">79</progress>
                </td> --}}
                <td class="actions-cell">
                  <div class="flex flex-row">
                    {{-- <a href="/dashboard/buku/{{ $buku->id }}" class="button button-icon button-blue mr-2" data-ripple-light="true">
                      <i class="material-icons">visibility</i>
                    </a> --}}
                    {{-- <a href="/dashboard/pustakawan/{{ $pustakawan->id }}/edit" class="button button-icon button-orange mr-2" data-ripple-light="true">
                      <i class="material-icons">edit</i>
                    </a> --}}
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
                </td>
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
  </section>
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script> 

<!-- popper.js cdn link -->
  
@endsection
