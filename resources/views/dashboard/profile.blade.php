@extends('dashboard.layouts.main')

@section('container')
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    Edit Profile
                </p>
            </header>
            <div class="card-content">
                <form action="/dashboard/profile/update" method="post" enctype="multipart/form-data">
                  @csrf  
                  <div class="field">
                        <label class="label">Foto Profile</label>
                        <div class="field-body">
                            <div class="field file">
                                <label class="upload control">
                                    <a class="button button-blue">
                                        Upload
                                    </a>
                                    <input type="file" id="image" name="foto_profil" onchange="previewImage();">
                                </label>  
                            </div>
                            <img class="img-preview img-fluid mb-3 w-1/2 h-1/2">
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Nama</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="name" value="{{ $data_diri->name }}"
                                        class="input" required>
                                </div>
                                <p class="help">Wajib. Nama wajib diisi!</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="username"
                                        value="{{ $data_diri->username }}" class="input" required>
                                </div>
                                <p class="help">Wajib. Username wajib diisi!</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="email" autocomplete="on" name="email" value="{{ $data_diri->email }}"
                                        class="input" required>
                                </div>
                                <p class="help">Wajib. E-mail wajib diisi!</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button button-green">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    Profile
                </p>
            </header>
            <div class="card-content">
                <div class="">
                  @if ($data_diri->foto_profil)
                  <img src="{{asset('storage/'.$data_diri->foto_profil)}}" alt="John Doe" class="mx-auto h-[300px] w-[290px] rounded-full"> 
                  @else
                  <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
                  @endif
                </div>
                <hr>
                <div class="field">
                    <label class="label">Nama</label>
                    <div class="control">
                        <input type="text" readonly value="{{ $data_diri->name }}" class="input is-static">
                    </div>
                </div>
                <hr>
                <div class="field">
                    <label class="label">E-mail</label>
                    <div class="control">
                        <input type="text" readonly value="{{ $data_diri->email }}" class="input is-static">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          Change Password
        </p>
      </header>
      <div class="card-content">
        <form>
          <div class="field">
            <label class="label">Current password</label>
            <div class="control">
              <input type="password" name="password_current" autocomplete="current-password" class="input" required>
            </div>
            <p class="help">Required. Your current password</p>
          </div>
          <hr>
          <div class="field">
            <label class="label">New password</label>
            <div class="control">
              <input type="password" autocomplete="new-password" name="password" class="input" required>
            </div>
            <p class="help">Required. New password</p>
          </div>
          <div class="field">
            <label class="label">Confirm password</label>
            <div class="control">
              <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required>
            </div>
            <p class="help">Required. New password one more time</p>
          </div>
          <hr>
          <div class="field">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div> --}}
    <script type="text/javascript">
      function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
    </script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
@endsection
