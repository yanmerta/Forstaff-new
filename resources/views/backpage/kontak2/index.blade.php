@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Kontak</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kontak2.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" value="{{ $kontak->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $kontak->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="subjek" class="form-label">Subjek:</label>
                        <input type="text" name="subjek" class="form-control" value="{{ $kontak->subjek }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan:</label>
                        <textarea name="pesan" class="form-control" rows="5" required>{{ $kontak->pesan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="maps" class="form-label">Maps:</label>
                        <input type="text" name="maps" class="form-control" value="{{ $kontak->maps }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
