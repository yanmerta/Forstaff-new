@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5 ">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Tentang</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.about.update', $about[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title_about" class="form-label">Title About:</label>
                        <input type="text" name="title_about" class="form-control" value="{{ $about[0]->title_about }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle_about" class="form-label">Subtitle About:</label>
                        <input type="text" name="subtitle_about" class="form-control" value="{{ $about[0]->subtitle_about }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" class="form-control" rows="10" required>{{ $about[0]->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label><br>
                        <input type="file" name="image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $about[0]->image) }}" width="50"
                            alt="Current Image">

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
