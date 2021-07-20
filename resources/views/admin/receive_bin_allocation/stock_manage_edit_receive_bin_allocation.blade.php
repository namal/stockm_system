@extends('admin.stock_manage_admin_dash')
@section('admin')

<div class="container-responsive mb-0"> <!--d1-->

  <div class="row">
      <div class="col-lg-6">
          <div class="card card-default">
              <div class="card-header card-header-border-bottom">
                  <h3 class="w3-animate-left bm-2 pt-0">
                      <span class="font-weight-bold">Edit - </span>
                      <span class="">Receive Bin Allocation</span>
                  </h3>
              </div>
              <div class="">
              <form class="" method="POST" action="{{ route('update_receive_bin_allocation', $allocates->id) }}">
              {{ csrf_field() }} 
                  <div class="card-body">

                      <label class="text-dark mt-1 font-weight-medium" for="">Received Tot Qty-Rack</label>
                      <div class="input-group bm-2">
                          <input value="{{$allocates->rereceivedTotalQuantity}}" type="number" class="form-control in-field-color" name="rereceivedTotalQuantity" id="rereceivedTotalQuantity" placeholder="23.00" required>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-dark mt-1 font-weight-medium" for="">Allocated Rack</label>
                      <div class="input-group bm-2">
                        <select class="in-field-color form-control" id="reallocatedRack" name="reallocatedRack" value="" required>
                          <option {{ $allocates->reallocatedRack }}>{{ $allocates->reallocatedRack }}</option>
                          <option value="1">sd</option>
                              {{-- @foreach ($allo_racks as $allo_rack)
                              <option value="{{$allo_rack}}">
                                  {{ ($allo_rack) ? '' : ''}}  
                                  {{$allo_rack}} 
                              </option> 
                              @endforeach --}}
                      </select>
                      </div>
                        </div>

                        <div class="col-md-6">
                          <label class="text-dark mt-1 font-weight-medium" for="">Allocated Bin</label>
                          <div class="input-group bm-2">
                            <select class="in-field-color form-control" id="reallocatedBin" name="reallocatedBin" required>
                              <option {{ $allocates->reallocatedBin }}>{{ $allocates->reallocatedBin }}</option>
                              <option value="1">sd</option>
                                  {{-- @foreach ($allo_bins as $allo_bin)
                                  <option value="{{$allo_bin}}">
                                      {{ ($allo_bin) ? '' : ''}}  
                                      {{$allo_bin}} 
                                  </option> 
                                  @endforeach --}}
                          </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">

                        <div class="col-md-6">
                      <label class="text-dark mt-1 font-weight-medium" for="">Received Batch No</label>
                      <div class="input-group bm-2">
                          <input value="{{$allocates->rereceivedBatchNo}}" type="number" class="form-control in-field-color" name="rereceivedBatchNo" id="rereceivedBatchNo" placeholder="23.00" required>
                      </div>
                        </div>

                        <div class="col-md-6">
                      <label class="text-dark mt-1 font-weight-medium" for="">Received Quantity</label>
                      <div class="input-group bm-2">
                          <input  value="{{$allocates->rereceivedQuantity}}" type="number" class="in-field-color form-control" id="rereceivedQuantity"  name="rereceivedQuantity" placeholder="23"  required>
                      </div>
                    </div>
                  </div>

                      <label class="text-dark mt-1 font-weight-medium" for="">Received Rolls Count</label>
                      <div class="input-group bm-2">
                        <input  value="{{$allocates->rereceivedRollsCount}}" type="number" class="in-field-color form-control" id="rereceivedRollsCount"  name="rereceivedRollsCount" placeholder="23.00" rows="3" col="50" required>
                      </div>

                      <div class="container mt-3">
                          <center>
                              <button class="btn btn-success mx-2" style="border-radius:10px;" type="submit" style="">
                                  <i class="mdi mdi-play"></i> Edit 
                              </button>
                              <a class="btn btn btn-outline-dark" type="button" style="border-radius:10px;" href="/view-receive-bin-allocate_all">
                                <i class="mdi mdi-arrow-left-bold"></i> Back 
                              </a>
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
