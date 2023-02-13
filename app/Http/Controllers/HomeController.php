<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // Dashboard
    public function dashboard_1()
    {

        $page_title = 'STBIS';
        $page_description = 'Some description for the page';
        $logo = "img/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;

        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
    }

    //    List of system users
    public function user_list()
    {
        $logo = "img/logo.png";
        $page_title = 'User List';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

        return view('usermanagement.userlist', compact('logo','page_title', 'page_description','action'));
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


}
