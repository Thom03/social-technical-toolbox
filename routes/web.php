<?php

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

#Route::get('/userlist', [HomeController::class, 'user_list'])->name('user_list');
Route::get('/datasetlist', [HomeController::class, 'dataset_list'])->name('dataset_list');



Route::group(['middleware' => ['auth']], function (){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class );
//    Route::resource('/userlist', [UserController::class, 'user_list'])->name('user_list');
    Route::resource('datasets', DatasetController::class );
});

Route::group(['namespace' => 'App\Http\Controllers'], function ()
{
//    Home Routes
    Route::get('/', 'HomeController@landing_page')->name('landing_page');
    Route::get('/dashboard', 'HomeController@dashboard_1')->name('dashboard');

//    Auth Routes
    Auth::routes();





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


//    User Routes
    Route::group(['middleware' => ['auth', 'permission']], function (){

//        Route::get('/userlist', [UserController::class, 'user_list'])->name('user_list');




    });
});
