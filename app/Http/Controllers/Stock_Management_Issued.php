<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock_Manage_Issued;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Pagination\Paginator;

class Stock_Management_Issued extends Controller
{
    public function show_issue()
    {
        $issues = Stock_Manage_Issued::all();
        return view('admin.issued.stock_manage_view_issued', compact('issues'));
    }


    public function dataTest(Request $request)
    {
        return response()->json(['Message' => 'Your data recived'], 200);
    }

    public function test()
    {
        $id = $_POST['id'];
        $test = DB::table('temp_accller_view')
            //->groupBy('buyer')
            ->get();
        // $result = $test->getData($id);

        // foreach ($result as $row) {

        //   '<tr>
        //      <td>' . $row->name . '</td>' .
        //      '<td>' . $row->address . '</td>' .
        //      '<td>' . $row->age . '</td>' .
        //   '</tr>';
        // }
        echo $id;
        echo $test;
        // return $result;
        // $buyer =  DB::table('temp_accller_view')
        //     ->get('buyer');
        // echo $buyer;
        return view('admin.issued.stock_manage_create_issued')->with($test);

        // return '<script type="text/javascript">alert("hello!")
        // function run(){
        //     var dop = document.getElementById("buyer").value;






        //     alert(dop);
        //   }
        // </script>';

        return redirect()->back()->with('alert', 'hello');
        // return view('admin.issued.stock_manage_create_issued')
        //     ->with('buyer', $buyer);
    }
    public function index()
    {


        // $id = DB::table('temp_accller_view')
        //     ->groupBy('buyer')
        //     ->get();
        // echo $id;

        // $buyer_list = DB::table('temp_accller_view')
        //     ->groupBy('buyer')
        //     ->get();
        // // $season_list = [" "];
        // $id = 'buyer_list';


        // if ($buyer_list == $id) {
        //     $season_list = DB::table('temp_accller_view')
        //         ->where($id->season_list)
        //         ->groupBy('season')
        //         ->get();
        //     echo $season_list;
        // } else {
        //     $season_list = 'season';
        // }

        // $season_list = DB::table('temp_accller_view')
        //     ->groupBy('season')
        //     ->where('season', 'like', "%[$season_list]%")
        //     ->get();

        $season_list = DB::table('temp_accller_view')
            ->groupBy('buyer')
            ->get();

        $buyer_list = DB::table('temp_accller_view')
            ->groupBy('buyer')
            ->get();

        $style_list = DB::table('temp_accller_view')
            ->groupBy('buyer')
            ->get();


        return view('admin.issued.stock_manage_create_issued')
            ->with('buyer_list', $buyer_list)
            ->with('season_list', $season_list)
            ->with('style_list', $style_list);
    }

    // public function index()
    // {
    //     // $id = $_POST['id'];
    //     // $id = DB::table('temp_accller_view')->get("id", ":", "value");
    //     // echo $id;

    //     $buyer_list = DB::table('temp_accller_view')
    //         ->groupBy('buyer')
    //         ->get();


    //     $season_list = DB::table('temp_accller_view')
    //         ->groupBy('buyer')
    //         ->get();

    //     // $season_list = DB::table('temp_accller_view')
    //     // ->groupBy('buyer')
    //     // ->get();

    //     return view('admin.issued.stock_manage_create_issued')
    //         ->with('buyer_list', $buyer_list)
    //         ->with('season_list', $season_list);
    // }

    public function indexone()
    {
        $season_list = DB::table('temp_accller_view')
            ->groupBy('buyer')
            ->get();
        return view('admin.issued.stock_manage_create_issued')
            ->with('season_list', $season_list);
    }

