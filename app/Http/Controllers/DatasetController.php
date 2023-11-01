<?php

namespace App\Http\Controllers;

use App\Models\AdministrativeBoundary;
use App\Models\Cluster;
use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\Provider;
use App\Models\Region;
use App\Models\TechPrac;
use App\Models\Theme;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PragmaRX\Countries\Package\Countries;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function dataset_list(Request $request)
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $dataset = Dataset::paginate(12);
        $impactAreas = ImpactArea::all();
        $latestDatasets = Dataset::latest()->get();


        return view('datasets.datasetlist', compact('dataset', 'impactAreas', 'latestDatasets', 'logo', 'logoText', 'page_title', 'page_description', 'action'));

    }

//    public function getCountries()
//    {
//        $client = new Client();
//        $response = $client->get('https://ramses.ciat.cgiar.org/api/v1/countries');
//        $countries_list = json_decode($response->getBody());
//
//        return view('datasets.add', compact('countries_list'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add_dataset()
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Dataset';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        $region = Region::all();
        $theme = Theme::all();
        $impactAreas = ImpactArea::all();
        $innovations = Innovation::all();
        $techPracs = TechPrac::all();
        $countries = new Countries();
//        $countryList = $countries->all()->pluck('name.common');

        $client = new Client();
        $response = $client->get('https://ramses.ciat.cgiar.org/api/v1/countries');
        $responseData = json_decode($response->getBody());
        $countryList = $responseData->result->data;

        $clusters = Cluster::all();
        $providers = Provider::all();
        $regions = Region::all();

        return view('datasets.add', compact('region', 'theme', 'impactAreas', 'innovations', 'techPracs', 'clusters', 'providers', 'regions', 'logo', 'logoText', 'countryList', 'page_title', 'page_description', 'action'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function insert_dataset(Request $request)
    {
        // Define custom validation messages
        $customMessages = [
            'impact_areas.*.exists' => 'The selected impact area is invalid.',
            'innovations.*.exists' => 'The selected innovation is invalid.',
            'tech_pracs.*.exists' => 'The selected tech practice is invalid.',
            'clusters.*.exists' => 'The selected cluster is invalid.',
            'providers.*.exists' => 'The selected provider is invalid.',
            'regions.*.exists' => 'The selected region is invalid.',
        ];

        // Validate the form data
        $validateData = $request->validate([
            'impact_areas' => 'nullable|array',
            'impact_areas.*' => 'exists:impact_areas,id',
            'innovations' => 'nullable|array',
            'innovations.*' => 'exists:innovations,id',
            'tech_pracs' => 'nullable|array',
            'tech_pracs.*' => 'exists:tech_pracs,id',
            'clusters' => 'nullable|array',
            'clusters.*' => 'exists:clusters,id',
            'providers' => 'nullable|array',
            'providers.*' => 'exists:providers,id',
            'regions' => 'nullable|array',
            'regions.*' => 'exists:regions,id',
            'country.*' => 'nullable',
            'country_id.*' => 'nullable',
            'admin_bound_1.*' => 'nullable',
            'admin_bound_2.*' => 'nullable',
            'admin_bound_3.*' => 'nullable',

        ], $customMessages);

        // Create the dataset
        $dataset = new Dataset();
        $dataset->title = $request->input('title');
        $dataset->author = $request->input('author');
        $dataset->release_year = $request->input('release_year');
        $dataset->resource_files = $request->input('resource_files');
        $dataset->source = $request->input('source');
        $dataset->access = $request->input('access');
        $dataset->license = $request->input('license');
        $dataset->contact = $request->input('contact');
        $dataset->DOI = $request->input('DOI');
        $dataset->collection_period = $request->input('collection_period');
        $dataset->data_type = $request->input('data_type');
        $dataset->methods = $request->input('methods');
        $dataset->resillience_indicators = $request->input('resillience_indicators');
        $dataset->observations = $request->input('observations');
        $dataset->status = $request->input('status');
        $dataset->save();


//        Attach the selected impact areas, innovations and techpractices to the dataset
        $dataset->impactAreas()->attach($validateData['impact_areas']);
        $dataset->innovations()->attach($validateData['innovations']);
        $dataset->techPracs()->attach($validateData['tech_pracs']);

//        Attach clusters to the datasets
        $dataset->clusters()->attach($validateData['clusters']);

//        Attach providers to the datasets
        $dataset->providers()->attach($validateData['providers']);

//        Attach regions to the datasets
        $dataset->regions()->attach($validateData['regions']);




        $country = $validateData['country'];
        $country_id = $validateData['country_id'];
//        $country_id = $request->input('country_id');
        $admin_bound_1 = $validateData['admin_bound_1'];
        $admin_bound_2 = $validateData['admin_bound_2'];
        $admin_bound_3 = $validateData['admin_bound_3'];


        // Check if the arrays have the same number of elements
        $arrayCount = count($country);

        for ($i = 0; $i < $arrayCount; $i++) {
            $administrativeBoundaries = new AdministrativeBoundary();
            $administrativeBoundaries->country = $country[$i];
            $administrativeBoundaries->country_id = $country_id[$i] ?? null;
            $administrativeBoundaries->admin_bound_1 = $admin_bound_1[$i] ?? null;
            $administrativeBoundaries->admin_bound_2 = $admin_bound_2[$i] ?? null;
            $administrativeBoundaries->admin_bound_3 = $admin_bound_3[$i] ?? null;
            $administrativeBoundaries->dataset_id = $dataset->id;
            $administrativeBoundaries->save();
        }


        return redirect('/datasetlist')->with('status', 'Dataset has been added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function datset_detail($id)

    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Dataset';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $datasets = Dataset::find($id);
        $impactAreas = ImpactArea::all();
        $providers = Provider::all();
        $regions = Region::all();
        $adminBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();


        return view('datasets.detail', compact('datasets', 'impactAreas','regions', 'adminBoundaries', 'logo', 'logoText', 'page_title', 'page_description', 'providers', 'action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit_dataset($id)
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $dataset = Dataset::findOrFail($id);
        $impactAreas = ImpactArea::all();
        $innovations = Innovation::all();
        $techPracs = TechPrac::all();
        $client = new Client();
        $response = $client->get('https://ramses.ciat.cgiar.org/api/v1/countries');
        $responseData = json_decode($response->getBody());
        $countryList = $responseData->result->data;

        $administrativeBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();
        $adminBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();
        $clusters = Cluster::all();
        $providers = Provider::all();
        $regions = Region::all();



        return view('datasets.edit', compact('logo', 'logoText', 'page_title', 'page_description', 'action', 'dataset', 'providers', 'regions','impactAreas', 'innovations', 'techPracs','clusters', 'adminBoundaries', 'countryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update_dataset(Request $request, $id)
    {


        $validateData = $request->validate([
            'impact_areas' => 'nullable|array',
            'impact_areas.*' => 'exists:impact_areas,id',
            'innovations' => 'nullable|array',
            'innovations.*' => 'exists:innovations,id',
            'tech_pracs' => 'nullable|array',
            'tech_pracs.*' => 'exists:tech_pracs,id',
            'clusters' => 'nullable|array',
            'clusters.*' => 'exists:clusters,id',
            'providers' => 'nullable|array',
            'providers.*' => 'exists:providers,id',
            'country.*' => 'nullable',
            'admin_bound_1.*' => 'nullable',
            'admin_bound_2.*' => 'nullable',
            'admin_bound_3.*' => 'nullable',

        ]);

        // Create the dataset
        $dataset = Dataset::findOrFail($id);
        $dataset->title = $request->input('title');
        $dataset->author = $request->input('author');
        $dataset->release_year = $request->input('release_year');
        $dataset->resource_files = $request->input('resource_files');
        $dataset->source = $request->input('source');
        $dataset->access = $request->input('access');
        $dataset->license = $request->input('license');
        $dataset->contact = $request->input('contact');
        $dataset->DOI = $request->input('DOI');

        $dataset->collection_period = $request->input('collection_period');
        $dataset->data_type = $request->input('data_type');
        $dataset->methods = $request->input('methods');
        $dataset->resillience_indicators = $request->input('resillience_indicators');
        $dataset->observations = $request->input('observations');
        $dataset->status = $request->input('status');
        $dataset->update();

        $dataset->impactAreas()->attach($validateData['impact_areas']);
        $dataset->innovations()->attach($validateData['innovations']);
        $dataset->techPracs()->attach($validateData['tech_pracs']);

        //        Attach clusters to the datasets
        $dataset->clusters()->attach($validateData['clusters']);

        //        Attach providers to the datasets
        $dataset->providers()->attach($validateData['providers']);


        $country = $validateData['country'];
        $admin_bound_1 = $validateData['admin_bound_1'];
        $admin_bound_2 = $validateData['admin_bound_2'];
        $admin_bound_3 = $validateData['admin_bound_3'];

        $arrayCount = count($country);

        for ($i = 0; $i < $arrayCount; $i++) {
            $administrativeBoundaries = AdministrativeBoundary::where('dataset_id', $id)->where('id', $i + 1)->first();
            if (!$administrativeBoundaries) {
                $administrativeBoundaries = new AdministrativeBoundary();
                $administrativeBoundaries->dataset_id = $dataset->id;
            }
            $administrativeBoundaries->country = $country[$i];
            $administrativeBoundaries->admin_bound_1 = $admin_bound_1[$i] ?? null;
            $administrativeBoundaries->admin_bound_2 = $admin_bound_2[$i] ?? null;
            $administrativeBoundaries->admin_bound_3 = $admin_bound_3[$i] ?? null;
            $administrativeBoundaries->update();
        }


        return redirect('/datasetlist')->with('status', 'Dataset has been updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function search_dataset(Request $request)
    {

        $query = $request->input('query');

        $datasets = Dataset::where('title', 'like', '%' . $query . '%')
            ->orWhere('release_year', 'like', '%' . $query . '%')
            ->get();

        return view('datasets.datasetlist', [
            'datasets' => $datasets,
        ]);

    }

//    Filtering datasets

    public function filter($filter)
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        if ($filter == 'newest') {
            $dataset = Dataset::orderBy('created_at', 'desc')->get();

        } elseif ($filter == 'oldest') {
            $dataset = Dataset::orderBy('created_at', 'desc')->get();


        } else {
            // Handle other filter options if needed
            $dataset = Dataset::all();
        }

//        return view('datasets.datasetlist', ['dataset' => $dataset]);
        return view('datasets.datasetlist', compact('dataset', 'logo', 'logoText', 'page_title', 'page_description', 'action'));

    }

    public function delete_dataset($id)
    {
        $dataset = Dataset::find($id);

        if (!$dataset) {
            return redirect('/datasetlist')->with('error', 'Dataset not found.');
        }

        // Detach the relationship with datasets
//        $techPrac->datasets()->detach();
        $dataset->impactAreas()->detach();
        $dataset->techPracs()->detach();
        $dataset->innovations()->detach();
        $dataset->providers()->detach();
        $dataset->clusters()->detach();



        // Delete the record
        $dataset->delete();

        return redirect('/datasetlist')->with('status', 'Dataset has been deleted successfully.');

    }


    public function upload_dataset(Request $request)
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;



        return view('datasets.upload', compact('logo', 'logoText', 'page_title', 'page_description', 'action'));

    }


    public function geographic_info_list()
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        $dataset = AdministrativeBoundary::all();



        return view('datasets.geographic', compact('logo', 'dataset', 'logoText', 'page_title', 'page_description', 'action'));

    }

    public function edit_geographic_info($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Innovations';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $geographicinfo = AdministrativeBoundary::find($id);


        return view('datasets.editgeo', compact('logo', 'page_title', 'page_description', 'action', 'geographicinfo'));
    }

    public function update_geographic_info(Request $request, $id)
    {
        $geographicinfo = AdministrativeBoundary::find($id);
        $geographicinfo->country = $request->input('country');
        $geographicinfo->country_id = $request->input('country_id');

        $geographicinfo->update();

        return redirect('/geographic_info_list')->with('status', 'Geographic info updated successfully.');


    }
}
