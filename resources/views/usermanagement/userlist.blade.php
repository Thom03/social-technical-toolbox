{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-5 align-items-start">
            <div class="input-group search-area ml-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
            </div>
            <a href="#" class="btn btn-primary ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
        </div>
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive recentOrderTable">
                        <table class="table verticle-middle table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">Ward No.</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Dr Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Bills</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>12</td>
                                <td>Mr. Bobby</td>
                                <td>Dr. Jackson</td>
                                <td>01 August 2020</td>
                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                <td>$120</td>
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
                                            <a class="dropdown-item text-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Mr. Dexter</td>
                                <td>Dr. Charles</td>
                                <td>31 July 2020</td>
                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                <td>$540</td>
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
                                            <a class="dropdown-item text-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Mr. Nathan</td>
                                <td>Dr. Frederick</td>
                                <td>30 July 2020</td>
                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                <td>$301</td>
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
                                            <a class="dropdown-item text-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Mr. Aurora</td>
                                <td>Dr. Roman</td>
                                <td>29 July 2020</td>
                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                <td>$099</td>
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
                                            <a class="dropdown-item text-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Mr. Matthew</td>
                                <td>Dr. Samantha</td>
                                <td>28 July 2020</td>
                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                <td>$520</td>
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
                                            <a class="dropdown-item text-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


