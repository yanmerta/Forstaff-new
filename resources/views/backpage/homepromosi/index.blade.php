@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Home Promosi</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.homepromosi.update', $homepromosi[0]->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $homepromosi[0]->title ?? '' }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="sub_title" class="form-label">Sub Title:</label>
                        <input type="text" name="sub_title" class="form-control"
                            value="{{ $homepromosi[0]->sub_title ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="button_teks" class="form-label">Button Teks:</label>
                        <input type="text" name="button_teks" class="form-control"
                            value="{{ $homepromosi[0]->button_teks ?? '' }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
