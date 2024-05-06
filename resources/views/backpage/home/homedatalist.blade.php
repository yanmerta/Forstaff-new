@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5 ">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Beranda</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.home.update', $homes[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="home_title" class="form-label">Title:</label>
                        <input type="text" name="home_title" class="form-control" value="{{ $homes[0]->home_title }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="home_description" class="form-label">Description:</label>
                        <textarea name="home_description" class="form-control" rows="3" required>{{ $homes[0]->home_description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="button_teks" class="form-label">Button Text:</label>
                        <input type="text" name="button_teks" class="form-control" value="{{ $homes[0]->button_teks }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="button_url" class="form-label">Button URL:</label>
                        <input type="text" name="button_url" class="form-control" value="{{ $homes[0]->button_url }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="home_image" class="form-label">Image:</label><br>
                        <input type="file" name="home_image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $homes[0]->home_image) }}" width="50"
                            alt="Current Image">
                    </div>
                    <div class="mb-3">
                        <label for="icon_app1" class="form-label">Icon_App1:</label><br>
                        <input type="file" name="icon_app1" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $homes[0]->icon_app1) }}" width="50"
                            alt="Current Image">
                    </div>
                    <div class="mb-3">
                        <label for="icon_app2" class="form-label">Icon_App2:</label><br>
                        <input type="file" name="icon_app2" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $homes[0]->icon_app2) }}" width="50"
                            alt="Current Image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
