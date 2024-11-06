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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Resource</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Resource Information Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('insert_resource') }}" action="post" enctype="multipart/form-data"
                              class="step-form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Title</strong></label>
                                        <textarea rows="5" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Title">{{ old('title') }}</textarea>
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Author(s)</strong></label>
                                        <textarea rows="5" name="authors" class="form-control @error('authors') is-invalid @enderror"  placeholder="Author(s)">{{ old('authors') }}</textarea>
                                        @error('authors')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Description</strong></label>
                                        <textarea rows="5" name="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Description">{{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Link</strong></label>
                                        <input type="text" name="link" class="form-control" placeholder="Link" value="{{ old('link') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Image Link</strong></label>
                                        <input type="text" name="image_link" class="form-control" placeholder="Link" value="{{ old('image_link') }}">
                                    </div>
                                </div>



                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label"><strong>Type</strong></label>
                                        <select name="type" class="form-control @error('type') is-invalid @enderror">
                                            <option value="">Select Type</option>
                                            <option value="Workshop Reports" {{ old('type') == 'Workshop Reports' ? 'selected' : '' }}>Workshop Reports</option>
                                            <option value="Blog" {{ old('type') == 'Blogs' ? 'selected' : '' }}>Blogs</option>
                                            <option value="Video" {{ old('type') == 'Videos' ? 'selected' : '' }}>Videos</option>
                                            <option value="Working Paper" {{ old('type') == 'Working papers ' ? 'selected' : '' }}>Working papers </option>
                                            <option value="Framework, Guides & Instrument" {{ old('type') == 'Framework, Guides and Instrument' ? 'selected' : '' }}>Framework, Guides and Instrument</option>
                                            <option value="Training Manuals" {{ old('type') == 'Training Manuals' ? 'selected' : '' }}>Training Manuals</option>
                                        </select>
                                        @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-success">Save Resource</button>
                            <a href="{{ route('resource_list') }}" type="submit" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


