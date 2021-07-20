<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock_Manage_Receive_Bin_Allocate;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class Stock_Management_Receive_Bin_Allocate extends Controller
{
    public function create_receive_allocate_bin()
    {
        return view('admin.receive_bin_allocation.stock_manage_create_receive_bin_allocation');
    }
    public function show_receive_allocate_bin()
    {
        $receives = Stock_Manage_Receive_Bin_Allocate::paginate(15);
        // return view('stock_management_create_receive_allocate_bin', compact('receives'));
        // return redirect('/create-receive-allocate-bin', compact('receives'));
        return view('admin.receive_bin_allocation.stock_manage_view_receive_bin_allocation', compact('receives'));
    }

    public function print_receive_allocate_bin()
    {
        $receives = Stock_Manage_Receive_Bin_Allocate::paginate(25);
        // return view('stock_management_create_receive_allocate_bin', compact('receives'));
        // return redirect('/create-receive-allocate-bin', compact('receives'));
        return view('admin.receive_bin_allocation.print_receive_bin_allocate', compact('receives'));
    }

    public function store_receive_allocate_bin(Request $request)
    {
        Alert::success('Success', 'Saved Successfully');
        $this->validate($request, [
            'rereceivedTotalQuantity' => 'required',
            'reallocatedRack' => 'required',
            'reallocatedBin' => 'required',
            'rereceivedBatchNo' => 'required',
            'rereceivedQuantity' => 'required',
            'rereceivedRollsCount' => 'required'
        ]);
        $allocates = new Stock_Manage_Receive_Bin_Allocate();
        $allocates->rereceivedTotalQuantity = $request->rereceivedTotalQuantity;
        $allocates->reallocatedRack = $request->reallocatedRack;
        $allocates->reallocatedBin = $request->reallocatedBin;
        $allocates->rereceivedBatchNo = $request->rereceivedBatchNo;
        $allocates->rereceivedQuantity = $request->rereceivedQuantity;
        $allocates->rereceivedRollsCount = $request->rereceivedRollsCount;
        $allocates->save();

        return redirect("/create-receive-bin-allocate");
        // return redirect('/create-receive-allocate-bin');
        // return Redirect::back();
        // return back()->withInput();
    }

    public function edit_receive_bin_allocation($id)
    {
        $allocates = Stock_Manage_Receive_Bin_Allocate::find($id);
        // return redirect(url('/view-rack--'));
        return view('admin.receive_bin_allocation.stock_manage_edit_receive_bin_allocation', compact('allocates'));
    }

    public function update_receive_bin_allocation(Request $request, $id)
    {
        Alert::success('Success', 'Edited Successfully');
        $this->validate($request, [
            'rereceivedTotalQuantity' => 'required',
            'reallocatedRack' => 'required',
            'reallocatedBin' => 'required',
            'rereceivedBatchNo' => 'required',
            'rereceivedQuantity' => 'required',
            'rereceivedRollsCount' => 'required'
        ]);
        $allocates = Stock_Manage_Receive_Bin_Allocate::find($id);
        $allocates->rereceivedTotalQuantity = $request->rereceivedTotalQuantity;
        $allocates->reallocatedRack = $request->reallocatedRack;
        $allocates->reallocatedBin = $request->reallocatedBin;
        $allocates->rereceivedBatchNo = $request->rereceivedBatchNo;
        $allocates->rereceivedQuantity = $request->rereceivedQuantity;
        $allocates->rereceivedRollsCount = $request->rereceivedRollsCount;
        $allocates->save();
        // return view('admin.receive_bin_allocation.stock_manage_view_receive_bin_allocation', compact('receives'));

        // return redirect('/view-receive-bin-allocate_all');
        return redirect(url('/view-receive-bin-allocate_all'));
        // return redirect('/create-receive-allocate-bin');
        // return Redirect::back();
        // return back()->withInput();
    }

    public function delete_receive_bin_allocation($id)
    {
        Stock_Manage_Receive_Bin_Allocate::find($id)->delete();
        return redirect(url('/view-receive-bin-allocate_all'));
        // return redirect(url('/view-receive-bin-allocate_all'));
    }
}
