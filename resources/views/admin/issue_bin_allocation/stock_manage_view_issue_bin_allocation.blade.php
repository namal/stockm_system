@extends('admin.stock_manage_admin_dash')
@section('admin')
{{-- <!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- jsPDF library -->
<script src="js/jsPDF/dist/jspdf.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
<script src="src/tableHTMLExport.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  --}}

<div class="container-responsive mx-0"> <!--d1-->
  <h3 class="m-0 pt-0 mb-3 w3-animate-left">
    <span class="font-weight-bold">View - </span>
    <span class="">Bin Allocation for Issued Materials</span>
  </h3>
  <div class="bg-light">
    <div class="row">
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="allocatedRack" onkeyup="searchAllocatedRack()" placeholder="Search by Allocated Rack..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="allocatedBin" onkeyup="searchAllocatedBin()" placeholder="Search by Allocated Bin..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="batchNo" onkeyup="searchBatchNo()" placeholder="Search by Batch No..">
      </div>
    </div>
    <div class="row">
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="allocatedRack" onkeyup="searchAllocatedRack()" placeholder="Search by Allocated Rack..">
      </div>
      <div class="col-3 input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-secondary text-white">
            <i class="fa fa-search"></i>
          </span>
        </div>
        <input class="form-control in-field-color" type="text" id="allocatedBin" onkeyup="searchAllocatedBin()" placeholder="Search by Allocated Bin..">
      </div>
    {{-- <div class="col-3 input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text bg-secondary text-white">
                    <i class="fa fa-search"></i>
                </span>
            </div>
            <input class="form-control in-field-color" type="text" id="batchNo" onkeyup="searchBatchNo()" placeholder="Search by Batch No..">
        </div> --}}
    </div>
    <div class="row">
      <div class="input-group mb-3">
        <a class="btn btn-sm btn-warning mx-3" href="/view-issue-bin-allocate_all" type="button" style="background-color: #e6951d; color:white; width:100px;">
          <i class="fa fa-refresh "></i>  Refresh   
        </a>
        <a class="btn btn-sm btn-info mx-3" type="button" style="color:white; width:100px;" href="/print-issue-bin-allocate_all">
          <i class="fa fa-print"></i>  Print
        </a>
        <button class="btn btn-sm btn-danger mx-3" style="width:100px" onclick="javascript:demoFromHTML();">
          <i class="fa fa-file-pdf-o "></i>  Pdf
        </button>
        <button onclick="javascript:demoFromHTML();">PDF</button>
      </div>
    </div>
  </div>
  <div class="" id="customers">
    <table class="table table-responsive table-sm caption-top table-hover table-bordered text-center" id="myIssueAllocationTable">        
      <thead class="text-center text-white" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)" >
        <tr class="">
          <th width="100px" scope="col" class="text-white">No</th>
            <th width="200px" scope="col" class="text-white">Issued Tot</th>
            <th width="200px" scope="col" class="text-white">Aallo Rack</th>
            <th width="200px" scope="col" class="text-white">Aallo Bin</th>
            <th width="200px" scope="col" class="text-white">Batch No</th>
            <th width="200px" scope="col" class="text-white">Quantity</th>
            <th width="200px" scope="col" class="text-white">Rolls</th>
          <th width="200px" scope="col" class="text-white">Action</th>
        </tr>
      </thead>
      <tbody>
        @php($i=1)
        @foreach ($issues as $issue)
        <tr class="bg-white">
          <th scope="row">{{ $i++ }}</th>
          <td>{{$issue->isissuedTotalQuantity}}</td>
          <td>{{$issue->isallocatedRack}}</td>
          <td>{{$issue->isallocatedBin}}</td>
          <td>{{$issue->isissuedBatchNo}}</td>
          <td>{{$issue->isissuedQuantity}}</td>
          <td>{{$issue->isissuedRollsCount}}</td>
          <td>              
            <a class="btn btn-sm btn-raised btn-primary mx-1" href="{{ route('edit_issue_bin_allocation', $issue->id) }}" class="">
              <i class="fa fa-pencil-square-o"></i>
            </a>
            <form method="POST" id="delete-bin-{{ $issue->id }}" action="{{ route('delete_issue_bin_allocation', $issue->id) }}" style="display: none;">
              {{ csrf_field() }}
              {{ method_field('delete') }}
            </form>  
            <button onclick="if(confirm('Are you sure to delete data?')){
              event.preventDefault();
              document.getElementById('delete-bin-{{ $issue->id }}').submit();
              }else{
              event.preventDefault();
              }"
              class="btn btn-sm btn-danger btn-raised mx-1" href=" ">
                <i class="fa fa-trash-o mr-0" aria-hidden="true"></i>
            </button>   
          </td>             
        </tr>
        @endforeach  
      </tbody>
    </table>
      <div class="d-flex justify-content-left mb-5 font-weight-bold">
        {!! $issues->links() !!}
  </div>
</div>

<script>
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
  </script>

  <script>
function demoFromHTML() {
  var pdf = new jsPDF('p', 'pt', 'letter');
  // source can be HTML-formatted string, or a reference
  // to an actual DOM element from which the text will be scraped.
  source = $('#customers')[0];

  // we support special element handlers. Register them with jQuery-style 
  // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
  // There is no support for any other type of selectors 
  // (class, of compound) at this time.
  specialElementHandlers = {
      // element with id of "bypass" - jQuery style selector
      '#bypassme': function (element, renderer) {
          // true = "handled elsewhere, bypass text extraction"
          return true
      }
  };
  margins = {
      top: 80,
      bottom: 60,
      left: 40,
      width: 522
  };
  // all coords and widths are in jsPDF instance's declared units
  // 'inches' in this case
  pdf.fromHTML(
  source, // HTML string or DOM elem ref.
  margins.left, // x coord
  margins.top, { // y coord
      'width': margins.width, // max width of content on PDF
      'elementHandlers': specialElementHandlers
  },

  function (dispose) {
      // dispose: object with X, Y of the last line add to the PDF 
      //          this allow the insertion of new lines after html
      pdf.save('Test.pdf');
  }, margins);
}
</script>
@endsection 