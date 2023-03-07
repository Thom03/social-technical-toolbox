<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    //
    public function theme_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Themes';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        $theme = Theme::all();

        return view('settings.themes.index', compact('theme','logo', 'page_title', 'page_description', 'action'));

    }

    public function add_theme()
    {
        $logo = "img/logo.png";
        $page_title = 'Themes';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.themes.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_theme(Request $request)
    {

        $theme = new Theme();
        $theme->slug = $request->input('slug');
        $theme->name = $request->input('name');
        $theme->save();

        return redirect('/theme_list')->with('status', 'Theme added successfully.');

    }

//    TODO: Adding theme update function.

}
