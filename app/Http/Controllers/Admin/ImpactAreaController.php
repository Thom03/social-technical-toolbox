<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImpactArea;
use Illuminate\Http\Request;

class ImpactAreaController extends Controller
{
    //

    public function impact_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $impact_area = ImpactArea::all();


//        $users = User::latest()->paginate(10);
        return view('settings.impact.index', compact('impact_area','logo', 'page_title', 'page_description', 'action'));

    }

    //TODO: Displaying error messages.
    public function add_impact()
    {
        $logo = "img/logo.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.impact.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_impact(Request $request)
    {

        $impact = new ImpactArea();
        $impact->name = $request->input('name');
        $impact->slug = $request->input('slug');
        $impact->save();

        return redirect('/impact_areas')->with('status', 'Impact Area added successfully.');

    }
    public function edit_impact($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Impact Areas';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $impact = ImpactArea::find($id);


        return view('settings.impact.edit', compact('logo', 'page_title', 'page_description', 'action', 'impact'));

    }
    public function update_impact(Request $request, $id)
    {

        $impact = ImpactArea::find($id);
        $impact->name = $request->input('name');
        $impact->slug = $request->input('slug');
        $impact->update();


        return redirect('/impact_areas')->with('status', 'Impact Area updated successfully.');

    }
//TODO: Adding delete functions
}
