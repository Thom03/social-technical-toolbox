<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Innovation;
use Illuminate\Http\Request;

class InnovationController extends Controller
{
    //
    public function innovation_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Innovations';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $innovations = Innovation::all();


//        $users = User::latest()->paginate(10);
        return view('settings.innovations.index', compact('innovations','logo', 'page_title', 'page_description', 'action'));

    }

    public function add_innovation()
    {
        $logo = "img/logo.png";
        $page_title = 'Innovations';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.innovations.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_innovation(Request $request)
    {

        $innovation = new Innovation();
        $innovation->name = $request->input('name');
        $innovation->slug = $request->input('slug');
        $innovation->save();

        return redirect('/innovation')->with('status', 'Social Innovation has been added successfully.');

    }

    public function edit_innovation($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Innovations';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $innovations = Innovation::find($id);


        return view('settings.innovations.edit', compact('logo', 'page_title', 'page_description', 'action', 'innovations'));
    }

    public function update_innovation(Request $request, $id)
    {

        $innovation = Innovation::find($id);
        $innovation->name = $request->input('name');
        $innovation->slug = $request->input('slug');
        $innovation->update();


        return redirect('/innovation')->with('status', 'Innovation updated successfully.');

    }

    //TODO: Adding delete functions
}
