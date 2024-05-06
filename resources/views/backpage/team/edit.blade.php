@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.team.index') }}">Team List</a></li>
                            <li class="breadcrumb-item active">Edit Data Team</li>
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
                                <form method="POST" action="{{ route('admin.team.update', $teams->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Posisi</label>
                                        <input type="text" class="form-control" id="name"
                                            name="name" value="{{ $teams->name }}"
                                            placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="posisi">Posisi</label>
                                        <input type="text" class="form-control" id="posisi"
                                            name="posisi" value="{{ $teams->posisi }}"
                                            placeholder="Enter Posisi">
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image:</label><br>
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{ asset('/storage/public/' . $teams->image) }}" width="150"
                                            alt="Current Image">
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
