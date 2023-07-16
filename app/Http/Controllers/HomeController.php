<?php

namespace App\Http\Controllers;

use App\Models\AdministrativeBoundary;
use App\Models\Cluster;
use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\Provider;
use App\Models\Region;
use App\Models\TechPrac;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Geocoder\Geocoder;


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
        $page_description = 'Social-Technical Innovation Bundles';
        $logo = "imig/logo.png";
        $logoText = "img/logo-text.png";
        $action = __FUNCTION__;
        $dataset_count = Dataset::all()->count();

//        $datasets = Dataset::with('impactAreas')->get();
//        $impactAreas = ImpactArea::withCount('datasets')->get();
        $nutrition_impact = ImpactArea::where('id', '1')->withCount('datasets')->first();
        $climate_impact = ImpactArea::where('id', '2')->withCount('datasets')->first();
        $gender_impact = ImpactArea::where('id', '3')->withCount('datasets')->first();
        $poverty_impact = ImpactArea::where('id', '4')->withCount('datasets')->first();
        $environment_impact = ImpactArea::where('id', '5')->withCount('datasets')->first();

        $publishedCount = Dataset::where('status', 'published')->count();
        $unpublishedCount = Dataset::where('status', 'unpublished')->count();




        return view('dashboard.index', compact('page_title', 'nutrition_impact', 'dataset_count', 'gender_impact','poverty_impact', 'environment_impact',
            'climate_impact', 'publishedCount', 'unpublishedCount','page_description','action','logo','logoText'));
    }

    private $geocoder;

    public function __construct(Geocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    function getCountriesJson()
    {
        $administrativeBoundaries = AdministrativeBoundary::all();

        $countryList = $administrativeBoundaries->map(function ($item) {
            $dataset = Dataset::find($item->dataset_id);
            $datasetTitle = $dataset ? $dataset->title : null;
            return [
                'country' => $item->country,
                'admin_bound_1' => $item->admin_bound_1,
                'dataset_title' => $datasetTitle,

            ];
        })->toArray();
        $json = json_encode($countryList);

        return response($json)->header('Content-Type', 'application/json');

    }

    //    List of system users
    public function map_page(Geocoder $geocoder)
    {
        $logo = "img/logo.png";
        $page_title = 'Map Page';
        $page_description = 'Social-Technical Innovation Bundles.';

        $action = __FUNCTION__;


        return view('map', compact('logo','page_title', 'page_description','action',));
    }

    public function dataset_list()
    {
        $page_title = 'Dataset Lists';
        $page_description = 'Social-Technical Innovation Bundles.';
        $logo = "img/logo.png";
        $logoText = "images/logo-text.png";

        $action = __FUNCTION__;

        return view('datasets.datasetlist', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function landing_page()
    {
        $logo = "img/logo.png";
        $page_title = 'Home Page';
        $page_description = 'Social-Technical Innovation Bundles.';
        $action = __FUNCTION__;
        $dataset = Dataset::where('status', 'published')->get();
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();


        return view('home-list', compact('dataset', 'dataset_count','region_count','cluster_count','country_count','logo','page_title', 'page_description','action'));
    }

    public function landing_page_grid()
    {
        $logo = "img/logo.png";
        $page_title = 'Home Page';
        $page_description = 'Social-Technical Innovation Bundles.';
        $action = __FUNCTION__;
        $dataset = Dataset::where('status', 'published')->get();
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();


        return view('home-grid', compact('dataset', 'dataset_count','region_count', 'cluster_count', 'country_count','logo','page_title', 'page_description','action'));
    }
    public function bundle_detail($id, Dataset $dataset)
    {
        $logo = "img/logo.png";
        $page_title = 'Details Page';
        $page_description = 'Social-Technical Innovation Bundles.';

        $action = __FUNCTION__;
        $datasets = Dataset::find($id);
        $impactAreas = ImpactArea::all();
        $innovations = Innovation::all();
        $techPracs = TechPrac::all();
        $adminBoundaries = AdministrativeBoundary::where('dataset_id', $id)->get();
        $providers = Provider::all();
        $regions = Region::all();


        return view('bundlee', compact('datasets','impactAreas','innovations', 'dataset','techPracs', 'adminBoundaries','logo','page_title', 'page_description', 'providers', 'action'));
    }



    public function graphs_page()
    {
        $logo = "img/logo.png";
        $page_title = 'Graph Pahe';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();

        $datasets = Dataset::orderBy('release_year')->get();


        return view('graphs', compact('datasets','dataset_count','region_count', 'cluster_count', 'country_count', 'logo','page_title', 'page_description','action'));
    }




}
