<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('admin.stock_manage_admin_dash');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('admin.stock_manage_admin_index');
})->name('dashboard');

Route::get('/create-issued', function () {
	return view('admin.issued.stock_manage_create_issued');
});
Route::get('/view-issue_all', [App\Http\Controllers\Stock_Management_Issued::class, 'show_issue'])->name('show_issue');
Route::get('/create-issued', [App\Http\Controllers\Stock_Management_Issued::class, 'create_issue'])->name('create_issue');

// Route::get('/create-issued', [App\Http\Controllers\Stock_Management_Issued::class, '']); //new
Route::post('/create-issued', [App\Http\Controllers\Stock_Management_Issued::class, 'store_issue'])->name('store_issue');
Route::post('/create-issuedd', [App\Http\Controllers\Stock_Management_Issued::class, 'dataTest'])->name('dataTest');
//issued
Route::get('/cr/{id}', [App\Http\Controllers\Stock_Management_Issued::class, 'test'])->name('test');
Route::get('/create-issued', [App\Http\Controllers\Stock_Management_Issued::class, 'index'])->name('index');;
Route::get('/create-issuedOne', [App\Http\Controllers\Stock_Management_Issued::class, 'indexone'])->name('indexone');;

Route::post('/issued/fetch', [App\Http\Controllers\Stock_Management_Issued::class, 'fetch'])->name('issued.fetch');
Route::post('/issued/fetch2', [App\Http\Controllers\Stock_Management_Issued::class, 'fetch2'])->name('issued.fetch2');

Route::get('/view-issued', [App\Http\Controllers\Stock_Management_Issued::class, 'search_issue'])->name('search_issue');
Route::get('/view-issued-', [App\Http\Controllers\Stock_Management_Issued::class, 'search_rackname'])->name('search_rackname');
/*=========== edit rack==========*/
Route::get('/edit-issued/{id}', [App\Http\Controllers\Stock_Management_Issued::class, 'edit_issue'])->name('edit_issue');
Route::post('/update-issued/{id}', [App\Http\Controllers\Stock_Management_Issued::class, 'update_issue'])->name('update_issue');
Route::delete('/delete-issued/{id}', [App\Http\Controllers\Stock_Management_Issued::class, 'delete_issue'])->name('delete_issue');
/*==========search rack ===========*/
Route::get('/view-issued', [App\Http\Controllers\Stock_Management_Issued::class, 'search_company'])->name('search_company');
Route::get('/view-issued-', [App\Http\Controllers\Stock_Management_Issued::class, 'search_rackname'])->name('search_rackname');

Route::get('/create-issue-allocate-bin', [App\Http\Controllers\StockManagement_Issue_Bin_Allocation::class, 'create_issue_allocate_bin'])->name('create_issue_allocate_bin');
Route::post('/create-issue-allocate-bin', [App\Http\Controllers\StockManagement_Issue_Bin_Allocation::class, 'store_issue_allocate_bin'])->name('store_issue_allocate_bin');
Route::get('/view-issue-allocate-bin', [App\Http\Controllers\StockManagement_Issue_Bin_Allocation::class, 'show_issue_allocate_bin'])->name('show_issue_allocate_bin');

Route::get('/modal-issue-bin', function () {
	return view('/stock_management_modal_issue_bin_allocation');
});


//test
Route::get('/edit-issued', function () {
	return view('admin.issued.stock_manage_edit_issued');
});

/*==========bin and rack==========*/




Route::get('/create-bin', function () {
	return view('admin.bin.stock_manage_create_bin');
});
Route::get('/bininfo', function () {
	return view('admin.bin.stock_manage_view_bin');
});
/*==========bin==========*/
Route::get('/view-bin_all', [App\Http\Controllers\Stock_Management_Bin::class, 'show_bin'])->name('show_bin'); //show
Route::get('/create-bin', [App\Http\Controllers\Stock_Management_Bin::class, 'create_bin'])->name('create_bin');
Route::get('/create-bin', [App\Http\Controllers\Stock_Management_Bin::class, 'getBinCompanies'])->name('getBinCompanies');
Route::post('/create-bin', [App\Http\Controllers\Stock_Management_Bin::class, 'store_bin'])->name('store_bin');
Route::post('/bin/fetch', [App\Http\Controllers\Stock_Management_Bin::class, 'fetch'])->name('bin.fetch');
// Route::get('/create-bin', [App\Http\Controllers\Stock_Management_Bin::class, 'getRacks'])->name('getRacks');
Route::get('/edit-bin/{id}', [App\Http\Controllers\Stock_Management_Bin::class, 'edit_bin'])->name('edit_bin');
Route::get('/update_rack/{id}', [App\Http\Controllers\Stock_Management_Bin::class, 'getBinCompanies'])->name('getBinCompanies');
Route::post('/update-bin/{id}', [App\Http\Controllers\Stock_Management_Bin::class, 'update_bin'])->name('update_bin');
Route::delete('/delete-bin/{id}', [App\Http\Controllers\Stock_Management_Bin::class, 'delete_bin'])->name('delete_bin');
Route::get('/view-bin', [App\Http\Controllers\Stock_Management_Bin::class, 'search_company'])->name('search_company');
Route::get('/view-bin_all', [App\Http\Controllers\Stock_Management_Bin::class, 'searchBinname'])->name('searchBinname');


//test
Route::get('/create-rack', function () {
	return view('admin.rack.stock_manage_create_rack');
});
//==================

