@extends('layout.landing')


{{-- Content --}}
@section('content')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-122307751-1');

    </script>
    <title>STIBs - Map</title>
    <style type="text/css">
        .legend {
            line-height: 18px;
            color: #555;
        }

        /*.legend i {*/
        /*    width: 18px;*/
        /*    height: 18px;*/
        /*    float: left;*/
        /*    margin-right: 8px;*/
        /*    opacity: 0.7;*/
        /*}*/

        /*.info {*/
        /*    padding: 10px;*/
        /*    background: white;*/
        /*    background: rgba(255, 255, 255, 0.8);*/
        /*    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);*/
        /*    border-radius: 5px;*/
        /*}*/

        .info h4 {
            margin: 0 0 5px;
        }

        #map {
            position: absolute;
            width: 120%;
            height: 100vh;
            /*z-index: 1;*/
        }

        #mapGrid {
            min-height: 76vh;
        }

        .container-fluid {
            min-width: 98vw;
        }

        @media (max-width: 767px) {
            #researchChart {
                width: 290px !important;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body justify-content-center">
                <div class="row">
                    <div class="col-lg-10 col-md-12 p-l-0 p-r-0" id="mapGrid">
                        <div id="map"></div>

                        <div class="floating-search-bar">
                            <div class="input-group">
                                <input type="text" class="form-control"id="searchInput"  placeholder="Search...">

                            </div>
                        </div>

                        <!-- Floating Panel -->

                    </div>
                </div>



            </div>
        </div>

        <!-- Bootstrap modal -->
{{--        <div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="countryModalLabel"--}}
{{--             aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="countryModalLabel"></h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <!-- Additional content for the modal body if needed -->--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-lg">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title">STIBs Dashboard</h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <img src="{{ asset('img/logo-orange.png') }}" alt="Logo"  class="img-fluid mb-3 mx-auto text-center" width="200" height="100">--}}

{{--                        <p class="lead"><strong style="color: orangered;">Socio-Technical Innovation Bundles (STIBs) </strong> are a combination or combinations of technological, technical, and social innovations co-designed to address women's empowerment and resilience (inclusive of men and youths).<strong style="color: orangered;">Non-STIBs</strong> combine only one or two types of innovations rather--}}
{{--                            than all three. Here, we refer to bundles of only technological and technical, technical and social or--}}
{{--                            technological and social bundles</p>--}}
{{--                        <p><strong style="color: orangered;">Work package 2 EMPOWER </strong>of the CGIAR Initiative on Gender Equality (HER+) aims to identify,--}}
{{--                            develop, and test context-specific STIBs to address climate change. The empower work package--}}
{{--                            focuses on co-designing and testing partnerships and pathways to enhance uptake of climate--}}
{{--                            smart STIBs by men, women, and youth. The goal of socio-technical innovations bundling is ultimately--}}
{{--                            develop a toolbox that guides data, tools, and processes for creating, implementing, and--}}
{{--                            evaluating climate-smart STIBs to empower women, men, youths and enhance their resilience. Thus, we have co-developed and co-designed a dashboard with an interactive map that dynamically--}}
{{--                            displays the global distribution of socio-economic datasets, data, and tools that facilitate--}}
{{--                            bundling in different local, regional, and thematic contexts.</p>--}}

{{--                        <div class="row mt-3">--}}
{{--                            <div class="col-4 mb-3">--}}
{{--                                <div class="widget-stat card">--}}
{{--                                    <div class="card-body p-3">--}}
{{--                                        <div class="media ai-icon">--}}
{{--                                    <span class="mr-3 bgl-success text-success icon-container">--}}
{{--                                        <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon">--}}
{{--                                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>--}}
{{--                                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>--}}
{{--                                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>--}}
{{--                                        </svg>--}}
{{--                                    </span>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <p class="mb-1">STIBs</p>--}}
{{--                                                <h4 class="mb-0" id="countdown">{{ $stibs_Count }}</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 mb-4">--}}
{{--                                <div class="widget-stat card">--}}
{{--                                    <div class="card-body p-3">--}}
{{--                                        <div class="media ai-icon">--}}
{{--                                    <span class="mr-3 bgl-warning text-warning icon-container">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon">--}}
{{--                                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>--}}
{{--                                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>--}}
{{--                                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>--}}
{{--                                        </svg>--}}

{{--                                    </span>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <p class="mb-1">NON-STIBS</p>--}}
{{--                                                <h4 class="mb-0">{{ $non_stib_Count }}</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 mb-4">--}}
{{--                                <div class="widget-stat card">--}}
{{--                                    <div class="card-body p-3">--}}
{{--                                        <div class="media ai-icon">--}}
{{--                                    <span class="mr-3 bgl-danger text-danger icon-container">--}}
{{--                                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text icon">--}}
{{--                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>--}}
{{--                                            <polyline points="14 2 14 8 20 8"></polyline>--}}
{{--                                            <line x1="16" y1="13" x2="8" y2="13"></line>--}}
{{--                                            <line x1="16" y1="17" x2="8" y2="17"></line>--}}
{{--                                            <polyline points="10 9 9 9 8 9"></polyline>--}}
{{--                                        </svg>--}}
{{--                                    </span>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <p class="mb-1">Inventory Data</p>--}}
{{--                                                <h4 class="mb-0">{{ $inventory_data }}</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="modal fade" id="datasetInfoModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-lg" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h2 class="modal-title" id="modal-title"></h2>--}}
{{--                        <button type="button" class="close" onclick="resetHighlight();" data-dismiss="modal"--}}
{{--                                aria-label="Close">--}}
{{--                            <span aria-hidden="true">×</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body" id="modal-body"></div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal"--}}
{{--                                onclick="resetHighlight();">Close--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>


    @include('elements.map-scirpts')
@endsection

