<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//        return view('home');
//    }

    // Dashboard
    public function dashboard_1()
    {

        $page_title = 'STBIS';
        $page_description = 'Some description for the page';
        $logo = "imig/logo.png";
        $logoText = "img/logo-text.png";
        $action = __FUNCTION__;

        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
    }

    //    List of system users
    public function map_page()
    {
        $logo = "img/logo.png";
        $page_title = 'Map Page';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('map', compact('logo','page_title', 'page_description','action'));
    }

    public function dataset_list()
    {
        $page_title = 'Dataset Lists';
        $page_description = 'Some description for the page';
        $logo = "img/logo.png";
        $logoText = "images/logo-text.png";

        $action = __FUNCTION__;

        return view('datasets.datasetlist', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function landing_page()
    {
        $logo = "img/logo.png";
        $page_title = 'Home Page';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $dataset = Dataset::all();

        $dataset_count = Dataset::all()->count();
        $open_count = Dataset::where('access', 'open')->count();
        $limited_count = Dataset::where('access', 'limited')->count();


        return view('home', compact('dataset', 'dataset_count','open_count','limited_count','logo','page_title', 'page_description','action'));
    }
    public function bundle_detail($id)
    {
        $logo = "img/logo.png";
        $page_title = 'Home Page';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $datasets = Dataset::find($id);
        return view('bundle', compact('datasets', 'logo','page_title', 'page_description','action'));
    }



}
