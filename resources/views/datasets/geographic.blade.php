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
                                    <th>Country Name</th>
                                    <th>Country ID</th>
                                    <th>Dataset ID</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($dataset as $data)
                                    <tr>
                                        <td>{{$data-> country}}</td>
                                        <td>{{$data-> country_id}}</td>
                                        <td>{{$data-> dataset_id}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('edit_geographic_info', $data->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Country ID</th>
                                    <th>Dataset ID</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
