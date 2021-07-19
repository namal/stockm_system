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
  
  @keyframes example {
    from {top: -100px;}
    to {top: 0px;}
  }

  </style>
  

<div class="container-responsive mx-3">  
  <h3 class="mb-3  w3-animate-left">
    <span class="font-weight-bold"> Create - </span>
    <span>Issued Materials</span>
  </h3>
  <div class="">

<!-- Button trigger modal -->
<button
  type="button"
  class="btn btn-primary"
  data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
>
  Launch demo modal
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  data-mdb-backdrop="static" 
  data-mdb-keyboard="false"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>

      <div class="modal-body">
        <div class="container">
          <div class="h6 px-2"> <!--d9-->
            <form method="post" action="">
            {{ csrf_field() }} 
          
            <div class="my-1 row">                 
              <label class="col-4 col-form-label">Issued Tot Qty-Rack</label>
              <div class="col-5">                    
                <input type="number" class="form-control in-field-color ml-4" id="isissuedTotalQuantity" name="isissuedTotalQuantity" placeholder="Number" required>
              </div>                    
            </div>                 

            <div class="my-1 row">
              <label  class="col-4 col-form-label">Allocated Rack</label>
              <div class="col-5">
                <select class="custom-select in-field-color ml-4" id="isallocatedRack" name="isallocatedRack" value="" required>
                  <option value="">Allocated Rack</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  {{-- {
                  <option value="$issues->isallocatedRack">{{$issues->isallocatedRack}}</option>
                } --}}
                </select>
              </div>
            </div>

            <div class="my-1 row">
              <label  class="col-4 col-form-label">Allocated Bin</label>
              <div class="col-5">
                <select class="custom-select in-field-color ml-4" id="isallocatedBin" name="isallocatedBin" value="" required>
                  <option value="">Allocated Bin</option>
                  {{-- <option value=""></option> --}}
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option>
                </select>
              </div>
            </div>

            <div class="my-1 row">                 
              <label class="col-4 col-form-label">Issued Batch No</label>
              <div class="col-5">                    
                <input type="text" class="form-control in-field-color ml-4" id="isissuedBatchNo" name="isissuedBatchNo" placeholder="Number" required>
              </div>                    
            </div>                 

            <div class="my-1 row">                 
              <label class="col-4 col-form-label">Issued Quantity</label>
              <div class="col-5">                    
                <input type="number" class="form-control in-field-color ml-4" id="isissuedQuantity" name="isissuedQuantity" placeholder="Number" required>
              </div>                    
            </div>                 

            <div class="my-1 row">                 
              <label class="col-4 col-form-label">Issued Rolls Count</label>
                <div class="col-5">                    
                  <input type="number" class="form-control  in-field-color ml-4" id="isissuedRollsCount" name="isissuedRollsCount" placeholder="Number" required>
                </div>                    
            </div>                 
            
          <div class="container my-1 text-center">
            <button type="submit" name="submit" class="w3-btn  w3-hover-black w3-round-xxlarge w3-green btn-size" data-mdb-backdrop="true" data-mdb-keyboard="false">
              <i class="mdi mdi-menu-right mdi-find-replace"></i>
              <i class="mdi mdi-find-replace"></i>
              <i class="mdi mdi-find-replace"></i>
              <i class="mdi mdi-share"></i>
              <i class="mdi "></i>
              <i class="mdi"></i>
              Save
            </button>
            {{-- <button type="reset" class="btn text-light w3-hover-black  w3-round-xxlarge btn-size" style="background-color: #e6951d;">
              <i class="w3-spin fa fa-refresh"></i>
              Reset</button> --}}
             {{-- <button type="button" class="btn w3-hover-black  w3-round-xxlarge w3-red btn-size" data-dismiss="modal">
              <i class="fa fa-close"></i>
              Cancel</button>  --}}
          </div>
        </form>
        </div>
        </div>
      </div>
      
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save changes</button>

        <button type="submit" class="w3-btn  w3-hover-black w3-round-xxlarge w3-green btn-size" >
          <i class="bi bi-caret-right-fill"></i>
          Save
        </button>


        <div class="w3-container w3-responsive bg-light">
          <!--Table heading-->
          <h3 class="mb-4">Display Bin Allocation for Issued Materials</h3>
          <!--Table start-->
          <table class="table-responsive caption-top table-hover table-bordered text-center">
            <thead class="text-center" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)" >
              <tr class="">
                <th width="auto">No</th>
                <th width="auto">Issued Tot</th>
                <th width="auto">Aallo Rack</th>
                <th width="auto">Aallo Bin</th>
                <th width="auto">Batch No</th>
                <th width="auto">Quantity</th>
                <th width="auto">Rolls</th>
                <th width="auto">Action</th>
              </tr>
            </thead>
            <tbody>
           
              {{-- @foreach ($issues as $issue)
              <tr class="bg-white">
                <th scope="row">{{ $issue->id }}</th>
                <td>{{$issue->$isissuedTotalQuantity}}</td>
                <td>{{$issue->$isallocatedRack}}</td>
                <td>{{$issue->$isallocatedBin}}</td>
                <td>{{$issue->$isissuedBatchNo}}</td>
                <td>{{$issue->$isissuedQuantity}}</td>
                <td>{{$issue->$isissuedRollsCount}}</td>
                <td> --}}
                              
                  {{-- <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit', $bin->id) }}" class="">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form method="POST" id="delete-bin-{{ $issue->id }}" action="{{ route('delete', $bin->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                  </form>  

                  <button onclick="if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-bin-{{ $issue->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                   class="btn-sm btn-danger btn-raised mx-1" href=" ">
                   <i class="bi bi-trash-fill mr-0" aria-hidden="true"></i>
                </button>   --}}
      
                {{-- </td>
                
              </tr>
            @endforeach  --}}
                 {{-- <td>
                  
                  <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit', $issue_->id) }}" class="">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form method="POST" id="delete-issue-bin-allo-{{ $issue_->id }}" action="{{ route('delete', $issue_->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                  </form>  

                  <button onclick="if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-issue-bin-allo-{{ $issue_->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                   class="btn-sm btn-danger btn-raised mx-1" href=" ">
                   <i class="bi bi-trash-fill mr-0" aria-hidden="true"></i>
                </button>  
      
                </td>  --}}

              

            </tbody>
          </table>
        </div>


        
      </div>
    </div>
  </div>
