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
                                                  class="form-control" placeholder="Title" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Author(s)</label>
                                        <input type="text" name="author"
                                               class="form-control" placeholder="Author" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Release Year</label>
                                        <input type="text" name="release_year"
                                               class="form-control" placeholder="Release Year" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Source</label>
                                        <input type="text" name="source"
                                               class="form-control" placeholder="Source" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Access</label>
                                        <input type="text" name="access"
                                               class="form-control" placeholder="Access" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">License</label>
                                    <input type="text" name="license"
                                           class="form-control" placeholder="license" required>
                                </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Contact</label>
                                    <input type="email" name="contact"
                                           class="form-control" placeholder="Contact" required>
                                </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">DOI</label>
                                        <input type="text" name="DOI"
                                               class="form-control" placeholder="DOI" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Providers</label>
                                    <input type="text" name="providers"
                                           class="form-control" placeholder="Providers" required>
                                </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Collection Period</label>
                                    <input type="text" name="collection_period"
                                           class="form-control" placeholder="Collection Period">
                                </div>
                                </div>


{{--                                <div class="col-lg-6 mb-2">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h4 class="card-title">Additional Information</h4>--}}
{{--                                    </div>--}}
{{--                                    </div>--}}
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
                                        <label class="text-label">Production System</label>
                                        <input type="text" name="production_system"
                                               class="form-control" placeholder="Production System">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Gender Responsive</label>
                                        <input type="checkbox" name="gender_responsive">
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
                                            <select name="impact_areas[]" id="impact_areas" class="form-control" multiple>
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
                                                <select name="innovations[]" id="innovations" class="form-control" multiple>
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
                                                <select name="tech_pracs[]" id="tech_pracs" class="form-control" multiple>
                                                    @foreach($techPracs as $techPracs)
                                                        <option value="{{ $techPracs->id }}">{{ $techPracs->name }}</option>
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
                            </div>

                                <button type="submit" class="btn btn-success">Add Dataset</button>
                                <a href="{{ route('dataset_list') }}" type="submit" class="btn btn-danger">Back</a>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                tags: true
            });
        });
    </script>
@endpush


