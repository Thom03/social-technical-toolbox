<?php

namespace App\Http\Controllers;

use App\Models\AdministrativeBoundary;
use App\Models\Cluster;
use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\Region;
use App\Models\TechPrac;
use App\Models\Theme;
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
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $dataset = Dataset::all();
        $impactAreas = ImpactArea::all();
        $latestDatasets = Dataset::latest()->get();


        return view('datasets.datasetlist', compact('dataset', 'impactAreas', 'latestDatasets', 'logo', 'page_title', 'page_description', 'action'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add_dataset()
    {
        $logo = "img/logo.png";
        $page_title = 'Dataset';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        $region = Region::all();
        $theme = Theme::all();
        $impactAreas = ImpactArea::all();
        $innovations = Innovation::all();
        $techPracs = TechPrac::all();
        $countries = new Countries();
        $countryList = $countries->all()->pluck('name.common');
        $clusters = Cluster::all();

        return view('datasets.add', compact('region', 'theme', 'impactAreas', 'innovations', 'techPracs', 'clusters', 'logo', 'countryList', 'page_title', 'page_description', 'action'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function insert_dataset(Request $request)
    {

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
            'country.*' => 'nullable',
            'admin_bound_1.*' => 'nullable',
            'admin_bound_2.*' => 'nullable',
            'admin_bound_3.*' => 'nullable',

        ]);

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
        $dataset->providers = $request->input('providers');
        $dataset->collection_period = $request->input('collection_period');
        $dataset->data_type = $request->input('data_type');
        $dataset->methods = $request->input('methods');
        $dataset->production_system = $request->input('production_system');
        $dataset->gender_responsive = $request->input('gender_responsive') == 'on' ? 1 : 0;
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

        $country = $validateData['country'];
        $admin_bound_1 = $validateData['admin_bound_1'];
        $admin_bound_2 = $validateData['admin_bound_2'];
        $admin_bound_3 = $validateData['admin_bound_3'];


        // Check if the arrays have the same number of elements
        $arrayCount = count($country);
//        if (count($admin_bound_1) !== $arrayCount || count($admin_bound_2) !== $arrayCount || count($admin_bound_3) !== $arrayCount) {
//            return redirect()->back()->withErrors('The arrays must have the same number of elements.');
//        }

        for ($i = 0; $i < $arrayCount; $i++) {
            $administrativeBoundaries = new AdministrativeBoundary();
            $administrativeBoundaries->country = $country[$i];
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
        $page_title = 'Dataset';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $datasets = Dataset::find($id);
        $impactAreas = ImpactArea::all();
        $adminBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();


        return view('datasets.detail', compact('datasets', 'impactAreas', 'adminBoundaries', 'logo', 'page_title', 'page_description', 'action'));
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
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $dataset = Dataset::findOrFail($id);
        $impactAreas = ImpactArea::all();
        $innovations = Innovation::all();
        $techPracs = TechPrac::all();
//        $countries = new Countries();
//        $countryList = $countries->all()->pluck('name.common');
        $countryList = Countries::all();
        $administrativeBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();
        $clusters = Cluster::all();


        return view('datasets.edit', compact('logo', 'page_title', 'page_description', 'action', 'dataset', 'impactAreas', 'innovations', 'techPracs','clusters', 'administrativeBoundaries', 'countryList'));
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
        $dataset->providers = $request->input('providers');
        $dataset->collection_period = $request->input('collection_period');
        $dataset->data_type = $request->input('data_type');
        $dataset->methods = $request->input('methods');
        $dataset->production_system = $request->input('production_system');
        $dataset->gender_responsive = $request->input('gender_responsive') == 'on' ? 1 : 0;
        $dataset->resillience_indicators = $request->input('resillience_indicators');
        $dataset->observations = $request->input('observations');
        $dataset->status = $request->input('status');
        $dataset->update();

        $dataset->impactAreas()->attach($validateData['impact_areas']);
        $dataset->innovations()->attach($validateData['innovations']);
        $dataset->techPracs()->attach($validateData['tech_pracs']);

        //        Attach clusters to the datasets
        $dataset->clusters()->attach($validateData['clusters']);


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
        return view('datasets.datasetlist', compact('dataset', 'logo', 'page_title', 'page_description', 'action'));

    }
}
