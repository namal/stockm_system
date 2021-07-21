<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container"> <!--d1-->
    <h3 class="m-0 pt-0 mb-3">
      <span class="font-weight-bold text-center">Bin Allocation for Issued Materials </span> 
      <a onclick="window.print()"><i class="bi bi-printer text-primary"></i></a>
      <a onclick="exportIssueBinAllocateTableToCSV('Bin-Allocation-Details.csv')"><i class="bi bi-file-earmark-excel text-success"></i></a>  
  
    </h3>
      <div class="">
        <table class="table table-responsive caption-top table-bordered text-center" id="myIssueAllocationTable">
          <thead class="text-center text-dark">
            <tr class="">
              <th width="100px" scope="col">No</th>
              <th width="200px" scope="col">Issued Tot</th>
              <th width="200px" scope="col">Aallo Rack</th>
              <th width="200px" scope="col">Aallo Bin</th>
              <th width="200px" scope="col">Batch No</th>
              <th width="200px" scope="col">Quantity</th>
              <th width="200px" scope="col">Rolls</th>
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
              
            </tr>
            @endforeach  
          </tbody>
        </table>
        <div class="d-flex justify-content-left mb-5 font-weight-bold">
            {!! $issues->links() !!}
        </div>
      </div>
</div>
<script>  
  //user-defined function to download CSV file  
  function downloadCSV(csv, filename) {  
      var csvFile;  
      var downloadLink;  
       
      //define the file type to text/csv  
      csvFile = new Blob([csv], {type: 'text/csv'});  
      downloadLink = document.createElement("a");  
      downloadLink.download = filename;  
      downloadLink.href = window.URL.createObjectURL(csvFile);  
      downloadLink.style.display = "none";  
      document.body.appendChild(downloadLink);  
      downloadLink.click();  
  }  
    
  //user-defined function to export the data to CSV file format  
  function exportIssueBinAllocateTableToCSV(filename) {  
     //declare a JavaScript variable of array type  
     var csv = [];  
     var rows = document.querySelectorAll("table tr");  
     
     //merge the whole data in tabular form   
     for(var i=0; i<rows.length; i++) {  
      var row = [], cols = rows[i].querySelectorAll("td, th");  
      for( var j=0; j<cols.length; j++)  
         row.push(cols[j].innerText);  
      csv.push(row.join(","));  
     }   
     //call the function to download the CSV file  
     downloadCSV(csv.join("\n"), filename);  
  }  
  </script>  