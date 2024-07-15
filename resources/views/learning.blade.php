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



        .info h4 {
            margin: 0 0 5px;
        }

        #map {
            position: absolute;
            width: 120%;
            height: 120vh;
            /*z-index: 1;*/
        }

        .label-icon {
            font-size: 14px;
            font-weight: bold;
            color: #333; /* Dark text color for better readability */
            background: rgba(255, 255, 255, 0.9); /* Slightly more opaque background */
            padding: 4px 8px; /* More padding for better spacing */
            border: 2px solid #f15a31; /* Border to make the annotation stand out */
            border-radius: 4px; /* Slightly larger border radius */
            text-align: center;
            white-space: nowrap;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Add a shadow for a 3D effect */
        }

        .label-icon::after {
            content: "";
            position: absolute;
            bottom: -10px; /* Position it below the label */
            left: 50%;
            margin-left: -1px;
            border-width: 10px;
            border-style: solid;
            border-color: #f15a31 transparent transparent transparent;
        }

        .floating-pane {
            position: absolute;
            top: 120px;
            left: 70px;
            width: 600px;
            height: 500px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 5px;
            z-index: 999;
        }

        #mapGrid {
            min-height: 76vh;

        }

        .container-fluid {
            min-width: 98vw;
        }

        .modal {
            z-index: 1200;
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
                        <!-- Floating Pane -->
                        <div id="floatingPane" class="floating-pane">
                            <h4>Feature Details</h4>
                            <div id="featureContent"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Learning Labs</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
{{--                        <img src="" alt="Logo"  class="img-fluid mb-3 mx-auto text-center" width="200" height="100">--}}

                        <p class="lead"><strong style="color: orangered;">The HER+</strong> initiative Work Package 2 (WP2), i.e.,
                            EMPOWER, works with participants in UU sites
                            in Kenya to identify and prioritize socio-technical
                            innovations bundles for women’s empowerment
                            and resilience. Through the learning labs concept,
                            the initiative provides spaces for co-designing
                            of social innovations that are often overlooked
                            during bundling of technical advancements</p>
                        <p>HER+ collected baseline data from <strong style="color: orangered;">UU (Ukama Ustawi  is one of the CGIAR initiatives)</strong> project
                            sites to establish the status of use of STIBs
                            across agro-ecologies in Kenya, measure the
                            effectiveness of different combination of STIB
                            on resilience and women’s empowerment,
                            and identify key indicators for monitoring and
                            evaluation activities.The study was conducted in <strong style="color: orangered;"> Embu (Runyenjes
                            and Manyatta sub-counties), Makueni (Makueni
                            and Mbooni sub-counties), and Nakuru (Rongai,
                            Njoro and Gilgil sub-counties)</strong> counties in Kenya.
                            Mixed methods combining both quantitative and
                            qualitative data collection techniques were used
                            to collect information from different stakeholders.
                            Quantitative data was collected using a structured
                            questionnaire administered through face-toface
                            interviews. A total of <strong style="color: orangered;">806</strong>  farmers were
                            interviewed, consisting of 376 UU farmers from
                            17 groups hosting mother and baby demos
                            and 430 non-UU farmers. About <strong style="color: orangered;">65%</strong> of the
                            sampled farmers were women while <strong style="color: orangered;">35%</strong> were
                            men. Descriptive statistics were used to analyze
                            quantitative data</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('elements.map-leraning')
@endsection

