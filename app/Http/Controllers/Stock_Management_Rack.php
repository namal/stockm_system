<?php

namespace App\Http\Controllers;

use App\Models\Stock_Manage_Rack;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class Stock_Management_Rack extends Controller
{
    // public function index() {
    //     $racks = Stock_Manage_Rack::all();
    //     return view('/stock_management_view.stock_management_view_rack', ['racks'=>$racks]);
    // }

    public function show_rack()
    {
        // Alert::success('Success Title', 'Success Message');
        $racks = Stock_Manage_Rack::paginate(2);
        return view('admin.rack.stock_manage_view_rack', compact('racks'));
    }

    public function getRackCompanies()
    {
        $companies = DB::table('location')
            ->pluck("location", "location_id");
        return view('admin.rack.stock_manage_create_rack', compact('companies'));
    }

    public function create_rack()
    {
        // Alert::success('Success Title', 'Success Message');
        return view('admin.rack.stock_manage_create_rack');
    }


    public function store_rack(Request $request)
    {
        // Alert::success('Success', 'Saved Successfully');
        // Alert::success('Success Title', 'Success Message');
        // if ($request->racompany === "good") {
        //     Alert::success('Success!', session('success_msg'));
        // } else {
        //     // Alert::danger('Error!', session('error_msg'));
        // }

        $this->validate($request, [
            'racompany' => 'required',
            'rarackName' => 'required',
            'ranote' => 'required'
        ]);
        $racks = new Stock_Manage_Rack();
        $racks->racompany = $request->racompany;
        $racks->rarackName = $request->rarackName;
        $racks->ranote = $request->ranote;
        $racks->save();
        // if ($request->racompany != null) {
        //     Alert::success('Success!', session('success_msg'));
        //     return redirect(url('/create-rack'));
        // } else {
        //     Alert::danger('Error!', session('error_msg'));
        // }
        Alert::success('Successfully saved', 'Success Message');
        return redirect(url('/create-rack'));
        // return redirect(url('/create-rack'))->withInput();
        // return redirect('form')->withInput();
    }

    function select_country()
    {
        $companies = DB::table('location')->pluck("location", "location_id");
        return view('admin.rack.stock_manage_create_rack', compact('companies'));
        //echo $companies;
    }

    function search_company(Request $request)
    {
        $searchcompany = $request['scompany'];
        $racks = DB::table('stock__manage__racks')
            ->where('racompany', [$searchcompany])
            ->get();
        return view('admin.rack.stock_manage_view_rack', ['racks' => $racks]);
    }

    function search_rackname(Request $request)
    {
        //notworking
        $searchrack = $request['srackName'];
        $racks = DB::table('stock__manage__racks')
            ->where('rarackName', [$searchrack])
            ->get();
        return view('admin.rack.stock_manage_view_rack', ['racks' => $racks]);
    }

    public function edit_rack($id)
    {
        $racks = Stock_Manage_Rack::find($id);
        // return redirect(url('/view-rack--'));
        return view('admin.rack.stock_manage_edit_rack', compact('racks'));
    }

    public function update_rack(Request $request, $id)
    {
        // alert()->success('SuccessAlert', 'Lorem ipsum dolor sit amet.');
        // Alert::success('Success', 'Saved Successfully');
        $this->validate($request, [
            'racompany' => 'required',
            'rarackName' => 'required',
            'ranote' => 'required'
        ]);
        $racks = Stock_Manage_Rack::find($id);
        $racks->racompany = $request->racompany;
        $racks->rarackName = $request->rarackName;
        $racks->ranote = $request->ranote;
        $racks->save();
        return redirect(url('/view-rack_all'));
    }

    public function delete_rack($id)
    {
        Stock_Manage_Rack::find($id)->delete();
        return redirect(url('/view-rack_all'));
    }

    public function showDropdown()
    {
        $racks = DB::table('stock__manage__racks')::pluck('racompany', 'id');
        $racompany = 'racompany';
        return view('admin.rack.stock_manage_view_rack', compact('id', 'racks'));
    }

    public function showDropdown1()
    {
        $racks = Stock_Manage_Rack::pluck('rarackName', 'id');
        $racompany = 'rarackName';
        return view('admin.rack.stock_manage_view_rack', compact('id', 'racks'));
    }
}
