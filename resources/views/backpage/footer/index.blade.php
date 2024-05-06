@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-10">Footer</span>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer.update', $footer[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $footer[0]->title ?? '' }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
                        <input type="text" name="nama_perusahaan" class="form-control"
                            value="{{ $footer[0]->nama_perusahaan ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="3" required>{{ $footer[0]->alamat ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nomer_telepon" class="form-label">Nomor Telepon:</label>
                        <input type="text" name="nomer_telepon" class="form-control"
                            value="{{ $footer[0]->nomer_telepon ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $footer[0]->email ?? '' }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="jam_kerja" class="form-label">Jam Kerja:</label>
                        <input type="text" name="jam_kerja" class="form-control"
                            value="{{ $footer[0]->jam_kerja ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="link_fb" class="form-label">Link Facebook:</label>
                        <input type="text" name="link_fb" class="form-control" value="{{ $footer[0]->link_fb ?? '' }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="link_link" class="form-label">Link LinkedIn:</label>
                        <input type="text" name="link_link" class="form-control"
                            value="{{ $footer[0]->link_link ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="link_ig" class="form-label">Link Instagram:</label>
                        <input type="text" name="link_ig" class="form-control" value="{{ $footer[0]->link_ig ?? '' }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="link_twitter" class="form-label">Link Twitter:</label>
                        <input type="text" name="link_twitter" class="form-control"
                            value="{{ $footer[0]->link_twitter ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo:</label>
                        <input type="file" name="logo" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $footer[0]->logo) }}" width="150" alt="Current Image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
