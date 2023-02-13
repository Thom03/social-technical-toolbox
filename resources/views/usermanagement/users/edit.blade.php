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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Users</a></li>
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
                        <form action="post" action="{{ route('update_user', $user->id) }}" class="step-form-horizontal">
                            @method('patch')
                            @csrf
                            <div>

                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Name*</label>
                                            <input value="{{ $user->name }}" type="text" name="name"
                                                   class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">User Name</label>
                                            <input value="{{ $user->username }}" type="text" name="username"
                                                   class="form-control" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Email Address*</label>
                                            <input value="{{ $user->email }}" type="email" class="form-control"
                                                   placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Role</label>
                                            <select class="form-control" name="role" required>
                                                <option value="">Select role</option>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        {{ in_array($role->name, $userRole)
                                                            ? 'selected'
                                                            : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-success">Update User</button>
                            <a  href="{{ route('user_list') }}" type="submit" class="btn btn-danger">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
