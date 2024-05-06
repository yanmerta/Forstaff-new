@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5 ">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Tentang Tim</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.abouttim.update', $aboutTim[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title_tim" class="form-label">Title Tim:</label>
                        <input type="text" name="title_tim" class="form-control" value="{{ $aboutTim[0]->title_tim }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle_tim" class="form-label">Subtitle Tim:</label>
                        <input type="text" name="subtitle_tim" class="form-control" value="{{ $aboutTim[0]->subtitle_tim }}"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
