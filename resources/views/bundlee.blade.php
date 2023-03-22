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
                    <span class="btn btn-rounded btn-xs btn-warning">Unpublished</span>

                    <div class="col-12 m-t-20">
                        <h4>Main Objective</h4>
                        <p class="text-justify">Measure the adoption and the determinants of adoption of the different rice varieties managed by Bolivian rice farmers at a nationally representative level.</p>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Authors</h4>
                        {{ $datasets->author }}

                        <br>
                        <br>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Collection dates</h4>
                        Start: 201307 -
                        End: 201307
                        <br>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Keywords</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Vocabulary</th>
                                    <th>VocabularyURI</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Agrobiodiversity - AGBIO</td>
                                    <td>CIAT Research Area</td>
                                    <td>
                                    </td>
                                    <td>Keyword</td>
                                </tr>
                                <tr>
                                    <td>Varietal adoption</td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td>Keyword</td>
                                </tr>
                                <tr>
                                    <td>Bolivia</td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td>Keyword</td>
                                </tr>
                                <tr>
                                    <td>Rice farming</td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td>Keyword</td>
                                </tr>
                                <tr>
                                    <td>Variety adoption</td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td>topicClassification</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Related publications</h4>
                        <ul>
                        </ul>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Institutions</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Centro de Investigación Agrícola Tropical
                                        (CIAT)
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        Producer
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        International Center for Tropical Agriculture
                                        (CIAT)
                                    </td>
                                    <td>
                                        <a href="http://ciat.cgiar.org/" target="_blank">http://ciat.cgiar.org/</a> 										 <img src="http://ciat-library.ciat.cgiar.org/dm_images/CIAT-Logo-255x128.png" width="60"> 									</td>
                                    <td>
                                        Producer
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Global Rice Science Partnership
                                        (GRiSP)
                                    </td>
                                    <td>
                                        <a href="http://www.grisp.net/main/summary" target="_blank">http://www.grisp.net/main/summary</a> 										 <img src="http://ciat-library.ciat.cgiar.org/dm_images/CGIAR-GRISP-LOGO.png" width="60"> 									</td>
                                    <td>
                                        Producer
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        HarvestPlus

                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        Producer
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Files</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Label</th>
                                    <th>Description</th>
                                    <th>Tags</th>
                                    <th class="small">Restricted reason/duration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Questionnaire_RiceBOL2013.pdf
                                        <span class="btn btn-rounded btn-xs btn-success">Open</span>
                                    </td>
                                    <td>
                                        Complete survey that was used to collect household rice producers information
                                    </td>
                                    <td>
                                        Questionnaire
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 m-t-20">
                        <h4>Sites</h4>
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>State/Province</th>
                                    <th>City</th>
                                    <th>Other</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Jose Ballivian
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Carrasco
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Sara
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Guarayos
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Ichilo
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Moxos
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Ignacio Warnes
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Nuflo de Chavez
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Obispo Santistevan
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Cercado
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bolivia
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Marban
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
