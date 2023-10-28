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
                            <a href="https://microdata.fao.org/index.php/" rel="v:url" property="v:title">Home</a> /

                        </span>
                        <span typeof="v:Breadcrumb">
                            <a class="active" href="https://microdata.fao.org/index.php/catalog" rel="v:url"
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
                                    <a href="https://microdata.fao.org/index.php/catalog/"
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
                    <input type="hidden" name="tab_type" id="tab_type" value="" />
                    <input type="hidden" name="page" id="page" value="1" />
                    <input type="hidden" name="view" id="view" value="" />
                    <input type="hidden" name="image_view" id="image_view" value="" />
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
                                                                    <option value=""> </option>
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
                                                                    <option value=""> </option>
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
                                                    <span class="text-capitalize">Collections</span>
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

                                                            Agriculture Census and Surveys
                                                            <span class="count">(423)</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check item-collection 8 item inactive">
                                                        <label class="form-check-label" for="collection-FISHERIES"
                                                               FISHERIES>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="FISHERIES"
                                                                   data-title="Fishery Surveys" id="collection-FISHERIES">

                                                            Fishery Surveys
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
                                                Showing <b>1-15</b> of <b>1,314</b> </div>

                                            <div class="col mt-1 wb-search-toggle">
                                                <div class="btn-group btn-group-toggle study-view-toggle">
                                                    <button type="button"
                                                            class="btn btn-sm btn-outline-primary rounded-left active toggle_view"
                                                            data-value="s">List view</button>
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
                                                                    selected="selected">Popularity</option>
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


                                <hr />


                                <input type="hidden" name="sort_by" id="sort_by" value="popularity" />
                                <input type="hidden" name="sort_order" id="sort_order" value="desc" />
                                <input type="hidden" name="ps" id="ps" value="15" />
                                <input type="hidden" name="repo" id="repo" value="" />
                                <input type="hidden" name="sid" id="sid" value="" />



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
                                                    RWANDA, {{$data-> release_year}}
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        @foreach ($data->providers as $provider)
                                                        <span class="study-by">{{ $provider->name }}</span>
                                                        @endforeach
                                                    </div>


                                                    <span class="owner-collection collection-link mr-3">Impact Areas:
                                                        @foreach ($data->impactAreas as $impactArea)
                                                        <a href=""><span class="badge badge-light">{{ $impactArea->name }}</span></a>
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
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">{{ $data->source }}</span>
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
                                            Showing <b>1-15</b> of <b>1,314</b> </div>

                                        <div class="col-12 col-md-9 col-lg-8 d-flex justify-content-center justify-content-lg-end text-center">
                                            <nav aria-label="">
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

                                <!-- TODO: Enable the tooltips in this page. Move it in a common place -->
                                <script type="text/javascript">
                                    $(function () {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })
                                </script>
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
                                   href="https://microdata.fao.org/index.php/catalog/compare">Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end variable comparison -->





            <script>
                //translations
                var i18n =
                    {
                        'searching': "Searching, please wait...",
                        'loading': "Loading, please wait...",
                        'invalid_year_range_selected': "Invalid year range selected.",
                        'topic_selected': "topic selected",
                        'topics_selected': "topics selected",
                        'collection_selected': "collection selected",
                        'collections_selected': "collections selected",
                        'country_selected': "country selected",
                        'countries_selected': "countries selected",
                        'cancel': "Cancel",
                        'apply_filter': "Apply filter",
                        'clear': "Clear",
                        'js_compare_variables_selected': "variables selected from",
                        'js_compare_studies_selected': "studies",
                        'js_compare_variable_select_atleast_2': "Select two or more variables to compare",
                        'js_compare_variable_max_limit': "You have selected the maximum variables to compare",
                        'selected': "selected"
                    };

                $(".variable-comparison-popup .wb-var-title").click(function () {
                    $(".variable-comparison-popup").toggleClass("wb-collapsed");
                });

                //cookie helper functions
                //source: http://www.quirksmode.org/js/cookies.html
                function createCookie(name, value, days) {
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        var expires = "; expires=" + date.toGMTString();
                    }
                    else var expires = "";
                    document.cookie = name + "=" + value + expires + "; path=/";
                }

                function readCookie(name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                    }
                    return null;
                }

                function eraseCookie(name) {
                    createCookie(name, "", -1);
                }

                function compare_var_summary() {
                    var sel_items = readCookie("variable-compare");

                    if (sel_items == null || sel_items == '') {
                        sel_items = Array();
                    }
                    else {
                        sel_items = sel_items.split(",");
                    }

                    //get unique study count
                    var studies = [];
                    for (var i = 0; i < sel_items.length; i++) {
                        if (sel_items[i].indexOf("/") !== -1) {
                            var item = sel_items[i].split("/");
                            if ($.inArray(item[0], studies) == -1) {
                                studies.push(item[0]);
                            }
                        }
                    }//end-for

                    if (sel_items.length == 0) {
                        $(".variables-found .var-compare-summary").html(i18n.js_compare_variable_select_atleast_2);
                    }
                    else {
                        $(".variables-found .var-compare-summary").html(sel_items.length + " " + i18n.js_compare_variables_selected + " " + studies.length + " " + i18n.js_compare_studies_selected);
                    }
                }


                function get_selected_variables() {
                    var sel_items = readCookie("variable-compare");

                    if (sel_items == null || sel_items == '') {
                        sel_items = Array();
                    }
                    else {
                        sel_items = sel_items.split(",");
                    }

                    return sel_items;
                }

                function update_compare_variable_list(action, value) {
                    var sel_items = readCookie("variable-compare");

                    if (sel_items == null || sel_items == '') {
                        sel_items = Array();
                    }
                    else {
                        sel_items = sel_items.split(",");
                    }

                    switch (action) {
                        case 'add':
                            if (sel_items.length > 9) {
                                alert(i18n.js_compare_variable_max_limit);
                                return false;
                            }
                            if ($.inArray(value, sel_items) == -1) {
                                sel_items.push(value);
                            }
                            break;

                        case 'remove':
                            var index_matched = $.inArray(value, sel_items);
                            if (index_matched > -1) {
                                sel_items.splice(index_matched, 1);
                            }
                            break;

                        case 'remove-all':
                            eraseCookie("variable-compare"); return;
                            break;
                    }

                    //update cookie
                    createCookie("variable-compare", sel_items, 1);
                }

                //toggle compare variable popup
                function compare_variable_popup_toggle() {
                    vars = get_selected_variables();
                    if (vars.length > 0) {
                        $(".variable-comparison-popup").show();
                    } else {
                        $(".variable-comparison-popup").hide();
                    }
                }

                //create variable item
                function compare_variable_popup_update() {

                    vars = get_selected_variables();


                    $(".variable-comparison-popup .var-list").html("Loading...");

                    $.get(CI.base_url + '/catalog/variable_cart', function (data) {
                        console.log(data);
                        $(".variable-comparison-popup .var-list").html("");


                        if(data.length<1){
                            update_compare_variable_list("remove-all");
                            compare_variable_popup_toggle();
                        }

                        for(var i=0;i < data.length;i++) {
                            var row=data[i];
                            var url=encodeURI(CI.base_url + '/catalog/' + row['sid'] + '/variable/' + row['vid']);

                            var html =`< div class="var-box" id = "var-${row['sid']}__data['vid']" data - value="${row['sid']}/${row['vid']}" >
                    < !--< a target = "_blank" href = "${url}" > <i class="fa fa-address-card" aria-hidden="true"></i></a > -->
                    <a class="text-white font-weight-bold var-name dlg link" target="_blank" data-url="${url}" href="${url}">${row['name']}</a>
                    <div class="text-light var-description">${row['idno']}</div>
                    <i class="fa fa-times faclose var-remove" aria-hidden="true" data-value="${row['sid']}/${row['vid']}"></i>
                </div >`;

                            $(".variable-comparison-popup .var-list").append(html);
                        }

                        $(".variable-comparison-popup .var-in-cart").html(data.length);
                    })
                        .fail(function() {
                            console.log("error");
                        })


                }

                //remove all variables
                function compare_variable_clear(){
                    eraseCookie("variable-compare");
                    compare_variable_popup_update();
                    compare_variable_popup_toggle();
                    return;
                }

                function compare_variable_refresh_selection(){
                    vars=get_selected_variables();
                    //uncheck all
                    $(".compare").prop( "checked", false );

                    //check selected only
                    for(var i=0;i < vars.length;i++) {
                        $(".compare[value='"+vars[i]+"']").prop("checked",true);
                    }

                    compare_variable_popup_update();
                }


                //update selected variables on page/tab changes
                $(document).on('visibilitychange', function() {

                    if(document.visibilityState == 'visible') {
                        compare_variable_refresh_selection();
                    }
                });

                $(document).ready(function(){
                    compare_variable_popup_update();
                    compare_variable_popup_toggle();
                });

                function toggle_clear(el){

                    console.log($(el).closest(".items-container").find(".chk:checked").length);

                    if ($(el).closest(".items-container").find(".chk:checked").length >0){
                        $(el).closest(".sidebar-filter").find(".clear-button-container").removeClass("clear-disabled").addClass("clear-enabled");
                        $(el).closest(".sidebar-filter").find(".clear-button-container").find(".selected-items").text($(el).closest(".items-container").find(".chk:checked").length);
                    }else{
                        $(el).closest(".sidebar-filter").find(".clear-button-container").removeClass("clear-enabled").addClass("clear-disabled");
                    }
                }

                function init_facet_stats(el){
                    let selected_items=$(el).find(".items-container").find(".chk:checked").length;
                    let total_items=$(el).find(".items-container").find(".chk").length;

                    if (selected_items >0){
                        $(el).closest(".sidebar-filter").find(".clear-button-container").removeClass("clear-disabled").addClass("clear-enabled");
                        $(el).closest(".sidebar-filter").find(".clear-button-container").find(".selected-items").text(selected_items);
                        $(el).closest(".sidebar-filter").find(".clear-button-container").find(".total-items").text(total_items);
                    }else{
                        $(el).closest(".sidebar-filter").find(".clear-button-container").removeClass("clear-enabled").addClass("clear-disabled");
                    }
                }

                //toggle checkboxes on page load
                function refresh_facet_options(){
                    jQuery.each($(".sidebar-filter"), function( i, el ) {
                        init_facet_stats($(el));
                    });
                }

                $(function() {
                    refresh_facet_options();
                });


                //clear variable selection
                $(document.body).on("click",".clear-variables", function(){
                    compare_variable_clear();
                    compare_variable_refresh_selection();
                    return false;
                });

                $(document.body).on("click",".var-remove", function(e){
                    let id=$(this).attr('data-value');
                    $(".compare[value='"+id+"']").trigger("click");
                    update_compare_variable_list("remove",id);
                    compare_variable_refresh_selection();
                    return false;
                });


                $(document).ready(function() {
                    var page_first_load=true;
                    toggle_reset_search_button();
                    var State=History.getState();

                    if(!State.data.page_state_data){
                        page_first_load=false;
                        let search_state=serialize_form();
                        let page_state_data={
                            'search_options': $("#catalog-search-form").serializeArray(),
                            'search_results': null
                        };
                        History.replaceState({state:search_state,page_state_data}, document.title, "?"+search_state);
                    }else{
                        load_current_state();
                        toggle_reset_search_button();
                    }


                    function reset_page(){
                        $("#page").val(1);
                    }

                    //submit search form
                    $(document.body).on("click","#submit_search", function(){
                        $("#sort_by").val("");
                        reset_page();
                        change_state();
                        return false;
                    });


                    //change page size
                    $(document.body).on("click",".change-page-size", function(){
                        ps=$(this).attr("data-value");
                        console.log(ps);
                        $("#page").val(1);
                        $("#ps").val(ps);
                        change_state();
                    });



                    $(document.body).on("click",".remove-filter", function(){

                        name=$(this).attr("data-type");
                        value=$(this).attr("data-value");

                        el_name="[name='" + name + "']," + "[name='" + name + "[]']";
                        elements=$(el_name);

                        console.log(elements);

                        if (name=="sid"){
                            $("#sid").val("");
                        }

                        if (name=='years'){
                            $("#from").val("");
                            $("#to").val("");
                        }

                        if (elements.length>0){
                            if (elements.prop("type")=='checkbox'){
                                named_el=$("[name='" + name + "'][value='"+value+"']");
                                console.log(named_el);
                                named_el.trigger('click');
                                console.log(named_el);
                            }
                            else if(elements.prop("type")=='text' || elements.prop("tagName").toLowerCase()=='select'){
                                elements.prop("value",'');
                            }
                        }


                        $(this).hide();
                        change_state();

                    });


                    function search(){
                        search_state=$("#catalog-search-form").serialize();
                        $( "#search-result-container" ).html('Loading, please wait...');

                        $.get('https://microdata.fao.org/index.php/catalog/search?'+search_state, function( data ) {
                            $( "#search-result-container" ).html( data );
                            let page_state_data={
                                'search_options': $("#catalog-search-form").serializeArray(),
                                'search_results': null
                            };

                            //reset nav-tabs
                            $(".dataset-type-tab").find(".type-count").html("0");

                            //update nav-tabs
                            let types_summary=$(".type-summary").attr("data-types");

                            if(types_summary){
                                types_summary=JSON.parse(types_summary);
                                jQuery.each(types_summary, function(data_type, counts ) {
                                    $(".dataset-type-tab-"+data_type).find(".type-count").html(parseInt(counts).toLocaleString());
                                });
                            }

                        });
                    }


                    //call this for search
                    function change_state(){
                        console.log("change_state called");
                        let search_state=serialize_form(); //don't include empty elements
                        let page_state_data={
                            'search_options': $("#catalog-search-form").serializeArray(),
                            'search_results': null
                        };

                        History.pushState({state:search_state,page_state_data}, document.title + '/search - ' + search_state, "?"+search_state);
                    }

                    function serialize_form(){
                        return  $("#catalog-search-form :input").filter(function(index, element) {
                            return $(element).val() != '';
                        }).serialize();
                    }


                    //sort dropdown
                    $(document.body).on("change","#sort-by-select", function(){
                        let sort_order=$(this).find(':selected').data('sort');
                        let sort_by=$(this).val();
                        $("#sort_by").val(sort_by);
                        $("#sort_order").val(sort_order);
                        change_state();
                    });

                    $(document.body).on("click",".dataset-type-tab", function(){
                        $( ".chk-type").prop("checked",false);
                        el=$("[name='type[]'][value='"+ $(this).attr("data-value") +"']");
                        el.prop("checked",true);
                        reset_page();
                        $( "#tab_type" ).val($(this).attr("data-value"));
                        window.location.href='https://microdata.fao.org/index.php/catalog/?'+serialize_form();
                        return false;
                    });

                    //pagination link
                    $(document.body).on("click",".pagination .page-link", function(){
                        $( "#page" ).val($(this).attr("data-page"));
                        change_state();
                        return false;
                    });

                    //check/select filter
                    $(document.body).on("change",".filters-container .chk, .filters-container select", function(){
                        reset_page();
                        change_state();
                        toggle_clear(this);
                    });

                    //clear filter
                    $(document.body).on("click",".filters-container .lnk-filter-reset", function(){
                        $(this).closest(".filter-box").find(".chk").prop("checked",false);
                        change_state();
                        toggle_clear(this);
                    });

                    $(document.body).on("keypress",".search-keywords", function(e){
                        var code = e.keyCode;
                        toggle_reset_search_button();
                        if(code==13){
                            $('#submit_search').trigger("click");
                            return false;
                        }
                    });



                    History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
                        var State = History.getState(); // Note: We are using History.getState() instead of event.state
                        //$( "#catalog-search-form" ).html( State.data.data );
                        window.data=State.data;
                        console.log("loading state");
                        console.log(State);
                        //$( "#search-result-container" ).html(State.data.search_results);

                        load_current_state();
                    });



                    function load_current_state(){
                        if(page_first_load==true){
                            page_first_load=false;
                            return;
                        }

                        var State=History.getState();

                        if(!State.data.page_state_data){
                            return false;
                        }

                        reset_all_filters();
                        jQuery.each(State.data.page_state_data.search_options, function( i, field ) {
                            elements=$("[name='" + field.name + "']");

                            if (elements.prop("type")=='checkbox'){
                                named_el=$("[name='" + field.name + "'][value='"+field.value+"']");
                                named_el.prop("checked",true);
                            }
                            else if(elements.prop("type")=='text' || elements.prop("tagName").toLowerCase()=='select'){
                                elements.prop("value",field.value);
                            }
                        });

                        //only time search function should be called
                        search();
                    }


                    function reset_all_filters(){
                        //uncheck all checkboxes
                        $(".filters-container .chk").prop("checked",false);

                        //reset  select
                        $(".filter-container .form-control").prop("value",'');
                    }

                    function toggle_reset_search_button(){
                        if (!$("#search-keywords").val()){
                            $(".clear-search-button").hide();
                        }
                        else{
                            $(".clear-search-button").show();
                        }
                    }


                    //show/hide study sub-variable search
                    $(document.body).on("click",".vsearch", function(event){
                        event.stopPropagation();
                        $(this).parent().toggleClass("expand");
                        var result=$(this).parent().find(".vsearch-result");
                        if (result.html()!='' ){
                            result.empty().hide();
                        }
                        else{
                            result.show().html('<span class="fa fa-circle-o-notch fa-spin fa-2x text-primary"></span><span>Loading</span>').load($(this).prop("href"), function(data){

                                //attach compare handlers
                                //variable_compare_handlers();
                            });
                            //result.parent().find(".open-close").prop("src",'images/arrow_down.gif');
                        }
                        //compare_var_summary();
                        return false;
                    })


                    //show variable details in a modal dialog
                    $(document.body).on("click",".variable-list .vrow .link", function(event){
                        event.stopPropagation();

                        var vrow=$(this).closest(".vrow");
                        var target='';
                        if(typeof $(vrow).attr("data-url-target") != 'undefined'){
                            target=$(vrow).attr("data-url-target");
                        }
                        if(target==''){
                            window.location=$(vrow).attr("data-url");
                        }
                        else{
                            window.simple_dialog("dialog_id",$(vrow).attr("data-title"),$(vrow).attr("data-url"));return false;
                        }
                    });

                    //variable info for compare variable
                    $(document.body).on("click",".var-box .var-name", function(event){
                        event.stopPropagation();
                        window.simple_dialog("dialog_id",$(this).text(),$(this).attr("href"));return false;
                    });



                    /////////////////////////////////////////////////////////////////////////////////////////////
                    // simple dialog
                    /////////////////////////////////////////////////////////////////////////////////////////////
                    window.simple_dialog=function simple_dialog(dialog_id,title,data_url){
                        if($("#"+dialog_id).length ==0) {
                            $("body").append('<div class="modal fade" id="'+dialog_id+'" tabindex="-1" role="dialog"  aria-hidden="true">\
                <div class="modal-dialog  modal-lg catalog-modal-dialog" role="document">\
                <div class="modal-content">\
                <div class="modal-header">\
                <h5 class="modal-title" id="'+dialog_id+'Label">'+title+'</h5>\
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">\
						<span aria-hidden="true">&times;</span>\
					</button>\
					</div>\
					<div class="modal-body">\
				</div>\
					<div class="modal-footer">\
						<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>\
					</div>\
					</div>\
					</div>\
					</div>');
                        }
                        else
                        {
                            /********* for jQuery ui modal *******/
                            /*dialog=	$("#"+dialog_id);
                            dialog.html("loading...");
                            dialog.dialog({ title: title});*/

                            /********* for Bootstrap modal *********/
                            $('#'+dialog_id+' h5.modal-title').html(title);
                            $('#'+dialog_id+' div.modal-body').html("loading...");
                        }

                        // for jQuery ui modal
                        /*
                        dialog.dialog( "open" ); // for jQuery ui modal
                        //$('#'+dialog_id).load(data_url+'?ajax=1');//load content
                        */

                        // for Bootstrap modal
                        $('#'+dialog_id).modal('show');// for Bootstrap modal
                        $('#'+dialog_id+' div.modal-body').load(data_url+'?ajax=1');//load content
                    }//end function




                    //compare checkbox click

                    //compare button
                    $(document.body).on("click",".btn-compare-var", function(event){
                        event.stopPropagation();
                        var sel_items=readCookie("variable-compare");

                        if(sel_items==null){
                            sel_items=Array();
                        }
                        else{
                            sel_items=sel_items.split(",");
                        }
                        if(sel_items.length>1){
                            window.open(CI.base_url+'/catalog/compare','compare');
                        }
                        else{
                            alert(i18n.js_compare_variable_select_atleast_2);return false;
                        }
                        return false;
                    });


                    $(document.body).on("click",".compare", function(event){
                        var sel_items=readCookie("variable-compare");

                        if(sel_items==null){
                            sel_items=Array();
                        }
                        else{
                            sel_items=sel_items.split(",");
                        }

                        if ($(this).prop("checked")){
                            update_compare_variable_list('add',$(this).val());
                        }
                        else{
                            update_compare_variable_list('remove',$(this).val());
                        }

                        compare_var_summary();
                        compare_variable_popup_update();
                        compare_variable_popup_toggle();
                    });



                    //disable even propogations for compare link
                    $(document.body).on("click",".var-quick-list .compare-variable", function(event){
                        event.stopPropagation();
                    });

                    //search facet options
                    $(document.body).on("keyup",".facet-filter-values", function(event){
                        var keywords=$(this).val().toLowerCase();
                        if (keywords.length>0){
                            console.log("showing...");
                            $(this).parent().find(".facet-filter-values-clear").show();
                        }else{
                            console.log("hiding...");
                            $(this).parent().find(".facet-filter-values-clear").hide();
                        }
                        $(this).closest(".items-container").find(".chk").each(function(){
                            if ($(this).data("title").toLowerCase().indexOf(keywords) >-1){
                                $(this).parent().show();
                            }else{
                                $(this).parent().hide();
                            }
                        });
                    });

                    //facet search clear button
                    $(document.body).on("click",".facet-filter-values-clear", function(event){
                        $(this).parent().parent().find('.facet-filter-values').val("").trigger('keyup');
                    });



                });

            </script>
        </div>

    </div>

    <!-- page footer -->

    <!-- Footer -->

    <footer>


    </footer> <!-- End footer top section -->

    </body>

@endsection
