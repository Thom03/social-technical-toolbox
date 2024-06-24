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
            z-index: 9999;
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
                        <!-- Floating Pane -->
                        <div id="floatingPane" class="floating-pane">
                            <h4>Feature Details</h4>
                            <div id="featureContent"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('elements.map-leraning')
@endsection

