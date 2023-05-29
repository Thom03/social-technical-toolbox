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
                        <form action="{{ route('update_dataset', ['id' => $dataset->id]) }}" action="post" enctype="multipart/form-data"
                              class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Title</label>
                                        <textarea rows="5"  name="title"
                                                  class="form-control" placeholder="Title">{{ $dataset->title }}</textarea>
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
                                        <input type="text" name="release_year" value="{{ $dataset->release_year }}" class="form-control">
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
                                        <label class="text-label">DOI</label>
                                        <input type="text" name="DOI" value="{{ $dataset->doi }}"
                                               class="form-control" placeholder="DOI" >
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="providers">Providers</label>
                                        <select name="providers[]" id="providers" class="form-control select2-tags" @error('providers') is-invalid @enderror" multiple>
                                        @foreach($providers as $provider)
                                            <option value="{{ $provider->id }}"  @if($dataset->providers->contains($provider->id)) selected @endif>
                                                {{ $provider->name }}
                                            </option>
                                            @endforeach
                                            </select>
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
                                        <label class="text-label">Status</label>
                                        <select class="form-control"  name="status" id="status">
                                            <option  value="unpublished">Unpublished</option>
                                            <option value="published">Published</option>
                                        </select>
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
                                            <select id="impact_areas" class="form-control select2-tags @error('impact_areas') is-invalid @enderror" name="impact_areas[]" multiple data-tags="true">
                                                @foreach ($impactAreas as $impactArea)
                                                    <option value="{{ $impactArea->id }}" @if($dataset->impactAreas->contains($impactArea->id)) selected @endif>
                                                        {{ $impactArea->name }}
                                                    </option>
                                                @endforeach
                                            </select>
{{--                                            TODO: Making select fields behave like input--}}
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="innovations">Innovations</label>
                                            <select name="innovations[]" id="innovations" class="form-control select2-tags" @error('innovations') is-invalid @enderror" multiple>
                                                @foreach($innovations as $innovation)
                                                    <option value="{{ $innovation->id }}"  @if($dataset->innovations->contains($innovation->id)) selected @endif>
                                                        {{ $innovation->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="tech_pracs">Technology/Practices</label>
                                            <select name="tech_pracs[]" id="tech_pracs" class="form-control select2-tags" @error('techPracs') is-invalid @enderror" multiple>
                                                @foreach($techPracs as $techPrac)
                                                    <option value="{{ $techPrac->id }}" @if($dataset->techPracs->contains($techPrac->id)) selected @endif>
                                                        {{ $techPrac->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="clusters">Cluster</label>
                                            <select name="clusters[]" id="clusters" class="form-control select2-tags" @error('clusters') is-invalid @enderror" multiple>
                                                @foreach($clusters as $clusters)
                                                    <option value="{{ $clusters->id }}" @if($dataset->clusters->contains($clusters->id)) selected @endif>
                                                        {{ $clusters->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Observation</label>
                                        <textarea rows="3" name="observations"
                                                  class="form-control" placeholder="Collection Period"></textarea>
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
{{--                                                    @foreach($countryList->toArray() as $country)--}}
{{--                                                        <option value="{{ is_array($country) ? htmlspecialchars($country['name']) : htmlspecialchars($country) }}" {{ in_array($country, $selectedCountries) ? 'selected' : '' }}></option>--}}
{{--                                                    @endforeach--}}
                                                </datalist>
                                            </div>
                                        </div>

                                    @foreach($administrativeBoundaries as $index => $boundary)

                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <input type="text" id="admin_bound_1{{ $index }}" name="admin_bound_1[]"
                                                       class="form-control" placeholder="Administrative Boundary 1" value="{{ $boundary->admin_bound_1 }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <input type="text" id="admin_bound_2{{ $index }}" name="admin_bound_2[]"
                                                       class="form-control" placeholder="Administrative Boundary 2" value="{{ $boundary->admin_bound_2 }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <input type="text" id="admin_bound_3{{ $index }}" name="admin_bound_3[]"
                                                       class="form-control" placeholder="Administrative Boundary 3" value="{{ $boundary->admin_bound_3 }}">
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-warning" type="button" onclick="region_fields();"> Add Region
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
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
    </div>

@endsection
