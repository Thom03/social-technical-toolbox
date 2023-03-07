{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">
            <a href="{{ route('add_dataset') }}" class="btn btn-danger">+ Add Dataset</a>
            <div class="input-group search-area ml-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Filter
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">A To Z List</a>
                    <a class="dropdown-item" href="#">Z To A List</a>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    Newest
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">Newest</a>
                    <a class="dropdown-item" href="#">Old</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="btn btn-outline-primary ml-3"><i class="flaticon-381-menu-1 mr-0"></i></a>
            <a href="javascript:void(0);" class="btn btn-light ml-3"><i class="flaticon-381-pad mr-0"></i></a>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="accordion-one" class="accordion doctor-list ">
                    <div class="accordion__item">
                        <div id="default_collapseOne" class="collapse accordion__body show" data-parent="#accordion-one">
                            <div class="widget-media best-doctor pt-4">
                                <div class="timeline row">
                                    @foreach ($dataset as $dataset)
                                    <div class="col-lg-6">
                                        <div class="timeline-panel bg-white p-4 mb-4">
                                            <div class="media-body">
                                                <h4 class="mb-2">{{ $dataset->title }}</h4>
                                                <p><span class="badge badge-rounded badge-secondary">{{ $dataset->source }}</span></p>
                                                <a href="#" class="btn btn-outline-danger mr-2">DELETE</a>
                                                <a href="#" class="btn btn-success">EDIT</a>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
