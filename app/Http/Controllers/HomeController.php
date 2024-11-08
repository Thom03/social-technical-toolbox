<?php

namespace App\Http\Controllers;

use App\Events\UpdateCoordinatesEvent;
use App\Models\AdministrativeBoundary;
use App\Models\Cluster;
use App\Models\Dataset;
use App\Models\ImpactArea;
use App\Models\Innovation;
use App\Models\InventoryData;
use App\Models\Provider;
use App\Models\Region;
use App\Models\ResourceHub;
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

        $bundles = Dataset::count();
        $inventory_data = InventoryData::count();

        $totalCategoriesCount = Innovation::distinct()->count('category');

        $stibs_Count =  Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) >= ?', [$totalCategoriesCount])
            ->count();

        $non_stib_Count = Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) < ?', [$totalCategoriesCount])
            ->count();

        $total_dataset = $bundles + $inventory_data;




        return view('dashboard.index', compact('page_title', 'total_dataset', 'stibs_Count', 'non_stib_Count', 'inventory_data', 'nutrition_impact', 'bundles', 'dataset_count', 'gender_impact','poverty_impact', 'environment_impact',
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
            $datasetauthor = $dataset ? $dataset->author : null;
            $datasetyear = $dataset ? $dataset->release_year : null;

            $impactAreas = $dataset ? $dataset->impactAreas->pluck('name')->toArray() : [];
            $innovationsWithCategories = $dataset ? $dataset->innovations->map(function ($innovation) {
                // Assuming each innovation has a category property, adjust accordingly
                return [
                    'name' => $innovation->name,
                    'category' => $innovation->category // Adjust this according to your actual structure
                ];
            })->toArray() : [];




            return [
                'country' => $item->country,
                'admin_bound_1' => $item->admin_bound_1,
                'dataset_title' => $datasetTitle,
                'dataset_doi' => $datasetDOI,
                'dataset_author'=> $datasetauthor,
                'dataset_release_year'=> $datasetyear,
                'impactAreas' => $impactAreas,
                'innovationsWithCategories' => $innovationsWithCategories,



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

        $bundles = Dataset::where('status', 'published')->count();
        $inventory_data = InventoryData::count();

        $totalCategoriesCount = Innovation::distinct()->count('category');

        $stibs_Count =  Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) >= ?', [$totalCategoriesCount])
            ->count();

        $non_stib_Count = Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) < ?', [$totalCategoriesCount])
            ->count();

        $total_dataset = $bundles + $inventory_data;


        return view('map', compact('logo','page_title', 'bundles', 'inventory_data', 'stibs_Count', 'non_stib_Count', 'total_dataset','page_description','action',));
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

        $bundles = Dataset::count();
        $inventory_data = InventoryData::count();



        $totalCategoriesCount = Innovation::distinct()->count('category');

        $stibs_Count =  Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) >= ?', [$totalCategoriesCount])
            ->count();

        $non_stib_Count = Dataset::selectRaw('COUNT(*) as aggregate')
            ->join('dataset_innovation', 'datasets.id', '=', 'dataset_innovation.dataset_id')
            ->join('innovations', 'dataset_innovation.innovation_id', '=', 'innovations.id')
            ->groupBy('datasets.id')
            ->havingRaw('COUNT(DISTINCT innovations.category) < ?', [$totalCategoriesCount])
            ->count();

        $total_dataset =  $inventory_data + $stibs_Count + $non_stib_Count;

        $impactAreas = ImpactArea::all();

        $providers = Provider::all();

        // Initialize an array to store dataset counts for each impact area
        $datasetCounts = [];
        $datasetPCounts = [];

        // Loop through each impact area
        foreach ($impactAreas as $impactArea) {
            // Retrieve the dataset counts for the current impact area
            $datasetCount = Dataset::whereHas('impactAreas', function ($query) use ($impactArea) {
                $query->where('impact_area_id', $impactArea->id);
            })->count();

            // Store the dataset count for the current impact area
            $datasetCounts[] = $datasetCount;
        }

        foreach ($providers as $provider){
            $datasetPCount = Dataset::whereHas('providers', function ($query) use ($provider){
                $query->where('provider_id', $provider->id);
            })->count();

            $datasetPCounts[] = $datasetPCount;
        }

        $inventorySources = InventoryData::select('inventory_source', \DB::raw('count(*) as count'))
            ->groupBy('inventory_source')
            ->get();





        return view('graphs', compact('datasets', 'total_dataset', 'bundles', 'stibs_Count', 'non_stib_Count', 'datasetCounts', 'impactAreas', 'providers', 'datasetPCounts', 'inventorySources', 'inventory_data', 'clusters', 'dataset_count','region_count', 'cluster_count', 'country_count', 'logo','page_title', 'page_description','action'));
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


    public function landing_page_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'STIBs List Diplay';
        $page_description = 'Social-Technical Innovation Bundles.';
        $action = __FUNCTION__;


        $query = Dataset::where('status', 'published');

        if ($request->has('sk') && !empty($request->sk)) {
            $searchTerm = $request->sk;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('author', 'like', '%' . $searchTerm . '%')
                    ->orWhere('release_year', 'like', '%' . $searchTerm . '%')
                    ->orWhere('source', 'like', '%' . $searchTerm . '%')
                    ->orWhere('access', 'like', '%' . $searchTerm . '%')
                    ->orWhere('license', 'like', '%' . $searchTerm . '%')
                    ->orWhere('contact', 'like', '%' . $searchTerm . '%')
                    ->orWhere('DOI', 'like', '%' . $searchTerm . '%')
                    ->orWhere('collection_period', 'like', '%' . $searchTerm . '%')
                    ->orWhere('data_type', 'like', '%' . $searchTerm . '%')
                    ->orWhere('methods', 'like', '%' . $searchTerm . '%')
                    ->orWhere('resillience_indicators', 'like', '%' . $searchTerm . '%')
                    ->orWhere('observations', 'like', '%' . $searchTerm . '%');
            });
        }
        $dataset = $query->paginate(15);


        return view('display-bundle-list', compact('dataset', 'logo','page_title', 'page_description','action'));
    }


    public function inventory_dataset_list()
    {
        $logo = "img/logo.png";
        $page_title = 'Inventory Data List Page';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;
        $dataset_count = Dataset::where('status', 'published')->count();
        $region_count = Region::count();
        $country_count = AdministrativeBoundary::distinct('country')->count('country');
        $cluster_count = Cluster::count();

        $dataset = InventoryData::paginate(100);


        return view('inventory-data-list', compact('dataset',  'dataset_count','region_count', 'cluster_count', 'country_count', 'logo','page_title', 'page_description','action'));
    }

    public function getllabs()
    {
        $path = storage_path('app/public/counties.geojson');
        $geoJson = file_get_contents($path);
        return response()->json(json_decode($geoJson));

    }


    public function learning_labs()
    {
        $logo = "img/logo.png";
        $page_title = 'Learning Page';
        $page_description = 'Social-Technical Innovation Bundles';
        $action = __FUNCTION__;


        return view('learning', compact( 'logo','page_title', 'page_description','action'));

    }

    public function resource_hub(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'STIBs Resource HUB';
        $page_description = 'STIBs Resource HUB.';
        $action = __FUNCTION__;

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

        $workshopReportsCount = ResourceHub::where('type', 'Workshop Reports')->count();
        $blogsCount = ResourceHub::where('type', 'Blog')->count();
        $videosCount = ResourceHub::where('type', 'LIKE', '%Video%')->count();
        $workingPapersCount = ResourceHub::where('type', 'Working Paper')->count();
        $frameworksCount = ResourceHub::where('type', 'Frameworks, Guides & Instruments')->count();
        $trainingManualsCount = ResourceHub::where('type', 'Training Manuals')->count();

        $resource = ResourceHub::paginate(12);

        return view('resource_hub', compact('resource','workshopReportsCount', 'blogsCount', 'videosCount', 'workingPapersCount', 'frameworksCount', 'trainingManualsCount','dataset', 'dataset_count', 'logo', 'page_title', 'page_description', 'action', 'regions', 'impactAreas', 'clusters'));
    }


}
