{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your STIBS dashboard</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashaboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Geographic Info</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Geographic Info Form</h4>
                    </div>
                    <div class="card-body">
                        <form  action="{{ url('update_geographic_info/'.$geographicinfo->id) }}" method="PUT"  enctype="multipart/form-data" class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Country Name</label>
                                        <input  type="text" name="country" value="{{ $geographicinfo->country }}"
                                                class="form-control" placeholder="Country Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Country ID</label>
                                        <input  type="text" name="country_id" value="{{ $geographicinfo->country_id }}"
                                                class="form-control" placeholder="Country ID">
                                    </div>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-success">Save Dataset</button>
                            <a href="{{ route('dataset_list') }}" type="submit" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection



