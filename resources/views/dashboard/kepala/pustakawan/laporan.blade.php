@extends('dashboard.layouts.main')
@section('container')
<div class="card mb-6">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-finance"></i></span>
            Keaktifan Pustakawan
        </p>
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
  <script src="{{ $chart->cdn() }}"></script>

  {{ $chart->script() }}
<!-- popper.js cdn link -->
  
@endsection