/*==========rack==========*/
/*========== search rack==========*/
// Route::get('/view-rack_all', [App\Http\Controllers\Stock_Management_Rack::class, 'index'])->name('index'); //-->not working
Route::get('/view-rack_all', [App\Http\Controllers\Stock_Management_Rack::class, 'show_rack'])->name('show_rack');
Route::get('/create-rack', [App\Http\Controllers\Stock_Management_Rack::class, 'create_rack'])->name('create_rack');
Route::get('/create-rack', [App\Http\Controllers\Stock_Management_Rack::class, 'getRackCompanies'])->name('getRackCompanies');
Route::post('/create-rack', [App\Http\Controllers\Stock_Management_Rack::class, 'store_rack'])->name('store_rack');
Route::get('/rack-bin', [App\Http\Controllers\Stock_Management_Rack::class, 'select_country']);
/*=========== edit rack==========*/
Route::get('/edit-rack/{id}', [App\Http\Controllers\Stock_Management_Rack::class, 'edit_rack'])->name('edit_rack');
Route::post('/update-rack/{id}', [App\Http\Controllers\Stock_Management_Rack::class, 'update_rack'])->name('update_rack');
Route::delete('/delete-rack/{id}', [App\Http\Controllers\Stock_Management_Rack::class, 'delete_rack'])->name('delete_rack');
/*==========search rack ===========*/
Route::get('/view-rack-', [App\Http\Controllers\Stock_Management_Rack::class, 'search_company'])->name('search_company');
Route::get('/view-rack--', [App\Http\Controllers\Stock_Management_Rack::class, 'search_rackname'])->name('search_rackname');

//received
// //side bar-> received
Route::get('/create-received', function () {
	return view('admin.received.stock_manage_create_received');
});

Route::get('/view-received_all', [App\Http\Controllers\Stock_Management_Received::class, 'show_receive'])->name('show_receive');
// Route::get('/received', [App\Http\Controllers\Stock_Management_Received::class, 'show_rBuyers'])->name('show_rBuyers');
Route::get('/received', [App\Http\Controllers\Stock_Management_Received::class, 'show_rSeasons'])->name('show_rSeasons');

//fetchReceive

Route::post('/stock-management-received/fetchReceive', [App\Http\Controllers\Stock_Management_Issued::class, 'fetchReceive'])->name('stock_management_received.fetchReceive');

// Route::get('/received', [App\Http\Controllers\Stock_Management_Received::class, 'seasonss'])->name('seasonss');
Route::get('/create-receive', [App\Http\Controllers\Stock_Management_Received::class, 'buyers'])->name('buyers');
Route::get('/create-receive', [App\Http\Controllers\Stock_Management_Received::class, 'create_receive'])->name('create_receive');
Route::get('/create-receive', [App\Http\Controllers\Stock_Management_Received::class, 'dropdownBuyer'])->name('dropdownBuyer');
Route::post('/create-receive', [App\Http\Controllers\Stock_Management_Received::class, 'store_receive'])->name('store_receive');
// Route::get('/view-received', [App\Http\Controllers\Stock_Management_Received::class, 'search_receive'])->name('search_receive');
// Route::get('/view-received-', [App\Http\Controllers\Stock_Management_Received::class, 'search_rackname'])->name('search_rackname');
/*=========== edit rack==========*/
Route::get('/edit-received/{id}', [App\Http\Controllers\Stock_Management_Received::class, 'edit_receive'])->name('edit_receive');
Route::post('/update-received/{id}', [App\Http\Controllers\Stock_Management_Received::class, 'update_receive'])->name('update_receive');
Route::delete('/delete-received/{id}', [App\Http\Controllers\Stock_Management_Received::class, 'delete_receive'])->name('delete_receive');
/*==========search rack ===========*/
// Route::get('/view-received', [App\Http\Controllers\Stock_Management_Received::class, 'search_company'])->name('search_company');
// Route::get('/view-received-', [App\Http\Controllers\Stock_Management_Received::class, 'search_rackname'])->name('search_rackname');
Route::get('/create-receive-allocate-bin', [App\Http\Controllers\Stock_Management_Receive_Bin_Allocation::class, 'create_receive_allocate_bin'])->name('create_receive_allocate_bin');
Route::post('/create-receive-allocate-bin', [App\Http\Controllers\Stock_Management_Receive_Bin_Allocation::class, 'store_receive_allocate_bin'])->name('store_receive_allocate_bin');
Route::get('/view-receive-allocate-bin', [App\Http\Controllers\Stock_Management_Receive_Bin_Allocation::class, 'show_receive_allocate_bin'])->name('show_receive_allocate_bin');

//issue_bin_allocation
//test
Route::get('/create-issue-bin-allocate', function () {
	return view('admin.rack.stock_manage_create_rack');
});

/*==========issue-bin-allocate==========*/
Route::get('/view-issue-bin-allocate_all', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'show_issue_allocate_bin'])->name('show_issue_allocate_bin');
Route::get('/create-issue-bin-allocate', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'create_issue_allocate_bin'])->name('create_issue_allocate_bin');
// Route::get('/create-issue-bin-allocate', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'getRackCompanies'])->name('getRackCompanies');
Route::post('/create-issue-bin-allocate', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'store_issue_allocate_bin'])->name('store_issue_allocate_bin');
// Route::get('/rack-bin', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'select_country']);
/*=========== edit issue-bin-allocate==========*/
// Route::get('/edit-issue-bin-allocate/{id}', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'edit_rack'])->name('edit_rack');
// Route::post('/update-v/{id}', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'update_rack'])->name('update_rack');
// Route::delete('/delete-issue-bin-allocate/{id}', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'delete_rack'])->name('delete_rack');
/*==========search v ===========*/
// Route::get('/view-issue-bin-allocate-', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'search_company'])->name('search_company');
// Route::get('/view-issue-bin-allocate--', [App\Http\Controllers\Stock_Management_Issue_Bin_Allocate::class, 'search_rackname'])->name('search_rackname');




// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
