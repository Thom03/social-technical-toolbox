<?php

use App\Http\Controllers\Admin\ClusterController;
use App\Http\Controllers\Admin\ImpactAreaController;
use App\Http\Controllers\Admin\InnovationController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\TechPracController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Api\APIController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\InventoryDataController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//    Home Routes
//Route::get('/2', [HomeController::class, 'landing_page'])->name('landing_page');
Route::get('/1', [HomeController::class, 'landing_page_grid'])->name('landing_page_grid');
Route::get('/bundle_detail/{id}', [HomeController::class, 'bundle_detail'])->name('bundle_detail');
Route::get('/interactive_maps', [HomeController::class, 'map_page'])->name('map_page');
Route::get('/countries-json', [HomeController::class, 'getCountriesJson'])->name('countries-json');
Route::get('/graphs', [HomeController::class, 'graphs_page'])->name('graphs');
Route::get('/about-us', [HomeController::class, 'about_page'])->name('about_us');
Route::get('/getcountrygeojson', [HomeController::class, 'getGeometryGeoJson'])->name('getcountrygeojson');
Route::get('/update-null-coordinates', [HomeController::class, 'updateNullCoordinates'])->name('update-null-coordinates');


Route::get('/display-bundle-list', [HomeController::class, 'landing_page_list'])->name('display-bundle-list');
Route::get('/inventory-data', [HomeController::class, 'inventory_dataset_list'])->name('inventory-data-list');

Route::get('/landing-page-list', [HomeController::class, 'landing_page_list'])->name('landing_page_list');

Route::get('/llabsjson', [HomeController::class, 'getllabs'])->name('getllabs');

Route::get('/learning_labs', [HomeController::class, 'learning_labs'])->name('learning_labs');

Route::get('/', [HomeController::class, 'resource_hub'])->name('resource_hub');

Auth::routes();



//API Routes
Route::get('api/v1/datasets', [APIController::class, 'getDatasets']);

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', [HomeController::class, 'dashboard_1'])->name('dashboard');


//    User Routes
    Route::get('/userlist', [UserController::class, 'user_list'])->name('user_list');
    Route::get('/{user}/edituser', [UserController::class, 'edit_user'])->name('edit_user');
    Route::patch('/{user}/updateuser', [UserController::class, 'update_user'])->name('update_user');

//    Permission Routes
    Route::get('/permissionlist', [PermissionsController::class, 'permission_list'])->name('permission_list');

//    Roles Routes
    Route::get('/rolelist', [RoleController::class, 'role_list'])->name('role_list');
    Route::get('/{role}/editrole', [RoleController::class, 'edit_role'])->name('edit_role');
    Route::patch('/{role}/updaterole', [RoleController::class, 'update_role'])->name('update_role');


    //    Impact Areas Routes
    Route::get('impact_areas', [ImpactAreaController::class, 'impact_list'])->name('impact_list');
    Route::get('add_impact', [ImpactAreaController::class, 'add_impact'])->name('add_impact');
    Route::get('insert_impact', [ImpactAreaController::class, 'insert_impact'])->name('insert_impact');
    Route::get('edit_impact/{id}', [ImpactAreaController::class, 'edit_impact'])->name('edit_impact');
    Route::get('update_impact/{id}', [ImpactAreaController::class, 'update_impact'])->name('update_impact');

    //    Innovation management Routes
    Route::get('innovation', [InnovationController::class, 'innovation_list'])->name('innovation_list');
    Route::get('add_innovation', [InnovationController::class, 'add_innovation'])->name('add_innovation');
    Route::get('insert_innovation', [InnovationController::class, 'insert_innovation'])->name('insert_innovation');
    Route::get('edit_innovation/{id}', [InnovationController::class, 'edit_innovation'])->name('edit_innovation');
    Route::get('update_innovation/{id}', [InnovationController::class, 'update_innovation'])->name('update_innovation');

    //    Technology/Practices Routes
    Route::get('techprac', [TechPracController::class, 'techprac_list'])->name('techprac_list');
    Route::get('add_techprac', [TechPracController::class, 'add_techprac'])->name('add_techprac');
    Route::get('insert_techprac', [TechPracController::class, 'insert_techprac'])->name('insert_techprac');
    Route::get('edit_techprac/{id}', [TechPracController::class, 'edit_techprac'])->name('edit_techprac');
    Route::get('update_techprac/{id}', [TechPracController::class, 'update_techprac'])->name('update_techprac');
    Route::delete('delete_techprac/{id}', [TechPracController::class, 'delete_techprac'])->name('delete_techprac');


    //    Region Routes
    Route::get('region_list', [RegionController::class, 'region_list'])->name('region_list');
    Route::get('add_region', [RegionController::class, 'add_region'])->name('add_region');
    Route::get('insert_region', [RegionController::class, 'insert_region'])->name('insert_region');


    //    Themes Routes
    Route::get('theme_list', [ThemeController::class, 'theme_list'])->name('theme_list');
    Route::get('add_theme', [ThemeController::class, 'add_theme'])->name('add_theme');
    Route::get('insert_theme', [ThemeController::class, 'insert_theme'])->name('insert_theme');



    //Datasets Routes
    Route::get('datasetlist', [DatasetController::class, 'dataset_list'])->name('dataset_list');
    Route::get('add_dataset', [DatasetController::class, 'add_dataset'])->name('add_dataset');
    Route::get('insert_dataset', [DatasetController::class, 'insert_dataset'])->name('insert_dataset');
    Route::get('datset_detail/{id}', [DatasetController::class, 'datset_detail'])->name('datset_detail');
    Route::get('edit_dataset/{id}', [DatasetController::class, 'edit_dataset'])->name('edit_dataset');
    Route::get('update_dataset/{id}', [DatasetController::class, 'update_dataset'])->name('update_dataset');
    Route::get('/search_dataset', [DatasetController::class, 'search_dataset'])->name('search_dataset');
