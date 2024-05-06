@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New Home Servis</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.homeservis.index') }}">User List</a></li>
                            <li class="breadcrumb-item active">Create New HomeServis</li>
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
                                <form method="POST" action="{{ route('admin.homeservis.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="servis_title">Title</label>
                                        <input type="text" class="form-control" id="servis_title"
                                            name="servis_title" placeholder="Enter Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="servis_description">Description</label>
                                        <textarea class="form-control" rows="5" id="servis_description" name="servis_description" placeholder="Enter Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="servis_image">Image</label>
                                        <input type="file" class="form-control-file" id="servis_image" name="servis_image">
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
