@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Kontak Kami</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.contact.update', $contacts[0]->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $contact[0]->fitur_title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle">Sub Title:</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $contact[0]->subtitle?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="buttom">Buttom Text:</label>
                    <textarea name="buttom" class="form-control" rows="3" required>{{ $contact[0]->buttom ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon:</label>
                    <textarea name="telepon" class="form-control" rows="3" required>{{ $contact[0]->telepon ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <textarea name="email" class="form-control" rows="3" required>{{ $contact[0]->email ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $contact[0]->description ?? '' }}</textarea>
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image: {{ $contact[0]->image }}</label>
                    <input type="file" name="image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $fiturs[0]->image) }}" width="50" alt="Current Image">
                </div> --}}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
