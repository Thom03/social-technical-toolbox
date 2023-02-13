{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Role List</h4>
                    {{--                    <span>Statistics</span>--}}
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">role list</a></li>
                </ol>
            </div>
        </div>
        <div class="form-head d-flex mb-3 mb-md-5 align-items-start">
            <div class="input-group search-area ml-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
            </div>
            <a href="#" class="btn btn-primary ml-3"><i class="flaticon-381-plus mr-0"></i></a>
        </div>
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Role List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive recentOrderTable">
                        <table class="table verticle-middle table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
{{--                                <th scope="col">Email</th>--}}
{{--                                <th scope="col">Roles</th>--}}
                                {{--                                <th scope="col">Status</th>--}}
                                {{--                                <th scope="col">Bills</th>--}}
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
{{--                                    <td>{{ $user->email }}</td>--}}
{{--                                    <td>01 August 2020</td>--}}
{{--                                    <td><span class="badge badge-rounded badge-primary">Checkin</span></td>--}}
{{--                                    <td>$120</td>--}}
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                                     viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Details</a>
                                                <a class="dropdown-item text-green" data-toggle="modal" data-target="#exampleModalpopover" href="#">Edit</a>
                                                <a class="dropdown-item text-danger" href="#">Cancel</a>
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
    </div>

@endsection
