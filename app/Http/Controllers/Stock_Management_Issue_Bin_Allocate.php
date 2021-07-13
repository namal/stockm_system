<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Stock_Manage_Issue_Bin_Allocate;
use Illuminate\Support\Facades\DB;

class Stock_Management_Issue_Bin_Allocate extends Controller
{
    public function create_issue_allocate_bin()
    {
        return view('admin.issue_bin_allocation.stock_manage_create_issue_bin_allocation');
        //return view('stock_management_create_issue_allocate_bin');
        //return back()->withInput();

    }
    public function show_issue_allocate_bin()
    {
        $allocates = Stock_Manage_Issue_Bin_Allocate::paginate(15);
        // return view('stock_management_create_issue_allocate_bin', compact('issues'));
        // return redirect('/create-issue-allocate-bin', compact('issues'));
        return view('admin.issue_bin_allocation.stock_manage_create_issue_bin_allocation', compact('allocates'));
    }
    //************************* */
    // public function dropdown_allocate_rack_issue_allocate_bin(Request $request){
    //     $isallocatedRack = $request['isallocatedRack'];
    //     $allocates = DB::table('bin_management_rack')
    //         ->where('rackName', $isallocatedRack)
    //         ->get(); 
    //         return view('stock_management_create_issue_allocate_bin')-> with('issues, $allocates');    
    // }

    //*************************************/



    public function store_issue_allocate_bin(Request $request)
    {
        Alert::success('Success', 'Saved Successfully');
        $this->validate($request, [
            'isissuedTotalQuantity' => 'required',
            'isallocatedRack' => 'required',
            'isallocatedBin' => 'required',
            'isissuedBatchNo' => 'required',
            'isissuedQuantity' => 'required',
            'isissuedRollsCount' => 'required'
        ]);
        $allocates = new Stock_Manage_Issue_Bin_Allocate();
        $allocates->isissuedTotalQuantity = $request->isissuedTotalQuantity;
        $allocates->isallocatedRack = $request->isallocatedRack;
        $allocates->isallocatedBin = $request->isallocatedBin;
        $allocates->isissuedBatchNo = $request->isissuedBatchNo;
        $allocates->isissuedQuantity = $request->isissuedQuantity;
        $allocates->isissuedRollsCount = $request->isissuedRollsCount;
        $allocates->save();

        return redirect("/create-issue-bin-allocate");
        // return redirect('/create-issue-allocate-bin');
        // return Redirect::back();
        // return back()->withInput();
    }

    // public function store_issue_allocate_bin_(Request $request)
    // {
    //     Alert::success('Success', 'Saved Successfully');
    //     $this->validate($request, [
    //         'isissuedTotalQuantity' => 'required',
    //         'isallocatedRack' => 'required',
    //         'isallocatedBin' => 'required',
    //         'isissuedBatchNo' => 'required',
    //         'isissuedQuantity' => 'required',
    //         'isissuedRollsCount' => 'required'
    //     ]);
    //     $allocates = new Stock_Manage_Issue_Bin_Allocate();
    //     $allocates->isissuedTotalQuantity = $request->isissuedTotalQuantity;
    //     $allocates->isallocatedRack = $request->isallocatedRack;
    //     $allocates->isallocatedBin = $request->isallocatedBin;
    //     $allocates->isissuedBatchNo = $request->isissuedBatchNo;
    //     $allocates->isissuedQuantity = $request->isissuedQuantity;
    //     $allocates->isissuedRollsCount = $request->isissuedRollsCount;
    //     $allocates->save();

    //     return view('stock_management_modal_issue_bin_allocation');
    //     // return redirect('/create-issue-allocate-bin');
    //     // return Redirect::back();
    //     // return back()->withInput();
    // }
}