    public function fetch(Request $request)
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
            $output .= '<option value="' . $row->$dependent . '">'
                . $row->$dependent . '</option>';
        }
        echo $output;
    }

    // public function fetch2(Request $request)
    // {
    //     $select2 = $request->get('select2');
    //     $value2 = $request->get('value2');
    //     $dependent2 = $request->get('dependent2');
    //     $data2 = Stock_Manage_Issued::join('temp_accller_view', 'bin_managemenet_grn_with_po_accellar_view.Style_No', '=', 'temp_accller_view.style')
    //         ->get();
    //     $output = '<option value="">Select ' . ucfirst($dependent2) . '</option>';
    //     foreach ($data2 as $row) {
    //         $output .= '<option value="' . $row->$dependent2 . '">' . $row->$dependent2 . '</option>';
    //     }
    //     echo $output;
    // }

    //show via a table


    public function fetchDate()

    {
        // $searchcompany = $request['55429D'];
        // $style_list = DB::table('bin_managemenet_grn_with_po_accellar_view')
        //     ->innerJoin('bin_managemenet_grn_with_po_accellar_view', 'temp_accller_view.style', '=', 'bin_managemenet_grn_with_po_accellar_view.Style_No')
        //     ->where($searchcompany == '55429D')
        //     ->where('Style_No', '=', '55429D')
        //     ->get();
        // echo "<option>";
        // echo ($issues);
        // echo "</option>";

        // return view('admin.issued.stock_manage_create_issued')
        //     ->with('style_list', $style_list);

        $style_list = DB::table('bin_managemenet_grn_with_po_accellar_view')

            ->get();
        return view('admin.issued.stock_manage_create_issued')
            ->with('style_list', $style_list);
    }

    public function fetch2(Request $request)
    {
        $select2 = $request->get('select');
        $value2 = $request->get('value');
        $dependent2 = $request->get('dependent');
        $data2 = DB::table('bin_managemenet_grn_with_po_accellar_view')
            // ->innerJoin('bin_managemenet_grn_with_po_accellar_view', 'temp_accller_view.id', '=', 'bin_managemenet_grn_with_po_accellar_view.Accellar_ID')
            ->where($select2, $value2)
            ->groupBy($dependent2)
            ->get();
        $output = '<option value="">Select ' . ucfirst($dependent2) . '</option>';
        foreach ($data2 as $row) {
            $output .= '<option value="' . $row->$dependent2 . '">' . $row->$dependent2 . '</option>';
        }
        echo $output;
    }


    public function create_issue()
    {
        return view('admin.issued.stock_manage_create_issued');
    }

    public function store_issue(Request $request)
    {
        $this->validate($request, [
            'ibuyer' => 'required',
            'iseason' => 'required',
            'istyle' => 'required',
            'idelvDate' => 'required',
            'igrnNo' => 'required',
            'icategory' => 'required',
            'iitemType' => 'required',
            'iitemCategory' => 'required',
            'icolor' => 'required',
            'idescription' => 'required',
            'iquantity' => 'required',
            'idate' => 'required',
            'irollCount' => 'required',
            'iremark' => 'required'
        ]);

        $issues = new Stock_Management_Issued();
        $issues->ibuyer = $request->ibuyer;
        $issues->iseason = $request->iseason;
        $issues->idelvDate = $request->idelvDate;
        $issues->igrnNo = $request->igrnNo;
        $issues->istyle = $request->istyle;
        $issues->icategory = $request->icategory;
        $issues->iitemType = $request->iitemType;
        $issues->iitemCategory = $request->iitemCategory;
        $issues->icolor = $request->icolor;
        $issues->idescription = $request->idescription;
        $issues->iquantity = $request->iquantity;
        $issues->idate = $request->idate;
        $issues->irollCount = $request->irollCount;
        $issues->iremark = $request->iremark;
        $issues->save();
        return redirect(url('/create-issued'));
    }

    function search_company(Request $request)
    {
        $searchcompany = $request['scompany'];
        $issues = DB::table('stock__manage__issueds')
            ->where('icompany', [$searchcompany])
            ->get();
        return view('admin.bin.stock_manage_view_issued', ['issues' => $issues]);
    }

    public function edit_issue($id)
    {
        $issues = Stock_Management_Issued::find($id);
        return view('admin.bin.stock_manage_edit_issued', compact('issues'));
    }

    public function update_issue(Request $request, $id)
    {
        Alert::success('Success', 'Saved Successfully');
        $this->validate($request, [
            'ibuyer' => 'required',
            'iseason' => 'required',
            'istyle' => 'required',
            'idelvDate' => 'required',
            'igrnNo' => 'required',
            'icategory' => 'required',
            'iitemType' => 'required',
            'iitemCategory' => 'required',
            'icolor' => 'required',
            'idescription' => 'required',
            'iquantity' => 'required',
            'idate' => 'required',
            'irollCount' => 'required',
            'iremark' => 'required'
        ]);

        $issues = Stock_Management_Issued::find($id);
        $issues->ibuyer = $request->ibuyer;
        $issues->iseason = $request->iseason;
        $issues->idelvDate = $request->idelvDate;
        $issues->igrnNo = $request->igrnNo;
        $issues->istyle = $request->istyle;
        $issues->icategory = $request->icategory;
        $issues->iitemType = $request->iitemType;
        $issues->iitemCategory = $request->iitemCategory;
        $issues->icolor = $request->icolor;
        $issues->idescription = $request->idescription;
        $issues->iquantity = $request->iquantity;
        $issues->idate = $request->idate;
        $issues->irollCount = $request->irollCount;
        $issues->iremark = $request->iremark;
        $issues->save();
        return redirect(url('/view-issue_all'));
    }

    public function delete_issue($id)
    {
        Stock_Management_Issued::find($id)->delete();
        return redirect(url('/view-issue_all'));
    }

    public function select_Buyer()
    {
        $buyer = DB::table(' temp_accller_view')
            ->orderBy('buyer', 'desc')
            ->get();
        echo DB::table(' temp_accller_view')
            ->orderBy('buyer', 'desc')
            ->get();
        return view('admin.bin.stock_manage_view_issued', ['buyer' => $buyer]);
    }

    public function dropdownbuyer()
    {
        $issues = DB::table('stock__manage__issueds')
            ->orderBy('ibuyer', 'desc')
            ->get();
        $ibuyer = 'ibuyer';
        return view('admin.bin.stock_manage_view_issued', compact('issues'));
    }
}
