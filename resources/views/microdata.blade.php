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



            <!--  /***** Login Bar Start *****/ -->
            <div>


            </div>
            <!-- /row -->
            <!--  /***** Login Bar Close *****/ -->
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md wb-navbar ">

                        <div class="navbar-brand navbar-expand-md">
                            <div class="navbar-brand--sitename navbar-expand-md">
                            </div>
                        </div>



                    </nav>

                </div>

            </div>
            <!-- /row -->

        </div>

    </header>


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
                                                    <div class="form-check item-country 2 item inactive">
                                                        <label class="form-check-label" for="country-2" 2>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="2"
                                                                   data-title="Albania" id="country-2">

                                                            Albania
                                                            <span class="count">(13)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 3 item inactive">
                                                        <label class="form-check-label" for="country-4" 4>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="4"
                                                                   data-title="Algeria" id="country-4">

                                                            Algeria
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 4 item inactive">
                                                        <label class="form-check-label" for="country-5" 5>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="5"
                                                                   data-title="American Samoa" id="country-5">

                                                            American Samoa
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 5 item inactive">
                                                        <label class="form-check-label" for="country-7" 7>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="7"
                                                                   data-title="Angola" id="country-7">

                                                            Angola
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 6 item inactive">
                                                        <label class="form-check-label" for="country-8" 8>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="8"
                                                                   data-title="Antigua and Barbuda" id="country-8">

                                                            Antigua and Barbuda
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 7 item inactive">
                                                        <label class="form-check-label" for="country-10" 10>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="10"
                                                                   data-title="Argentina" id="country-10">

                                                            Argentina
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 8 item inactive">
                                                        <label class="form-check-label" for="country-16" 16>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="16"
                                                                   data-title="Armenia" id="country-16">

                                                            Armenia
                                                            <span class="count">(25)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 9 item inactive">
                                                        <label class="form-check-label" for="country-11" 11>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="11"
                                                                   data-title="Australia" id="country-11">

                                                            Australia
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 10 item inactive">
                                                        <label class="form-check-label" for="country-12" 12>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="12"
                                                                   data-title="Austria" id="country-12">

                                                            Austria
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 11 item inactive">
                                                        <label class="form-check-label" for="country-9" 9>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="9"
                                                                   data-title="Azerbaijan" id="country-9">

                                                            Azerbaijan
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 12 item inactive">
                                                        <label class="form-check-label" for="country-13" 13>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="13"
                                                                   data-title="Bahamas" id="country-13">

                                                            Bahamas
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 13 item inactive">
                                                        <label class="form-check-label" for="country-15" 15>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="15"
                                                                   data-title="Bangladesh" id="country-15">

                                                            Bangladesh
                                                            <span class="count">(17)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 14 item inactive">
                                                        <label class="form-check-label" for="country-17" 17>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="17"
                                                                   data-title="Barbados" id="country-17">

                                                            Barbados
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 15 item inactive">
                                                        <label class="form-check-label" for="country-18" 18>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="18"
                                                                   data-title="Belgium" id="country-18">

                                                            Belgium
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 16 item inactive">
                                                        <label class="form-check-label" for="country-26" 26>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="26"
                                                                   data-title="Belize" id="country-26">

                                                            Belize
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 17 item inactive">
                                                        <label class="form-check-label" for="country-59" 59>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="59"
                                                                   data-title="Benin" id="country-59">

                                                            Benin
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 18 item inactive">
                                                        <label class="form-check-label" for="country-20" 20>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="20"
                                                                   data-title="Bhutan" id="country-20">

                                                            Bhutan
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 19 item inactive">
                                                        <label class="form-check-label" for="country-21" 21>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="21"
                                                                   data-title="Bolivia (Plurinational State of)"
                                                                   id="country-21">

                                                            Bolivia (Plurinational State of)
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 20 item inactive">
                                                        <label class="form-check-label" for="country-22" 22>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="22"
                                                                   data-title="Bosnia and Herzegovina" id="country-22">

                                                            Bosnia and Herzegovina
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 21 item inactive">
                                                        <label class="form-check-label" for="country-23" 23>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="23"
                                                                   data-title="Botswana" id="country-23">

                                                            Botswana
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 22 item inactive">
                                                        <label class="form-check-label" for="country-25" 25>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="25"
                                                                   data-title="Brazil" id="country-25">

                                                            Brazil
                                                            <span class="count">(15)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 23 item inactive">
                                                        <label class="form-check-label" for="country-31" 31>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="31"
                                                                   data-title="Bulgaria" id="country-31">

                                                            Bulgaria
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 24 item inactive">
                                                        <label class="form-check-label" for="country-230" 230>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="230"
                                                                   data-title="Burkina Faso" id="country-230">

                                                            Burkina Faso
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 25 item inactive">
                                                        <label class="form-check-label" for="country-38" 38>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="38"
                                                                   data-title="Cabo Verde" id="country-38">

                                                            Cabo Verde
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 26 item inactive">
                                                        <label class="form-check-label" for="country-35" 35>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="35"
                                                                   data-title="Cambodia" id="country-35">

                                                            Cambodia
                                                            <span class="count">(17)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 27 item inactive">
                                                        <label class="form-check-label" for="country-36" 36>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="36"
                                                                   data-title="Cameroon" id="country-36">

                                                            Cameroon
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 28 item inactive">
                                                        <label class="form-check-label" for="country-37" 37>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="37"
                                                                   data-title="Canada" id="country-37">

                                                            Canada
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 29 item inactive">
                                                        <label class="form-check-label" for="country-40" 40>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="40"
                                                                   data-title="Central African Republic" id="country-40">

                                                            Central African Republic
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 30 item inactive">
                                                        <label class="form-check-label" for="country-42" 42>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="42"
                                                                   data-title="Chad" id="country-42">

                                                            Chad
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 31 item inactive">
                                                        <label class="form-check-label" for="country-43" 43>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="43"
                                                                   data-title="Chile" id="country-43">

                                                            Chile
                                                            <span class="count">(5)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 32 item inactive">
                                                        <label class="form-check-label" for="country-44" 44>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="44"
                                                                   data-title="China" id="country-44">

                                                            China
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 33 item inactive">
                                                        <label class="form-check-label" for="country-48" 48>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="48"
                                                                   data-title="Colombia" id="country-48">

                                                            Colombia
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 34 item inactive">
                                                        <label class="form-check-label" for="country-49" 49>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="49"
                                                                   data-title="Comoros" id="country-49">

                                                            Comoros
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 35 item inactive">
                                                        <label class="form-check-label" for="country-51" 51>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="51"
                                                                   data-title="Congo" id="country-51">

                                                            Congo
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 36 item inactive">
                                                        <label class="form-check-label" for="country-53" 53>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="53"
                                                                   data-title="Cook Islands" id="country-53">

                                                            Cook Islands
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 37 item inactive">
                                                        <label class="form-check-label" for="country-54" 54>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="54"
                                                                   data-title="Costa Rica" id="country-54">

                                                            Costa Rica
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 38 item inactive">
                                                        <label class="form-check-label" for="country-109" 109>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="109"
                                                                   data-title="Côte d&#039;Ivoire" id="country-109">

                                                            Côte d'Ivoire
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 39 item inactive">
                                                        <label class="form-check-label" for="country-55" 55>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="55"
                                                                   data-title="Croatia" id="country-55">

                                                            Croatia
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 40 item inactive">
                                                        <label class="form-check-label" for="country-57" 57>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="57"
                                                                   data-title="Cyprus" id="country-57">

                                                            Cyprus
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 41 item inactive">
                                                        <label class="form-check-label" for="country-58" 58>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="58"
                                                                   data-title="Czechia" id="country-58">

                                                            Czechia
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 42 item inactive">
                                                        <label class="form-check-label" for="country-52" 52>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="52"
                                                                   data-title="Democratic Republic of the Congo"
                                                                   id="country-52">

                                                            Democratic Republic of the Congo
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 43 item inactive">
                                                        <label class="form-check-label" for="country-60" 60>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="60"
                                                                   data-title="Denmark" id="country-60">

                                                            Denmark
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 44 item inactive">
                                                        <label class="form-check-label" for="country-79" 79>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="79"
                                                                   data-title="Djibouti" id="country-79">

                                                            Djibouti
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 45 item inactive">
                                                        <label class="form-check-label" for="country-63" 63>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="63"
                                                                   data-title="Ecuador" id="country-63">

                                                            Ecuador
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 46 item inactive">
                                                        <label class="form-check-label" for="country-225" 225>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="225"
                                                                   data-title="Egypt" id="country-225">

                                                            Egypt
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 47 item inactive">
                                                        <label class="form-check-label" for="country-64" 64>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="64"
                                                                   data-title="El Salvador" id="country-64">

                                                            El Salvador
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 48 item inactive">
                                                        <label class="form-check-label" for="country-65" 65>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="65"
                                                                   data-title="Equatorial Guinea" id="country-65">

                                                            Equatorial Guinea
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 49 item inactive">
                                                        <label class="form-check-label" for="country-68" 68>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="68"
                                                                   data-title="Estonia" id="country-68">

                                                            Estonia
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 50 item inactive">
                                                        <label class="form-check-label" for="country-206" 206>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="206"
                                                                   data-title="Eswatini" id="country-206">

                                                            Eswatini
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 51 item inactive">
                                                        <label class="form-check-label" for="country-66" 66>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="66"
                                                                   data-title="Ethiopia" id="country-66">

                                                            Ethiopia
                                                            <span class="count">(20)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 52 item inactive">
                                                        <label class="form-check-label" for="country-72" 72>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="72"
                                                                   data-title="Fiji" id="country-72">

                                                            Fiji
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 53 item inactive">
                                                        <label class="form-check-label" for="country-73" 73>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="73"
                                                                   data-title="Finland" id="country-73">

                                                            Finland
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 54 item inactive">
                                                        <label class="form-check-label" for="country-75" 75>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="75"
                                                                   data-title="France" id="country-75">

                                                            France
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 55 item inactive">
                                                        <label class="form-check-label" for="country-76" 76>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="76"
                                                                   data-title="French Guiana" id="country-76">

                                                            French Guiana
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 56 item inactive">
                                                        <label class="form-check-label" for="country-77" 77>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="77"
                                                                   data-title="French Polynesia" id="country-77">

                                                            French Polynesia
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 57 item inactive">
                                                        <label class="form-check-label" for="country-82" 82>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="82"
                                                                   data-title="Gambia" id="country-82">

                                                            Gambia
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 58 item inactive">
                                                        <label class="form-check-label" for="country-81" 81>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="81"
                                                                   data-title="Georgia" id="country-81">

                                                            Georgia
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 59 item inactive">
                                                        <label class="form-check-label" for="country-84" 84>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="84"
                                                                   data-title="Germany" id="country-84">

                                                            Germany
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 60 item inactive">
                                                        <label class="form-check-label" for="country-85" 85>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="85"
                                                                   data-title="Ghana" id="country-85">

                                                            Ghana
                                                            <span class="count">(15)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 61 item inactive">
                                                        <label class="form-check-label" for="country-88" 88>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="88"
                                                                   data-title="Greece" id="country-88">

                                                            Greece
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 62 item inactive">
                                                        <label class="form-check-label" for="country-90" 90>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="90"
                                                                   data-title="Grenada" id="country-90">

                                                            Grenada
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 63 item inactive">
                                                        <label class="form-check-label" for="country-91" 91>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="91"
                                                                   data-title="Guadeloupe" id="country-91">

                                                            Guadeloupe
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 64 item inactive">
                                                        <label class="form-check-label" for="country-92" 92>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="92"
                                                                   data-title="Guam" id="country-92">

                                                            Guam
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 65 item inactive">
                                                        <label class="form-check-label" for="country-93" 93>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="93"
                                                                   data-title="Guatemala" id="country-93">

                                                            Guatemala
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 66 item inactive">
                                                        <label class="form-check-label" for="country-94" 94>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="94"
                                                                   data-title="Guinea" id="country-94">

                                                            Guinea
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 67 item inactive">
                                                        <label class="form-check-label" for="country-175" 175>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="175"
                                                                   data-title="Guinea-Bissau" id="country-175">

                                                            Guinea-Bissau
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 68 item inactive">
                                                        <label class="form-check-label" for="country-96" 96>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="96"
                                                                   data-title="Haiti" id="country-96">

                                                            Haiti
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 69 item inactive">
                                                        <label class="form-check-label" for="country-99" 99>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="99"
                                                                   data-title="Honduras" id="country-99">

                                                            Honduras
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 70 item inactive">
                                                        <label class="form-check-label" for="country-100" 100>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="100"
                                                                   data-title="Hungary" id="country-100">

                                                            Hungary
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 71 item inactive">
                                                        <label class="form-check-label" for="country-101" 101>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="101"
                                                                   data-title="Iceland" id="country-101">

                                                            Iceland
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 72 item inactive">
                                                        <label class="form-check-label" for="country-102" 102>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="102"
                                                                   data-title="India" id="country-102">

                                                            India
                                                            <span class="count">(14)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 73 item inactive">
                                                        <label class="form-check-label" for="country-103" 103>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="103"
                                                                   data-title="Indonesia" id="country-103">

                                                            Indonesia
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 74 item inactive">
                                                        <label class="form-check-label" for="country-104" 104>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="104"
                                                                   data-title="Iran (Islamic Republic of)"
                                                                   id="country-104">

                                                            Iran (Islamic Republic of)
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 75 item inactive">
                                                        <label class="form-check-label" for="country-105" 105>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="105"
                                                                   data-title="Iraq" id="country-105">

                                                            Iraq
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 76 item inactive">
                                                        <label class="form-check-label" for="country-106" 106>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="106"
                                                                   data-title="Ireland" id="country-106">

                                                            Ireland
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 77 item inactive">
                                                        <label class="form-check-label" for="country-107" 107>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="107"
                                                                   data-title="Israel" id="country-107">

                                                            Israel
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 78 item inactive">
                                                        <label class="form-check-label" for="country-108" 108>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="108"
                                                                   data-title="Italy" id="country-108">

                                                            Italy
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 79 item inactive">
                                                        <label class="form-check-label" for="country-110" 110>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="110"
                                                                   data-title="Jamaica" id="country-110">

                                                            Jamaica
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 80 item inactive">
                                                        <label class="form-check-label" for="country-111" 111>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="111"
                                                                   data-title="Japan" id="country-111">

                                                            Japan
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 81 item inactive">
                                                        <label class="form-check-label" for="country-113" 113>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="113"
                                                                   data-title="Jordan" id="country-113">

                                                            Jordan
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 82 item inactive">
                                                        <label class="form-check-label" for="country-112" 112>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="112"
                                                                   data-title="Kazakhstan" id="country-112">

                                                            Kazakhstan
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 83 item inactive">
                                                        <label class="form-check-label" for="country-114" 114>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="114"
                                                                   data-title="Kenya" id="country-114">

                                                            Kenya
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 84 item inactive">
                                                        <label class="form-check-label" for="country-87" 87>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="87"
                                                                   data-title="Kiribati" id="country-87">

                                                            Kiribati
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 85 item inactive">
                                                        <label class="form-check-label" for="country-117" 117>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="117"
                                                                   data-title="Kuwait" id="country-117">

                                                            Kuwait
                                                            <span class="count">(5)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 86 item inactive">
                                                        <label class="form-check-label" for="country-118" 118>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="118"
                                                                   data-title="Kyrgyzstan" id="country-118">

                                                            Kyrgyzstan
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 87 item inactive">
                                                        <label class="form-check-label" for="country-119" 119>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="119"
                                                                   data-title="Lao People&#039;s Democratic Republic"
                                                                   id="country-119">

                                                            Lao People's Democratic Republic
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 88 item inactive">
                                                        <label class="form-check-label" for="country-122" 122>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="122"
                                                                   data-title="Latvia" id="country-122">

                                                            Latvia
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 89 item inactive">
                                                        <label class="form-check-label" for="country-120" 120>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="120"
                                                                   data-title="Lebanon" id="country-120">

                                                            Lebanon
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 90 item inactive">
                                                        <label class="form-check-label" for="country-121" 121>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="121"
                                                                   data-title="Lesotho" id="country-121">

                                                            Lesotho
                                                            <span class="count">(5)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 91 item inactive">
                                                        <label class="form-check-label" for="country-123" 123>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="123"
                                                                   data-title="Liberia" id="country-123">

                                                            Liberia
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 92 item inactive">
                                                        <label class="form-check-label" for="country-124" 124>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="124"
                                                                   data-title="Libya" id="country-124">

                                                            Libya
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 93 item inactive">
                                                        <label class="form-check-label" for="country-126" 126>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="126"
                                                                   data-title="Lithuania" id="country-126">

                                                            Lithuania
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 94 item inactive">
                                                        <label class="form-check-label" for="country-127" 127>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="127"
                                                                   data-title="Luxembourg" id="country-127">

                                                            Luxembourg
                                                            <span class="count">(5)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 95 item inactive">
                                                        <label class="form-check-label" for="country-129" 129>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="129"
                                                                   data-title="Madagascar" id="country-129">

                                                            Madagascar
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 96 item inactive">
                                                        <label class="form-check-label" for="country-130" 130>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="130"
                                                                   data-title="Malawi" id="country-130">

                                                            Malawi
                                                            <span class="count">(14)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 97 item inactive">
                                                        <label class="form-check-label" for="country-131" 131>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="131"
                                                                   data-title="Malaysia" id="country-131">

                                                            Malaysia
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 98 item inactive">
                                                        <label class="form-check-label" for="country-132" 132>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="132"
                                                                   data-title="Maldives" id="country-132">

                                                            Maldives
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 99 item inactive">
                                                        <label class="form-check-label" for="country-133" 133>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="133"
                                                                   data-title="Mali" id="country-133">

                                                            Mali
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 100 item inactive">
                                                        <label class="form-check-label" for="country-134" 134>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="134"
                                                                   data-title="Malta" id="country-134">

                                                            Malta
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 101 item inactive">
                                                        <label class="form-check-label" for="country-164" 164>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="164"
                                                                   data-title="Marshall Islands" id="country-164">

                                                            Marshall Islands
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 102 item inactive">
                                                        <label class="form-check-label" for="country-135" 135>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="135"
                                                                   data-title="Martinique" id="country-135">

                                                            Martinique
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 103 item inactive">
                                                        <label class="form-check-label" for="country-136" 136>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="136"
                                                                   data-title="Mauritania" id="country-136">

                                                            Mauritania
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 104 item inactive">
                                                        <label class="form-check-label" for="country-137" 137>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="137"
                                                                   data-title="Mauritius" id="country-137">

                                                            Mauritius
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 105 item inactive">
                                                        <label class="form-check-label" for="country-138" 138>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="138"
                                                                   data-title="Mexico" id="country-138">

                                                            Mexico
                                                            <span class="count">(14)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 106 item inactive">
                                                        <label class="form-check-label" for="country-140" 140>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="140"
                                                                   data-title="Mongolia" id="country-140">

                                                            Mongolia
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 107 item inactive">
                                                        <label class="form-check-label" for="country-242" 242>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="242"
                                                                   data-title="Montenegro" id="country-242">

                                                            Montenegro
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 108 item inactive">
                                                        <label class="form-check-label" for="country-143" 143>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="143"
                                                                   data-title="Morocco" id="country-143">

                                                            Morocco
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 109 item inactive">
                                                        <label class="form-check-label" for="country-144" 144>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="144"
                                                                   data-title="Mozambique" id="country-144">

                                                            Mozambique
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 110 item inactive">
                                                        <label class="form-check-label" for="country-32" 32>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="32"
                                                                   data-title="Myanmar" id="country-32">

                                                            Myanmar
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 111 item inactive">
                                                        <label class="form-check-label" for="country-146" 146>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="146"
                                                                   data-title="Namibia" id="country-146">

                                                            Namibia
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 112 item inactive">
                                                        <label class="form-check-label" for="country-147" 147>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="147"
                                                                   data-title="Nauru" id="country-147">

                                                            Nauru
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 113 item inactive">
                                                        <label class="form-check-label" for="country-148" 148>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="148"
                                                                   data-title="Nepal" id="country-148">

                                                            Nepal
                                                            <span class="count">(20)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 114 item inactive">
                                                        <label class="form-check-label" for="country-149" 149>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="149"
                                                                   data-title="Netherlands (Kingdom of the)"
                                                                   id="country-149">

                                                            Netherlands (Kingdom of the)
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 115 item inactive">
                                                        <label class="form-check-label" for="country-152" 152>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="152"
                                                                   data-title="New Caledonia" id="country-152">

                                                            New Caledonia
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 116 item inactive">
                                                        <label class="form-check-label" for="country-154" 154>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="154"
                                                                   data-title="New Zealand" id="country-154">

                                                            New Zealand
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 117 item inactive">
                                                        <label class="form-check-label" for="country-155" 155>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="155"
                                                                   data-title="Nicaragua" id="country-155">

                                                            Nicaragua
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 118 item inactive">
                                                        <label class="form-check-label" for="country-156" 156>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="156"
                                                                   data-title="Niger" id="country-156">

                                                            Niger
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 119 item inactive">
                                                        <label class="form-check-label" for="country-157" 157>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="157"
                                                                   data-title="Nigeria" id="country-157">

                                                            Nigeria
                                                            <span class="count">(26)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 120 item inactive">
                                                        <label class="form-check-label" for="country-158" 158>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="158"
                                                                   data-title="Niue" id="country-158">

                                                            Niue
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 121 item inactive">
                                                        <label class="form-check-label" for="country-224" 224>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="224"
                                                                   data-title="North Macedonia" id="country-224">

                                                            North Macedonia
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 122 item inactive">
                                                        <label class="form-check-label" for="country-161" 161>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="161"
                                                                   data-title="Northern Mariana Islands" id="country-161">

                                                            Northern Mariana Islands
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 123 item inactive">
                                                        <label class="form-check-label" for="country-160" 160>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="160"
                                                                   data-title="Norway" id="country-160">

                                                            Norway
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 124 item inactive">
                                                        <label class="form-check-label" for="country-166" 166>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="166"
                                                                   data-title="Pakistan" id="country-166">

                                                            Pakistan
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 125 item inactive">
                                                        <label class="form-check-label" for="country-165" 165>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="165"
                                                                   data-title="Palau" id="country-165">

                                                            Palau
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 126 item inactive">
                                                        <label class="form-check-label" for="country-167" 167>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="167"
                                                                   data-title="Panama" id="country-167">

                                                            Panama
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 127 item inactive">
                                                        <label class="form-check-label" for="country-168" 168>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="168"
                                                                   data-title="Papua New Guinea" id="country-168">

                                                            Papua New Guinea
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 128 item inactive">
                                                        <label class="form-check-label" for="country-169" 169>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="169"
                                                                   data-title="Paraguay" id="country-169">

                                                            Paraguay
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 129 item inactive">
                                                        <label class="form-check-label" for="country-170" 170>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="170"
                                                                   data-title="Peru" id="country-170">

                                                            Peru
                                                            <span class="count">(17)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 130 item inactive">
                                                        <label class="form-check-label" for="country-171" 171>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="171"
                                                                   data-title="Philippines" id="country-171">

                                                            Philippines
                                                            <span class="count">(61)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 131 item inactive">
                                                        <label class="form-check-label" for="country-173" 173>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="173"
                                                                   data-title="Poland" id="country-173">

                                                            Poland
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 132 item inactive">
                                                        <label class="form-check-label" for="country-174" 174>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="174"
                                                                   data-title="Portugal" id="country-174">

                                                            Portugal
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 133 item inactive">
                                                        <label class="form-check-label" for="country-177" 177>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="177"
                                                                   data-title="Puerto Rico" id="country-177">

                                                            Puerto Rico
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 134 item inactive">
                                                        <label class="form-check-label" for="country-116" 116>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="116"
                                                                   data-title="Republic of Korea" id="country-116">

                                                            Republic of Korea
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 135 item inactive">
                                                        <label class="form-check-label" for="country-141" 141>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="141"
                                                                   data-title="Republic of Moldova" id="country-141">

                                                            Republic of Moldova
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 136 item inactive">
                                                        <label class="form-check-label" for="country-243" 243>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="243"
                                                                   data-title="Réunion" id="country-243">

                                                            Réunion
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 137 item inactive">
                                                        <label class="form-check-label" for="country-179" 179>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="179"
                                                                   data-title="Romania" id="country-179">

                                                            Romania
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 138 item inactive">
                                                        <label class="form-check-label" for="country-180" 180>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="180"
                                                                   data-title="Russian Federation" id="country-180">

                                                            Russian Federation
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 139 item inactive">
                                                        <label class="form-check-label" for="country-181" 181>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="181"
                                                                   data-title="Rwanda" id="country-181">

                                                            Rwanda
                                                            <span class="count">(30)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 140 item inactive">
                                                        <label class="form-check-label" for="country-183" 183>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="183"
                                                                   data-title="Saint Kitts and Nevis" id="country-183">

                                                            Saint Kitts and Nevis
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 141 item inactive">
                                                        <label class="form-check-label" for="country-185" 185>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="185"
                                                                   data-title="Saint Lucia" id="country-185">

                                                            Saint Lucia
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 142 item inactive">
                                                        <label class="form-check-label" for="country-235" 235>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="235"
                                                                   data-title="Samoa" id="country-235">

                                                            Samoa
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 143 item inactive">
                                                        <label class="form-check-label" for="country-189" 189>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="189"
                                                                   data-title="Sao Tome and Principe" id="country-189">

                                                            Sao Tome and Principe
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 144 item inactive">
                                                        <label class="form-check-label" for="country-190" 190>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="190"
                                                                   data-title="Saudi Arabia" id="country-190">

                                                            Saudi Arabia
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 145 item inactive">
                                                        <label class="form-check-label" for="country-191" 191>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="191"
                                                                   data-title="Senegal" id="country-191">

                                                            Senegal
                                                            <span class="count">(23)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 146 item inactive">
                                                        <label class="form-check-label" for="country-237" 237>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="237"
                                                                   data-title="Serbia" id="country-237">

                                                            Serbia
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 147 item inactive">
                                                        <label class="form-check-label" for="country-192" 192>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="192"
                                                                   data-title="Seychelles" id="country-192">

                                                            Seychelles
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 148 item inactive">
                                                        <label class="form-check-label" for="country-193" 193>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="193"
                                                                   data-title="Sierra Leone" id="country-193">

                                                            Sierra Leone
                                                            <span class="count">(12)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 149 item inactive">
                                                        <label class="form-check-label" for="country-194" 194>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="194"
                                                                   data-title="Singapore" id="country-194">

                                                            Singapore
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 150 item inactive">
                                                        <label class="form-check-label" for="country-195" 195>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="195"
                                                                   data-title="Slovakia" id="country-195">

                                                            Slovakia
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 151 item inactive">
                                                        <label class="form-check-label" for="country-197" 197>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="197"
                                                                   data-title="Slovenia" id="country-197">

                                                            Slovenia
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 152 item inactive">
                                                        <label class="form-check-label" for="country-28" 28>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="28"
                                                                   data-title="Solomon Islands" id="country-28">

                                                            Solomon Islands
                                                            <span class="count">(6)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 153 item inactive">
                                                        <label class="form-check-label" for="country-198" 198>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="198"
                                                                   data-title="Somalia" id="country-198">

                                                            Somalia
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 154 item inactive">
                                                        <label class="form-check-label" for="country-199" 199>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="199"
                                                                   data-title="South Africa" id="country-199">

                                                            South Africa
                                                            <span class="count">(17)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 155 item inactive">
                                                        <label class="form-check-label" for="country-201" 201>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="201"
                                                                   data-title="Spain" id="country-201">

                                                            Spain
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 156 item inactive">
                                                        <label class="form-check-label" for="country-41" 41>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="41"
                                                                   data-title="Sri Lanka" id="country-41">

                                                            Sri Lanka
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 157 item inactive">
                                                        <label class="form-check-label" for="country-203" 203>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="203"
                                                                   data-title="Sudan" id="country-203">

                                                            Sudan
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 158 item inactive">
                                                        <label class="form-check-label" for="country-204" 204>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="204"
                                                                   data-title="Suriname" id="country-204">

                                                            Suriname
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 159 item inactive">
                                                        <label class="form-check-label" for="country-207" 207>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="207"
                                                                   data-title="Sweden" id="country-207">

                                                            Sweden
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 160 item inactive">
                                                        <label class="form-check-label" for="country-208" 208>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="208"
                                                                   data-title="Switzerland" id="country-208">

                                                            Switzerland
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 161 item inactive">
                                                        <label class="form-check-label" for="country-210" 210>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="210"
                                                                   data-title="Tajikistan" id="country-210">

                                                            Tajikistan
                                                            <span class="count">(11)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 162 item inactive">
                                                        <label class="form-check-label" for="country-211" 211>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="211"
                                                                   data-title="Thailand" id="country-211">

                                                            Thailand
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 163 item inactive">
                                                        <label class="form-check-label" for="country-176" 176>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="176"
                                                                   data-title="Timor-Leste" id="country-176">

                                                            Timor-Leste
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 164 item inactive">
                                                        <label class="form-check-label" for="country-212" 212>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="212"
                                                                   data-title="Togo" id="country-212">

                                                            Togo
                                                            <span class="count">(7)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 165 item inactive">
                                                        <label class="form-check-label" for="country-214" 214>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="214"
                                                                   data-title="Tonga" id="country-214">

                                                            Tonga
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 166 item inactive">
                                                        <label class="form-check-label" for="country-215" 215>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="215"
                                                                   data-title="Trinidad and Tobago" id="country-215">

                                                            Trinidad and Tobago
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 167 item inactive">
                                                        <label class="form-check-label" for="country-217" 217>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="217"
                                                                   data-title="Tunisia" id="country-217">

                                                            Tunisia
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 168 item inactive">
                                                        <label class="form-check-label" for="country-221" 221>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="221"
                                                                   data-title="Tuvalu" id="country-221">

                                                            Tuvalu
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 169 item inactive">
                                                        <label class="form-check-label" for="country-222" 222>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="222"
                                                                   data-title="Uganda" id="country-222">

                                                            Uganda
                                                            <span class="count">(22)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 170 item inactive">
                                                        <label class="form-check-label" for="country-223" 223>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="223"
                                                                   data-title="Ukraine" id="country-223">

                                                            Ukraine
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 171 item inactive">
                                                        <label class="form-check-label" for="country-226" 226>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="226"
                                                                   data-title="United Kingdom Of Great Britain And Northern Ireland"
                                                                   id="country-226">

                                                            United Kingdom Of Great Britain And Northern Ireland
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 172 item inactive">
                                                        <label class="form-check-label" for="country-227" 227>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="227"
                                                                   data-title="United Republic of Tanzania, Zanzibar"
                                                                   id="country-227">

                                                            United Republic of Tanzania, Zanzibar
                                                            <span class="count">(19)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 173 item inactive">
                                                        <label class="form-check-label" for="country-228" 228>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="228"
                                                                   data-title="United States of America" id="country-228">

                                                            United States of America
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 174 item inactive">
                                                        <label class="form-check-label" for="country-229" 229>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="229"
                                                                   data-title="United States Virgin Islands"
                                                                   id="country-229">

                                                            United States Virgin Islands
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 175 item inactive">
                                                        <label class="form-check-label" for="country-231" 231>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="231"
                                                                   data-title="Uruguay" id="country-231">

                                                            Uruguay
                                                            <span class="count">(9)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 176 item inactive">
                                                        <label class="form-check-label" for="country-232" 232>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="232"
                                                                   data-title="Uzbekistan" id="country-232">

                                                            Uzbekistan
                                                            <span class="count">(8)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 177 item inactive">
                                                        <label class="form-check-label" for="country-153" 153>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="153"
                                                                   data-title="Vanuatu" id="country-153">

                                                            Vanuatu
                                                            <span class="count">(2)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 178 item inactive">
                                                        <label class="form-check-label" for="country-233" 233>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="233"
                                                                   data-title="Venezuela (Bolivarian Republic of)"
                                                                   id="country-233">

                                                            Venezuela (Bolivarian Republic of)
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 179 item inactive">
                                                        <label class="form-check-label" for="country-196" 196>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="196"
                                                                   data-title="Viet Nam" id="country-196">

                                                            Viet Nam
                                                            <span class="count">(10)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 180 item inactive">
                                                        <label class="form-check-label" for="country-234" 234>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="234"
                                                                   data-title="Wallis and Futuna Islands" id="country-234">

                                                            Wallis and Futuna Islands
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 181 item inactive">
                                                        <label class="form-check-label" for="country-236" 236>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="236"
                                                                   data-title="Yemen" id="country-236">

                                                            Yemen
                                                            <span class="count">(1)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 182 item inactive">
                                                        <label class="form-check-label" for="country-238" 238>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="238"
                                                                   data-title="Zambia" id="country-238">

                                                            Zambia
                                                            <span class="count">(4)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-country 183 item inactive">
                                                        <label class="form-check-label" for="country-200" 200>
                                                            <input class="form-check-input chk chk-country"
                                                                   type="checkbox" name="country[]" value="200"
                                                                   data-title="Zimbabwe" id="country-200">

                                                            Zimbabwe
                                                            <span class="count">(10)</span>
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
                                                    <div class="form-check item-collection 2 item inactive">
                                                        <label class="form-check-label" for="collection-Food-Security"
                                                               Food-Security>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]"
                                                                   value="Food-Security" data-title="Food Security"
                                                                   id="collection-Food-Security">

                                                            Food Security
                                                            <span class="count">(696)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 3 item inactive">
                                                        <label class="form-check-label"
                                                               for="collection-Agricultural-Census-Metadata"
                                                               Agricultural-Census-Metadata>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]"
                                                                   value="Agricultural-Census-Metadata"
                                                                   data-title="Agricultural Census Metadata"
                                                                   id="collection-Agricultural-Census-Metadata">

                                                            Agricultural Census Metadata
                                                            <span class="count">(126)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 4 item inactive">
                                                        <label class="form-check-label" for="collection-Forestry"
                                                               Forestry>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="Forestry"
                                                                   data-title="Forest Inventory Data"
                                                                   id="collection-Forestry">

                                                            Forest Inventory Data
                                                            <span class="count">(3)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 5 item inactive">
                                                        <label class="form-check-label" for="collection-nutrition"
                                                               nutrition>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]" value="nutrition"
                                                                   data-title="Nutrition" id="collection-nutrition">

                                                            Nutrition
                                                            <span class="count">(5)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 6 item inactive">
                                                        <label class="form-check-label"
                                                               for="collection-Emergencies-Monitoring-Surveys"
                                                               Emergencies-Monitoring-Surveys>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]"
                                                                   value="Emergencies-Monitoring-Surveys"
                                                                   data-title="Data in Emergencies Monitoring Surveys"
                                                                   id="collection-Emergencies-Monitoring-Surveys">

                                                            Data in Emergencies Monitoring Surveys
                                                            <span class="count">(39)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check item-collection 7 item inactive">
                                                        <label class="form-check-label"
                                                               for="collection-IMPACT-ASSESSMENT-SURVEYS"
                                                               IMPACT-ASSESSMENT-SURVEYS>
                                                            <input class="form-check-input chk chk-collection"
                                                                   type="checkbox" name="collection[]"
                                                                   value="IMPACT-ASSESSMENT-SURVEYS"
                                                                   data-title="IFAD Impact Assessment Surveys"
                                                                   id="collection-IMPACT-ASSESSMENT-SURVEYS">

                                                            IFAD Impact Assessment Surveys
                                                            <span class="count">(18)</span>
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
                                                            data-value="s">Study view</button>
                                                    <button type="button"
                                                            class="btn btn-sm btn-outline-secondary rounded-right toggle_view"
                                                            data-value="v"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?page=1&sort_by=popularity&sort_order=desc&ps=15&view=v">Variable
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


                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/885">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/885"
                                                       title="Comprehensive Food Security and Vulnerability Analysis and Nutrition Survey 2012"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Comprehensive Food Security and Vulnerability Analysis and
                                                            Nutrition Survey 2012 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    RWANDA, 2012
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">International Food Policy Research Institute (IFPRI)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Impact Areas:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security"><span class="badge badge-light">Food
                                                            Security</span></a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">DOI:</span> <span
                                                            class="text-dark-doi wb-value">RWA_2012_CFSVANS_v01_EN_M_v01_A_OCS</span>
                                                    </span>



                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Havard Dataverse</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/947">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/947"
                                                       title="Annual Agricultural Area and Production Survey 2010"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Annual Agricultural Area and Production Survey 2010 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Ecuador, 2010
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Institute of Statistics and
                                                            Censuses (INEC), Agricultural Statistics Unit</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">ECU_2010_ESPAC_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Feb 18, 2020</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">507568</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1357">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1357"
                                                       title="Impact, Maintenance, and Sustainability of Irrigation Impact Evaluation Survey 2015-2018, Baseline, First, Second, Third Follow-up"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Impact, Maintenance, and Sustainability of Irrigation Impact
                                                            Evaluation Survey 2015-2018, Baseline, First, Second, Third
                                                            Follow-up </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Rwanda, 2015-2018
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">Florence Kondylis, Maria Jones, John
                                                            Loeser, Jeremy Magruder</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">RWA_2015-2018_LWHIE_v01_EN_M_V01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Nov 08, 2022</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">430172</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/912">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/912"
                                                       title="Food Insecurity in Conflict Affected Regions in Nigeria 2017"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Food Insecurity in Conflict Affected Regions in Nigeria 2017
                                                        </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Nigeria, 2017
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Bureau of Statistics (NBS), The
                                                            World Bank</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security">Food
                                                            Security</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">NGA_2017_FICAR_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Sep 06, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">390294</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1771">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1771"
                                                       title="Integrated Household Panel Survey, 2010-2019"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Integrated Household Panel Survey, 2010-2019 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Malawi, 2010-2019
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Statistical Office (NSO)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">MWI_2010-2019_IHPS_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Nov 08, 2022</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">307182</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1845">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1845"
                                                       title="Resilience Index Measurement and Analysis 2017"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Resilience Index Measurement and Analysis 2017 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Uganda, 2017
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">Food and Agricultural Organization of the
                                                            United Nations, Office of the Prime Minister of
                                                            Uganda</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security">Food
                                                            Security</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">UGA_2017_RIMA_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Mar 15, 2021</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">305790</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span
                                                        class="badge wb-data-access wb-badge btn-data-license-licensed"
                                                        title="Microdata request form (Licensed)">
                                                        <i class="icon-da-sm icon-da-licensed"></i> <span
                                                            class="">Licensed data files</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1419">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1419"
                                                       title="Integrated Household Panel Survey 2010-2013-2016 (Long-Term Panel, 102 EAs)"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Integrated Household Panel Survey 2010-2013-2016 (Long-Term
                                                            Panel, 102 EAs) </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Malawi, 2010-2016
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">International Food Policy Research Institute (IFPRI)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Impact Areas:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys"><span class="badge badge-light">Agriculture
                                                                Census and Surveys</span></a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">DOI:</span> <span
                                                            class="badge badge-rounded text-dark wb-value">MWI_2010-2016_IHPS_v01_EN_M_v01_A_OCS</span>
                                                    </span>

