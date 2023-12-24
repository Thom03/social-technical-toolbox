{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <body>

    <!-- site header -->
    <style>
        .site-header .navbar-light .no-logo .navbar-brand--sitename {
            border: 0px !important;
            margin-left: 0px
        }

        .site-header .navbar-light .no-logo .nada-site-title {
            font-size: 18px;
        }
    </style>

    <header class="site-header">


        <div class="container">


        </div>

    </header>
    <br>


    <!-- page body -->
    <div class="wp-page-body container default-wrapper page-catalog catalog">

        <div class="body-content-wrap theme-nada-2">

            <!--breadcrumbs -->

            <div class="container">
                <ol class="breadcrumb wb-breadcrumb">
                    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <span typeof="v:Breadcrumb">
                            <a href="" rel="v:url" property="v:title">Home</a> /

                        </span>
                        <span typeof="v:Breadcrumb">
                            <a class="active" href="" rel="v:url"
                               property="v:title">Socia-Technical Invovation Bundles</a>

                        </span>
                    </div>
                </ol>
            </div>
            <!-- /breadcrumbs -->


            <style>
                .disabled-facet {
                    background: red;
                    display: none;
                }

                .facet-group-title {
                    font-size: 12px;
                    color: #545b62;
                    margin-top: 10px;
                    margin-bottom: 10px;
                    font-weight: bold;
                }

                .study-subtitle {
                    font-size: small;
                }
            </style>
            <div class="container catalog-search-container">
                <!--search bar-->

                <form method="get" id="catalog-search-form">

                    <div class="nada-search-box wb-controls-wrapper">
                        <div class="row mb-5 justify-content-center align-items-center">
                            <h1 class="wb-library-search-title  pb-3">Socia-Technical Invovation Bundles</h1>
                            <div class="input-group col-md-12 search-box-container">
                                <input class="form-control form-control-lg  search-keywords" id="search-keywords"
                                       name="sk" value="" placeholder="Keywords...">
                                <span class="input-group-append">
                                    <button class="btn btn-primary btn-search-submit" type="submit" id="submit_search">
                                        <!-- <i class="fa fa-search"></i> -->
                                        Search </button>
                                    <a href="#"
                                       class="close clear-search-button" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                </span>

                            </div>
                            <span class="keyword-suggestions"></span>
                            {{--                            <div class="wb-library-search--browse my-3">--}}
                            {{--                                <!-- <button type="button" class="btn btn-outline-primary"><a href="https://microdata.fao.org/index.php/collections"><i class="far fa-file-alt"></i>  Collections </a> </button> -->--}}
                            {{--                                <button type="button" class="btn btn-outline-primary"><a--}}
                            {{--                                        href="https://microdata.fao.org/index.php/citations"><i--}}
                            {{--                                            class="far fa-file-alt"></i> Browse Citations </a></button>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <input type="hidden" name="tab_type" id="tab_type" value=""/>
                    <input type="hidden" name="page" id="page" value="1"/>
                    <input type="hidden" name="view" id="view" value=""/>
                    <input type="hidden" name="image_view" id="image_view" value=""/>
                    <div class="row">

                        <!--left side bar -->
                        <div class="col-12 col-lg-3 col-md-4">

                            <nav class="navbar navbar-expand-sm navbar-expand-filters">

                                <button class="navbar-toggler btn-block navbar-toggler-filter" type="button"
                                        data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="btn btn-outline-secondary btn-block" xstyle="font-size:12px"><i
                                            class="fa fa-sliders" aria-hidden="true"></i> Filters</span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                    <div class="filters-container">
                                        <div id="filter-by-year"
                                             class="sidebar-filter wb-ihsn-sidebar-filter filter-by-year filter-box ">

                                            <h6 class="togglable">
                                                <div class="wb-filter-title collapsed" data-toggle="collapse"
                                                     href="#facet-year" role="button" aria-expanded="false"
                                                     aria-controls="facet-year">
                                                    <i class="fa fa-filter pr-2"></i>
                                                    <span class="text-capitalize">Years</span>
                                                    <span class="float-right">
                                                        <i
                                                            class="icon-toggle icon-collapsed float-right fa fa-chevron-down"></i>
                                                        <i
                                                            class="icon-toggle icon-expanded float-right fa fa-chevron-up"></i>
                                                    </span>
                                                </div>

                                                <div class="wb-filter-subtitle clear-button-container clear-disabled">
                                                    <span><span class="selected-items"></span> selected </span>
                                                    <a
                                                        class="btn btn-link btn-sm rounded clear lnk-filter-reset">Clear</a>
                                                </div>
                                            </h6>

                                            <div id="facet-year" class="sidebar-filter-entries collapse">
                                                <form>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="mb-0 pb-0">From</p>
                                                            <div class="form-group mb-0">
                                                                <select name="from" id="from" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 pb-0">To</p>
                                                            <div class="form-group">
                                                                <select name="to" id="to" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                        <div id="filter-by-country"
                                             class="sidebar-filter wb-ihsn-sidebar-filter filter-box filter-by-country ">

                                            <!-- Card Header / Toggle -->
                                            <h6 class="togglable">
                                                <div class="wb-filter-title collapsed" data-toggle="collapse"
                                                     href="#facet-country" role="button" aria-expanded="false"
                                                     aria-controls="facet-country">
                                                    <i class="fa fa-filter pr-2"></i>
                                                    <span class="text-capitalize">Countries</span>
                                                    <span class="float-right">
                                                        <i
                                                            class="icon-toggle icon-collapsed float-right fa fa-chevron-down"></i>
                                                        <i
                                                            class="icon-toggle icon-expanded float-right fa fa-chevron-up"></i>
                                                    </span>
                                                </div>

                                                <div class="wb-filter-subtitle clear-button-container clear-disabled">
                                                    <span><span class="selected-items"></span> selected </span>
                                                    <a
                                                        class="btn btn-link btn-sm rounded clear lnk-filter-reset">Clear</a>
                                                </div>
                                            </h6>


                                            <div id="facet-country"
                                                 class="sidebar-filter-entries collapse country-container items-container">
                                                <div class="wb-card-header">
                                                    <div class="wb-search-control input-group input-group-sm mb-3">
                                                        <input type="text" class="form-control facet-filter-values"
                                                               placeholder="Filter...">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-link facet-filter-values-clear"
                                                                    type="button" style="display:none;">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items-container ">

                                                    <div class="form-check item-country 1 item inactive">
                                                        <label class="form-check-label" for="country-1" 1>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="1"
                                                                   data-title="Afghanistan" id="country-1">

                                                            Afghanistan
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>

                                        <div id="filter-by-collection"
                                             class="sidebar-filter wb-ihsn-sidebar-filter filter-box filter-by-collection ">

                                            <!-- Card Header / Toggle -->
                                            <h6 class="togglable">
                                                <div class="wb-filter-title collapsed" data-toggle="collapse"
                                                     href="#facet-collection" role="button" aria-expanded="false"
                                                     aria-controls="facet-collection">
                                                    <i class="fa fa-filter pr-2"></i>
                                                    <span class="text-capitalize">CGIAR Impact Areas</span>
                                                    <span class="float-right">
                                                        <i
                                                            class="icon-toggle icon-collapsed float-right fa fa-chevron-down"></i>
                                                        <i
                                                            class="icon-toggle icon-expanded float-right fa fa-chevron-up"></i>
                                                    </span>
                                                </div>

                                                <div class="wb-filter-subtitle clear-button-container clear-disabled">
                                                    <span><span class="selected-items"></span> selected </span>
                                                    <a
                                                        class="btn btn-link btn-sm rounded clear lnk-filter-reset">Clear</a>
                                                </div>
                                            </h6>


                                            <div id="facet-collection"
                                                 class="sidebar-filter-entries collapse collection-container items-container">
                                                <div class="items-container ">


                                                    <div class="facet-group-title">Collections</div>
                                                    <div class="form-check item-collection 1 item inactive">
                                                        <label class="form-check-label"
                                                               for="collection-agriculture-census-surveys"
                                                               agriculture-census-surveys>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]"
                                                                   value="agriculture-census-surveys"
                                                                   data-title="Agriculture Census and Surveys"
                                                                   id="collection-agriculture-census-surveys">

                                                            Nutrition, Health, and Food Security
                                                            <span class="count">(423)</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check item-collection 8 item inactive">
                                                        <label class="form-check-label" for="collection-FISHERIES"
                                                               FISHERIES>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="FISHERIES"
                                                                   data-title="Fishery Surveys"
                                                                   id="collection-FISHERIES">

                                                            Poverty Reduction, Livelihood, and Jobs
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check item-collection 8 item inactive">
                                                        <label class="form-check-label" for="collection-FISHERIES"
                                                               FISHERIES>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="FISHERIES"
                                                                   data-title="Fishery Surveys"
                                                                   id="collection-FISHERIES">

                                                            Gender Equity, Youth, and Social Inclusion
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 8 item inactive">
                                                        <label class="form-check-label" for="collection-FISHERIES"
                                                               FISHERIES>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="FISHERIES"
                                                                   data-title="Fishery Surveys"
                                                                   id="collection-FISHERIES">

                                                            Climate Adaption and Mitigation
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check item-collection 8 item inactive">
                                                        <label class="form-check-label" for="collection-FISHERIES"
                                                               FISHERIES>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="FISHERIES"
                                                                   data-title="Fishery Surveys"
                                                                   id="collection-FISHERIES">

                                                            Environmental Health and Biodiversity
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div id="filter-by-dtype"
                                             class="sidebar-filter wb-ihsn-sidebar-filter filter-box filter-by-dtype ">

                                            <!-- Card Header / Toggle -->
                                            <h6 class="togglable">
                                                <div class="wb-filter-title collapsed" data-toggle="collapse"
                                                     href="#facet-dtype" role="button" aria-expanded="false"
                                                     aria-controls="facet-dtype">
                                                    <i class="fa fa-filter pr-2"></i>
                                                    <span class="text-capitalize">License</span>
                                                    <span class="float-right">
                                                        <i
                                                            class="icon-toggle icon-collapsed float-right fa fa-chevron-down"></i>
                                                        <i
                                                            class="icon-toggle icon-expanded float-right fa fa-chevron-up"></i>
                                                    </span>
                                                </div>

                                                <div class="wb-filter-subtitle clear-button-container clear-disabled">
                                                    <span><span class="selected-items"></span> selected </span>
                                                    <a
                                                        class="btn btn-link btn-sm rounded clear lnk-filter-reset">Clear</a>
                                                </div>
                                            </h6>


                                            <div id="facet-dtype"
                                                 class="sidebar-filter-entries collapse dtype-container items-container">
                                                <div class="items-container ">

                                                    <div class="form-check item-dtype 1 item inactive">
                                                        <label class="form-check-label" for="dtype-2" 2>
                                                            <input class="form-check-input chk chk-dtype"
                                                                   type="checkbox" name="dtype[]" value="2"
                                                                   data-title="Public use data files" id="dtype-2">

                                                            Public use data files
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-dtype 2 item inactive">
                                                        <label class="form-check-label" for="dtype-3" 3>
                                                            <input class="form-check-input chk chk-dtype"
                                                                   type="checkbox" name="dtype[]" value="3"
                                                                   data-title="Licensed data files" id="dtype-3">

                                                            Licensed data files
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-dtype 3 item inactive">
                                                        <label class="form-check-label" for="dtype-5" 5>
                                                            <input class="form-check-input chk chk-dtype"
                                                                   type="checkbox" name="dtype[]" value="5"
                                                                   data-title="Data available from external repository"
                                                                   id="dtype-5">

                                                            Data available from external repository
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-dtype 4 item inactive">
                                                        <label class="form-check-label" for="dtype-6" 6>
                                                            <input class="form-check-input chk chk-dtype"
                                                                   type="checkbox" name="dtype[]" value="6"
                                                                   data-title="Data not available" id="dtype-6">

                                                            Data not available
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>

                        </div>
                        <!-- end left side bar -->


                        <!-- listing page -->
                        <div class="col-lg-9 col-md-8">


                            <div id="search-result-container">


                                <div class="row mb-3">
                                    <div class="col-12 col-md-12 mt-2 mt-md-0 ">
                                        <div class="filter-action-bar row">

                                            <div class="search-count col-5 text-md-left mb-2 mb-md-0 pt-2">
                                                Showing <b>{{ $dataset->firstItem() }}-{{ $dataset->lastItem() }}</b> of <b>{{ $dataset->total() }}</b></div>

                                            <div class="col mt-1 wb-search-toggle">
                                                <div class="btn-group btn-group-toggle study-view-toggle">
                                                    <button type="button"
                                                            class="btn btn-sm btn-outline-primary rounded-left active toggle_view"
                                                            data-value="s">List view
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-sm btn-outline-secondary rounded-right toggle_view"
                                                            data-value="v"><a
                                                            href="{{ route('landing_page_grid') }}">Grid
                                                            view</a></button>
                                                </div>
                                            </div>


                                            <div class="col mt-1 wb-search-sort">
                                                <div class="form-inline float-right ">
                                                    <label for="sort-by-select" class="sort-by-label">
                                                        <span class="sort-by-title d-none d-sm-block"></span>
                                                        <select class="form-control form-control-sm sort-dropdown"
                                                                id="sort-by-select">
                                                            <option value="relevance" data-sort="desc">Relevance
                                                            </option>
                                                            <option value="popularity" data-sort="desc"
                                                                    selected="selected">Popularity
                                                            </option>
                                                            <option value="year" data-sort="desc">Year (Recent &uarr;)
                                                            </option>
                                                            <option value="year" data-sort="asc">Year (Oldest &darr;)
                                                            </option>
                                                            <option value="title" data-sort="asc">Title (A-Z)</option>
                                                            <option value="title" data-sort="desc">Title (Z-A)</option>
                                                            <option value="country" data-sort="asc">Country (A-Z)
                                                            </option>
                                                            <option value="country" data-sort="desc">Country (Z-A)
                                                            </option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="active-filters-container">

                                </div>


                                <hr/>


                                <input type="hidden" name="sort_by" id="sort_by" value="popularity"/>
                                <input type="hidden" name="sort_order" id="sort_order" value="desc"/>
                                <input type="hidden" name="ps" id="ps" value="15"/>
                                <input type="hidden" name="repo" id="repo" value=""/>
                                <input type="hidden" name="sid" id="sid" value=""/>


                                <div id="surveys">
                                    <span class="result-types-summary">
                                        <span class="type-summary" data-types='{&quot;survey&quot;:&quot;1314&quot;}'>
                                        </span>
                                    </span>
                                    @foreach ($dataset as $data)

                                        <div class="survey-row border-bottom pb-3 mb-2 "
                                             data-url="{{ route('bundle_detail', $data->id) }}">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="wb-card-title title">
                                                        <a href="{{ route('bundle_detail', $data->id) }}"
                                                           title="Comprehensive Food Security and Vulnerability Analysis and Nutrition Survey 2012"
                                                           class="d-flex">
                                                            <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                            <span>
                                                            {{ $data->title }} </span>
                                                        </a>
                                                    </h5>

                                                    <div class="study-country">
                                                        @if ($data->administrativeBoundaries->isNotEmpty())  {{ $data->administrativeBoundaries->pluck('country')->implode(', ') }} @else No Country Information @endif, {{$data-> release_year}}
                                                    </div>
                                                    <div class="sub-title">
                                                        <div>
                                                            @if ($data->providers->isNotEmpty())
                                                                <span class="study-by">
                                                                      {{ $data->providers->pluck('name')->implode(', ') }}
                                                                </span>
                                                            @else
                                                                No Providers Information
                                                            @endif
                                                        </div>


                                                        <span class="owner-collection collection-link mr-3">CGIAR Impact Area(s):
                                                        @foreach ($data->impactAreas as $impactArea)
                                                                <a href=""><span
                                                                        class="badge badge-light">{{ $impactArea->name }}</span></a>
                                                            @endforeach
                                                    </span>

                                                    </div>
                                                    <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">DOI:</span> <span
                                                            class="text-dark-doi wb-value">{{ $data->DOI }}</span>
                                                    </span>


                                                    </div>

                                                    <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span
                                                            class="">{{ $data->source }}</span>
                                                    </span>


                                                    </div>

                                                </div>

                                            </div>
                                        </div> <!-- /.    row -->
                                    @endforeach


                                </div>
                                <div class="nada-pagination border-top-none">
                                    <div class="row mt-3 mb-3 d-flex align-items-lg-center">

                                        <div class="col-12 col-md-3 col-lg-4 text-center text-md-left mb-2 mb-md-0">
                                            Showing <b>{{ $dataset->firstItem() }}-{{ $dataset->lastItem() }}</b> of <b>{{ $dataset->total() }}</b>
                                        </div>

                                        <div
                                            class="col-12 col-md-9 col-lg-8 d-flex justify-content-center justify-content-lg-end text-center">
                                            <nav aria-label="">
                                                <ul class="pagination pagination-circle">
                                                    <li class="page-item page-indicator">
                                                        <a class="page-link" href="{{ $dataset->previousPageUrl() }}" aria-label="Previous">
                                                            <i class="la la-angle-left"></i>
                                                        </a>
                                                    </li>

                                                    @php
                                                        $numPages = $dataset->lastPage();
                                                        $currentPage = $dataset->currentPage();
                                                        $maxPagesToShow = 5; // Change this to the desired number of pages to show
                                                        $halfMax = (int)($maxPagesToShow / 2);
                                                        $startPage = max(1, $currentPage - $halfMax);
                                                        $endPage = min($numPages, $startPage + $maxPagesToShow - 1);
                                                    @endphp

                                                    @if($startPage > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $dataset->url(1) }}">1</a>
                                                        </li>
                                                        @if($startPage > 2)
                                                            <li class="page-item disabled">
                                                                <span class="page-link">...</span>
                                                            </li>
                                                        @endif
                                                    @endif

                                                    @for ($i = $startPage; $i <= $endPage; $i++)
                                                        <li class="page-item {{ $dataset->currentPage() == $i ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $dataset->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor

                                                    @if($endPage < $numPages)
                                                        @if($endPage < $numPages - 1)
                                                            <li class="page-item disabled">
                                                                <span class="page-link">...</span>
                                                            </li>
                                                        @endif
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $dataset->url($numPages) }}">{{ $numPages }}</a>
                                                        </li>
                                                    @endif

                                                    <li class="page-item page-indicator">
                                                        <a class="page-link" href="{{ $dataset->nextPageUrl() }}" aria-label="Next">
                                                            <i class="la la-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>

                                <!-- set per page items size-->
                                <div id="items-per-page" class="items-per-page light switch-page-size">
                                    <small>
                                        Select number of records to show per page:
                                        <span class="nada-btn change-page-size" data-value="15">15</span>
                                        <span class="nada-btn change-page-size" data-value="30">30</span>
                                        <span class="nada-btn change-page-size" data-value="50">50</span>
                                        <span class="nada-btn change-page-size" data-value="100">100</span>
                                    </small>
                                </div>
                            </div>

                        </div>
                        <!-- end listing-->


                    </div>
                </form>

            </div>


            <!-- variable comparison -->
            <div class="variable-comparison-popup-backdrop wb-collapsed"></div>
            <div class="fixed-bottom variable-comparison-popup wb-collapsed" style="display:none;">

                <div class="container pt-2 mt-4 mb-3 d-none d-md-block">
                    <div class="row wb-var-panel">
                        <div class="col-12 wb-var-title">
                            <div class="align-middle mt-2">
                                Compare variables <span class="var-in-cart badge badge-light"></span>
                            </div>
                            <div>
                                <i class="fa fa-angle-up wb-var-handler-up"></i>
                                <i class="fa fa-angle-down wb-var-handler-down"></i>
                            </div>
                        </div>
                        <div class="col-12 var-list wb-var-body">

                            <!--<span class="var-box">
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <i class="fa fa-window-close faclose var-remove" aria-hidden="true"></i>
                </span>-->

                        </div>
                        <div class="col-12 wb-var-actions">
                            <div class="align-middle mt-2">
                                <button class="btn btn-link btn-sm rounded clear-variables">Clear</button>
                                <a target="_blank" class="btn btn-primary btn-sm rounded"
                                   href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end variable comparison -->


            <script>

            </script>
        </div>

    </div>

    <!-- page footer -->

    <!-- Footer -->

    <footer>


    </footer> <!-- End footer top section -->

    </body>

@endsection
