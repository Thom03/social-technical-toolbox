<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function region_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Dataset Regions';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $region = Region::all();

        return view('settings.regions.index', compact('region', 'logo', 'page_title', 'page_description', 'action'));

    }

    public function add_region()
    {
        $logo = "img/logo.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.regions.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_region(Request $request)
    {

        $region = new Region();
        $region->name = $request->input('name');
        $region->slug = $request->input('slug');
        $region->save();

        return redirect('/region_list')->with('status', 'Impact Area added successfully.');

    }

//    TODO: Adding region update function.

}
