@extends('admin.stock_manage_admin_dash')
@section('admin')

<div class="container-responsive mb-0"> <!--d1-->

  <div class="row">
      <div class="col-lg-6">
          <div class="card card-default">
              <div class="card-header card-header-border-bottom">
                  <h3 class="w3-animate-left bm-2 pt-0">
                      <span class="font-weight-bold">Create - </span>
                      <span class="">Issue Bin Allocation</span>
                  </h3>
              </div>
              <div class="">
              <form class="" method="POST" action="{{ route('store_issue_allocate_bin') }}">
              {{ csrf_field() }} 
                  <div class="card-body">

                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Tot Qty-Rack</label>
                      <div class="input-group bm-2">
                          <input type="number" class="form-control in-field-color" name="isissuedTotalQuantity" id="isissuedTotalQuantity" placeholder="23.00" required>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-dark mt-1 font-weight-medium" for="">Allocated Rack</label>
                      <div class="input-group bm-2">
                        <select class="in-field-color form-control" id="isallocatedRack" name="isallocatedRack" value="" required>
                          <option value="">---Select Allocated Rack---</option>
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
                            <select class="in-field-color form-control" id="isallocatedBin" name="isallocatedBin" value="" required>
                              <option value="">---Select Allocated Bin---</option>
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
                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Batch No</label>
                      <div class="input-group bm-2">
                          <input type="number" class="form-control in-field-color" name="rarackName" id="rarackName" placeholder="23.00" required>
                      </div>
                        </div>

                        <div class="col-md-6">
                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Quantity</label>
                      <div class="input-group bm-2">
                          <input  type="number" class="in-field-color form-control" id="ranote"  name="ranote" placeholder="23"  required>
                      </div>
                    </div>
                  </div>

                      <label class="text-dark mt-1 font-weight-medium" for="">Issued Rolls Count</label>
                      <div class="input-group bm-2">
                        <input  type="number" class="in-field-color form-control" id="ranote"  name="ranote" placeholder="23.00" rows="3" col="50" required>
                      </div>

                      <div class="container mt-3">
                          <center>
                              <button class="btn btn-success mx-2" style="border-radius:10px;" type="submit" style="">
                                  <i class="mdi mdi-play"></i> Create 
                              </button>
                              <a class="btn btn-dark btn " type="button" style="border-radius:10px;" href="/view-issue-bin-allocate_all">
                                  <i class="mdi mdi-binoculars"></i> View 
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


  
{{-- <script>
  function searchAllocatedRack() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("allocatedRack");
    filter = input.value.toUpperCase();
    table = document.getElementById("myIssueAllocationTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function searchAllocatedBin() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("allocatedBin");
    filter = input.value.toUpperCase();
    table = document.getElementById("myIssueAllocationTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function searchBatchNo() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("batchNo");
    filter = input.value.toUpperCase();
    table = document.getElementById("myIssueAllocationTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[3];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script> --}}

@endsection 
