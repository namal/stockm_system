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
        $issues = Stock_Manage_Issue_Bin_Allocate::paginate(15);
        // return view('stock_management_create_issue_allocate_bin', compact('issues'));
        // return redirect('/create-issue-allocate-bin', compact('issues'));
        return view('admin.issue_bin_allocation.stock_manage_view_issue_bin_allocation', compact('issues'));
    }

    public function print_issue_allocate_bin()
    {
        $issues = Stock_Manage_Issue_Bin_Allocate::paginate(25);
        // return view('stock_management_create_issue_allocate_bin', compact('issues'));
        // return redirect('/create-issue-allocate-bin', compact('issues'));
        return view('admin.issue_bin_allocation.print_issue_bin_allocate', compact('issues'));
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

    public function edit_issue_bin_allocation($id)
    {
        $allocates = Stock_Manage_Issue_Bin_Allocate::find($id);
        // return redirect(url('/view-rack--'));
        return view('admin.issue_bin_allocation.stock_manage_edit_issue_bin_allocation', compact('allocates'));
    }

    public function update_issue_bin_allocation(Request $request, $id)
    {
        Alert::success('Success', 'Edited Successfully');
        $this->validate($request, [
            'isissuedTotalQuantity' => 'required',
            'isallocatedRack' => 'required',
            'isallocatedBin' => 'required',
            'isissuedBatchNo' => 'required',
            'isissuedQuantity' => 'required',
            'isissuedRollsCount' => 'required'
        ]);
        $allocates = Stock_Manage_Issue_Bin_Allocate::find($id);
        $allocates->isissuedTotalQuantity = $request->isissuedTotalQuantity;
        $allocates->isallocatedRack = $request->isallocatedRack;
        $allocates->isallocatedBin = $request->isallocatedBin;
        $allocates->isissuedBatchNo = $request->isissuedBatchNo;
        $allocates->isissuedQuantity = $request->isissuedQuantity;
        $allocates->isissuedRollsCount = $request->isissuedRollsCount;
        $allocates->save();
        // return view('admin.issue_bin_allocation.stock_manage_view_issue_bin_allocation', compact('issues'));

        // return redirect('/view-issue-bin-allocate_all');
        return redirect(url('/view-issue-bin-allocate_all'));
        // return redirect('/create-issue-allocate-bin');
        // return Redirect::back();
        // return back()->withInput();
    }

    public function delete_issue_bin_allocation($id)
    {
        Stock_Manage_Issue_Bin_Allocate::find($id)->delete();
        return redirect(url('/show_issue_allocate_bin'));
        // return redirect(url('/view-issue-bin-allocate_all'));
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
