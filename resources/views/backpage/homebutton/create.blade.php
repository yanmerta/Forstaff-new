@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New Home Button</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.homebutton.index') }}">Home Button List</a>
                            </li>
                            <li class="breadcrumb-item active">Create New Home Button</li>
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
                                <form method="POST" action="{{ route('admin.homebutton.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="button_teks">Button Teks</label>
                                        <input type="text" class="form-control" id="button_teks"
                                            name="button_teks" placeholder="Enter Button">
                                    </div>

                                    <div class="form-group">
                                        <label for="button_image">Button Image</label>
                                        <input type="file" class="form-control-file" id="button_image"
                                            name="button_image">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
