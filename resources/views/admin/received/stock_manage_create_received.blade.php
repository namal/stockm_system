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
  <h3 class="mb-3  w3-animate-left">
    <span class="font-weight-bold"> Create - </span>
    <span>Received Materials</span>
  </h3>
  <div class="">
  <form class="g-0 my-2" method="POST" action="{{ route('store_receive') }}">
    {{ csrf_field() }} 

    <div class="bg-white px-5" style=""> <!--d2-->
      <div class="row text-center my-1"> <!--d3-->
        <!-- start enter buyer, season-->
        <div class="form-group col-md-5"> <!--d4 buyer start-->
          <label for="validationTooltip01" class="col-form-label">Buyer</label>
            <div class="input-group has-validation"> <!--d5-->
              <select class=" form-control in-field-color dynamic" id="rbuyer" name="rbuyer" value="" data-dependent="season" required>
                <option value="" >--Buyer--</option>
                {{-- <option value="1">Style</option>
                <option value="2">sasd</option> --}}
                @foreach ($buyer_list as $buyer)
              <option value="{{$buyer->buyer}}">{{ $buyer->buyer}}
              </option>
              @endforeach

               
              </select>
             
              
        {{-- <select class="form-control in-field-color" id="rbuyer" name="rbuyer">
          <option value="">--Buyer--</option>
          {{-- @foreach ($buyers as $buyer)
              <option value="{{$buyer}}">{{ ($buyer) ? '' : ''}}  
                  {{$buyer}} 
              </option> 
          @endforeach--}}
      {{-- </select>  --}}
              <!--d6-->
            </div> <!--d5-->
        </div> <!--d4 buyer end-->

        <div class="form-group col-md-5 my-1"> <!--d7 season start-->
          <label for="validationTooltip01" class="col-form-label">Season</label>
            <select class="form-control in-field-color dynamic" id="rseason" name="rseason" data-dependent="style" required>
              <option value="">--Season--</option>
               {{-- <option value="">Style</option>
              <option value="1">sasd</option> --}}
                {{-- @foreach ($seasons as $season)
                <option value="{{$season}}">{{ ($season) ? '' : ''}}  
                  {{$season}} 
                </option>
                @endforeach --}}
                
          {{-- @foreach ($seasons as $season)
          <option value="{{$season}}">{{ ($season)}}  
              {{$season}} 
          </option>
        @endforeach --}}
            </select>
            <!--d8-->
        </div> <!--d7 season end-->
          <!-- end enter buyer, season-->
      </div> <!--d3-->
        <!--horizontal line-->
      <hr style="height: 2px; background-color:#aeaeb9"/>

      <div class="h6"> <!--d9-->
      <div class="row my-1">
        <label for="validationTooltip1" class="col-md-3 col-form-label">Style/Iman</label>
          <div class="col-5 ml-4">
            <select class="form-control in-field-color" id="rstyle" name="rstyle" value="" required>
              <option value="">Style</option>
              <option value="1">sasd</option>
              <option value="2">sasd</option>
              <option value="3">sasd</option>
              <option value="4">sasd</option>
            </select>
        </div>
      </div>

          <div class="my-1 row">
            <label for="validationTooltip1" class="col-3 col-form-label">GRN</label>
            <div class="col-5 ml-4">
              <select class="form-control in-field-color" id="rgrnNo" name="rgrnNo" value="" required>
                <option value="">GRN</option>
                <option value="1">sasd</option>
                <option value="2">sasd</option>
                <option value="3">sasd</option>
                <option value="4">sasd</option>
              </select>
            </div>
          </div>

          <div class="row  my-1">
            <label for="validationTooltip1" class="col-3 col-form-label">Category</label>
              <div class="col-5 ml-4">
                <select class="form-control in-field-color" id="rcategory" name="rcategory" value="" required>
                  <option value="">Category</option>
                  <option value="1">sasd</option>
                  <option value="2">sasd</option>
                  <option value="3">sasd</option>
                  <option value="4"></option>
                </select>
              </div>
          </div>

          <div class="row my-1">
            <label for="validationTooltip1" class="col-3 col-form-label">Item Type</label>
            <div class="col-5 ml-4">
              <select class="form-control in-field-color" id="ritemType" name="ritemType" value="" required>
                <option value="">Item Type</option>
                <option value="1">sasd</option>
                <option value="2">sasd</option>
                <option value="3">sasd</option>
                <option value="4">sasd</option>
              </select>
            </div>
          </div>

          <div class="row my-1">
            <label for="validationTooltip1" class="col-3 col-form-label">Item Category</label>
            <div class="col-5 ml-4">
                <select class="form-control in-field-color" id="ritemCategory" name="ritemCategory" value="" required>
                  <option value="">Item Category</option>
                  <option value="1">sasd</option>
                  <option value="2">sasd</option>
                  <option value="3">sasd</option>
                  <option value="4">sasd</option>
                </select>
            </div>
          </div>

          <div class="row my-1">
            <label for="validationTooltip1" class="col-3 col-form-label">Color</label>
              <div class="col-5 ml-4">
                <select class="form-control in-field-color" id="rcolor" name="rcolor" value="" required>
                  <option value="">Color</option>
                  <option value="1">sasd</option>
                  <option value="2">sasd</option>
                  <option value="3">sasd</option>
                  <option value="4">sasd</option>
                </select>
              </div>
          </div>

          <div class="row my-1"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Description</label>
            <div class="col-7"> <!--d11-->
              <textarea class="form-control rounded-5 in-field-color ml-4" id="rdescription" name="rdescription" placeholder="rdescription" rows="10" required></textarea>
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="row my-1"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Quantity</label>
            <div class="col-5"> <!--d11-->
              <input type="text" class="form-control in-field-color ml-4" id="rquantity" name="rquantity" placeholder="Number" required>
              <div class="invalid-feedback"> <!--d12-->
                Enter Quantity
              </div> <!--d12-->
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="my-1 row">
            <label for="validationCustom01" class="col-3 col-form-label">Date</label>
            <div class="col-5">
              <input type="date" class="form-control in-field-color ml-4" id="rdate" name="rdate" value="" required>
            </div> 
          </div>

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Roll Count</label>
            <div class="col-5"> <!--d11-->
              <input type="text" class="form-control in-field-color ml-4" id="rrollCount" name="rrollCount" placeholder="Number" required>
            </div> <!--d11-->
          </div> <!--d10--> 

          <!--horizontal line-->
          <hr style="height: 2px; background-color:#aeaeb9"/>

          <div class="my-1 row"> <!--d10-->
            <label for="toyQuantity" class="col-3 col-form-label">Total Quantity Received</label>
            <div class="col-5"> <!--d11-->
              <input type="text" class="form-control ml-4" id="rTotQuantityReceived" name="rTotQuantityReceived" placeholder="" disabled>
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Total Rolls Received</label>
            <div class="col-5"> <!--d11-->
              <input type="text" class="form-control ml-4" id="rTotRollsReceived" name="rTotRollsReceived" placeholder="" disabled>
            </div> <!--d11-->
          </div> <!--d10-->

          <div class="my-1 row"> <!--d10-->
            <label for="validationCustom01" class="col-3 col-form-label">Remark</label>
              <div class="col-7"> <!--d11-->
                <textarea class="form-control rouremarknded-5 in-field-color ml-4" id="rremark" name="rremark" placeholder="Remark" rows="3" col="50" required></textarea>
              </div> <!--d11-->
          </div> <!--d10-->

          <div class="text-center p-1">
          
          <!--Modal Button Start-->
          <div class="my-2 text-center">
            <center>
              <button type="button" class="w3-btn  w3-hover-black w3-dark-grey w3-round-xxlarge ml-4" data-toggle="modal" data-target=".bd-example-modal-lg" style=" width:200px; height:35px; padding: 5px; color:white;">
                <i class="bi bi-plus-circle"></i>
                Allocate Bin Location</button>

                <a type="button" class="w3-button w3-hover-black w3-blue w3-round-xxlarge" href="{{url('/view-receive-allocate-bin')}}" style="background-color: #e6951d;  width:220px; height:35px; padding: 5px; color:white;">
                  <i class="bi bi-binoculars-fill viewdedign"></i>
                  View Allocated Bin Location</a>
            </center>
          </div>  
          <!--Modal Button end-->

            <div class="col-12 my-1">
            <button class="w3-btn  btn-size w3-green w3-hover-black w3-round-xxlarge mx-2 my-2" type="submit">
              <i class="bi bi-caret-right-fill"></i>
                Save
            </button>
            <a href="/view-received_all" class="w3-btn w3-blue w3-hover-black w3-round-xxlarge mx-2 my-2" type="button">
              <i class="bi bi-binoculars-fill viewdedign"></i>
                View  
            </a>
            <button class="w3-btn  btn-size w3-hover-black w3-round-xxlarge w3-ripple mx-2 my-2" type="reset" style="background-color: #e6951d; color:white;">
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
</div>

          <!--Modal Content Start--> 
          <div class="modal fade bd-example-modal-lg mx-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">    
              <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title my-1 mx-0" id="exampleModalLabel">Bin Allocation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="h6 px-2"> <!--d9-->
                        <form method="post" action="{{route('store_receive_allocate_bin')}}">
                          {{ csrf_field() }} 

                          <div class="my-1 row"> <!--d10-->
                            <label for="validationCustom01" class="col-4 col-form-label">Received Total Quantity</label>
                            <div class="col-5"> <!--d11-->
                              <input type="number" class="form-control in-field-color ml-4" id="retotalQuantityReceived" name="retotalQuantityReceived"  placeholder="Number" required>
                            </div> <!--d11-->
                          </div> <!--d10-->

                          <div class="my-1 row">
                            <label for="validationTooltip1" class="col-4 col-form-label">Allocated Rack</label>
                            <div class="col-5">
                            <select class="form-control in-field-color ml-4" id="reallocatedRack" name="reallocatedRack" value="" required>
                            <option value="">Allocated Rack</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                            </select>
                            </div>
                          </div>

                          <div class="my-1 row">
                            <label for="validationTooltip1" class="col-4 col-form-label">Allocated Bin</label>
                            <div class="col-5">
                            <select class="form-control in-field-color ml-4" id="reallocatedBin" name="reallocatedBin" value="" required>
                            <option value="">Allocated Bin</option>
                            <option value=""></option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                            </select>
                            </div>
                          </div>

                      <div class="my-1 row"> <!--d10-->
                        <label for="validationCustom01 in-field-color" class="col-4 col-form-label">Received Batch No</label>
                        <div class="col-5"> <!--d11-->
                          <input type="text" class="form-control ml-4 in-field-color" id="rereceivedBatchNo" name="rereceivedBatchNo" placeholder="Number - 57" required>
                        </div> <!--d11-->
                      </div> <!--d10-->

                      <div class="my-1 row"> <!--d10-->
                        <label for="validationCustom01 in-field-color" class="col-4 col-form-label">Received Quantity</label>
                        <div class="col-5"> <!--d11-->
                          <input type="number" class="form-control in-field-color ml-4" id="rereceivedQuantity" name="rereceivedQuantity" placeholder="Number - 57.00" required>
                          <div class="invalid-feedback"> <!--d12-->
                            Enter Received Quantity
                          </div> <!--d12-->
                        </div> <!--d11-->
                      </div> <!--d10-->

                      <div class="my-1 row"> <!--d10-->
                        <label for="validationCustom01  in-field-color" class="col-4 col-form-label">Received Rolls Count</label>
                          <div class="col-5"> <!--d11-->
                            <input type="number" class="form-control  in-field-color ml-4" id="rereceivedRollsCount" name="rereceivedRollsCount" placeholder="Number" required>
                            <div class="invalid-feedback"> <!--d12-->
                              Enter Received Rolls Count
                            </div> <!--d12-->
                          </div> <!--d11-->
                      </div> <!--d10-->

                      <div class="container my-1 text-center">
                        <button type="submit" name="submit" class="w3-btn  w3-hover-black w3-round-xxlarge w3-green btn-size" >
                          <i class="bi bi-caret-right-fill"></i>
                          Save
                        </button>
                        {{-- <button type="reset" class="btn text-light w3-hover-black w3-round-xxlarge btn-size mx-2 my-2" style="background-color: #e6951d;">
                          <i class="w3-spin fa fa-refresh"></i>
                          Reset
                        </button> --}}
                        {{-- <button type="button" class="btn w3-hover-black w3-round-xxlarge w3-red btn-size mx-1 my-1" data-dismiss="modal">
                          <i class="fa fa-close"></i>
                          Cancel</button> --}}
                      </div>
                    </form>
                  </div>  
                    
                </div>
              </div>
            </div>
          </div>
                  
                </div>

                <!--Table to display content-->
                <div class="w3-container w3-responsive bg-light p-1">
                  <!--Table heading-->
                  <h3 class="px-3">Display Bin Allocation for Received Materials</h4>
                  <!--Table start-->
                  <table class="w3-table-all w3-striped">
                    <thead class="">
                      <tr class="" style="background-color: #3d3d3d; color:white;">
                        <th scope="col">No</th>
                        <th scope="col">Received Tot</th>
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
                    </tbody>
                  </table>
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
  $(document).ready(function(){
  
   $('.dynamic').change(function(){
    if($(this).val() != '')
    {
      //get data from text box
     var select = $(this).attr("id");
     var value = $(this).val();
     var dependent = $(this).data('dependent'); 
     var _token = $('input[name="_token"]').val();

//ajax
     $.ajax({
       //web api route(controller name, fetch method)
      url:"{{ route('stock-management-received.fetchReceive') }}",

      //method
      method:"POST",

     // data
      data:{select:select, value:value, _token:_token, dependent:dependent},
      success:function(result)
      {
       $('#'+dependent).html(result);
      }
  
     })
    }
   });
   
  $('#buyer').change(function(){
    $('#season').val('');
    $('#style').val('');
    $('#idelvDate').val('');
  });
  
  $('#season').change(function(){
    $('#style').val('');
    $('#idelvDate').val('');
  });
  
  
  });
  </script>


{{-- 
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
  </script> --}}

<!-- dropdown.blade.php -->
{{-- 
<script type="text/javascript">
  jQuery(document).ready(function ()
  {
          jQuery('select[name="season"]').on('change',function(){
             var countryID = jQuery(this).val();
             if(countryID)
             {
                jQuery.ajax({
                   url : 'received/' +countryID,
                   type : "GET",
                   dataType : "json",
                   success:function(data)
                   {
                      console.log(data);
                      jQuery('select[name="state"]').empty();
                      jQuery.each(data, function(key,value){
                         $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                      });
                   }
                });
             }
             else
             {
                $('select[name="state"]').empty();
             }
          });
  });
  </script> --}}

  @endsection