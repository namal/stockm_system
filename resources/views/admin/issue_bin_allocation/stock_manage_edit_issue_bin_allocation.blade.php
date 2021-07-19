@extends('admin.stock_manage_admin_dash')
@section('admin')

<div class="container-responsive mb-0"> <!--d1-->

  <div class="row">
      <div class="col-lg-6">
          <div class="card card-default">
              <div class="card-header card-header-border-bottom">
                  <h3 class="w3-animate-left bm-2 pt-0">
                      <span class="font-weight-bold">Edit - </span>
                      <span class="">Issue Bin Allocation</span>
                  </h3>
              </div>
              <div class="">
              <form class="" method="POST" action="{{ route('update_issue_bin_allocation', $allocates->id) }}">
              {{ csrf_field() }} 
                  <div class="card-body">

                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Tot Qty-Rack</label>
                      <div class="input-group bm-2">
                          <input type="number"  value="{{$allocates->isissuedTotalQuantity}}" class="form-control in-field-color" name="isissuedTotalQuantity" id="isissuedTotalQuantity" placeholder="23.00" required>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <label class="text-dark mt-1 font-weight-medium" for="">Allocated Rack</label>
                      <div class="input-group bm-2">
                        <select class="in-field-color form-control" id="isallocatedRack" name="isallocatedRack" value="" required>
                          <option value="{{$allocates->isallocatedRack}}" selected> {{$allocates->isallocatedRack}}</option>
                      </select>
                      </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <label class="text-dark mt-1 font-weight-medium" for="">Allocated Bin</label>
                          <div class="input-group bm-2">
                            <select class="in-field-color form-control" id="isallocatedBin" name="isallocatedBin" required>
                              <option value="{{$allocates->isallocatedBin}}" selected>{{$allocates->isallocatedBin}}</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      

                      
                      <div class="row">
                        <div class="col-12">
                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Batch No</label>
                      <div class="input-group bm-2">
                          <input type="number"  value="{{$allocates->isissuedBatchNo}}" class="form-control in-field-color" name="isissuedBatchNo" id="isissuedBatchNo" placeholder="23.00" required>
                      </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Quantity</label>
                      <div class="input-group bm-2">
                          <input  type="number"  value="{{$allocates->isissuedQuantity}}" class="in-field-color form-control" id="isissuedQuantity"  name="isissuedQuantity" placeholder="23"  required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Rolls Count</label>
                      <div class="input-group bm-2">
                        <input  type="number"  value="{{$allocates->isissuedRollsCount}}" class="in-field-color form-control" id="isissuedRollsCount"  name="isissuedRollsCount" placeholder="23.00" rows="3" col="50" required>
                      </div>
                    </div>
                </div>

                      <div class="container mt-3">
                          <center>
                              <button class="btn btn-primary mx-2" style="border-radius:10px;" type="submit" style="">
                                  <i class="mdi mdi-play"></i> Edit 
                              </button>
                          </center>
                      </div>
                  </div>
              </form>
              </div>
          </div>
      </div>

  </div>
</div>

@endsection 
