<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container"> <!--d1-->
  <h3 class="m-0 pt-0 mb-3 ">
    <span class="font-weight-bold">Bin Details</span>
    <button onclick="window.print()"><i class="bi bi-printer text-primary"></i></button>
  </h3>
  <div class="bg-light">  
    < class="" style="">
      <table class="table table-responsive caption-top table-bordered text-center" id="myBinTable" >
        <caption>List of bins created</caption>
          <thead class=" text-center" style="background:rgb(68, 68, 87); color: rgb(196, 193, 193)">
            <tr>
              <th width="100px" scope="col" class="text-white">No</th>
              <th width="200px" scope="col" class="text-white">Company Name</th>
              <th width="200px" scope="col" class="text-white" >Rack Name</th>
              <th width="200px" scope="col" class="text-white">Bin Name</th>
              <th width="500px" scope="col" class="text-white">Note</th>
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
  

