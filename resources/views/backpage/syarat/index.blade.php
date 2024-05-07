@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Syarat Kebutuhan Pengguna Aplikasi</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.syarat.update', $syarats->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="description1" class="form-label">Description 1:</label>
                        <textarea name="description1" class="form-control" rows="8" required>{{ $syarats->description1 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description2" class="form-label">Description 2:</label>
                        <textarea name="description2" class="form-control" rows="8" required>{{ $syarats->description2 }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
