{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="m-b-0">{{ $datasets->title }} </h2>
                    <span class="btn btn-rounded btn-xs btn-success">{{ $datasets->status }} </span>
                    <br>
                    <br>
                    <div class="col-12 m-t-20">
                        <h4>Main Title</h4>
                        <p class="text-justify">{{ $datasets->title }}</p>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Authors</h4>
                        {{ $datasets->author }}
                        <br>
                        <br>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Collection dates</h4>
                        {{ $datasets->collection_period }}
                        <br>
                    </div>
                    <br>

                    <div class="col-12 m-t-20">
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Release Year</th>
                                    <th>Source</th>
                                    <th>Access</th>
                                    <th>License</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $datasets->release_year }}</td>
                                    <td>{{ $datasets->source }}</td>
                                    <td>{{ $datasets->access }}</td>
                                    <td>{{ $datasets->license }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>CGIAR Impact Areas</h4>
                        @foreach($datasets->impactAreas as $impactArea)
                        <p class="badge badge-primary">{{ $impactArea->name }}</p>
                        @endforeach
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Providers</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datasets->providers as $provider)
                                    <tr>
                                        <td>{{ $provider->name }}</td>
                                        <td><a href="{{ $provider->url }}" target="_blank">{{ $provider->url }}</a><img src="http://ciat-library.ciat.cgiar.org/dm_images/CIAT-Logo-255x128.png" width="60"></td>
                                        <td>{{ $datasets->contact }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Digital Object Identifer (DOI) </h4>
                        <a href="{{ $datasets->DOI }}"> <p class="badge badge-rounded badge-outline-info">{{ $datasets->DOI }}</p> </a>
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Social Innovation Bundles</h4>
                        @forelse($datasets->innovations->where('category', 'Social') as $innovation)
                            <p class="badge badge-dark">{{ $innovation->name }}</p>
                        @empty
                            <p>None</p>
                        @endforelse
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Technological Innovations Bundles</h4>
                        @forelse($datasets->innovations->where('category', 'Technological') as $innovation)
                            <p class="badge badge-dark">{{ $innovation->name }}</p>
                        @empty
                            <p>None</p>
                        @endforelse
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Technical Innovations Bundles</h4>
                        @forelse($datasets->innovations->where('category', 'Technical') as $innovation)
                            <p class="badge badge-dark">{{ $innovation->name }}</p>
                        @empty
                            <p>None</p>
                        @endforelse
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Sites</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Administrative Level 1</th>
                                    <th>Administrative Level 2</th>
                                    <th>Administrative Level 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($adminBoundaries as $adminBoundary)
                                <tr>
                                    <td>{{ $adminBoundary->country }}</td>
                                    <td>{{ $adminBoundary->admin_bound_1 }}</td>
                                    <td>{{ $adminBoundary->admin_bound_2 }}</td>
                                    <td>{{ $adminBoundary->admin_bound_3 }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 m-t-20">
                        <h4>Regions</h4>
                        @foreach($datasets->regions as $region)
                            <p class="badge badge-light">{{ $region->name }}</p>
                        @endforeach
                    </div>
                </div>

@endsection
