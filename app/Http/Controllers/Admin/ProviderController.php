<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    //
    public function provider_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Providers';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $providers = Provider::all();

        return view('settings.provider.index', compact('providers','logo', 'page_title', 'page_description', 'action'));

    }

    public function add_provider()
    {
        $logo = "img/logo.png";
        $page_title = 'Providers';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.provider.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_provider(Request $request)
    {

        $provider = new provider();
        $provider->identifier = $request->input('identifier');
        $provider->name = $request->input('name');
        $provider->url = $request->input('url');
        $provider->save();

        return redirect('/provider')->with('status', 'Provider has been added successfully.');

    }

    public function edit_provider($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Providers';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $providers = provider::find($id);


        return view('settings.provider.edit', compact('logo', 'page_title', 'page_description', 'action', 'providers'));
    }

    public function update_provider(Request $request, $id)
    {

        $provider = provider::find($id);
        $provider->identifier = $request->input('identifier');
        $provider->name = $request->input('name');
        $provider->url = $request->input('url');
        $provider->update();


        return redirect('/provider')->with('status', 'Provider updated successfully.');

    }

    //TODO: Adding delete functions
}
