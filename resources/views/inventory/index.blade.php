{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Dataset</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inventory Dataset</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Organization</th>
                                    <th>Country</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($dataset as $data)
                                <tr>
                                    <td><a href="{{ route('bundle_detail', $data->id) }}">{{Str::limit($data->title, 120)}}</a><a class="badge badge-rounded badge-outline-info" href="{{ route('bundle_detail', $data->id) }}">...more info</a></td>
                                    <td>{{$data-> organization}}</td>
                                    <td>{{$data-> country}}</td>

                                </tr>
                                @endforeach

                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Organization</th>
                                    <th>Country</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








{{--        <div class="container-fluid">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4 class="card-title center">Dataset List</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table id="example" class="table  table-striped verticle-middle table-responsive-sm display">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Title</th>--}}
{{--                                    <th>Organization</th>--}}
{{--                                    <th>Country</th>--}}
{{--                                    <th>Source</th>--}}
{{--                                    <th>Contact</th>--}}
{{--                                    <th>DOI</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach ($dataset as $data)--}}
{{--                                    <tr>--}}
{{--                                        <td><a href="{{ route('bundle_detail', $data->id) }}">{{Str::limit($data->title, 120)}}</a><a class="badge badge-rounded badge-outline-info" href="{{ route('bundle_detail', $data->id) }}">...more info</a></td>--}}
{{--                                        <td>{{$data-> organization}}</td>--}}
{{--                                        <td>{{$data-> country}}</td>--}}
{{--                                        <td><span class="badge badge-rounded badge-success">{{$dataset-> source}}</span></td>--}}
{{--                                        <td>{{$dataset-> contact}}</td>--}}
{{--                                        <td>{{$dataset-> DOI}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

@endsection
