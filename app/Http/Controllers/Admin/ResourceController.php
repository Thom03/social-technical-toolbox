<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceHub;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resource_list()
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Resource Hub';
        $page_description = 'Resource Hub';

        $action = __FUNCTION__;
        $workshopReportsCount = ResourceHub::where('type', 'Workshop Reports')->count();
        $blogsCount = ResourceHub::where('type', 'Blogs')->count();
        $videosCount = ResourceHub::where('type', 'Videos')->count();
        $workingPapersCount = ResourceHub::where('type', 'Working Papers')->count();
        $frameworksCount = ResourceHub::where('type', 'Frameworks, Guides & Instruments')->count();
        $trainingManualsCount = ResourceHub::where('type', 'Training Manuals')->count();

        $resource = ResourceHub::paginate(12);


        return view('resources.index', compact('resource', 'workshopReportsCount', 'blogsCount', 'videosCount', 'workingPapersCount', 'frameworksCount','trainingManualsCount', 'logo', 'logoText', 'page_title', 'page_description', 'action'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_resource()
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Resource Hub';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('resources.add', compact( 'logo', 'logoText', 'page_title', 'page_description', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_resource(Request $request)
    {
        $resource = new ResourceHub();
        $resource->title = $request->input('title');
        $resource->authors = $request->input('authors');
        $resource->type = $request->input('type');
        $resource->description = $request->input('description');
        $resource->link = $request->input('link');
        $resource->image_link = $request->input('image_link');

        $resource->save();

        return redirect('/resourcelist')->with('status', 'Resource has been added successfully.');

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
