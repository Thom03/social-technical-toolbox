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
                                <p class="text-justify">Work package 2 of the CGIAR Global Initiative on Gender Equality (HER+) has implemented an interactive map and dashboard that dynamically displays the global distribution of socio-economic datasets,
                                    data, and tools that facilitate bundling in different regional and thematic contexts.
                                    This visualization effectively conveys the results and impact of these innovation bundles on the five CGIAR impact areas.
                                    Furthermore, an accessible API has been created facilitates effortless integration and data transfer with other CGIAR platforms,
                                    enhancing this valuable resource's collaborative potential</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="m-b-0">Concept by</h2>
{{--                                <a href="#" target="_blank"><b>Dr. Eileen Nchanji </b></a>Co-Lead Work Package 2 Initiative<br/>--}}
{{--                                <a href="#" target="_blank"><b>Leroy Mwanzia</b></a> Senior Data Manager<br/>--}}
{{--                                <a href="#" target="_blank"><b>Cosmus Lutomia</b></a> Senior Research Associate – Value Chain Specialist<br/>--}}
{{--                                <a href="#" target="_blank"><b>George Muteti Thomas</b></a> Data Systems Analyst <br/>--}}
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Alliance of Boversity & CIAT</th>
                                                        <th scope="col">International Research Rice Institute (IRRI)</th>
                                                        <th scope="col">International Water Management Institute</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Eileen Nchanji</td>
                                                        <td>Ranjitha Puskur</td>
                                                        <td>Everisto Mapedza</td>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Leroy Mwanzia</td>
                                                        <td>Hom Gartaula</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dessalegn Ketema</td>
                                                        <td>Prama Mukhopadhyay</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cosmus Lutomia</td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>George Muteti</td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <h2 class="m-b-0">Credits</h2>
                                <a href="https://alliancebioversityciat.org/" target="_blank"><img src="https://soecodat.ciat.cgiar.org/images/logos/ciat.png" width="175"></a>
                                <a href="https://www.irri.org/" target="_blank"><img src="https://www.irri.org/sites/all/themes/custom/irri/images/IRRI-logo-padded.svg" width="175"></a>
                                <a href="https://www.iwmi.cgiar.org/" target="_blank"><img src="data:image/png;base64,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" width="175"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
