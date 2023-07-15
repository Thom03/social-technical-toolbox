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
									<span class="mr-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>

                            <div class="media-body">
                                <p class="mb-1">TOTAL BUNDLES</p>
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
									<span class="mr-3 bgl-warning text-warning">
										<svg id="icon-map" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
                            <div class="media-body">
                                <p class="mb-1">Open Access Datasets</p>
                                <h4 class="mb-0">{{ $open_count }}</h4>
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
									<span class="mr-3 bgl-danger text-danger">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
                            <div class="media-body">
                                <p class="mb-1">Limited Access Datasets</p>
                                <h4 class="mb-0">{{ $limited_count }}</h4>
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
									<span class="mr-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
                            <div class="media-body">
                                <p class="mb-1">Bundle Clusters</p>
                                <h4 class="mb-0">0</h4>
                                {{--                            <span class="badge badge-success">-3.5%</span>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">

            <div class="input-group search-area ml-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Filter
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">A To Z List</a>
                    <a class="dropdown-item" href="#">Z To A List</a>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Cluster
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">Cluster 1</a>
                    <a class="dropdown-item" href="#">Cluster 2</a>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    Newest
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">Newest</a>
                    <a class="dropdown-item" href="#">Old</a>
                </div>
            </div>
            <a href="{{ route('landing_page') }}" class="btn btn-outline-primary ml-3"><i class="flaticon-381-menu-1 mr-0"></i></a>
            <a href="{{ route('landing_page_grid') }}" class="btn btn-light ml-3"><i class="flaticon-381-pad mr-0"></i></a>
        </div>



                    <div class="row">
                        <div class="col-xl-12">
                            <div id="accordion-one" class="accordion doctor-list ">
                                <div class="accordion__item">
                                    <div id="default_collapseOne" class="collapse accordion__body show" data-parent="#accordion-one">
                                        <div class="widget-media best-doctor pt-4">
                                            <div class="timeline row">
                                                @foreach ($dataset as $dataset)
                                                    <div class="col-lg-4">
                                                        <div class="timeline-panel bg-dark-alt p-4 mb-4">
                                                            <div class="media-body">
                                                                <a href="{{ route('bundle_detail', $dataset->id) }}"> <h4 class="mb-2">{{ $dataset->title }}</h4></a>
{{--                                                                @foreach($dataset->impactAreas as $impactArea)--}}
{{--                                                                    --}}{{--                                                <p><span class="badge badge-rounded badge-secondary">{{ $impactArea->name }}</span></p>--}}
{{--                                                                    --}}{{--                                                        <span class="badge badge-primary">{{ $impactArea->name }}</span>--}}
{{--                                                                    <label class="form-check-label" for="impact_area_{{ $impactArea->id }}">--}}
{{--                                                                        <span class="badge badge-primary">{{ $impactArea->name }}</span>--}}
{{--                                                                    </label>--}}
{{--                                                                @endforeach--}}
                                                                <span>Release Year:</span><span class="badge badge-light"> {{ $dataset->release_year }}</span>
                                                                <span>DOI:</span><span class="badge badge-light-"> {{ $dataset->DOI }}</span>
                                                                <br>
                                                                <br>
                                                                <br>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



            </div>
        </div>
        <div>


@endsection
