@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5 ">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Home Servis</span>
                    <div class="card-toolbar">
                        <a href="{{ route('admin.homeservis.create') }}" class="btn btn-sm btn-success">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                        fill="currentColor" />
                                </svg>
                            </span>Add New Fitur
                        </a>
                    </div>
                </h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-3" style="border: 1px solid #dee2e6;">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th style="border: 1px solid #dee2e6;" class="text-center">No</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center">Title</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center">Description</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center">Image</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center" width="90">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeservis as $key => $homeservis)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;" class="text-center">{{ ++$key }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $homeservis->servis_title }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $homeservis->servis_description }}</td>
                                    <td style="border: 1px solid #dee2e6;">
                                        @if ($homeservis->servis_image)
                                            <img src="{{ asset('/storage/public/' . $homeservis->servis_image) }}"
                                                width="50" alt="Fitur Image">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td style="border: 1px solid #dee2e6;">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item btn-edit-fitur" data-id="{{ $homeservis->id }}"
                                                    href="{{ route('admin.homeservis.edit', ['id' => $homeservis->id]) }}">
                                                    Edit
                                                </a>
                                                <form
                                                    action="{{ route('admin.homeservis.delete', ['homeservis' => $homeservis->id]) }}"
                                                    method="post" id="delete-form">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="dropdown-item">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
