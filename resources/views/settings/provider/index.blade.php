{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Impact Areas List</h4>
                    {{--                    <span>Statistics</span>--}}
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Impact Area list</a></li>
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

            <a href="{{ route('add_provider') }}" class="btn btn-success ml-auto px-5">+ Add Provider</a>

        </div>
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Provider List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive recentOrderTable">
                        <table class="table verticle-middle table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">Identifer</th>
                                <th scope="col">Name</th>
                                <th scope="col">URL</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($providers as $prov)
                                <tr>
                                    <td>{{ $prov->identifier }}</td>
                                    <td><span class="badge badge-rounded badge-success">{{ $prov->name }}</span></td>
                                    <td>{{ $prov->url}}</td>
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
                                                <a class="dropdown-item text-success" href="{{ route('edit_provider', $prov->id) }}">Edit</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <nav>
                        <ul class="pagination pagination-circle">
                            <li class="page-item page-indicator">
                                <a class="page-link" href="{{ $providers->previousPageUrl() }}" aria-label="Previous">
                                    <i class="la la-angle-left"></i>
                                </a>
                            </li>
                            @for ($i = 1; $i <= $providers->lastPage(); $i++)
                                <li class="page-item {{ $providers->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $providers->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="page-item page-indicator">
                                <a class="page-link" href="{{ $providers->nextPageUrl() }}" aria-label="Next">
                                    <i class="la la-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </div>

@endsection
