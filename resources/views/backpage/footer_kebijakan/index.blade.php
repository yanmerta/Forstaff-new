@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Footer Kebijakan</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer_kebijakan.update', $footer_kebijakan[0]->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control"
                            value="{{ $footer_kebijakan[0]->title ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="kebijakan" class="form-label">kebijakan:</label>
                        <input type="text" name="kebijakan" class="form-control"
                            value="{{ $footer_kebijakan[0]->kebijakan ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="syarat" class="form-label">Syarat:</label>
                        <input type="text" name="syarat" class="form-control"
                            value="{{ $footer_kebijakan[0]->syarat ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="icon_app1" class="form-label">icon_app1:</label>
                        <input type="file" name="icon_app1" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $footer_kebijakan[0]->icon_app1) }}" width="50"
                            alt="Current icon_app1">
                    </div>
                    <div class="mb-3">
                        <label for="icon_app2" class="form-label">icon_app2:</label>
                        <input type="file" name="icon_app2" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $footer_kebijakan[0]->icon_app2) }}" width="50"
                            alt="Current icon_app2">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
