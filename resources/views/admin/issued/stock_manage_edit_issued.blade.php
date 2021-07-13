@extends('admin.stock_manage_admin_dash')
@section('admin')

<style> 
  .viewdedign {
    position: relative;
    animation-name: example;
    animation-duration: 3s;  
    animation-delay: 0s;
    animation-fill-mode: backwards;
  }
  
  @keyframes example {
    from {top: -100px;}
    to {top: 0px;}
  }
  </style>
  

<div class="container-responsive mx-3"> <!--d1-->
  <h3 class="m-3 pt-3 w3-animate-left">
    <span class="font-weight-bold"> Edit - </span>
    <span>Issued Materials</span>
  </h3>
  
    <form class="g-0 my-2"  method="POST" action="{{ route('update_issue', $issues->id) }}">
      {{ csrf_field() }} 
      <div class="bg-white px-5"> <!--d2-->
        
        <div class="row text-center my-1" > <!--d3-->
          <!-- start enter buyer, season-->
          <div class=" form-group col-md-5 my-1"> <!--d4 buyer start-->
            <label for="validationTooltip01" class="col-form-label">Buyer</label>
            <div class="input-group has-validation"> <!--d5-->
              <select class="custom-select in-field-color" id="ibuyer" name="ibuyer" value="" required>
                <option {{ $issues-> ibuyer}}>{{ $issues-> ibuyer}}</option>
                <option value="1">#</option>
                <option value="2">#</option>
                <option value="3">#</option>
                <option value="4">#</option>
              </select>
              <div class="invalid-feedback"> <!--d6-->
                Select the Buyer
              </div> <!--d6-->
            </div> <!--d5-->
          </div> <!--d4 buyer end-->

          <div class="form-group col-md-4"> <!--d7 season start-->
            <label for="validationTooltip01" class="col-form-label">Season</label>
              <select class="custom-select in-field-color" id="iseason" name="iseason" required>
                <option value="{{ $issues-> iseason}}">{{ $issues-> iseason}}</option>
                <option value="1">#s</option>
                <option value="2">#s</option>
                <option value="3">#s</option>
                <option value="4">#s</option>
              </select>
              <div class="invalid-feedback"> <!--d8-->
                Select the Season
              </div> <!--d8-->
          </div> <!--d7 season end-->
          <!-- end enter buyer, season-->
        </div> <!--d3-->
        <!--horizontal line-->
        {{--  <hr style="height: 1px; background-color:#0000ff">  --}}
        <hr style="height: 2px; background-color:#aeaeb9"/>
        <div class="h6"> <!--d9-->
          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">Style/Iman</label>
            <div class="col-5 ml-4">
              <select class="custom-select in-field-color" id="istyle" name="istyle" value="" required>
                <option value="{{ $issues-> istyle}}">{{ $issues-> istyle}}</option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
              </select>
            <div class="invalid-feedback">Select the Style/Iman</div>
            </div>
          </div>

          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">GRN</label>
            <div class="col-5 ml-4">
              <select class="custom-select in-field-color" id="igrnNo" name="igrnNo" value="" required>
                <option value="{{ $issues-> igrnNo}}">{{ $issues-> igrnNo}}</option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
              </select>
          </div>

          <div class="row my-1">
            <label for="validationTooltip1" class="col-3 col-form-label">Category</label>
              <div class="col-5 ml-4">
                <select class="custom-select in-field-color" id="icategory" name="icategory" value="" required>
                  <option value="{{ $issues-> icategory}}">{{ $issues-> icategory}}</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option>
                </select>
              <div class="invalid-feedback">Select the Category</div>
              </div>
          </div>

          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">Item Type</label>
            <div class="col-5 ml-4">
              <select class="custom-select in-field-color" id="iitemType" name="iitemType" value="{{ $issues-> iitemType}}" required>
                <option value="">Item Type</option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
              </select>
              <div class="invalid-feedback">Select Item Type</div>
            </div>
          </div>

          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">Item Category</label>
            <div class="col-5 ml-4">
                <select class="custom-select in-field-color" id="iitemCategory" name="iitemCategory" value="{{ $issues-> iitemCategory}}" required>
                  <option value="{{ $issues-> iitemCategory}}">{{ $issues-> iitemCategory}}</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option>
                </select>
                <div class="invalid-feedback">Select Item Category</div>
            </div>
          </div>

          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">Color</label>
              <div class="col-5 ml-4">
                <select class="custom-select  in-field-color" id="icolor" name="icolor" value="" required>
                  <option value="{{ $issues-> icolor}}">{{ $issues-> icolor}}</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option>
                </select>
                <div class="invalid-feedback">Select Color</div>
              </div>
          </div>

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Description</label>
            <div class="col-6 ml-4"> <!--d11-->
              <textarea class="form-control rounded-5  in-field-color" id="idescription" name="idescription" placeholder="description" rows="10" required>
                {{ $issues-> idescription }}
              </textarea>
              <div class="invalid-feedback"> <!--d12-->
                Enter Description
              </div> <!--d12-->
            </div> <!--d11-->
          </div> <!--d10-->

        

          <div class="my-1 row"> <!--d10-->
            <label class="col-3 col-form-label">Quantity</label>
            <div class="col-5 ml-4"> <!--d11-->
              <input type="text" class="form-control in-field-color" id="iquantity" value="{{ $issues-> iquantity}}" name="iquantity" placeholder="Number" required>
              <div class="invalid-feedback"> <!--d12-->
                Enter Quantity
              </div> <!--d12-->
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="my-1 row">
            <label class="col-3 col-form-label">Date</label>
            <div class="col-5 ml-4">
              <input type="date" class="form-control in-field-color" id="idate" name="idate" value="{{ $issues-> idate}}" required>
                <div class="invalid-feedback">
                  Select Date
                </div>
            </div> 
          </div>

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Roll Count</label>
            <div class="col-5 ml-4"> <!--d11-->
              <input type="text" class="form-control in-field-color" id="irollCount" value="{{ $issues-> irollCount}}" name="irollCount" placeholder="Number" required>
              <div class="invalid-feedback"> <!--d12-->
              Enter Roll Count
              </div> <!--d12-->
            </div> <!--d11-->
          </div> <!--d10-->
          <!--horizontal line-->
          {{--  <hr style="height: 1px; background-color#0000ff">  --}}
          <hr style="height: 2px; background-color:#aeaeb9"/>

          <div class="my-1 row"> <!--d10-->
            <label for="toyQuantity" class="col-3 col-form-label">Total Quantity Issued</label>
            <div class="col-5 ml-4"> <!--d11-->
              <input type="number" class="form-control in-field-color" id="itotalQantityIssued" value="{{ $issues-> itotalQantityIssued}}" name="itotalQantityIssued" disabled>
            </div> <!--d11-->
          </div> <!--d10--> 

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Total Rolls Issued</label>
            <div class="col-5 ml-4"> <!--d11-->
              <input type="number" class="form-control in-field-color" id="itotalRollsIssued" value="{{ $issues-> itotalRollsIssued}}" name="itotalRollsIssued" disabled>
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Remark</label>
              <div class="col-6 ml-4"> <!--d11-->
                <textarea class="form-control rouremarknded-5 in-field-color" id="iremark" name="iremark" placeholder="Remark" rows="3" col="50" required>
                  {{ $issues-> iremark}}
                </textarea>
                <div class="invalid-feedback"> <!--d12-->
                  Type Remark
                </div> <!--d12-->
              </div> <!--d11-->
          </div> <!--d10-->

          <!--Checkbox and save byutton - start-->
          <div class="text-center p-2">
            <div class="col-12">
              {{--  <div class="form-check  pb-3">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Above details are checked and filled including bin allocation.
                </label>
                <div class="invalid-feedback">
                  Tick the box.
                </div>
              </div>
            </div>  --}}
            <!--Modal Button Start-->
          {{--  <div class="text-center p-2">
            <center>
              <a type="button" class="w3-button w3-hover-black w3-dark-grey w3-round-xxlarge" href="/" data-toggle="modal" data-target=".bd-example-modal-lg" style="background-color: #e6951d;  width:200px; height:35px; padding: 5px; color:white;">
                <i class="bi bi-plus-circle"></i>
                Allocate Bin Location</a>
            </center>
          </div>    --}}
          <!--Modal Button end-->

          <div class="col-12 my-1">
            <button class="btn btn-size w3-green w3-hover-black w3-round-xxlarge mx-2 my-2" type="submit">
              <i class="bi bi-caret-right-fill"></i>
                Save
            </button>
            {{-- <a href="/view-issue" class="w3-btn w3-blue w3-hover-black w3-round-xxlarge mx-2 my-2" type="button">
              <i class="bi bi-binoculars-fill viewdedign"></i>
                View  
            </a> --}}
            <button class="btn btn-size w3-hover-black w3-round-xxlarge w3-ripple mx-2 my-2" type="reset" style="background-color: #e6951d; color:white;">
              <i class="w3-spin fa fa-refresh"></i>
                Reset
            </button>
          </div>
          </div>
          <!--Checkbox and save byutton - end-->
        </div>
      
    </div>
    </form> 
  </div>


  <!--Modal Content Start--> 
  <div class="modal fade bd-example-modal-lg mx-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">    
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title my-3 mx-0" id="exampleModalLabel">Bin Allocation</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="my-2">
            <div class="h6 px-5"> <!--d9-->
              <form action=""  method="POST">
            {{ csrf_field() }} 
            
              <div class="my-1 row"> <!--d10-->
                <label for="validationCustom01" class="col-4 col-form-label">Issued Total Quantity (to relevant rack)</label>
                <div class="col-5"> <!--d11-->
                  <input type="text" class="form-control in-field-color" id="iissuedTotalQuantity" name="iissuedTotalQuantity" placeholder="Number" required>
                  <div class="invalid-feedback"> <!--d12-->
                    Enter Issued Total Quantity
                  </div> <!--d12-->
                </div> <!--d11-->
              </div> <!--d10-->

              <div class="my-1 row">
                <label for="validationTooltip1" class="col-4 col-form-label">Allocated Rack</label>
                <div class="col-5">
                  <select class="custom-select in-field-color ml-4" id="iallocatedRack" name="iallocatedRack" value="" required>
                    <option value="{{ $issues-> iallocatedRack}}">{{ $issues-> iallocatedRack}}</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                  </select>
                  <div class="invalid-feedback">Select the Allocated Rack</div>
                </div>
              </div>

              <div class="my-1 row">
                <label for="validationTooltip1" class="col-4 col-form-label">Allocated Bin</label>
                <div class="col-5">
                  <select class="custom-select in-field-color ml-4" id="iallocatedBin" name="iallocatedBin" value="" required>
                    <option value="{{ $issues-> iallocatedBin}}">{{ $issues-> iallocatedBin}}</option>
                    <option value=""></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                  </select>
                  <div class="invalid-feedback">Select the Allocated Bin</div>
                </div>
              </div>

              <div class="my-1 row"> <!--d10-->
                <label for="validationCustom01" class="col-4 col-form-label">Issued Batch No</label>
                <div class="col-5"> <!--d11-->
                  <input type="text" class="form-control in-field-color ml-4" id="iissuedBatchNo" name="iissuedBatchNo" placeholder="Number" required>
                    <div class="invalid-feedback"> <!--d12-->
                      Enter Issued Batch No
                    </div> <!--d12-->
                </div> <!--d11-->
              </div> <!--d10-->

              <div class="my-1 row"> <!--d10-->
                <label for="validationCustom01" class="col-4 col-form-label">Issued Quantity</label>
                <div class="col-5"> <!--d11-->
                  <input type="text" class="form-control in-field-color ml-4" id="iissuedQuantity" name="iissuedQuantity" placeholder="Number" required>
                  <div class="invalid-feedback"> <!--d12-->
                    Enter Issued Quantity
                  </div> <!--d12-->
                </div> <!--d11-->
              </div> <!--d10-->

              <div class="my-1 row"> <!--d10-->
                <label for="validationCustom01" class="col-4 col-form-label">Issued Rolls Count</label>
                  <div class="col-5"> <!--d11-->
                    <input type="text" class="form-control  in-field-color ml-4" id="iissuedRollsCount" name="iissuedRollsCount" placeholder="Number" required>
                    <div class="invalid-feedback"> <!--d12-->
                      Enter Issued Rolls Count
                    </div> <!--d12-->
                  </div> <!--d11-->
              </div> <!--d10-->
              
            <div class="container my-1 text-center">
              <button type="button" class="btn w3-hover-black  w3-round-xxlarge w3-green btn-size">
                <i class="bi bi-caret-right-fill"></i>
                Save</button>
              <button type="reset" class="btn text-light w3-hover-black  w3-round-xxlarge btn-size" style="background-color: #e6951d;">
                <i class="w3-spin fa fa-refresh"></i>
                Reset</button>
              {{--  <button type="button" class="btn w3-hover-black  w3-round-xxlarge w3-red btn-size" data-dismiss="modal">
                <i class="fa fa-close"></i>
                Cancel</button>  --}}
            </div>
          </form>
        </div>  
          </div>
          </div>
          <!--horizontal line-->
          {{--  <hr class="mb-0" style="height: 1px; background-color:#0000ff">  --}}
        </div>
        <!--Table to display content-->
        <div class="w3-container w3-responsive text-center bg-light">
          <!--Table heading-->
          <h3 class="mb-4">Display Bin Allocation for Issued Materials</h3>
          <!--Table start-->
          <table class="w3-table-all  w3-striped ">
            <thead class="" >
              <tr class=""  style="background-color: #3d3d3d; color:white;">
                <th scope="col">No</th>
                <th scope="col">Issued Tot</th>
                <th scope="col">Aallo Rack</th>
                <th scope="col">Aallo Bin</th>
                <th scope="col">Batch No</th>
                <th scope="col">Quantity</th>
                <th scope="col">Rolls</th>
              </tr>
            </thead>
            <tbody>
              <!--row 1-->
              <tr class="w3-hover-gray">
                <th scope="row">1</th>
                <td >Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>

              <!--row 2-->
              <tr class="w3-hover-gray">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr class="w3-hover-gray">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Modal Content end-->

<style>
  /*Fill input box*/
  .in-field-color{
    background-color: #f5f5f5;
    color: black;
  }

  /*change button size*/
  .btn-size{
    width:100px;
    height:35px;
    padding: 5px;
  }
</style>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
      'use strict';
      window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
          form.classList.add('was-validated');
          }, false);
      });
      }, false);
  })();
  </script>

  @endsection