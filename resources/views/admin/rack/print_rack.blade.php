<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container"> 
    <h3 class="m-0 pt-0 mb-3">
        <span class="font-weight-bold text-center">Rack Details</span>
        <a onclick="window.print()"><i class="bi bi-printer text-primary"></i></a>
        <a onclick="exportRackTableToCSV('Rack-Details.csv')"><i class="bi bi-file-earmark-excel text-success"></i></a>  
  
    </h3>
    <div class="bg-light">
        <div class="" style="" >
            <table class="table table-responsive caption-top table-bordered text-center" id="myTable">
                <caption>List of racks created</caption>
                <thead class=" text-center text-dark">
                    <tr>
                        <th width="100px" scope="col">No</th>
                        <th width="240px" scope="col">Company Name</th>
                        <th width="250px" scope="col">Rack Name</th>
                        <th width="530px" scope="col">Note</th>
                    </tr>
                </thead>
                <tbody >
                    @php($i=1)
                    @foreach ($racks as $rack)
                    <tr class="bg-white">
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{$rack->racompany}}</td>
                        <td>{{$rack->rarackName}}</td>
                        <td>{{$rack->ranote}}</td>
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
    function exportRackTableToCSV(filename) {  
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