{{--                                                    <span><span class="wb-label">Last modified:</span> <span--}}
{{--                                                            class="wb-value">Nov 08, 2022</span></span>--}}
{{--                                                    <span><span class="wb-label">Views:</span> <span--}}
{{--                                                            class="wb-value">288956</span></span>--}}


                                                </div>

                                                <div class="wb-license-classification">
                                                    Source: <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Havard Dataverse</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/930">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/930"
                                                       title="General Household Survey-Panel Wave 3 (Post Harvest) 2015-2016"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            General Household Survey-Panel Wave 3 (Post Harvest)
                                                            2015-2016 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Nigeria, 2016
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Bureau of Statistics
                                                            (NBS)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">NGA_2015-2016_GHS-W3-PH_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Jul 17, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">209774</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/909">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/909"
                                                       title="Comprehensive Food Security and Vulnerability Analysis 2006."
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Comprehensive Food Security and Vulnerability Analysis 2006.
                                                        </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Rwanda, 2006
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Institute of Statistics
                                                            Rwanda</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Impact Area:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security">Food
                                                            Security</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">RWA_2006_CFSVA_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Jul 15, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">200421</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1398">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1398"
                                                       title="Integrated Household Panel Survey 2010-2013 (Short-Term Panel)"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Integrated Household Panel Survey 2010-2013 (Short-Term
                                                            Panel) </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Malawi, 2013
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Statistical Office</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">MWI_2010-2013_IHPS_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Nov 08, 2022</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">188797</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1844">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1844"
                                                       title="Resilience Index and Measurement Analysis 2018"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Resilience Index and Measurement Analysis 2018 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Uganda, 2018
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">Food and Agriculture Organization of the
                                                            United Nations, Resilience Measurement Unit, United Nations
                                                            Children's Fund, World Food Programme, Uganda Bureau of
                                                            Statistics, Office of the Prime Minister of Uganda</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security">Food
                                                            Security</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">UGA_2018_RIMA_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Mar 15, 2021</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">175662</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span
                                                        class="badge wb-data-access wb-badge btn-data-license-licensed"
                                                        title="Microdata request form (Licensed)">
                                                        <i class="icon-da-sm icon-da-licensed"></i> <span
                                                            class="">Licensed data files</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/872">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/872"
                                                       title="Comprehensive Food Security and Vulnerability Analysis 2015"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Comprehensive Food Security and Vulnerability Analysis 2015
                                                        </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    RWANDA, 2015
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Institute of Statistics of
                                                            Rwanda</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/Food-Security">Food
                                                            Security</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">RWA_2015_CFSVA_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Jul 10, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">148209</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/933">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/933"
                                                       title="General Household Survey-Panel 2010-2011 (PostHarvest)"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            General Household Survey-Panel 2010-2011 (PostHarvest)
                                                        </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Nigeria, 2011
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Bureau of Statistics
                                                            (NBS)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">NGA_2010-2011_GHS-W1-PH_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Jul 17, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">145458</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/931">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/931"
                                                       title="General Household Survey-Panel Wave 3 (Post Planting) 2015-2016"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            General Household Survey-Panel Wave 3 (Post Planting)
                                                            2015-2016 </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    Nigeria, 2015
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">National Bureau of Statistics
                                                            (NBS)</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">NGA_2015-2016_GHS-W3-PP_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Jul 17, 2019</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">128774</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->



                                    <div class="survey-row border-bottom pb-3 mb-2 "
                                         data-url="https://microdata.fao.org/index.php/catalog/1517">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="wb-card-title title">
                                                    <a href="https://microdata.fao.org/index.php/catalog/1517"
                                                       title="Kagera Health and Development Survey 1991-1994 (Wave 1 to 4 Panel)"
                                                       class="d-flex">
                                                        <i class="fa fa-database fa-nada-icon wb-title-icon"></i>
                                                        <span>
                                                            Kagera Health and Development Survey 1991-1994 (Wave 1 to 4
                                                            Panel) </span>
                                                    </a>
                                                </h5>

                                                <div class="study-country">
                                                    United Republic of Tanzania, Zanzibar, 1991-1994
                                                </div>
                                                <div class="sub-title">
                                                    <div>
                                                        <span class="study-by">World Bank, University of Dar es
                                                            Salaam</span>
                                                    </div>

                                                    <span class="owner-collection collection-link mr-3">Collection:
                                                        <a
                                                            href="https://microdata.fao.org/index.php/catalog/agriculture-census-surveys">Agriculture
                                                            Census and Surveys</a> </span>
                                                </div>
                                                <div class="survey-stats">
                                                    <span class="study-idno">
                                                        <span class="wb-label">ID:</span> <span
                                                            class="text-dark wb-value">TZA_1991-1994_KHDS_v01_EN_M_v01_A_OCS</span>
                                                    </span>

                                                    <span><span class="wb-label">Last modified:</span> <span
                                                            class="wb-value">Nov 08, 2022</span></span>
                                                    <span><span class="wb-label">Views:</span> <span
                                                            class="wb-value">125543</span></span>


                                                </div>

                                                <div class="wb-license-classification">
                                                    <span class="badge wb-data-access wb-badge btn-data-license-remote"
                                                          title="Microdata available from external repository">
                                                        <i class="icon-da-sm icon-da-remote"></i> <span class="">Data
                                                            available from external repository</span>
                                                    </span>


                                                </div>

                                            </div>






                                        </div>
                                    </div> <!-- /.    row -->

                                </div>
                                <div class="nada-pagination border-top-none">
                                    <div class="row mt-3 mb-3 d-flex align-items-lg-center">

                                        <div class="col-12 col-md-3 col-lg-4 text-center text-md-left mb-2 mb-md-0">
                                            Showing <b>1-15</b> of <b>1,314</b> </div>

                                        <div
                                            class="col-12 col-md-9 col-lg-8 d-flex justify-content-center justify-content-lg-end text-center">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination pagination-md custom-pager">
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=1"
                                                            class="page-link active" data-page="1">1</a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=2"
                                                            class="page-link " data-page="2">2</a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=3"
                                                            class="page-link " data-page="3">3</a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=4"
                                                            class="page-link " data-page="4">4</a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=5"
                                                            class="page-link " data-page="5">5</a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=2"
                                                            class="page-link" data-page="2"> Next </a></li>
                                                    <li class="page-item"><a
                                                            href="https://microdata.fao.org/index.php/catalog/?ps=15&sort_by=popularity&sort_order=desc&page=88"
                                                            class="page-link" data-page="88" title="Last">&raquo;</a>
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
