<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\Region;
use App\Models\TechPrac;
use App\Models\Theme;
use Illuminate\Http\Request;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataset_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $dataset = Dataset::all();


//        $users = User::latest()->paginate(10);
        return view('datasets.datasetlist', compact('dataset','logo', 'page_title', 'page_description', 'action'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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

        return view('datasets.add', compact('region', 'theme', 'impactAreas','innovations','techPracs','logo', 'page_title', 'page_description', 'action'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_dataset(Request $request)
    {

        // Validate the form data
        $validateData = $request->validate([
            'impact_areas'=> 'nullable|array',
            'impact_areas.*' => 'exists:impact_areas,id',
            'innovations'=> 'nullable|array',
            'innovations.*' => 'exists:innovations,id',
            'tech_pracs'=> 'nullable|array',
            'tech_pracs.*' => 'exists:tech_pracs,id',

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
        $dataset->gender_responsive = $request->input('gender_responsive')=='on'?1:0;
        $dataset->resillience_indicators = $request->input('resillience_indicators');
        $dataset->observations = $request->input('observations');
        $dataset->save();


//        Attach the selected impact areas to the dataset

        $dataset->impactAreas()->attach($validateData['impact_areas']);
        $dataset->innovations()->attach($validateData['innovations']);
        $dataset->techPracs()->attach($validateData['tech_pracs']);





        return redirect('/datasetlist')->with('status', 'Impact Area added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function datset_detail($id)

    {
        $logo = "img/logo.png";
        $page_title = 'Dataset';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $datasets = Dataset::find($id);

        return view('datasets.detail', compact('datasets', 'logo', 'page_title', 'page_description', 'action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_dataset($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $dataset= Dataset::find($id);

        return view('datasets.edit', compact('logo', 'page_title', 'page_description', 'action', 'dataset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_dataset(Request $request, $id)
    {
        //
        return redirect('/datasetlist')->with('status', 'Impact Area added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
