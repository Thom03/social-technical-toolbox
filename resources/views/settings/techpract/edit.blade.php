{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashaboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Impact Area</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit/Update Impact Area</h4>
                    </div>
                    <div class="card-body">
                        <form  action="{{ url('update_impact/'.$impact->id) }}" method="PUT"  enctype="multipart/form-data" class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Name</label>
                                        <input  type="text" name="name" value="{{ $impact->name }}"
                                                class="form-control" placeholder="Name" required>
                                    </div>
                                </div> <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Slug</label>
                                        <input  type="text" name="slug" value="{{ $impact->slug }}"
                                                class="form-control" placeholder="Slug" required>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('impact_list') }}" type="submit" class="btn btn-danger">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

