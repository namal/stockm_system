@extends('admin.stock_manage_admin_dash')
@section('admin')
<div class="container-responsive mx-0"> <!--d1-->
  <h3 class="m-3 pt-3 w3-animate-left">
    <span class="font-weight-bold">View - </span>
    <span class="">Issued Materials</span>
  </h3>
  <!--search -->
  <div class="bg-light" style="">
    <div class="row" style="">   
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text"  id="inputBuyer" onkeyup="searchBuyer()" placeholder="Search Buyer..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputSeason" onkeyup="searchSeason()" placeholder="Search Season..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputStyle" onkeyup="searchStyle()" placeholder="Search Style..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputGRN" onkeyup="searchGRN()" placeholder="Search GRN..">
      </div>
    </div>
    <div class="row" style="">
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputCategory" onkeyup="searchCategory()" placeholder="Search Category..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputType" onkeyup="searchType()" placeholder="Search Type..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputItemCategory" onkeyup="searchItemCategory()" placeholder="Search ItemCategory..">
      </div>
      <div class="col-md-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="inputColor" onkeyup="searchColor()" placeholder="Search Color..">
      </div>
    </div>
    <div class="row">
      <div class="input-group mb-3">
        <a class="btn btn-sm btn-warning mx-3" href="/view-issue_all" type="button" style="background-color: #e6951d; color:white; width:100px;">
          <i class="fa fa-refresh "></i>  Refresh   
        </a>
        <a class="btn btn-sm btn-info mx-3" type="button" style="color:white; width:100px;" href="/print-issue_all">
          <i class="fa fa-print"></i>  Print
        </a>
        <a class="btn btn-sm btn-success mx-3" type="button" style="color:white; width:100px;" href="/print-issue_all">
          <i class="fa fa-file-excel-o"></i> CSV
        </a>
      {{--  <button class="btn btn-sm btn-danger mx-3" style="width:100px" onclick="javascript:demoFromHTML();">
        <i class="fa fa-file-pdf-o "></i>  Pdf
      </button>
      <button onclick="javascript:demoFromHTML();">PDF</button>  --}}
      </div>
    </div>
  </div>
  <div class="" id="customers">
    <table class="table-responsive table-sm caption-top table-hover table-bordered text-center" id="myIssuedTable">
      <caption>List of materials issued</caption>
      <thead class=" text-center text-white" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)">
        <tr class="text-white">
          <th width="auto" class="text-white">No</th>
          <th width="auto" class="text-white">Buyer</th>
          <th width="auto" class="text-white">Season</th>
          <th width="auto" class="text-white">Style</th>
          <th width="auto" class="text-white">GRN</th>
          <th width="auto" class="text-white">Category</th>
          <th width="auto" class="text-white">Item Type</th>
          <th width="auto" class="text-white">Item Category</th>
          <th width="auto" class="text-white">Color</th>
          <th width="auto" class="text-white">Description</th>
          <th width="auto" class="text-white">Quantity</th>
          <th width="auto" class="text-white">Date</th>
          <th width="auto" class="text-white">Roll Count</th>
          <th width="auto" class="text-white">Remark</th>
          <th scope="auto" class="text-white">Action</th>
        </tr>
      </thead>
      <tbody>
        @php($i=1)
        @foreach ($issues as $issue)
          <tr class="bg-white">
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $issue -> ibuyer }}</td>
            <td>{{ $issue -> iseason }}</td>
            <td>{{ $issue -> istyle }}</td>
            <td>{{ $issue -> igrnNo }}</td>
            <td>{{ $issue -> icategory }}</td>
            <td>{{ $issue -> iitemType }}</td>
            <td>{{ $issue -> iitemCategory }}</td>
            <td>{{ $issue -> icolor }}</td>
            <td>{{ $issue -> idescription }}</td>
            <td>{{ $issue -> iquantity }}</td>
            <td>{{ $issue -> idate }}</td>
            <td>{{ $issue -> irollCount }}</td>
            <td>{{ $issue -> iremark }}</td>
            <td>
              <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit_issue', $issue->id) }}" class="">
                <i class="bi bi-pencil-square"></i>
              </a>
              <form method="POST" id="delete-issue-{{ $issue->id }}" action="{{ route('delete_issue', $issue->id) }}" style="display: none;">
                {{ csrf_field() }}
                {{ method_field('delete') }}
              </form>  
                <button onclick="
                  if(confirm('Are you sure to delete data?')){
                    event.preventDefault();
                    document.getElementById('delete-issue-{{ $issue->id }}').submit();
                  }else{
                    event.preventDefault();
                  }"
                  class="btn btn-sm btn-danger btn-raised mx-1" href=" ">
                    <i class="bi bi-trash-fill mr-0" aria-hidden="true"></i>
                </button>  
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>  
            {{--  <div class="d-flex justify-content-left mb-5 font-weight-bold">
              {!! $issues->links() !!}
          </div>  --}}
  </div>
</div>
     
   


<script>
 function searchBuyer(){
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputBuyer");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
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

    function searchSeason() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputSeason");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
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

function searchStyle () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputStyle");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
      tr = table.getElementsByTagName("tr");
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

function searchGRN  () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputGRN");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
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

function searchCategory () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputCategory");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
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

function searchType () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputType");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[5];
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

function searchItemCategory () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputItemCategory");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
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

function searchColor () {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputColor");
      filter = input.value.toUpperCase();
      table = document.getElementById("myIssuedTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[7];
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

// function searchColor () {
//     var inputs, inpute, filter, table, tr, td, i, txtValue;
//     inputs = document.getElementById("start");
//     inpute = document.getElementById("end");
//     //filter = input.value.toUpperCase();
//     table = document.getElementById("myIssuedTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//       td = tr[i].getElementsByTagName("td")[7];
//       if (td) {
//         txtValue = td.textContent || td.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//           tr[i].style.display = "";
//         } else {
//           tr[i].style.display = "none";
//         }
//       }
//     }
//   }
</script>
@endsection
