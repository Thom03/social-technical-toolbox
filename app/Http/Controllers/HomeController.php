<?php

namespace App\Http\Controllers;

use App\Events\UpdateCoordinatesEvent;
use App\Models\AdministrativeBoundary;
use App\Models\Cluster;
use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\Provider;
use App\Models\Region;
use App\Models\TechPrac;
use GeoJson\GeoJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\Geocoder\Geocoder;
use Grimzy\LaravelMysqlSpatial\Types\Geometry;





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
            $datasetDOI = $dataset ? $dataset->DOI : null;


            return [
                'country' => $item->country,
                'admin_bound_1' => $item->admin_bound_1,
                'dataset_title' => $datasetTitle,
                'dataset_doi' => $datasetDOI,



            ];
        })->toArray();
        $json = json_encode($countryList, JSON_PRETTY_PRINT);

        return response($json)->header('Content-Type', 'application/json');

    }

    //    List of system users
    public function map_page(Geocoder $geocoder)
    {
        $logo = "img/logo.png";
        $page_title = 'Homepage';
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

//    public function landing_page()
//    {
//        $logo = "img/logo.png";
//        $page_title = 'Home Page';
//        $page_description = 'Social-Technical Innovation Bundles.';
//        $action = __FUNCTION__;
//        $dataset = Dataset::where('status', 'published')->get();
//        $dataset_count = Dataset::where('status', 'published')->count();
//        $region_count = Region::count();
//        $country_count = AdministrativeBoundary::distinct('country')->count('country');
//        $cluster_count = Cluster::count();
//
//
//        return view('home-list', compact('dataset', 'dataset_count','region_count','cluster_count','country_count','logo','page_title', 'page_description','action'));
//    }

    public function landing_page_grid(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'STIBs Grid Display Page';
        $page_description = 'Social-Technical Innovation Bundles.';
        $action = __FUNCTION__;
        $region_count = Region::count();
        $cluster_count = Cluster::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');

        $searchQuery = $request->input('search');
        $regionFilter = $request->input('region');
        $impactAreaFilter = $request->input('impact_area');
        $clusterFilter = $request->input('cluster');

        $query = Dataset::where('status', 'published');

        if ($searchQuery) {
            $query->where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', "%$searchQuery%")
                    ->orWhere('author', 'like', "%$searchQuery%")
                    ->orWhere('release_year', 'like', "%$searchQuery%");
                // Add more columns to search here
            });
        }

        if ($regionFilter) {
            // Filter by Region
            $query->whereHas('regions', function ($query) use ($regionFilter) {
                $query->where('regions.id', $regionFilter);
            });
        }

        if ($impactAreaFilter) {
            // Filter by Impact Area
            $query->whereHas('impactAreas', function ($query) use ($impactAreaFilter) {
                $query->where('impact_areas.id', $impactAreaFilter);
            });
        }

        if ($clusterFilter) {
            // Filter by Cluster
            $query->whereHas('clusters', function ($query) use ($clusterFilter) {
                $query->where('clusters.id', $clusterFilter);
            });
        }

        $dataset = $query->paginate(12);
        $dataset_count = $dataset->total(); // Get the total count of filtered results

        // Assuming you have a Region model to get the list of regions
        $regions = Region::all();
        $impactAreas = ImpactArea::all();
        $clusters = Cluster::all();

        return view('home-grid', compact('dataset', 'dataset_count', 'region_count', 'cluster_count', 'country_count', 'logo', 'page_title', 'page_description', 'action', 'regions', 'impactAreas', 'clusters'));
    }
    public function bundle_detail($id, Dataset $dataset)
    {
        $logo = "img/logo.png";
        $page_title = 'STIB Bundle Details Page';
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
        $page_title = 'Infographics Page';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();

        $datasets = Dataset::orderBy('release_year')->get();

        $clusters = Cluster::withCount('datasets')->get();


        return view('graphs', compact('datasets', 'clusters', 'dataset_count','region_count', 'cluster_count', 'country_count', 'logo','page_title', 'page_description','action'));
    }

    public function about_page()
    {
        $logo = "img/logo.png";
        $page_title = 'About Page';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;

        return view('about', compact( 'logo','page_title', 'page_description','action'));
    }


    public function getGeometryGeoJson()
    {
        // Fetch all administrative boundaries
        $boundaries = AdministrativeBoundary::all();

        $geojsonFeatures = [];

        foreach ($boundaries as $boundary) {
            $geometry = DB::select("SELECT ST_AsGeoJSON(coordinates) as geojson FROM adminstrativeboundaries WHERE id = ?", [$boundary->id])[0]->geojson;
            $geometry = json_decode($geometry);

            $geojsonFeature = [
                'type' => 'Feature',
                'geometry' => $geometry,
                'properties' => [
                    'id' => $boundary->id, // You can add more properties here
                    'country' => $boundary->country,
                ],
            ];

            $geojsonFeatures[] = $geojsonFeature;
        }

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => $geojsonFeatures,
        ];

        return response()->json($geojson);
    }

    public function updateNullCoordinates()
    {
        $countriesWithNullCoordinates = AdministrativeBoundary::whereNull('coordinates')->get();

        foreach ($countriesWithNullCoordinates as $country) {
            // Dispatch the UpdateCoordinatesEvent for each country
            event(new UpdateCoordinatesEvent($country->country_id));
        }

        return response()->json(['message' => 'Update coordinates events dispatched for countries with null coordinates']);
    }


    public function landing_page_list()
    {
        $logo = "img/logo.png";
        $page_title = 'STIBs List Diplay';
        $page_description = 'Social-Technical Innovation Bundles.';
        $action = __FUNCTION__;

        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();

        $query = Dataset::where('status', 'published');
        $dataset = $query->paginate(15);




        return view('display-bundle-list', compact('dataset', 'dataset_count','region_count','cluster_count','country_count','logo','page_title', 'page_description','action'));
    }


    public function inventory_dataset_list()
    {
        $logo = "img/logo.png";
        $page_title = 'Infographics Page';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();

        $datasets = Dataset::orderBy('release_year')->get();

        $clusters = Cluster::withCount('datasets')->get();


        return view('inventory-data-list', compact('datasets', 'clusters', 'dataset_count','region_count', 'cluster_count', 'country_count', 'logo','page_title', 'page_description','action'));
    }



}
