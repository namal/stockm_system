<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Stock_Manage_Bin;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class Stock_Management_Bin extends Controller
{
    public function show_bin()
    {
        //alert()->success('SuccessAlert', 'Lorem ipsum dolor sit amet.');
        $bins = Stock_Manage_Bin::paginate(25)->withQueryString();
        return view('admin.bin.stock_manage_view_bin', compact('bins'));
    }

    public function getBinCompanies()
    {
        $bc_list = DB::table('stock__manage__racks')
            ->groupBy("racompany")
            ->get();
        return view('admin.bin.stock_manage_create_bin')
            ->with('bc_list', $bc_list);
        // echo $bc_list;
    }

    // public function getRacks()
    // {
    //     $bins = DB::table('stock__manage__racks')->pluck("rarackName", "id");
    //     return view('admin.bin.stock_manage_create_bin', compact('bins'));
    // }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('stock__manage__racks')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">
            ' . $row->$dependent . '</option>';
        }
        echo $output;
    }


    // function select_company()
    // {
    //     $companies = DB::table('location')->pluck("location", "location_id");
    //     return view('admin.bin.stock_manage_create_bin', compact('companies'));
    //     //echo $companies;
    // }

    public function create_bin()
    {
        // alert()->success('SuccessAlert', 'Lorem ipsum dolor sit amet.');
        // if (session('success_msg')) {
        //     Alert::success('Successfully saved!', session('success_msg'));
        // } else {
        //     Alert::warning('Something has gone wrong', 'Warning Message');
        // }
        return view('admin.bin.stock_manage_create_bin');
    }

    public function store_bin(Request $request)
    {
        //Alert::success('Success!', 'Saved Successfully');
        $this->validate($request, [
            'bicompany' => 'required',
            'birack' => 'required',
            'bibinName' => 'required',
            'binote' => 'required'
        ]);
        $bins = new Stock_Manage_Bin();
        $bins->bicompany = $request->bicompany;
        $bins->birack = $request->birack;
        $bins->bibinName = $request->bibinName;
        $bins->binote = $request->binote;
        $bins->save();
        // return redirect(url('/create-bin'));
        return redirect(url('/create-bin'))->withInput();
    }

    public function bin_search_with_company_rack(Request $request)
    {
        $search1 = $request['scompany'];
        $search2 = $request['srack'];

        $bins = DB::table('stock__manage__bins')
            ->whereBetween('bicompany', [$search1, $search2]);
        return view('admin.bin.stock_manage_view_bin', ['bins' => $bins]);
    }

    public function search_bin(Request $request)
    {
        $s1 = $request['srack'];

        $bins = DB::table('stock__manage__bins')
            ->where('birack' == [$s1]);
        return view('admin.bin.stock_manage_view_bin', ['bins' => $bins]);
    }

    function search_company(Request $request)
    {
        $searchcompany = $request['scompany'];
        $bins = DB::table('stock__manage__bins')
            ->where('bicompany', [$searchcompany])
            ->get();
        return view('admin.bin.stock_manage_view_bin', ['bins' => $bins]);
    }

    function search_rackname(Request $request)
    {
        //notworking
        $searchrack = $request['srackName'];
        $bins = DB::table('stock__manage__bins')
            ->where('birack', [$searchrack])
            ->get();
        return view('admin.bin.stock_manage_view_bin', ['bins' => $bins]);
    }

    /*===worked=== */
    function search_binname(Request $request)
    {
        //working
        $searchbin = $request['sbinName'];
        $bins = Stock_Manage_Bin::all();
        $searchbin = $bins->filter(function ($bin) {
            return $bin->sbinName;
        });
        //echo $bins;

        return view('admin.bin.stock_manage_view_bin', ['bins' => $bins]);
    }

    function searchBinname()
    {
        //worked
        $bins = Stock_Manage_Bin::get();
        return view('admin.bin.stock_manage_view_bin', compact('bins'));
    }

    public function edit_bin($id)
    {
        $bins = Stock_Manage_Bin::find($id);
        return view('admin.bin.stock_manage_edit_bin', compact('bins'));
    }

    public function update_bin(Request $request, $id)
    {
        //Alert::success('Successfully updated!', session('success_msg'));
        $this->validate($request, [
            'bicompany' => 'required',
            'birack' => 'required',
            'bibinName' => 'required',
            'binote' => 'required'
        ]);
        $bins = Stock_Manage_Bin::find($id);
        $bins->bicompany = $request->bicompany;
        $bins->birack = $request->birack;
        $bins->bibinName = $request->bibinName;
        $bins->binote = $request->binote;
        $bins->save();
        return redirect(url('/view-bin_all'));
    }

    public function delete_bin($id)
    {
        //Alert::success('Successfully deleted!', session('success_msg'));
        Stock_Manage_Bin::find($id)->delete();
        return redirect(url('/view-bin_all'));
    }

    public function print_bin()
    {
        $bins = Stock_Manage_Bin::paginate(20);
        // return view('stock_management_create_issue_allocate_bin', compact('issues'));
        // return redirect('/create-issue-allocate-bin', compact('issues'));
        return view('admin.bin.print_bin', compact('bins'));
    }
}
