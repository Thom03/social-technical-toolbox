{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')

{{--    <aside class="left-sidebar">--}}
{{--        <div class="scroll-sidebar">--}}
{{--            <nav class="sidebar-nav">--}}
{{--                <ul id="sidebarnav">--}}
{{--                    <li class="nav-small-cap">PERSONAL</li>--}}
{{--                    <li><a href="/"><i class="mdi mdi-home"></i><span class="hide-menu">Home </span></a></li>--}}
{{--                    <li><a href="/datasets"><i class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Datasets </span></a></li>--}}
{{--                    <li><a href="/about"><i class="mdi mdi-comment-question-outline"></i><span class="hide-menu">About </span></a></li>--}}
{{--                    <li><a href="/contact"><i class="mdi mdi-phone"></i><span class="hide-menu">Contact </span></a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </aside>        <div class="page-wrapper">--}}
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-122307751-1');

</script>
<title>Socio-Economic Datasets - Map</title>
<style type="text/css">
    .legend {
        line-height: 18px;
        color: #555;
    }
    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
    .info {
        padding: 10px;
        background: white;
        background: rgba(255,255,255,0.8);
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
        border-radius: 5px;
    }
    .info h4 {
        margin: 0 0 5px;
    }
    #map{
        position: absolute;
        width: 100%;
        height: 76vh;
        z-index: 1;
    }
    #mapGrid{
        min-height: 76vh;
    }
    .container-fluid{
        min-width: 98vw;
    }
    @media (max-width: 767px){
        #researchChart{
            width: 290px !important;
        }
    }
</style>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body justify-content-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-9 m-b-20">
                            <div class="container p-l-0 p-r-0">
                                <div class="col-12 bg-inverse text-white" onclick="displayFilters('commodities')"><i class="fa fa-file-text"></i> Clusters</div>
                                <div id="commodities" class="col-12 show">
                                    <input type="checkbox" name="commodities" onclick="controlDatasetsLayer();" value="Beans" id="Beans" checked class="ciat-check"> <label for="Beans" class="small">Social</label><br>
                                    <input type="checkbox" name="commodities" onclick="controlDatasetsLayer();" value="Cassava" id="Cassava" checked class="ciat-check"> <label for="Cassava" class="small">Technical</label><br>
                                    <input type="checkbox" name="commodities" onclick="controlDatasetsLayer();" value="Forage" id="Forage" checked class="ciat-check"> <label for="Forage" class="small">Technological</label><br>
{{--                                    <input type="checkbox" name="commodities" onclick="controlDatasetsLayer();" value="Rice" id="Rice" checked class="ciat-check"> <label for="Rice" class="small">Rice</label><br>--}}
{{--                                    <input type="checkbox" name="commodities" onclick="controlDatasetsLayer();" value="All agriculture" id="All agriculture" checked class="ciat-check"> <label for="All agriculture" class="small">All agriculture</label><br>--}}
                                </div>
                                <div class="col-12 bg-inverse text-white m-t-5" onclick="displayFilters('researches')"><i class="fa fa-flask"></i> Impact Areas</div>
                                <div id="researches" class="col-12 show"></div>
                                <div class="col-12 bg-inverse text-white m-t-5" onclick="displayFilters('regionsDiv')"><i class="fa fa-globe"></i> Regions</div>
                                <div id="regionsDiv" class="col-12 show">
                                    <form id='regions'></form>
                                </div>
                                <div class="col-12 bg-inverse text-white m-t-5" onclick="displayFilters('statusD')"><i class="fa fa-thumb-tack"></i> Dataset Status</div>
                                <div id="statusD" class="col-12 show">
                                    <input type="checkbox" name="status" onclick="controlDatasetsLayer();" value="Published" id="Published" checked class="ciat-check"> <label for="Published" class="small">Published</label> <br>
                                    <input type="checkbox" name="status" onclick="controlDatasetsLayer();" value="Unpublished" id="Unpublished" checked class="ciat-check"> <label for="Unpublished" class="small">Unpublished</label>
                                </div>
                                <div class="col-12 bg-inverse text-white m-t-5" onclick="displayFilters('levelD')"><i class="fa fa-tag"></i> Bundle Level</div>
                                <div id="levelD" class="col-12 show">
                                    <table style="margin-top: 3px">
                                        <tr>
                                            <td width="80%"><input type="checkbox" name="levels" onclick="controlDatasetsLayer();" value="Global" id="Global" checked class="ciat-check"> <label for="Global" class="small">Global</label></td>
                                            <td><img src="https://soecodat.ciat.cgiar.org/images/icons/Mundial.png" width="30px"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="levels" onclick="controlDatasetsLayer();" value="Regional" id="Regional" checked class="ciat-check"> <label for="Regional" class="small">Regional</label></td>
                                            <td><img src="https://soecodat.ciat.cgiar.org/images/icons/Region.png" width="30px"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="levels" onclick="controlDatasetsLayer();" value="Country" id="Country" checked class="ciat-check"> <label for="Country" class="small">Country</label></td>
                                            <td><img src="https://soecodat.ciat.cgiar.org/images/icons/Point.png" width="30px"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12 p-l-0 p-r-0" id="mapGrid">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-12">--}}
{{--                            <h2><a href="/datasets" id="cont_datasets"></a></h2>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <h4 class="card-title">Datasets by Region</h4>--}}
{{--                            <div><canvas id="regionsChart" height="180" width="300"> </canvas></div>--}}
{{--                            <div id="regionsLegend" style="text-align: center;"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <h4 class="card-title">Datasets by Research Area</h4>--}}
{{--                            <div>--}}
{{--                                <canvas id="researchChart" height="450" width="330"> </canvas>--}}
{{--                            </div>--}}
{{--                            <div id="researchLegend" style="text-align: center;"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <h4 class="card-title">Datasets by Commodities</h4>--}}
{{--                            <div><canvas id="commodityChart" height="450" width="330"> </canvas></div>--}}
{{--                            <div id="commodityLegend" style="text-align: center;"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Bootstrap modal -->
            <div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="countryModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="countryModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Additional content for the modal body if needed -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="datasetInfoModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="modal-title"></h2>
                            <button type="button" class="close" onclick="resetHighlight();" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetHighlight();">Close</button>
                        </div>
                    </div>
                </div>
            </div>

@include('elements.map-scirpts')
@endsection

