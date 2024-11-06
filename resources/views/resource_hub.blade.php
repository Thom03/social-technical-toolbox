{{-- Extends layout --}}
@extends('layout.landing')



{{-- Content --}}
@section('content')
    <style>
        .nav-scroller .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
             padding-bottom: 0rem !important;
             margin-top: 0px !important;
            overflow-x: hidden;
            color: rgba(255, 255, 255, .75);
            text-align: center;
            white-space: normal;
            -webkit-overflow-scrolling: touch;
        }

        /* Card hover effect */
        .card:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease-in-out;
        }

        .card-body h4 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .card-body p {
            color: #6c757d;
            font-size: 0.875rem;
        }

        /* Card image settings */
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        /* Card spacing */
        .card {
            margin-bottom: 20px;
            border: none;
        }

        /* Button styling */
        .btn-primary-outline {
            color: #007bff;
            background-color: transparent;
            border-color: #007bff;
        }

        .btn-primary-outline:hover {
            color: white;
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
    <div class="container-fluid container-padding-top">

    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block mx-auto w-80" src="{{ asset('img/dashboard.png') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    {{--                    <h5>Second Slide</h5>--}}
                    {{--                    <p>Sample caption for the second slide.</p>--}}
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block mx-auto w-80" src="{{ asset('img/group_photo.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Stakeholder Consultation workshop held on 23 rd- 24 th
                        May 2023 at Azure Hotel Nairobi, Kenya.</h5>
{{--                    <p>Nairobi: Workshop</p>--}}
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block mx-auto w-80" src="{{ asset('img/resilent-agrifood.jpg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third Slide</h5>
                    <p>Sample caption for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Widget Stats Section -->
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3"> <!-- Reduced padding -->
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-success text-success">
                        <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Workshop Reports</p>
                                <h4 class="mb-0">{{ $workshopReportsCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3">
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-danger text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2L12 22"></path>
                            <path d="M20 9L4 9"></path>
                            <path d="M4 15L20 15"></path>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Blogs</p>
                                <h4 class="mb-0">{{ $blogsCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3">
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-primary text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                            <line x1="16" y1="2" x2="16" y2="14"></line>
                            <line x1="6" y1="8" x2="18" y2="8"></line>
                            <line x1="6" y1="12" x2="18" y2="12"></line>
                            <line x1="6" y1="16" x2="9" y2="16"></line>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Videos</p>
                                <h4 class="mb-0">{{ $videosCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3">
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-dark text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                            <line x1="16" y1="2" x2="16" y2="14"></line>
                            <line x1="6" y1="8" x2="18" y2="8"></line>
                            <line x1="6" y1="12" x2="18" y2="12"></line>
                            <line x1="6" y1="16" x2="9" y2="16"></line>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Working Paper</p>
                                <h4 class="mb-0">{{ $workingPapersCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3">
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-info text-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M7 21v-2a4 4 0 0 1 3-3.87"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Frameworks, Guides & Instruments</p>
                                <h4 class="mb-0">{{ $frameworksCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-3">
                        <div class="media ai-icon">
                    <span class="mr-3 bgl-warning text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 0 0 12 2v10l9.21 3.89z"></path>
                            <path d="M11 22a10 10 0 0 1 0-20"></path>
                        </svg>
                    </span>
                            <div class="media-body">
                                <p class="mb-1">Training Manuals</p>
                                <h4 class="mb-0">{{ $trainingManualsCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
    <div class="container-fluid container-padding-top">
        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">
            <div class="input-group search-area ml-auto">
                <form action="{{ route('landing_page_grid') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                </form>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Type
                </div>
{{--                <div class="dropdown-menu dropdown-menu-left">--}}
{{--                    @foreach ($regions as $region)--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="{{ route('landing_page_grid', ['region' => $region->id]) }}">{{ $region->name }}</a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
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
                                                        <img src="" alt="{{ $data->title }}" class="img-fluid mb-3" style="max-height: 150px; object-fit: cover;">
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
                                        @foreach ($resource as $res)
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="card shadow-sm">
                                                    <img src="{{ $res->image_link ? asset($res->image_link) : asset('https://ccdtrust.org/wp-content/plugins/elementor/assets/images/placeholder.png') }}" class="card-img-top" alt="Resource Image">
                                                    <div class="card-body">
                                                        <a href="{{ route('bundle_detail', $res->id) }}" class="text-decoration-none">
                                                            <h4 class="card-title">{{ $res->title }}</h4>
                                                        </a>
                                                        <p class="mb-2"><strong>Type:</strong> {{ $res->type }}</p>
                                                        <p class="mb-2"><strong>Link:</strong> <a href="{{ $res->link }}" target="_blank" class="badge badge-outline-info">{{ $res->link }}</a></p>
                                                    </div>
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
                        <a class="page-link" href="{{ $resource->previousPageUrl() }}" aria-label="Previous">
                            <i class="la la-angle-left"></i>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $resource->lastPage(); $i++)
                        <li class="page-item {{ $resource->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $resource->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item page-indicator">
                        <a class="page-link" href="{{ $resource->nextPageUrl() }}" aria-label="Next">
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

