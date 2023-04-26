<?php

use App\Http\Controllers\Admin\ImpactAreaController;
use App\Http\Controllers\Admin\InnovationController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TechPracController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\DatasetController;
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
Route::get('/2', [HomeController::class, 'landing_page'])->name('landing_page');
Route::get('/', [HomeController::class, 'landing_page_grid'])->name('landing_page_grid');
Route::get('/bundle_detail/{id}', [HomeController::class, 'bundle_detail'])->name('bundle_detail');
Route::get('/map', [HomeController::class, 'map_page'])->name('map_page');

Auth::routes();
//Route::post('insert_impact', [ImpactAreaController::class, 'insert_impact'])->name('insert_impact');

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




});
