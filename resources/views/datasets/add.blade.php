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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Dataset</a></li>
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
                                        <textarea rows="5" name="title"
                                                  class="form-control" placeholder="Title"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Author(s)</label>
                                        <input type="text" name="author"
                                               class="form-control" placeholder="Author">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Release Year</label>
                                        <input type="text" name="release_year"
                                               class="form-control" placeholder="Release Year">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Source</label>
                                        <input type="text" name="source"
                                               class="form-control" placeholder="Source">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Access</label>
                                        <input type="text" name="access"
                                               class="form-control" placeholder="Access">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">License</label>
                                        <input type="text" name="license"
                                               class="form-control" placeholder="license">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Contact</label>
                                        <input type="email" name="contact" class="form-control" placeholder="Contact">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">DOI</label>
                                        <input type="text" name="DOI"
                                               class="form-control" placeholder="DOI">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="providers">Providers</label>
                                        <select name="providers[]" id="providers" class="form-control select2-tags"
                                                multiple>
                                            @foreach($providers as $provider)
                                                <option
                                                    value="{{ $provider->id }}">{{ $provider->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Collection Period</label>
                                        <input type="text" name="collection_period"
                                               class="form-control" placeholder="Collection Period">
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                    <label class="text-label">Data Type</label>
                                    <input type="text" name="data_type"
                                           class="form-control" placeholder="Data Type">
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Methods</label>
                                        <input type="text" name="methods"
                                               class="form-control" placeholder="Methods">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="unpublished">Unpublished</option>
                                            <option value="published">Published</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="regions">Regions</label>
                                        <select name="regions[]" id="regions" class="form-control select2-tags" multiple>
                                            @foreach($regions  as $regions )
                                                <option class="badge badge-secondary"
                                                        value="{{ $regions->id }}">{{ $regions ->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-12 mb-2">
                                    <div class="card-header">
                                        <h4 class="card-title">Social Technical Components</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="impact_areas">Impact Areas</label>
                                        <select name="impact_areas[]" id="impact_areas"
                                                class="form-control select2-tags" multiple>
                                            @foreach($impactAreas as $impactArea)
                                                <option value="{{ $impactArea->id }}">{{ $impactArea->name }}</option>
                                            @endforeach
                                        </select>
                                        {{--TODO: Making select fields behave like input--}}
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="innovations">Innovations</label>
                                        <select name="innovations[]" id="innovations" class="form-control select2-tags"
                                                multiple>
                                            @foreach($innovations as $innovation)
                                                <option
                                                    value="{{ $innovation->id }}">{{ $innovation->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="tech_pracs">Technology/Practices</label>
                                        <select name="tech_pracs[]" id="tech_pracs" class="form-control select2-tags"
                                                multiple>
                                            @foreach($techPracs as $techPracs)
                                                <option class="badge badge-secondary"
                                                        value="{{ $techPracs->id }}">{{ $techPracs->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="clusters">Clustering</label>
                                        <select name="clusters[]" id="clusters" class="form-control select2-tags"
                                                multiple>
                                            @foreach($clusters as $clusters)
                                                <option class="badge badge-secondary"
                                                        value="{{ $clusters->id }}">{{ $clusters->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Observation</label>
                                        <textarea rows="3" name="observations"
                                                  class="form-control" placeholder="Observation"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <div class="card-header">
                                        <h4 class="card-title">Regions</h4>
                                    </div>
                                </div>


                                <div class="col-lg-12 mb-2" id="boundary-container">
                                    <!-- The dynamic input fields will be added here -->
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="country" name="country[]"
                                               class="form-control" placeholder="Country" list="countryList">
                                        <datalist id="countryList">
                                            @foreach($countryList as $country)
                                                <option value="{{ $country->country_name }}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_1" name="admin_bound_1[]"
                                               class="form-control" placeholder="Administrative Boundary 1">

                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_2" name="admin_bound_2[]"
                                               class="form-control" placeholder="Administrative Boundary 2">
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_3" name="admin_bound_3[]"
                                               class="form-control" placeholder="Administrative Boundary 3">
                                    </div>
                                </div>
                                <div class="input-group-btn">
                                    <button class="btn btn-outline-warning" type="button" onclick="region_fields();">
                                        Add Region<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
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


