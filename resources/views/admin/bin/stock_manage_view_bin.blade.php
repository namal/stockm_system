@extends('admin.stock_manage_admin_dash')
@section('admin')

<div class="container-responsive"> <!--d1-->
  <h3 class="mb-3 w3-animate-left">
    <span class="font-weight-bold">View - </span>
    <span class="">Bin Details</span>
  </h3>
  <div class="bg-light">
    <div  class="row mb-0" style="">
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="mr-2 form-control in-field-color" type="text" id="inputCompany" onkeyup="searchCompany()" placeholder="Search company..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="mr-2 form-control in-field-color" type="text" id="inputRack" onkeyup="searchRack()" placeholder="Search rack..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
              <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="mr-2 form-control in-field-color" type="text" id="inputBin" onkeyup="searchBin()" placeholder="Search bin..">
      </div>
    </div>
    <div class="row">
      <div class="input-group mb-3">
        <a class="btn btn-sm btn-warning mx-3" href="/view-bin_all" type="button" style="background-color: #e6951d; color:white; width:100px;">
          <i class="fa fa-refresh "></i>  Refresh   
        </a>
        <a class="btn btn-sm btn-info mx-3" type="button" style="color:white; width:100px;" href="/print-bin_all">
          <i class="fa fa-print"></i>  Print
        </a>
        {{--  <button class="btn btn-sm btn-danger mx-3" style="width:100px" onclick="javascript:demoFromHTML();">
          <i class="fa fa-file-pdf-o "></i>  Pdf
        </button>
        <button onclick="javascript:demoFromHTML();">PDF</button>  --}}
      </div>
    </div> 
    <div class="" style="">
      <table class="table table-responsive caption-top table-hover table-bordered text-center" id="myBinTable" >
        <caption>List of bins created</caption>
          <thead class=" text-center" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)">
            <tr>
              <th width="100px" scope="col" class="text-white">No</th>
              <th width="200px" scope="col" class="text-white">Company Name</th>
              <th width="200px" scope="col" class="text-white" >Rack Name</th>
              <th width="200px" scope="col" class="text-white">Bin Name</th>
              <th width="500px" scope="col" class="text-white">Note</th>
              <th width="200px" scope="col" class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach ($bins as $bin)
            <tr class="bg-white">
              <th scope="row">{{ $i++ }}</th>
              <td>{{$bin->bicompany}}</td>
              <td>{{$bin->birack}}</td>
              <td>{{$bin->bibinName}}</td>
              <td>{{$bin->binote}}</td>
              <td>
                <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit_bin', $bin->id) }}">
                  <i class="fa fa-pencil-square-o"></i>
                </a>
                <form method="POST" class="bg-success" id="delete-bin-{{ $bin->id }}" action="{{ route('delete_bin', $bin->id) }}" style="display: none;">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                </form>  
                <button onclick="
                  if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                      document.getElementById('delete-bin-{{ $bin->id }}').submit();
                    }else{
                      event.preventDefault();
                    }"
                    class="btn btn-sm btn-danger btn-raised mx-1" href=" ">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>   
              </td>    
            </tr>
            @endforeach 
          </tbody>
      </table>
          {{-- <div class="d-flex justify-content-left font-weight-bold text-primary">
            {!! $bins->links() !!}
          </div> --}}
          {{-- <div class="d-flex justify-content-left font-weight-bold text-primary">
            {!! $bins->links() !!}
          </div> --}}

          {{-- {{ $bins->withQueryString()->links() }} --}}
      
    </div>
  </div>
</div>
@endsection

  <script>
    function searchCompany() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputCompany");
      filter = input.value.toUpperCase();
      table = document.getElementById("myBinTable");
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
      input = document.getElementById("inputRack");
      filter = input.value.toUpperCase();
      table = document.getElementById("myBinTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
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

    function searchBin() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputBin");
      filter = input.value.toUpperCase();
      table = document.getElementById("myBinTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
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

  </script>  

