<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechPrac;
use Illuminate\Http\Request;

class TechPracController extends Controller
{
    //
    public function techprac_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Technology Practices';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $techpracs = TechPrac::paginate(20);

        return view('settings.techpract.index', compact('techpracs','logo', 'page_title', 'page_description', 'action'));

    }

    public function add_techprac()
    {
        $logo = "img/logo.png";
        $page_title = 'Technology Practices';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.techpract.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_techprac(Request $request)
    {

        $techprac = new TechPrac();
        $techprac->name = $request->input('name');
        $techprac->description = $request->input('description');
        $techprac->slug = $request->input('slug');
        $techprac->save();

        return redirect('/techprac')->with('status', 'Technology or Practice has been added successfully.');

    }

    public function edit_techprac($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Innovations';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $techpracs = TechPrac::find($id);


        return view('settings.techpract.edit', compact('logo', 'page_title', 'page_description', 'action', 'techpracs'));
    }

    public function update_techprac(Request $request, $id)
    {

        $techprac = TechPrac::find($id);
        $techprac->name = $request->input('name');
        $techprac->description = $request->input('description');
        $techprac->slug = $request->input('slug');
        $techprac->update();


        return redirect('/techprac')->with('status', 'Technology/Practice updated successfully.');

    }


    public function delete_techprac($id)
    {
        $techPrac = TechPrac::find($id);

        if (!$techPrac) {
            return redirect('/techprac')->with('error', 'Technology or Practice not found.');
        }

        // Detach the relationship with datasets
        $techPrac->datasets()->detach();

        // Delete the record
        $techPrac->delete();

        return redirect('/techprac')->with('status', 'Technology or Practice has been deleted successfully.');

    }

    //TODO: Adding delete functions
}
