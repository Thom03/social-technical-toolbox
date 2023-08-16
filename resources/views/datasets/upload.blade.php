{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your STIBs dashboard</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashaboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Datasets</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upload Bulk Datasets</h4>
                    </div>
                    <div class="card-body">
                        <form  action="#" action="post"  enctype="multipart/form-data" class="step-form-horizontal">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Upload Datasets</button>
                            <a href="#" type="submit" class="btn btn-danger">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
