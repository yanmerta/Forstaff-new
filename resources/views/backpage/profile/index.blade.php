<!-- resources/views/profile.blade.php -->
@extends('backpage.general.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h2 class="mb-0">{{ __('Profile') }}</h2>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div id="successAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#successAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        @if (session('error'))
                            <div id="errorAlert" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#errorAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        @if (session('status'))
                            <div id="statusAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#statusAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif


                        <div class="row">
                            <div class="col-md-4">
                                @if ($user->photo)
                                    <img src="{{ asset('/storage/public/' . $user->photo) }}"
                                        class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img alt="Logo"
                                        src="{{ asset('assets/template_admin/demo1/dist/assets/media/logos/blank.png') }}"
                                        class="img-thumbnail rounded mx-auto d-block">
                                @endif

                            </div>
                            <div class="col-md-8">
                                <form method="POST" action="{{ route('admin.profile.update', $user->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $user->name }}" required autocomplete="name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $user->email }}" required autocomplete="email" readonly>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="old_password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Old Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="old_password" type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                name="old_password" autocomplete="old-password">

                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Change Profile Photo') }}</label>

                                        <div class="col-md-6">
                                            <input id="photo" type="file" class="form-control" name="photo">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> {{ __('Update Profile') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <form id="delete-form" method="POST"
                                    action="{{ route('admin.profile.delete-photo', ['id' => $user->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row mt-3">
                                        <div class="col-md-6 offset-md-4">
                                            <!-- Tombol Hapus Foto Profil -->
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete Profile Photo
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
