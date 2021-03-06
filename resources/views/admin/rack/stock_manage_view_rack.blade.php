@extends('admin.stock_manage_admin_dash')
@section('admin')
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  --}}
<div class="container-responsive mx-0"> <!--d1-->
  <h3 class="m-0 pt-0 mb-3 w3-animate-left">
    <span class="font-weight-bold">View - </span>
    <span class="">Rack Details</span>
  </h3>
  <div class="bg-light">
    <div class="row">
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input type="text" id="myInput" class="form-control in-field-color" onkeyup="searchCompany()" placeholder="Search by company..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input type="text" id="myInput2" class="mr-2 form-control in-field-color" onkeyup="searchRack()" placeholder="Search by rack..">
      </div>
    </div>
    <div class="row">
      <div class="input-group mb-3">
        <a class="btn btn-sm btn-warning mx-3" href="/view-rack_all" type="button" style="background-color: #e6951d; color:white; width:100px;">
          <i class="fa fa-refresh "></i>  Refresh   
        </a>    
        <a class="btn btn-sm btn-info mx-3" type="button" style="color:white; width:100px;" href="/print-rack_all">
          <i class="fa fa-print"></i>  Print
        </a>
        <a class="btn btn-sm btn-success mx-3" type="button" style="color:white; width:100px;" href="/print-rack_all">
          <i class="fa fa-file-excel-o"></i> CSV
        </a>
          {{--  <button class="btn btn-sm btn-danger mx-3" style="width:100px" onclick="javascript:demoFromHTML();">
            <i class="fa fa-file-pdf-o "></i>  Pdf
          </button>
          <button id="gpdf">PDF</button>  --}}
      </div>
    </div>
    <div class="" id="PDFcontent" style="" >
      <table class="table table-responsive caption-top table-hover table-bordered text-center" id="myTable">
        <caption>List of racks created</caption>
          <thead class=" text-center text-white" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)">
            <tr>
              <th width="100px" scope="col" class="text-white">No</th>
              <th width="200px" scope="col" class="text-white">Company Name</th>
              <th width="200px" scope="col" class="text-white">Rack Name</th>
              <th width="500px" scope="col" class="text-white">Note</th>
              <th width="200px" scope="col" class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach ($racks as $rack)
            <tr class="bg-white">
              <th scope="row">{{ $i++ }}</th>
              <td>{{$rack->racompany}}</td>
              <td>{{$rack->rarackName}}</td>
              <td>{{$rack->ranote}}</td>
              <td>
                <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit_rack', $rack->id) }}">
                  <i class="fa fa-pencil-square-o"></i>
                </a>
                <form method="POST" id="delete-r-{{ $rack->id }}" action="{{ route('delete_rack', $rack->id) }}" style="display: none;">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                </form>  
                <button onclick="
                  if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-r-{{ $rack->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                  class="btn btn-sm btn-danger btn-raised mx-1" href=" " >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>  
              </td>
            </tr>
            @endforeach 
          </tbody>
      </table>
      <div class="d-flex justify-content-left font-weight-bold text-primary">
        {!! $racks->links() !!}
      </div>
    </div>
  </div>
</div>

    <script>
    function searchCompany() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
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

    function searchRack() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput2");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i <script tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            //console.log("tr[i].style.display");
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
    
    {{--  <script>
    var pdfdoc = new jsPDF();
    var specialElementHandlers = {
      '#ignoreContent': function(element, render){
        return true;
      }
    };

    $(document).ready(function(){
      $("#gpdf").click(function(){
        pdfdoc.fromHTML($('#PDFcontent').html(), 10, 10,{
          'width':110,
          'elementHandlers': specialElementHandlers
        });
        pdfdoc.save('First.pdf');
      });
    });
    </script>  --}}

@endsection