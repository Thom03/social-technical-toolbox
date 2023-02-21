<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Region;
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
        $impact = ImpactArea::all();

        return view('datasets.add', compact('region', 'theme', 'impact','logo', 'page_title', 'page_description', 'action'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_dataset(Request $request)
    {

        $dataset = new Dataset();
        $dataset->title = $request->input('title');
        $dataset->author = $request->input('author');
        $dataset->release_year = $request->input('release_year');
        $dataset->region_id = $request->input('region_id');
        $dataset->theme_id = $request->input('theme_id');
        $dataset->impact_id = $request->input('impact_id');
        $dataset->source = $request->input('source');
        $dataset->access = $request->input('access');
        $dataset->license = $request->input('license');
        $dataset->contact = $request->input('contact');
        $dataset->DOI = $request->input('DOI');
        $dataset->providers = $request->input('providers');
        $dataset->collection_period = $request->input('collection_period');
        $dataset->save();

        return redirect('/impact_areas')->with('status', 'Impact Area added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
