@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Fitur</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.fitur.update', $fiturs[0]->fitur_id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="fitur_title" class="form-label">Title:</label>
                        <input type="text" name="fitur_title" class="form-control"
                            value="{{ $fiturs[0]->fitur_title ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle_fitur" class="form-label">Sub Title:</label>
                        <input type="text" name="subtitle_fitur" class="form-control"
                            value="{{ $fiturs[0]->subtitle_fitur ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" class="form-control" rows="8" required>{{ $fiturs[0]->description ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" name="image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $fiturs[0]->image) }}" width="50" alt="Current Image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
