{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <div class="container-fluid container-padding-top">
        <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-map">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>

                        <div class="media-body">
                            <p class="mb-1">STIBs</p>
                            <h4 class="mb-0">{{ $dataset_count}}</h4>
                            {{--                            <span class="badge badge-primary">+3.5%</span>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
									<span class="mr-3 bgl-danger text-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="2" y1="12" x2="22" y2="12"></line>
        <path d="M12 2L12 22"></path>
        <path d="M20 9L4 9"></path>
        <path d="M4 15L20 15"></path>
    </svg>
                        <div class="media-body">
                                <p class="mb-1">Regions</p>
                                <h4 class="mb-0">{{ $region_count }}</h4>
                                {{--                            <span class="badge badge-warning">+3.5%</span>--}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body  p-4">
                    <div class="media ai-icon">
									<span class="mr-3 bgl-warning text-warning">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
        <path
            d="M12 2C8.686 2 6 4.686 6 8c0 4 6 13 6 13s6-9 6-13c0-3.314-2.686-6-6-6zm0 9a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
    </svg>
</span>
                        <div class="media-body">
                            <p class="mb-1">Countries</p>
                            <h4 class="mb-0">{{ $country_count  }}</h4>
                            {{--                            <span class="badge badge-danger">-3.5%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-molecule">
        <circle cx="12" cy="8" r="7"></circle>
        <circle cx="5.5" cy="14.5" r="2.5"></circle>
    </svg>
</span>
                        <div class="media-body">
                            <p class="mb-1">Clusters</p>
                            <h4 class="mb-0">0</h4>
                            {{--                            <span class="badge badge-success">-3.5%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">
            <a href="{{ route('landing_page') }}" class="btn btn-outline-primary btn-light ml-3"><i class="flaticon-381-menu-1 mr-0"></i></a>
            <a href="{{ route('landing_page_grid') }}" class="btn ml-3"><i class="flaticon-381-pad mr-0"></i></a>
        </div>

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title center">Dataset List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table  table-striped verticle-middle table-responsive-sm display">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Release Year</th>
                                    <th>Access</th>
                                    <th>Source</th>
                                    <th>Contact</th>
                                    <th>DOI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($dataset as $dataset)
                                <tr>
                                    <td><a href="{{ route('bundle_detail', $dataset->id) }}">{{Str::limit($dataset->title, 120)}}</a><a class="badge badge-rounded badge-outline-info" href="{{ route('bundle_detail', $dataset->id) }}">...more info</a></td>
                                    <td>{{$dataset-> release_year}}</td>
                                    <td>{{$dataset-> access}}</td>
                                    <td><span class="badge badge-rounded badge-success">{{$dataset-> source}}</span></td>
                                    <td>{{$dataset-> contact}}</td>
                                    <td>{{$dataset-> DOI}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>


@endsection