//    Route::get('/datasets/filter/{filter}', 'DatasetController@filter')->name('datasets.filter');
    Route::get('/datasets/filter/{filter}', [DatasetController::class, 'filter'])->name('datasets.filter');
    Route::delete('delete_dataset/{id}', [DatasetController::class, 'delete_dataset'])->name('delete_dataset');
    Route::get('upload_dataset', [DatasetController::class, 'upload_dataset'])->name('upload_dataset');
    Route::get('geographic_info_list', [DatasetController::class, 'geographic_info_list'])->name('geographic_info_list');

    Route::get('edit_geographic_info/{id}', [DatasetController::class, 'edit_geographic_info'])->name('edit_geographic_info');
    Route::get('update_geographic_info/{id}', [DatasetController::class, 'update_geographic_info'])->name('update_geographic_info');



    //    Providers management Routes
    Route::get('provider', [ProviderController::class, 'provider_list'])->name('provider_list');
    Route::get('add_provider', [ProviderController::class, 'add_provider'])->name('add_provider');
    Route::get('insert_provider', [ProviderController::class, 'insert_provider'])->name('insert_provider');
    Route::get('edit_provider/{id}', [ProviderController::class, 'edit_provider'])->name('edit_provider');
    Route::get('update_provider/{id}', [ProviderController::class, 'update_provider'])->name('update_provider');


    //    Clusters management Routes
    Route::get('cluster', [ClusterController::class, 'cluster_list'])->name('cluster_list');
    Route::get('add_cluster', [ClusterController::class, 'add_cluster'])->name('add_cluster');
    Route::get('insert_cluster', [ClusterController::class, 'insert_cluster'])->name('insert_cluster');
    Route::get('edit_cluster/{id}', [ClusterController::class, 'edit_cluster'])->name('edit_cluster');
    Route::get('update_cluster/{id}', [ClusterController::class, 'update_cluster'])->name('update_cluster');


    //Inventory Datasets Routes
    Route::get('/upload_inventory_data_form', [InventoryDataController::class, 'upload_inventory_data_form'])->name('upload_iventory_data_form');
    Route::post('/upload_inventory_data', [InventoryDataController::class, 'upload_inventory_data'])->name('upload_inventory_data');
    Route::get('/inventory_data_list', [InventoryDataController::class, 'inventory_data_list'])->name('inventory_data_list');


    Route::get('resourcelist', [ResourceController::class, 'resource_list'])->name('resource_list');
    Route::get('add_resource', [ResourceController::class, 'add_resource'])->name('add_resource');
    Route::get('insert_resource', [ResourceController::class, 'insert_resource'])->name('insert_resource');




});
