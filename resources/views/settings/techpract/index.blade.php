{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Technology/Practices List</h4>
                    {{--                    <span>Statistics</span>--}}
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Technology/Practices list</a></li>
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

            <a href="{{ route('add_techprac') }}" class="btn btn-success ml-auto px-5">+ Add Technology/Practices</a>

        </div>
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Technology/Practices List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive recentOrderTable">
                        <table class="table verticle-middle table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">slug</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($techpracs as $techp)
                                <tr>
                                    <td>{{ $techp->id }}</td>
                                    <td><span class="badge badge-rounded badge-success">{{ $techp->name }}</span></td>
                                    <td>{{ $techp->description }}</td>
                                    <td>{{ $techp->slug }}</td>

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
                                                <a class="dropdown-item text-success" href="{{ route('edit_techprac', $techp->id) }}">Edit</a>
                                                <form action="{{ route('delete_techprac', ['id' => $techp->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item text-danger" type="submit">Delete</button>
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
                <div class="row justify-content-center">
                    <nav>
                        <ul class="pagination pagination-circle">
                            <li class="page-item page-indicator">
                                <a class="page-link" href="{{ $techpracs->previousPageUrl() }}" aria-label="Previous">
                                    <i class="la la-angle-left"></i>
                                </a>
                            </li>
                            @for ($i = 1; $i <= $techpracs->lastPage(); $i++)
                                <li class="page-item {{ $techpracs->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $techpracs->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="page-item page-indicator">
                                <a class="page-link" href="{{ $techpracs->nextPageUrl() }}" aria-label="Next">
                                    <i class="la la-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            </div>
        </div>

    </div>

@endsection
