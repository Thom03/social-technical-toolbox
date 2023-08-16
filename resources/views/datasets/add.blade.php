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
                        <h4 class="card-title">STIB Information Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('insert_dataset') }}" action="post" enctype="multipart/form-data"
                              class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Title</strong></label>
                                        <textarea rows="5" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Title" value="{{ old('title') }}"></textarea>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Author(s)</strong></label>
                                        <input type="text" name="author" class="form-control" placeholder="Author" value="{{ old('author') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Release Year</strong></label>
                                        <input type="text" name="release_year" class="form-control" placeholder="Release Year" value="{{ old('release_year') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Source</strong></label>
                                        <input type="text" name="source" class="form-control" placeholder="Source" value="{{ old('source') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Access</strong></label>
                                        <input type="text" name="access" class="form-control" placeholder="Access" value="{{ old('access') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>License</strong></label>
                                        <input type="text" name="license" class="form-control" placeholder="license" value="{{ old('license') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Contact</strong></label>
                                        <input type="email" name="contact" class="form-control" placeholder="Contact" value="{{ old('contact') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>DOI</strong></label>
                                        <input type="text" name="DOI" class="form-control" placeholder="DOI" value="{{ old('DOI') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="providers"><strong>Providers</strong></label>
                                        <select name="providers[]" id="providers" class="form-control select2-tags" multiple>
                                            @foreach($providers as $provider)
                                                <option value="{{ $provider->id }}" {{ in_array($provider->id, old('providers', [])) ? 'selected' : '' }}>
                                                    {{ $provider->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Collection Period</strong></label>
                                        <input type="text" name="collection_period" class="form-control" placeholder="Collection Period" value="{{ old('collection_period') }}">
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                    <label class="text-label"><strong>Data Type</strong></label>
                                    <input type="text" name="data_type" class="form-control" placeholder="Data Type" value="{{ old('data_type') }}">
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Methods</strong></label>
                                        <input type="text" name="methods" class="form-control" placeholder="Methods" value="{{ old('methods') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Status</strong></label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="unpublished" {{ old('status') === 'unpublished' ? 'selected' : '' }}>Unpublished</option>
                                            <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="regions"><strong>Regions</strong></label>
                                        <select name="regions[]" id="regions" class="form-control select2-tags" multiple>
                                            @foreach($regions  as $regions )
                                                <option class="badge badge-secondary" value="{{ $regions->id }}" {{ in_array($regions->id, old('regions', [])) ? 'selected' : '' }}>
                                                    {{ $regions ->name }}
                                                </option>
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
                                        <label for="impact_areas"><strong>Impact Areas</strong></label>
                                        <select name="impact_areas[]" id="impact_areas"
                                                class="form-control select2-tags" multiple>
                                            @foreach($impactAreas as $impactArea)
                                                <option value="{{ $impactArea->id }}" {{ in_array($impactArea->id, old('impactAreas', [])) ? 'selected' : '' }}>
                                                    {{ $impactArea->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {{--TODO: Making select fields behave like input--}}
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="innovations"><strong>Social Innovations</strong></label>
                                        <select name="innovations[]" id="innovations" class="form-control select2-tags" multiple>
                                            @foreach($innovations as $innovation)
                                                <option value="{{ $innovation->id }}" {{ in_array($innovation->id, old('innovations', [])) ? 'selected' : '' }}>
                                                    {{ $innovation->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="tech_pracs"><strong>Technology/Practices</strong></label>
                                        <select name="tech_pracs[]" id="tech_pracs" class="form-control select2-tags" multiple>
                                            @foreach($techPracs as $techPracs)
                                                <option class="badge badge-secondary" value="{{ $techPracs->id }}" {{ in_array($techPracs->id, old('techPracs', [])) ? 'selected' : '' }}>
                                                    {{ $techPracs->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="clusters"><strong>Clustering</strong></label>
                                        <select name="clusters[]" id="clusters" class="form-control select2-tags" multiple>
                                            @foreach($clusters as $clusters)
                                                <option class="badge badge-secondary" value="{{ $clusters->id }}" {{ in_array($clusters->id, old('clusters', [])) ? 'selected' : '' }}>
                                                    {{ $clusters->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Observation</strong></label>
                                        <textarea rows="3" name="observations" class="form-control" placeholder="Observation" value="{{ old('observations') }}"></textarea>
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
                                        <input type="text" id="country" name="country[]" class="form-control country-input" placeholder="Country" list="countryList" value="{{ old('country.0') }}">
                                        <input type="hidden"  class="country-id-input"  name="country_id[]" value="{{ old('country_id.0') }}">
                                        <datalist id="countryList">
                                            @foreach($countryList as $country)
                                                <option value="{{ $country->country_name }}" data-country-id="{{ $country->id_country }}">
                                            @endforeach

                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_1" name="admin_bound_1[]" class="form-control" placeholder="Administrative Boundary 1" value="{{ old('admin_bound_1.0') }}">

                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_2" name="admin_bound_2[]" class="form-control" placeholder="Administrative Boundary 2" value="{{ old('admin_bound_2.0') }}">
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <input type="text" id="admin_bound_3" name="admin_bound_3[]" class="form-control" placeholder="Administrative Boundary 3" value="{{ old('admin_bound_3.0') }}">
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


