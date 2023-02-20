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


//        $users = User::latest()->paginate(10);
        return view('settings.impact.index', compact('logo', 'page_title', 'page_description', 'action'));

    }

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

        return redirect('/dashboard')->with('status', 'Impact Area added successfully.');

    }

}
