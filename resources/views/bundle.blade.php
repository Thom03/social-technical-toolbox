{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $datasets->title }}</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="min-width: 900px;">
                            <thead>
                            {{--                            <tr>--}}
                            {{--                                <th></th>--}}
                            {{--                                <th class="text-center text-dark">--}}
                            {{--                                    <br>--}}
                            {{--                                    <small class="text-muted">&lt;</small>--}}
                            {{--                                </th>--}}

                            {{--                            </tr>--}}
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Author(s)</th>
                                <td>{{ $datasets->author }}  </td>

                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Release year</th>
                                <td><code>{{ $datasets->release_year }}</code></td>

                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Region</th>
                                <td colspan="5"> <span class="badge badge-rounded badge-light">{{ $datasets->region->name }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Impact Area</th>
                                <td colspan="5"> <span class="badge badge-rounded badge-secondary">{{ $datasets->impactarea->name }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Resource Files</th>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Source</th>
                                <td colspan="5"> <span class="badge badge-rounded badge-success">{{ $datasets->source }}</span></td>
                            </tr>
                            <tr>

                                <th class="text-nowrap text-dark" scope="row">Access</th>
                                @if($datasets->access == 'access');
                                <td colspan="5"><span class="badge badge-success">{{ $datasets->access }}</span></td>
                                @else
                                    <td colspan="5"><span class="badge badge-danger">{{ $datasets->access }}</span></td>
                                @endif
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">License</th>
                                <td colspan="5">{{ $datasets->license }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Contact</th>
                                <td colspan="5">{{ $datasets->contact }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Production System</th>
                                <td colspan="5">{{ $datasets->production_system }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Technology/Practice</th>
                                <td colspan="5">{{ $datasets->technology_practice }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Gender Response</th>
                                <td colspan="5">{{ $datasets->gender_responsive == 1 ? 'YES' : 'NO'}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Innovations</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="min-width: 490px;">
                            <tbody>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Social inclusion/protection</th>
                                <td><span class="badge badge-rounded badge-light"> {{ $datasets->social_inclusion == 1 ? 'Yes' : 'No' }}</span></td>

                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Policy/Institutional</th>
                                <td><span class="badge badge-rounded badge-light">{{ $datasets->policy_institutional == 1 ? 'Yes' : 'No' }}</span></td>

                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Organizational</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->organizational == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Marketing</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->marketing == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Financial</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->financial == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Insurance</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->insurance == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Digital</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->digital == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Training</th>
                                <td colspan="5"><span class="badge badge-rounded badge-light">{{ $datasets->training == 1 ? 'Yes' : 'No' }}</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Resilience Indicators</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="min-width: 490px;">

                            <tbody>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">Access to finance</th>
                                <td> No</td>

                            </tr>
                            <tr>
                                <th class="text-nowrap text-dark" scope="row">climate change awareness</th>
                                <td><code>Yes</code></td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>





@endsection
