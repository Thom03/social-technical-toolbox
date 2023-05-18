<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cluster;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    //
    //
    public function cluster_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'Clusters';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $clusters = Cluster::all();



        return view('settings.cluster.index', compact('clusters','logo', 'page_title', 'page_description', 'action'));

    }

    public function add_cluster()
    {
        $logo = "img/logo.png";
        $page_title = 'Clusters';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('settings.cluster.add', compact('logo', 'page_title', 'page_description', 'action'));

    }

    public function insert_cluster(Request $request)
    {

        $cluster = new cluster();
        $cluster->name = $request->input('name');
        $cluster->slug = $request->input('slug');
        $cluster->save();

        return redirect('/cluster')->with('status', 'Cluster has been added successfully.');

    }

    public function edit_cluster($id)
    {
        $logo = "img/logo.png";
        $page_title = 'clusters';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        $clusters = Cluster::find($id);


        return view('settings.cluster.edit', compact('logo', 'page_title', 'page_description', 'action', 'clusters'));
    }

    public function update_cluster(Request $request, $id)
    {

        $cluster = cluster::find($id);
        $cluster->name = $request->input('name');
        $cluster->slug = $request->input('slug');
        $cluster->update();


        return redirect('/cluster')->with('status', 'Cluster updated successfully.');

    }

    //TODO: Adding delete functions
}
