@extends('backpage.general.layout')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5 ">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">User List</span>
                    <div class="card-toolbar">
                        <a href="{{ route('admin.admin.users.create') }}" class="btn btn-sm btn-success">
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
                            </span>Add New User
                        </a>
                    </div>
                </h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-4" style="border: 1px solid #dee2e6;">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th style="border: 1px solid #dee2e6;" class="text-center">No</th>
                                <th style="border: 1px solid #dee2e6;">Name</th>
                                <th style="border: 1px solid #dee2e6;">Email</th>
                                <th style="border: 1px solid #dee2e6;">Role</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center">Status</th>
                                <th style="border: 1px solid #dee2e6;" class="text-center" width="90">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;" class="text-center">{{ ++$key }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $user->name }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $user->email }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $user->role }}</td>
                                    <td style="border: 1px solid #dee2e6;" class="text-center">
                                        <span
                                            class="badge {{ $user->status === 'active' ? 'badge-success' : 'badge-danger' }}">
                                            {{ ucfirst($user->status) }}
                                        </span>
                                    </td>
                                    <td style="border: 1px solid #dee2e6;" class="text-center">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item btn-edit-user" data-id="{{ $user->id }}"
                                                    href="{{ route('admin.admin.users.edit', ['user' => $user->id]) }}">
                                                    Edit
                                                </a>
                                                <form
                                                    action="{{ route('admin.admin.users.delete', ['user' => $user->id]) }}"
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
