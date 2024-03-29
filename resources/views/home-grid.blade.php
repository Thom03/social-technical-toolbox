{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <div class="container-fluid container-padding-top">
{{--        <div class="row">--}}
{{--            <div class="col-xl-3 col-lg-6 col-sm-6">--}}
{{--                <div class="widget-stat card">--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="media ai-icon">--}}
{{--                            <span class="mr-3 bgl-success text-success">--}}
{{--										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"--}}
{{--                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                             class="feather feather-map">--}}
{{--											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>--}}
{{--											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>--}}
{{--											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>--}}
{{--										</svg>--}}
{{--									</span>--}}

{{--                            <div class="media-body">--}}
{{--                                <p class="mb-1">STIBs</p>--}}
{{--                                <h4 class="mb-0">{{ $dataset_count}}</h4>--}}
{{--                                --}}{{--                            <span class="badge badge-primary">+3.5%</span>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-sm-6">--}}
{{--                <div class="widget-stat card">--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="media ai-icon">--}}
{{--	<span class="mr-3 bgl-danger text-danger">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">--}}
{{--        <circle cx="12" cy="12" r="10"></circle>--}}
{{--        <line x1="2" y1="12" x2="22" y2="12"></line>--}}
{{--        <path d="M12 2L12 22"></path>--}}
{{--        <path d="M20 9L4 9"></path>--}}
{{--        <path d="M4 15L20 15"></path>--}}
{{--    </svg>--}}
{{--</span>--}}

{{--                            <div class="media-body">--}}
{{--                                <p class="mb-1">Regions</p>--}}
{{--                                <h4 class="mb-0">{{ $region_count }}</h4>--}}
{{--                                --}}{{--                            <span class="badge badge-warning">+3.5%</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-sm-6">--}}
{{--                <div class="widget-stat card">--}}
{{--                    <div class="card-body  p-4">--}}
{{--                        <div class="media ai-icon">--}}

{{--                            <span class="mr-3 bgl-warning text-warning">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">--}}
{{--        <path--}}
{{--            d="M12 2C8.686 2 6 4.686 6 8c0 4 6 13 6 13s6-9 6-13c0-3.314-2.686-6-6-6zm0 9a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>--}}
{{--    </svg>--}}
{{--</span>--}}
{{--                            <div class="media-body">--}}
{{--                                <p class="mb-1">Countries</p>--}}
{{--                                <h4 class="mb-0">{{ $country_count  }}</h4>--}}
{{--                                --}}{{--                            <span class="badge badge-danger">-3.5%</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-sm-6">--}}
{{--                <div class="widget-stat card">--}}
{{--                    <div class="card-body p-4">--}}
{{--                        <div class="media ai-icon">--}}
{{--			<span class="mr-3 bgl-primary text-primary">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-molecule">--}}
{{--        <circle cx="12" cy="8" r="7"></circle>--}}
{{--        <circle cx="5.5" cy="14.5" r="2.5"></circle>--}}
{{--    </svg>--}}
{{--</span>--}}


{{--                            <div class="media-body">--}}
{{--                                <p class="mb-1">Clusters</p>--}}
{{--                                <h4 class="mb-0">{{ $cluster_count }}</h4>--}}
{{--                                --}}{{--                            <span class="badge badge-success">-3.5%</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">

            {{--            <div class="input-group search-area ml-auto d-inline-flex">--}}
            {{--                <input type="text" class="form-control" placeholder="Search here">--}}
            {{--                <div class="input-group-append">--}}
            {{--                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="input-group search-area ml-auto">
                <form action="{{ route('landing_page_grid') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                        {{--                        <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>--}}
                    </div>
                </form>

            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Regions
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    @foreach ($regions as $region)
                        <a class="dropdown-item"
                           href="{{ route('landing_page_grid', ['region' => $region->id]) }}">{{ $region->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Impact Areas
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    @foreach ($impactAreas as $impactArea)
                        <a class="dropdown-item"
                           href="{{ route('landing_page_grid', ['impact_area' => $impactArea->id]) }}">{{ $impactArea->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Cluster
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    @foreach ($clusters as $cluster)
                        <a class="dropdown-item"
                           href="{{ route('landing_page_grid', ['cluster' => $cluster->id]) }}">{{ $cluster->name }}</a>
                    @endforeach
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
            <a href="{{ route('display-bundle-list') }}" class="btn btn-outline-primary ml-3"><i
                    class="flaticon-381-menu-1 mr-0"></i></a>
            <a href="{{ route('landing_page_grid') }}" class="btn btn-light ml-3"><i class="flaticon-381-pad mr-0"></i></a>
        </div>


        <div class="row">
            <div class="col-xl-12">
                <div id="accordion-one" class="accordion doctor-list">
                    <div class="accordion__item">
                        <div id="default_collapseOne" class="collapse accordion__body show"
                             data-parent="#accordion-one">
                            <div class="widget-media best-doctor pt-4">
                                <div class="timeline row">
                                    @if(isset($searchResults))
                                        @foreach ($searchResults as $data)
                                            <!-- Display search result content here -->
                                            <div class="col-lg-4">
                                                <div class="timeline-panel bg-dark-alt p-4 mb-4">
                                                    <a href="{{ route('bundle_detail', $data->id) }}"
                                                       class="text-decoration-none">
                                                        <div class="media-body">
                                                            <a href="{{ route('bundle_detail', $data->id) }}">
                                                                <h4 class="mb-2">{{ $data->title }}</h4>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <span class="mr-2">Release Year:</span>
                                                                <span
                                                                    class="badge badge-light">{{ $data->release_year }}</span>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex align-items-center">
                                                                <span class="mr-2">DOI:</span>
                                                                <span
                                                                    class="badge badge-rounded badge-outline-info">{{ $data->DOI }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($dataset as $data)
                                            <div class="col-lg-4">
                                                <div class="timeline-panel bg-dark-alt p-4 mb-4">
                                                    <a href="{{ route('bundle_detail', $data->id) }}"
                                                       class="text-decoration-none">
                                                        <div class="media-body">
                                                            <a href="{{ route('bundle_detail', $data->id) }}">
                                                                <h4 class="mb-2">{{ $data->title }}</h4>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <span class="mr-2">Release Year:</span>
                                                                <span
                                                                    class="badge badge-light">{{ $data->release_year }}</span>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex align-items-center">
                                                                <span class="mr-2">DOI:</span>
                                                                <span
                                                                    class="badge badge-rounded badge-outline-info">{{ $data->DOI }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <nav>
                <ul class="pagination pagination-circle">
                    <li class="page-item page-indicator">
                        <a class="page-link" href="{{ $dataset->previousPageUrl() }}" aria-label="Previous">
                            <i class="la la-angle-left"></i>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $dataset->lastPage(); $i++)
                        <li class="page-item {{ $dataset->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $dataset->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item page-indicator">
                        <a class="page-link" href="{{ $dataset->nextPageUrl() }}" aria-label="Next">
                            <i class="la la-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Display search results -->
    @if(isset($searchResults))
        <div class="search-results">
            <!-- Display search results here -->
        </div>
    @endif

@endsection
