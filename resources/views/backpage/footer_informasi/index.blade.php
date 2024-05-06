@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Footer Informasi</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer_informasi.update', $footer_informasi[0]->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control"
                            value="{{ $footer_informasi[0]->title ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="faq" class="form-label">FAQ:</label>
                        <input type="text" name="faq" class="form-control"
                            value="{{ $footer_informasi[0]->faq ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kontak_kami" class="form-label">Kontak Kami:</label>
                        <input type="text" name="kontak_kami" class="form-control"
                            value="{{ $footer_informasi[0]->kontak_kami ?? '' }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
