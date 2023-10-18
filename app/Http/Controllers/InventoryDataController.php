<?php

namespace App\Http\Controllers;

use App\Imports\InventoryDataImport;
use App\Models\InventoryData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InventoryDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventory_data_list()
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'Datasets';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        $dataset = InventoryData::all();



        return view('inventory.index', compact('dataset',  'logo', 'logoText', 'page_title', 'page_description', 'action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function upload_inventory_data_form(Request $request)
    {
        $logo = "img/logo.png";
        $logoText = "img/logo-text.png";
        $page_title = 'upload Inventory Data';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;



        return view('inventory.upload', compact('logo', 'logoText', 'page_title', 'page_description', 'action'));

    }


    public function upload_inventory_data(Request $request)
    {

        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx',
        ]);

        $file = $request->file('excel_file');

        Excel::import(new InventoryDataImport, $file);



        return redirect('/inventory_data_list')->with('success', 'Inventory Data uploaded and processed successfully');

    }
}