</div>












{{-- ================================================ --}}


    <form class="g-0 my-2"  method="POST" action="{{ route("store_issue") }}">
      {{ csrf_field() }} 
      <div class="bg-white px-5"> <!--d2-->
        
        {{-- <h3 class="m-3 py-3 w3-animate-left">
          <span class="font-weight-bold"> Create - </span>
          <span>Issued Materials</span>
        </h3> --}}

        <div class="row text-center my-0" > <!--d3-->
          <div class=" form-group col-md-5"> <!--d4 buyer start-->
            <label for="validationTooltip01" class="col-form-label">Buyer</label>
            <div class="input-group"> <!--d5-->
              <select class="custom-select in-field-color dynamic" onchange="run()" id="buyer" name="ibuyer" data-dependent="season" >
                <option value="" >--Select Buyer--</option>
                @foreach ($buyer_list as $buyer)
                <option value="{{ $buyer->buyer}}">{{ $buyer->buyer }}</option>
                @endforeach
              </select>

            </div> <!--d5-->
          </div> <!--d4 buyer end-->

          <div class="form-group col-md-5"> <!--d7 season start-->
            <label for="validationTooltip01" class="col-forssssm-label">Season</label>
            <div class="input-group">
              <select class="custom-select in-field-color input-lg dynamic" id="season" name="iseason" data-dependent="style" >
                <option value="">--Select Season--</option>
                @foreach ($season_list as $season_)
                <option value="{{ $season_->season}}">{{ $season_->season}}</option>
                @endforeach
              </select>
            </div> 
          </div> <!--d7 season end-->
          <!-- end enter buyer, season-->
        </div> <!--d3-->
   
        <hr style="height: 2px; background-color:#aeaeb9"/>
        <div class="h6"> <!--d9-->
          <div class="my-1 row">
            <label  class="col-3 col-form-label">Style/Itemn</label>
            <div class="col-5 ml-4 input-group">
              <select class="custom-select in-field-color input-lg dynamic"  oninput="getStyleId()" id="style" name="istyle" data-dependent="GRN_NO">
                <option value="">--Select Style--</option>
                @foreach ($style_list as $style)
                <option value="{{ $style->style}}">{{ $style->style}}</option>
                @endforeach
               
                
                {{-- <option value="style one">Style</option> --}}
              </select>
          </div>
          </div>
          <script>
            function getStyleId(){
              var style = document.getElementById("style").value;
              console.log(style);
            }
          </script>
          <div class="my-1 row">
            <label  class="col-3 col-form-label ">Delivery</label>
            <div class="col-5 ml-4">
              <select class="custom-select in-field-color dynamic" data-dependent="GRN_NO" id="delvDate" name="idelvDate" required>
                <option value="">--Select--Delivery--</option>
              
              </select>
          </div>
          </div>

          <div class="my-1 row">
            <label  class="col-3 col-form-label">GRN</label>
            <div class="col-5 ml-4 input-group">
              <select class="custom-select in-field-color input-lg dynamic" data-dependent="PO_Main_Category" id="GRN_NO" name="igrnNo" value="">
                <option value="">--Select GRN--</option>
                {{-- <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option> --}}
              </select>
          </div>
          </div>

          <div class="my-1 row">
            <label  class="col-3 col-form-label">Category</label>
              <div class="col-5 ml-4 input-group">
                <select class="custom-select in-field-color dynamic" data-dependent="PO_Item_Type" id="PO_Main_Category" name="icategory" value="" required>
                  <option value="">--Select Category--</option>
                </select>
              </div>
              </div>

          <div class="my-1 row">
            <label  class="col-3 col-form-label">Item Type</label>
            <div class="col-5 ml-4 input-group">
              <select class="custom-select in-field-color dynamic" data-dependent="PO_Item_Category" id="PO_Item_Type" name="iitemType" value="" required>
                <option value="">--Select Item Type--</option>
                {{-- <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option> --}}
              </select>
          </div>
          </div>

          <div class="my-1 row">
            <label  class="col-3 col-form-label">Item Category</label>
            <div class="col-5 ml-4 input-group">
                <select class="custom-select in-field-color dynamic" data-dependent="color" id="PO_Item_Category" name="iitemCategory" value="" required>
                  <option value="">--Select Item Category--</option>
                  {{-- <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option> --}}
                </select>
            </div>
          </div>

          <div class="my-1 row">
            <label  class="col-3 col-form-label">Color</label>
              <div class="col-5 ml-4 input-group">
                <select class="custom-select  in-field-color" id="color" name="icolor" value="" required>
                  <option value="">--Select --</option>
                  {{-- <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option> --}}
                </select>>
              </div>
            </div>

          <div class="my-1 row">                 
            <label class="col-3 col-form-label">Description</label>
            <div class="col-6 ml-4 input-group">                    
              <textarea class="form-control rounded-5  in-field-color" id="idescription" name="idescription" placeholder="description" rows="3" col="50" required></textarea>      
            </div>                    
          </div>                 

          <div class="my-1 row">                 
            <label class="col-3 col-form-label">Quantity</label>
            <div class="col-5 ml-4 input-group">                    
              <input type="number" class="form-control in-field-color" id="iquantity" name="iquantity" placeholder="Number" required>     
            </div>                    
          </div>                 

          <div class="my-1 row">
            <label class="col-3 col-form-label">Date</label>
            <div class="col-5 ml-4 input-group">
              <input type="date" class="form-control in-field-color" id="idate" name="idate" value="" required>
            </div> 
          </div>

          <div class="my-1 row">                 
            <label class="col-3 col-form-label">Roll Count</label>
            <div class="col-5 ml-4 input-group">                    
              <input type="number" class="form-control in-field-color" id="irollCount" name="irollCount" placeholder="Number" required>
            </div>                    
          </div>                 
       
          <hr style="height: 2px; background-color:#aeaeb9"/>

          <div class="my-1 row">                 
            <label for="toyQuantity" class="col-3 col-form-label">Total Quantity Issued</label>
            <div class="col-5 ml-4 input-group">                    
              <input type="number" class="form-control in-field-color" id="itotalQantityIssued" name="itotalQantityIssued" disabled>
            </div>                    
          </div>                  

          <div class="my-1 row">
            <label class="col-3 col-form-label">Total Rolls Issued</label>
            <div class="col-5 ml-4 input-group"> 
              <input type="number" class="form-control in-field-color" id="itotalRollsIssued" name="itotalRollsIssued" disabled>
            </div>
          </div> 

          <div class="my-1 row"> 
            <label class="col-3 col-form-label">Remark</label>
              <div class="col-6 ml-4 input-group"> 
                <textarea class="form-control rouremarknded-5 in-field-color" id="iremark" name="iremark" placeholder="Remark" rows="3" col="50" required></textarea>
              </div> 
          </div> 

          <div class="text-center p-2">
            <div class="col-12">

            <div class="text-center my-2">
            <center>
              <a type="button" class="w3-button w3-hover-black w3-dark-grey w3-round-xxlarge" href="/create-issue-bin-allocate" style="background-color: #e6951d;  width:200px; height:35px; padding: px; color:white;">
                <i class="bi bi-plus-circle"></i>
                Allocate Bin Location
              </a>
              {{-- <a type="button" class="w3-button " href="/create-issue-bin-allocate"  data-toggle="modal" data-target=".bd-example-modal-lg" style="background-color: #e6951d;  width:200px; height:35px; padding: px; color:white;">
                <i class="bi bi-plus-circle"></i>
                Allocate Bin Location
              </a> --}}
              <a type="button" class="w3-button w3-hover-black w3-blue w3-round-xxlarge" href="/view-issue-bin-allocate_all" style="background-color: #e6951d;  width:220px; height:35px; padding: 5px; color:white;">
                <i class="bi bi-binoculars-fill viewdedign"></i>
                View Allocated Bin Location</a>
            </center>
          </div>   
          <!--Modal Button end-->

          <div class="col-12 my-1">
            <button class="w3-btn w3-green w3-hover-black w3-round-xxlarge mx-2 my-2"  href="" type="submit" style="width:90px;" onclick="addDocument()">
              <i class="fa fa-caret-right"></i>
                Save
            </button>
            {{-- <!----{{ url('/create-issue-allocate-bin') }}--> --}}
            <a href="/view-issue_all" class="w3-btn w3-blue w3-hover-black w3-round-xxlarge mx-2 my-2" type="button" style="width:90px;">
              <i class="fa fa-search viewdedign"></i>
                View  
            </a>
            <button class="w3-btn w3-hover-black w3-round-xxlarge w3-ripple mx-2 my-2" type="reset" style="background-color: #e6951d; color:white;" style="width:90px;">
              <i class="w3-spin fa fa-refresh"></i>
                Reset
            </button>
          </div>
          </div>
          <!--Checkbox and save byutton - end-->
      
    </div>
      </div>
        </div>
      </div>
    </form> 
  </div>
  </div>

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
         //web api route
        url:"{{ route('issued.fetch') }}",

        //method
        method:"GET",

       // data
       //add route with id - Route::get('testUrl/{id}', 'TestController@getAjax');
        data:{select:select, value:value, _token:_token, dependent:dependent, id: 1},
        success:function(result)
        {
         $('#'+dependent).html(result);
        }
    
       })
      }
     });
     
    // $('#buyer').change(function(){
    //   $('#season').val('');
    //   $('#style').val('');
    //   // $('#idelvDate').val('');
    // });
    
    // $('#season').change(function(){
    //   $('#style').val('');
    //   // $('#idelvDate').val('');
    // });
    
    
    });
    </script>
  {{-- <script>
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
         //web api route
        url:"{{ route('issued.fetch') }}",

        //method
        method:"POST",

       // data
       //add route with id - Route::get('testUrl/{id}', 'TestController@getAjax');
        data:{select:select, value:value, _token:_token, dependent:dependent, id: 1},
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
      // $('#idelvDate').val('');
    });
    
    $('#season').change(function(){
      $('#style').val('');
      // $('#idelvDate').val('');
    });
    
    
    });
    </script>
    
    <script>
      function getStyleId(){
            var style = document.getElementById("style").value;
            console.log(style);
      }
     $(document).ready(function(){
     
      $('.dynamic').change(function(){
       if($(this).val() != '')
       {
         //get data from text box
        var select = $(this).attr("id");
        var value = $(this).val();
        var dependent = $(this).data('dependent'); 
        var _token = $('input[name="_token"]').val();
        // console.log(style);
 //ajax
        $.ajax({
          //web api route
         url:"{{ route('issued.fetch2') }}",
 
         //method
         method:"POST",
 
        // data
         data:{select:select, value:value, _token:_token, dependent:dependent},
         success:function(result)
         {
          $('#'+dependent).html(result);
          // console.log($('#'+dependent).html(result) + dependent);
        }
     
        })
       }
      });
     
     $('#style').change(function(){
       $('#delvDate').val('');
       $('#GRN_NO').val('');
       $('#PO_Main_Category').val('');
      //  $('#PO_Item_Type').val('');
      //  $('#PO_Item_Category').val('');
      //  $('#color').val('');
     });
     
     $('#delvDate').change(function(){
       $('#GRN_NO').val('');
       $('#PO_Main_Category').val('');
      //  $('#PO_Item_Type').val('');
      //  $('#PO_Item_Category').val('');
      //  $('#color').val('');
       // $('#').val('');
     });
     
     });
     console.log("Hello");
    //  console.log($('#'+dependent).html(result) + dependent);
     </script> --}}

    {{--  <script>
       function getStyleId(){
             var style = document.getElementById("style").value;
             console.log(style);
       }
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
           //web api route
          url:"{{ route('issued.fetch2') }}",
  
          //method
          method:"POST",
  
         // data
          // data:{style:style},
          data:{select:select, value:value, _token:_token, dependent:dependent},
          success:function(result)
          {
           $('#'+dependent).html(result);
          }
      
         })
        }
       });
      
      $('#style').change(function(){
        $('#delvDate').val('');
        $('#GRN_NO').val('');
        $('#PO_Main_Category').val('');
        $('#PO_Item_Type').val('');
        $('#PO_Item_Category').val('');
        $('#color').val('');
      });
      
      $('#delvDate').change(function(){
        $('#GRN_NO').val('');
        $('#PO_Main_Category').val('');
        $('#PO_Item_Type').val('');
        $('#PO_Item_Category').val('');
        $('#color').val('');
        // $('#').val('');
        console.log($('#'+dependent).html(result) + dependent);
      });
      
      
      });
      // console.log($('#'+dependent).html(result) + dependent);
      </script>  --}}
      <script>
        function run(){
          var buyer = document.getElementById("buyer").value;
          var id = 1;
          $(function(){
            $.ajax({
              type: "POST",
              url: '{{route("dataTest") }}',
              data:{buyer:buyer,id:id}
              success: function(Response){
                alert(Response)
              }
            })
          })
        }

        
        </script>
      }); 












 
  <!--Modal Content Start--> 
  <div class="modal modal-child addNewRequestModal fade bd-example-modal-lg mx-3" id="myModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  data-modal-parent="#ViewDetailModal">
    <div class="modal-dialog modal-lg">    
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title my-1 mx-0" >Bin Allocation - Issued</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-target="#staticBackdrop" style="color:red">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="">
      
        <div class="modal-body">
          <div class="container">
            <div class="h6 px-2"> <!--d9-->
              <form method="post" action="{{ route('store_issue_allocate_bin')}}">
              {{ csrf_field() }} 
            
              <div class="my-1 row">                 
                <label class="col-4 col-form-label">Issued Tot Qty-Rack</label>
                <div class="col-5">                    
                  <input type="number" class="form-control in-field-color ml-4" id="isissuedTotalQuantity" name="isissuedTotalQuantity" placeholder="Number" required>
                </div>                    
              </div>                 

              <div class="my-1 row">
                <label  class="col-4 col-form-label">Allocated Rack</label>
                <div class="col-5">
                  <select class="custom-select in-field-color ml-4" id="isallocatedRack" name="isallocatedRack" value="" required>
                    <option value="">Allocated Rack</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    {{-- {
                    <option value="$issues->isallocatedRack">{{$issues->isallocatedRack}}</option>
                  } --}}
                  </select>
                </div>
              </div>

              <div class="my-1 row">
                <label  class="col-4 col-form-label">Allocated Bin</label>
                <div class="col-5">
                  <select class="custom-select in-field-color ml-4" id="isallocatedBin" name="isallocatedBin" value="" required>
                    <option value="">Allocated Bin</option>
                    {{-- <option value=""></option> --}}
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                  </select>
                </div>
              </div>

              <div class="my-1 row">                 
                <label class="col-4 col-form-label">Issued Batch No</label>
                <div class="col-5">                    
                  <input type="text" class="form-control in-field-color ml-4" id="isissuedBatchNo" name="isissuedBatchNo" placeholder="Number" required>
                </div>                    
              </div>                 

              <div class="my-1 row">                 
                <label class="col-4 col-form-label">Issued Quantity</label>
                <div class="col-5">                    
                  <input type="number" class="form-control in-field-color ml-4" id="isissuedQuantity" name="isissuedQuantity" placeholder="Number" required>
                </div>                    
              </div>                 

              <div class="my-1 row">                 
                <label class="col-4 col-form-label">Issued Rolls Count</label>
                  <div class="col-5">                    
                    <input type="number" class="form-control  in-field-color ml-4" id="isissuedRollsCount" name="isissuedRollsCount" placeholder="Number" required>
                  </div>                    
              </div>                 
              
            <div class="container my-1 text-center">
              <button type="submit" name="submit" class="w3-btn  w3-hover-black w3-round-xxlarge w3-green btn-size show-modal" onclick="">
                <i class="bi bi-caret-right-fill"></i>
                Save
              </button>
              {{-- <button type="reset" class="btn text-light w3-hover-black  w3-round-xxlarge btn-size" style="background-color: #e6951d;">
                <i class="w3-spin fa fa-refresh"></i>
                Reset</button> --}}
               {{-- <button type="button" class="btn w3-hover-black  w3-round-xxlarge w3-red btn-size" data-dismiss="modal">
                <i class="fa fa-close"></i>
                Cancel</button>  --}}
            </div>
          </form>
          </div>
          </div>
          <!--horizontal line-->
         
        </div>
        </div>
        
      </div>  
    </div>
  
        <!--Table to display content-->
        <div class="w3-container w3-responsive bg-light">
          <!--Table heading-->
          <h3 class="mb-4">Display Bin Allocation for Issued Materials</h3>
          <!--Table start-->
          <table class="table-responsive caption-top table-hover table-bordered text-center">
            <thead class="text-center" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)" >
              <tr class="">
                <th width="auto">No</th>
                <th width="auto">Issued Tot</th>
                <th width="auto">Aallo Rack</th>
                <th width="auto">Aallo Bin</th>
                <th width="auto">Batch No</th>
                <th width="auto">Quantity</th>
                <th width="auto">Rolls</th>
                <th width="auto">Action</th>
              </tr>
            </thead>
            <tbody>
           
              {{-- @foreach ($issues as $issue)
              <tr class="bg-white">
                <th scope="row">{{ $issue->id }}</th>
                <td>{{$issue->$isissuedTotalQuantity}}</td>
                <td>{{$issue->$isallocatedRack}}</td>
                <td>{{$issue->$isallocatedBin}}</td>
                <td>{{$issue->$isissuedBatchNo}}</td>
                <td>{{$issue->$isissuedQuantity}}</td>
                <td>{{$issue->$isissuedRollsCount}}</td>
                <td> --}}
                              
                  {{-- <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit', $bin->id) }}" class="">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form method="POST" id="delete-bin-{{ $issue->id }}" action="{{ route('delete', $bin->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                  </form>  

                  <button onclick="if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-bin-{{ $issue->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                   class="btn-sm btn-danger btn-raised mx-1" href=" ">
                   <i class="bi bi-trash-fill mr-0" aria-hidden="true"></i>
                </button>   --}}
      
                {{-- </td>
                
              </tr>
            @endforeach  --}}
                 {{-- <td>
                  
                  <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit', $issue_->id) }}" class="">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form method="POST" id="delete-issue-bin-allo-{{ $issue_->id }}" action="{{ route('delete', $issue_->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                  </form>  

                  <button onclick="if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-issue-bin-allo-{{ $issue_->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                   class="btn-sm btn-danger btn-raised mx-1" href=" ">
                   <i class="bi bi-trash-fill mr-0" aria-hidden="true"></i>
                </button>  
      
                </td>  --}}

              

            </tbody>
          </table>
        </div>
      </div>


  <!--Modal Content end-->


@endsection