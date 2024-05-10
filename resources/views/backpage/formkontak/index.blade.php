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
                <form action="{{ route('admin.formkontak.update', $formkontak[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="form_nama" class="form-label">Form Nama:</label>
                        <input type="text" name="form_nama" class="form-control" value="{{ $formkontak[0]->form_nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="form_email" class="form-label">Form Email:</label>
                        <input type="text" name="form_email" class="form-control" value="{{ $formkontak[0]->form_email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="form_subjek" class="form-label">Form Subjek:</label>
                        <input type="text" name="form_subjek" class="form-control" value="{{ $formkontak[0]->form_subjek }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="form_pesan" class="form-label">Form Pesan:</label>
                        <textarea name="form_pesan" class="form-control" rows="5" required>{{ $formkontak[0]->form_pesan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="form_code" class="form-label">Form Code:</label>
                        <textarea name="form_code" class="form-control" rows="5" required>{{ $formkontak[0]->form_code }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="maps" class="form-label">Maps:</label>
                        <input type="text" name="maps" class="form-control" value="{{ $formkontak[0]->maps }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
