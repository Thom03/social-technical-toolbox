<?php

use App\Http\Controllers\Admin\ImpactAreaController;
use App\Http\Controllers\Admin\RegionController;
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
Route::get('/', [HomeController::class, 'landing_page'])->name('landing_page');


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

    //    Region Routes
    Route::get('region_list', [RegionController::class, 'region_list'])->name('region_list');
    Route::get('add_region', [RegionController::class, 'add_region'])->name('add_region');
    Route::get('insert_region', [RegionController::class, 'insert_region'])->name('insert_region');


    //    Themes Routes
    Route::get('theme_list', [ThemeController::class, 'theme_list'])->name('theme_list');
    Route::get('add_theme', [ThemeController::class, 'add_theme'])->name('add_theme');
    Route::get('insert_theme', [ThemeController::class, 'insert_theme'])->name('insert_theme');



    //Datasets Routes
    Route::get('datasetlist', [HomeController::class, 'dataset_list'])->name('dataset_list');



});
