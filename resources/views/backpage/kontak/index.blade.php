@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Kontak Kami </span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kontak.update', $kontaks->id_kontak) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ $kontaks->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sub Title:</label>
                        <input type="text" id="subtitle" name="subtitle" class="form-control"
                            value="{{ $kontaks->subtitle }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="form-control" rows="5" required>{{ $kontaks->alamat }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon:</label>
                        <input type="text" id="telepon" name="telepon" class="form-control"
                            value="{{ $kontaks->telepon }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $kontaks->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jam_kerja" class="form-label">Jam Kerja:</label>
                        <input type="jam_kerja" id="jam_kerja" name="jam_kerja" class="form-control"
                            value="{{ $kontaks->jam_kerja }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="icon1" class="form-label">Icon 1:</label>
                        <input type="text" id="icon1" name="icon1" class="form-control"
                            value="{{ $kontaks->icon1 }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="icon2" class="form-label">Icon 2:</label>
                        <input type="text" id="icon2" name="icon2" class="form-control"
                            value="{{ $kontaks->icon2 }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="icon3" class="form-label">Icon 3:</label>
                        <input type="text" id="icon3" name="icon3" class="form-control"
                            value="{{ $kontaks->icon3 }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="icon4" class="form-label">Icon 4:</label>
                        <input type="text" id="icon4" name="icon4" class="form-control"
                            value="{{ $kontaks->icon4 }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
