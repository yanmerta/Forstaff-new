@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Home Button</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.homebutton.index') }}">Home Button List</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Home Button</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.homebutton.update', $homebutton->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="button_teks">Button Text</label>
                                        <input type="text" class="form-control" id="button_teks" name="button_teks"
                                            placeholder="Enter Button" value="{{ $homebutton->button_teks }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="button_image">Button Image</label>
                                        <input type="file" class="form-control-file" id="button_image"
                                            name="button_image">
                                        <img src="{{ asset('/storage/public/' . $homebutton->button_image) }}"
                                            width="50" alt="Current Image">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
