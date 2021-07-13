<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Stock_Manage_Received;
use Illuminate\Support\Facades\DB;

class Stock_Management_Received extends Controller
{
    public function show_receive()
    {
        $receives = Stock_Manage_Received::paginate(15);
        return view('admin.received.stock_manage_view_received', compact('receives'));
    }

    // function buyers(Request $request)
    // {
    //     //checking

    //     $searchbin_ = $request['sbinName_'];
    //     $buyers = temp_accller_view_copy::all();
    //     $searchbin_ = $buyers->filter(function ($buyer){
    //         return $buyers->sbinName_;

    //     });
    //     return view('stock_management_create_receive', ['buyers' => $buyers]);
    // }
    //========================================================================================
    function show_rBuyers(Request $request)
    {
        //     //working 7/6/21 duplicate
        //    $buyers = temp_accller_view_copy::all();
        //     // echo $buyers;
        //     return view('stock_management_create_receive', ['buyers' => $buyers]);

        //  //working 8/6/21 duplicate
        //$buyers = DB::table('temp_accller_view')->pluck('buyer');
        // return view('stock_management_create_receive', ['buyers' => $buyers]);
        // echo $buyer;


        //     $buyers = DB::table('temp_accller_view')->pluck("buyer", "season");
        //    // $seasons = DB::table('temp_accller_view')->pluck("season", "id");
        //     return view('stock_management_create_receive', compact('buyers'));
        //     echo $buyer;

        // $receives = DB::table('temp_accller_view')
        //     ->groupBy('buyer')
        //     ->get();
        // return view('admin.received.stock_manage_create_received')
        //     ->with('receives', $receives);
    }

    function show_rSeasons(Request $request)
    {
        //working
        $seasons = DB::table('temp_accller_view')->pluck("season", "season");

        return view('admin.received.stock_manage_create_received', compact('seasons'));
        echo $seasons;
    }
    //=======================================================================================    
    public function create_receive()
    {
        return view('admin.received.stock_manage_create_received');
    }

    public function store_receive(Request $request)
    {
        Alert::success('Success!', 'Saved Successfully');
        $this->validate($request, [
            'rbuyer' => 'required',
            'rseason' => 'required',
            'rstyle' => 'required',
            'rgrnNo' => 'required',
            'rcategory' => 'required',
            'ritemType' => 'required',
            'ritemCategory' => 'required',
            'rcolor' => 'required',
            'rdescription' => 'required',
            'rquantity' => 'required',
            'rdate' => 'required',
            'rrollCount' => 'required',
            'rremark' => 'required'
        ]);
        $receives = new Stock_Manage_Received();
        $receives->rbuyer = $request->rbuyer;
        $receives->rseason = $request->rseason;
        $receives->rstyle = $request->rstyle;
        $receives->rgrnNo = $request->rgrnNo;
        $receives->rcategory = $request->rcategory;
        $receives->ritemType = $request->ritemType;
        $receives->ritemCategory = $request->ritemCategory;
        $receives->rcolor = $request->rcolor;
        $receives->rdescription = $request->rdescription;
        $receives->rquantity = $request->rquantity;
        $receives->rdate = $request->rdate;
        $receives->rrollCount = $request->rrollCount;
        $receives->rremark = $request->rremark;
        $receives->save();
        return redirect(url('/create-receive'));
    }

    public function edit_receive($id)
    {
        $receives = Stock_Manage_Received::find($id);
        return view('admin.received.stock_manage_edit_received', compact('receives'));
    }

    public function update_receive(Request $request, $id)
    {
        Alert::success('Success', 'Saved Successfully');
        $this->validate($request, [
            'rbuyer' => 'required',
            'rseason' => 'required',
            'rstyle' => 'required',
            'rgrnNo' => 'required',
            'rcategory' => 'required',
            'ritemType' => 'required',
            'ritemCategory' => 'required',
            'rcolor' => 'required',
            'rdescription' => 'required',
            'rquantity' => 'required',
            'rdate' => 'required',
            'rrollCount' => 'required',
            'rremark' => 'required'
        ]);
        $receives = Stock_Manage_Received::find($id);
        $receives->rbuyer = $request->rbuyer;
        $receives->rseason = $request->rseason;
        $receives->rstyle = $request->rstyle;
        $receives->rgrnNo = $request->rgrnNo;
        $receives->rcategory = $request->rcategory;
        $receives->ritemType = $request->ritemType;
        $receives->ritemCategory = $request->ritemCategory;
        $receives->rcolor = $request->rcolor;
        $receives->rdescription = $request->rdescription;
        $receives->rquantity = $request->rquantity;
        $receives->rdate = $request->rdate;
        $receives->rrollCount = $request->rrollCount;
        $receives->rremark = $request->rremark;
        $receives->save();
        return redirect(url('/view-received_all'));
    }

    public function delete_receive($id)
    {
        Stock_Manage_Received::find($id)->delete();
        return redirect(url('/view-received_all'));
    }

    public function dropdownBuyer()
    {
        $buyer_list = DB::table('temp_accller_view')
            ->groupBy('buyer')
            ->get();
        return view('admin.received.stock_manage_create_received')
            ->with('buyer_list', $buyer_list);
    }

    public function fetchReceive(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('temp_accller_view')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        echo $output;
    }
}
