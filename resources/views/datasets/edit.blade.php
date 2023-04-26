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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Dataset</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dataset Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('insert_dataset') }}" action="post" enctype="multipart/form-data"
                              class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Title</label>
                                        <textarea rows="5" name="title" value="{{ $dataset->title }}"
                                                  class="form-control" placeholder="Title"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Author(s)</label>
                                        <input type="text" name="author" value="{{ $dataset->author }}"
                                               class="form-control" placeholder="Author">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Release Year</label>
                                        <input type="text" name="release_year" value="{{ $dataset->release_year }}"
                                               class="form-control" placeholder="Release Year">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Source</label>
                                        <input type="text" name="source" value="{{ $dataset->source }}"
                                               class="form-control" placeholder="Source">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Access</label>
                                        <input type="text" name="access" value="{{ $dataset->access }}"
                                               class="form-control" placeholder="Access">
                                    </div>

                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">License</label>
                                        <input type="text" name="license" value="{{ $dataset->license }}"
                                               class="form-control" placeholder="license" >
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Contact</label>
                                        <input type="email" name="contact" value="{{ $dataset->contact }}"
                                               class="form-control" placeholder="Contact" >
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Providers</label>
                                        <input type="text" name="providers" value="{{ $dataset->providers }}"
                                               class="form-control" placeholder="Providers" >
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Collection Period</label>
                                        <input type="text" name="collection_period"
                                               value="{{ $dataset->collection_period }}"
                                               class="form-control" placeholder="Collection Period">
                                    </div>
                                </div>
{{--                                <div class="col-lg-6 mb-2">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h4 class="card-title">Additional Information</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                    <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Data Type</label>
                                        <input type="text" name="data_type" value="{{ $dataset->data_type }}"
                                               class="form-control" placeholder="Data Type">
                                    </div>
                                    </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Methods</label>
                                        <input type="text" name="methods" value="{{ $dataset->methods }}"
                                               class="form-control" placeholder="Methods">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Production System</label>
                                        <input type="text" name="production_system" value="{{ $dataset->production_system }}"
                                               class="form-control" placeholder="Production System">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Gender Responsive</label>
                                        <input type="checkbox" value="{{ $dataset->gender_responsive == "1" ? 'checked':'' }}" name="gender_responsive">
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="card-header">
                                        <h4 class="card-title">Additional Components</h4>
                                    </div>
                                </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="impact_areas">Impact Areas</label>
                                            @foreach($impactAreas as $impactArea)
                                                <div class="form-check form-check-inline">
{{--                                                    <input class="form-check-input" type="checkbox" name="impact_areas[]" id="impact_area_{{ $impactArea->id }}" value="{{ $impactArea->id }}">--}}
                                                    <label class="form-check-label" for="impact_area_{{ $impactArea->id }}">
                                                        <span class="badge badge-primary">{{ $impactArea->name }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
{{--                                            TODO: Making select fields behave like input--}}
                                        </div>
                                    </div>

{{--                                    <div class="col-lg-6 mb-2">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="innovations">Innovations</label>--}}
{{--                                            <select name="innovations[]" id="innovations" class="form-control" multiple>--}}
{{--                                                @foreach($innovations as $innovation)--}}
{{--                                                    <option--}}
{{--                                                        value="{{ $innovation->id }}">{{ $innovation->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6 mb-2">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="tech_pracs">Technology/Practices</label>--}}
{{--                                            <select name="tech_pracs[]" id="tech_pracs" class="form-control" multiple>--}}
{{--                                                @foreach($techPracs as $techPracs)--}}
{{--                                                    <option value="{{ $techPracs->id }}">{{ $techPracs->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Observation</label>
                                        <textarea rows="3" name="observations"
                                                  class="form-control" placeholder="Collection Period"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Update Dataset</button>
                            <a href="{{ route('dataset_list') }}" type="submit" class="btn btn-danger">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
