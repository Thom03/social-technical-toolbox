{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashaboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Roles</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form action="POST" action="{{ route('update_role', $role->id) }}" class="step-form-horizontal">
                            @method('patch')
                            @csrf
                            <div>

                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Name</label>
                                            <input value="{{ $role->name }}" type="text" name="name"
                                                   class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            {{--                                            <label class="text-label">User Name</label>--}}
                                            <label for="permissions" class="form-label">Assign Permissions</label>

                                            <table class="table table-responsive">
                                                <thead>
                                                <th scope="col" width="1%"><input type="checkbox" name="all_permission">
                                                </th>
                                                <th scope="col" width="20%">Name</th>
                                                <th scope="col" width="1%">Guard</th>
                                                </thead>

                                                @foreach($permissions as $permission)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox"
                                                                   name="permission[{{ $permission->name }}]"
                                                                   value="{{ $permission->name }}"
                                                                   class='permission'
                                                                {{ in_array($permission->name, $rolePermissions)
                                                                    ? 'checked'
                                                                    : '' }}>
                                                        </td>
                                                        <td>{{ $permission->name }}</td>
                                                        <td>{{ $permission->guard_name }}</td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                            <a href="{{ route('role_list') }}" type="submit" class="btn btn-danger">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('[name="all_permission"]').on('click', function () {

                if ($(this).is(':checked')) {
                    $.each($('.permission'), function () {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.permission'), function () {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
