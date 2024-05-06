@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Tentang</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.fitur.update', $fiturs[0]->fitur_id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="fitur_title">Title:</label>
                    <input type="text" name="fitur_title" class="form-control" value="{{ $fiturs[0]->fitur_title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle_fitur">Sub Title:</label>
                    <input type="text" name="subtitle_fitur" class="form-control" value="{{ $fiturs[0]->subtitle_fitur?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $fiturs[0]->description ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image: {{ $fiturs[0]->image }}</label>
                    <input type="file" name="image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $fiturs[0]->image) }}" width="50" alt="Current Image">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
