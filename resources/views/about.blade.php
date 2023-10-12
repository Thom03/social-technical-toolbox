{{-- Extends layout --}}
@extends('layout.landing')


{{-- Content --}}
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- Add 'justify-content-center' class to center the row -->
                <div class="col-md-6"> <!-- Set the desired column width -->
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <h1 class="text-center">About Us!</h1>
{{--                                <h2>Social-Technical Innovation Bundle (STIB) Toolbox</h2>--}}
                                <p class="text-justify">Work package 2  of the CGIAR Global Initiative on Gender Equality (HER+) has implemented an interactive map and dashboard that dynamically
                                    displays the global distribution of socio-economic datasets, data, and tools that facilitate bundling in different regional and
                                    thematic contexts. This visualization effectively conveys the results and impact of these innovation bundles while categorizing datasets into
                                    distinct categories. Furthermore, an accessible API that facilitates effortless integration and data transfer with other CGIAR platforms,
                                    enhancing this valuable resource's collaborative potential</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="m-b-0">Concept by</h2>
                                <a href="#" target="_blank"><b>Dr. Eileen Nchanji </b></a>Co-Lead Work Package 2 Initiative<br />
                                <a href="#" target="_blank"><b>Leroy Mwanzia</b></a> Senior Data Manager<br />
                                <a href="#" target="_blank"><b>Cosmus Lutomia</b></a> Senior Research Associate – Value Chain Specialist<br />
                                <a href="#" target="_blank"><b>George Thomas Muteti</b></a> Data Systems Analyst <br />

                                <br />
                                <h2 class="m-b-0">Credits</h2>
                                <a href="https://ciat.cgiar.org/" target="_blank"><img src="https://soecodat.ciat.cgiar.org/images/logos/ciat.png" width="175"></a>
                                <a href="https://ciat.cgiar.org/" target="_blank"><img src="https://branditechture.agency/brand-logos/wp-content/uploads/wpdm-cache/International-Water-Management-Institute-900x0.png" width="175"></a>
                                <a href="https://www.irri.org/" target="_blank"><img src="https://www.irri.org/sites/all/themes/custom/irri/images/IRRI-logo-padded.svg" width="175"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
