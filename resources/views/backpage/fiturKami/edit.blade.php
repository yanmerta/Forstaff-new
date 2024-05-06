@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Fitur Kami</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.fiturkami.index') }}">Fitur List</a></li>
                            <li class="breadcrumb-item active">Edit Fitur</li>
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
                                <form method="POST" action="{{ route('admin.fiturkami.update', $fiturkami->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="title_fiturkami">Title</label>
                                        <input type="text" class="form-control" id="title_fiturkami"
                                            name="title_fiturkami" value="{{ $fiturkami->title_fiturkami }}"
                                            placeholder="Enter Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Description">{{ $fiturkami->description }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image:</label><br>
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{ asset('/storage/public/' . $fiturkami->image) }}" width="150"
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
