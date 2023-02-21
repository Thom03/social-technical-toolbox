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
                        <h4 class="card-title">Add Dataset</h4>
                    </div>
                    <div class="card-body">
                        <form  action="{{ route('insert_dataset') }}" action="post"  enctype="multipart/form-data" class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Title</label>
                                        <input  type="text" name="title"
                                                class="form-control" placeholder="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Author</label>
                                        <input  type="text" name="author"
                                                class="form-control" placeholder="Author" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Release Year</label>
                                        <input  type="text" name="release_year"
                                                class="form-control" placeholder="Release Year" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Source</label>
                                        <input  type="text" name="source"
                                                class="form-control" placeholder="Source" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Access</label>
                                        <input  type="text" name="access"
                                                class="form-control" placeholder="Access" required>
                                    </div>

                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                    <label class="text-label">Select a Region</label>
                                    <select class="form-select" name="region_id">
                                        <option class="text-label">Select a Region</option>
                                        @foreach($region as $item)
                                        <option value="{{ $item->id }}" class="form-control">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label class="text-label">Select Theme</label>
                                    <select class="form-select" name="theme_id">
                                        <option class="text-label">Select a Region</option>
                                        @foreach($theme as $item)
                                            <option value="{{ $item->id }}" class="form-control">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Select Impact Area</label>
                                        <select class="form-select" name="impact_id">
                                            <option class="text-label">Select a Region</option>
                                            @foreach($impact as $item)
                                                <option value="{{ $item->id }}" class="form-control">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">License</label>
                                        <input  type="text" name="license"
                                                class="form-control" placeholder="license" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Contact</label>
                                        <input  type="email" name="contact"
                                                class="form-control" placeholder="Contact" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Providers</label>
                                        <input  type="text" name="providers"
                                                class="form-control" placeholder="Providers" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Collection Period</label>
                                        <input  type="text" name="collection_period"
                                                class="form-control" placeholder="Collection Period" required>
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

@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('[name="all_permission"]').on('click', function () {

                if ($(this).is(':checked')) {
                    $.each($('.permission'), function () {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.permission'), function () {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
