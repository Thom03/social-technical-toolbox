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

                            <span class="mr-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-map">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>

                            <div class="media-body">
                                <p class="mb-1">Total non-STIBs</p>
                                <h4 class="mb-0">{{ $non_stib_Count }}</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
	<span class="mr-3 bgl-danger text-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="2" y1="12" x2="22" y2="12"></line>
        <path d="M12 2L12 22"></path>
        <path d="M20 9L4 9"></path>
        <path d="M4 15L20 15"></path>
    </svg>
</span>

                            <div class="media-body">
                                <p class="mb-1">Total STIBs</p>
                                <h4 class="mb-0">{{ $stibs_Count }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <div class="media ai-icon">

                            <span class="mr-3 bgl-warning text-warning">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
        <path
            d="M12 2C8.686 2 6 4.686 6 8c0 4 6 13 6 13s6-9 6-13c0-3.314-2.686-6-6-6zm0 9a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
    </svg>
</span>
                            <div class="media-body">
                                <p class="mb-1">Total Inventory Data</p>
                                <h4 class="mb-0">{{ $inventory_data  }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
			<span class="mr-3 bgl-primary text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-molecule">
        <circle cx="12" cy="8" r="7"></circle>
        <circle cx="5.5" cy="14.5" r="2.5"></circle>
    </svg>
</span>


                            <div class="media-body">
                                <p class="mb-1">Total Datasets</p>
                                <h4 class="mb-0">{{ $total_dataset }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Classification of STIBS & Non-STIBs per 5 CGIAR impact Areas</h4>
                        </div>
                        <div class="card-body">
                            <div id="legend-container"></div>

                            <canvas id="barChart_1"
                                data-impact-areas="{{ json_encode($impactAreas->pluck('name')) }}"
                                data-dataset-counts="{{ json_encode($datasetCounts) }}">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pie Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="pie_chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Categorization of STIBs & Non-STIBs per provider</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="barChart_3"
                                    data-providers="{{ json_encode($providers->pluck('name')) }}"
                                    data-dataset-counts="{{ json_encode($datasetPCounts) }}">

                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Distribution of STIBS per Year</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart_1"></canvas>
                            <div id="datasets" style="display: none;">{{ $datasets->toJson() }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gradient Line Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart_2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual Line Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart_3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="areaChart_1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gradinet Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="areaChart_2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="areaChart_3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Radar Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="radar_chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pie Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="pie_chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Doughnut Chart</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-point">
                                <div class="check-point-area">
                                    <canvas id="doughnut_chart"></canvas>
                                </div>
                                <ul class="chart-point-list">
                                    <li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
                                    <li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
                                    <li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Polar Chart</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <canvas id="wordCloudChart"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
