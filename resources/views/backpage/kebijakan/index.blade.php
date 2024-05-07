@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Kebijakan Privasi</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kebijakan.update', $kebijakan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="tentang_kami" class="form-label">Tentang Kami:</label>
                        <textarea name="tentang_kami" class="form-control" rows="5" required>{{ $kebijakan->tentang_kami }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="informasi" class="form-label">Informasi:</label>
                        <textarea name="informasi" class="form-control" rows="6" required>{{ $kebijakan->informasi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan:</label>
                        <textarea name="tujuan" class="form-control" rows="8" required>{{ $kebijakan->tujuan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="hak" class="form-label"> Hak-hak:</label>
                        <textarea name="hak" class="form-control" rows="8" required>{{ $kebijakan->hak }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link_eksternal" class="form-label">Link Eksternal:</label>
                        <textarea name="link_eksternal" class="form-control" rows="5" required>{{ $kebijakan->link_eksternal }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="keamanan" class="form-label">Keamanan:</label>
                        <textarea name="keamanan" class="form-control" rows="5" required>{{ $kebijakan->keamanan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="hukum" class="form-label">Hukum:</label>
                        <textarea name="hukum" class="form-control" rows="5" required>{{ $kebijakan->hukum }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="informasi_kontak" class="form-label">Informasi Kontak:</label>
                        <textarea name="informasi_kontak" class="form-control" rows="5" required>{{ $kebijakan->informasi_kontak }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
