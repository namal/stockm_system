@extends('admin.stock_manage_admin_dash')
@section('admin')
<div class="container-responsive mx-3"> <!--d1-->
<div>
  <div class="bg-white px-5"> <!--d2-->
    <h3 class="m-3 pt-3 w3-animate-left">
      <span class="font-weight-bold">View - </span>
      <span class="">Issued Materials</span>
    </h3>
    <!--search -->
    <div class="" style="">
      <div class="" style="">
        <div class="col input-group">
          <input class="mx-1 form-control-sm bg-light border border-info text-dark" type="text"  id="inputBuyer" onkeyup="searchBuyer()" placeholder="Search Buyer.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputSeason" onkeyup="searchSeason()" placeholder="Search Season.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputStyle" onkeyup="searchStyle()" placeholder="Search Style.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputGRN" onkeyup="searchGRN()" placeholder="Search GRN.." style="width:250px">
        </div>
        <div class="col input-group">
          <input class="mx-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputCategory" onkeyup="searchCategory()" placeholder="Search Category.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputType" onkeyup="searchType()" placeholder="Search Type.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputItemCategory" onkeyup="searchItemCategory()" placeholder="Search ItemCategory.." style="width:250px">
          <input class="mr-1 form-control-sm bg-light border border-info text-dark" type="text" id="inputColor" onkeyup="searchColor()" placeholder="Search Color.." style="width:250px">
        </div>

        <div class="">
            <table class="table-responsive table-sm caption-top table-hover table-bordered" id="myIssuedTable">
                <caption>List of materials issued</caption>
                <thead class=" text-center text-white" style="background:rgb(246, 246, 248); ">
                    <tr class="text-white">
                        <th width="auto">No</th>
                        <th width="auto">Buyer</th>
                        <th width="auto">Season</th>
                        <th width="auto">Style</th>
                        <th width="auto">GRN</th>
                        <th width="auto">Category</th>
                        <th width="auto">Item Type</th>
                        <th width="auto">Item Category</th>
                        <th width="auto">Color</th>
                        <th width="auto">Description</th>
                        <th width="auto">Quantity</th>
                        <th width="auto">Date</th>
                        <th width="auto">Roll Count</th>
                        <th width="auto">Remark</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($issues as $issue)
                <tr class="bg-white">
                    <th scope="row">{{ $issue -> id }}</th>
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
        </div>
      </div>
    </div>
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
