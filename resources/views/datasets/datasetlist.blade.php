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
                    <a class="dropdown-item" href="#">Published</a>
                    <a class="dropdown-item" href="#">Unpublished</a>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    Newest
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="{{ route('datasets.filter', ['filter' => 'newest']) }}">Newest</a>
                    <a class="dropdown-item" href="{{ route('datasets.filter', ['filter' => 'oldest']) }}">Oldest</a>
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
                                    @foreach ($dataset as $data)
                                    <div class="col-lg-6">
                                        <div class="timeline-panel bg-white p-4 mb-4">
                                            <div class="media-body">
                                                <h4 class="mb-2">{{ $data->title }}</h4>
                                                @foreach($data->impactAreas as $impactArea)
{{--                                                <p><span class="badge badge-rounded badge-secondary">{{ $impactArea->name }}</span></p>--}}
{{--                                                        <span class="badge badge-primary">{{ $impactArea->name }}</span>--}}
                                                    <label class="form-check-label" for="impact_area_{{ $impactArea->id }}">
                                                        <span class="badge badge-primary">{{ $impactArea->name }}</span>
                                                    </label>
                                                @endforeach
                                            <br>
                                                <br>
                                                @if($data->status == 'published')
                                                <span>Status: </span><span class="badge badge-success">{{ $data->status }}</span>
                                                @else
                                                    <span>Status: </span><span class="badge badge-warning">{{ $data->status }}</span>
                                                @endif
                                                <br>
                                                <br>

                                                <form action="{{ route('delete_dataset', ['id' => $data->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{--                                                <a class="dropdown-item text-danger">Delete</a>--}}
                                                    <a href="{{ route('edit_dataset', $data->id) }}" type="button" class="btn btn-rounded btn-dark">Edit</a>
                                                    <a href="{{ route('datset_detail', $data->id) }}" type="button" class="btn btn-rounded btn-light">View</a>
                                                    <button class="btn btn-rounded btn-outline-danger" type="submit">Delete</button>
                                                </form>
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
        <div class="row justify-content-center">
            <nav>
                <ul class="pagination pagination-circle">
                    <li class="page-item page-indicator">
                        <a class="page-link" href="{{ $dataset->previousPageUrl() }}" aria-label="Previous">
                            <i class="la la-angle-left"></i>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $dataset->lastPage(); $i++)
                        <li class="page-item {{ $dataset->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $dataset->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item page-indicator">
                        <a class="page-link" href="{{ $dataset->nextPageUrl() }}" aria-label="Next">
                            <i class="la la-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


@endsection
