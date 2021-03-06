<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container"> <!--d1-->
    <h3 class="m-0 pt-0 mb-3 w3-animate-left">
        <span class="font-weight-bold">Bin Allocation for Received Materials</span>
        <a onclick="window.print()" class="btn">
            <i class="bi bi-printer text-primary"></i>
        </a>
    </h3>
    <div class="" id="r_allocate">
        <table class="table table-responsive table-sm caption-top table-bordered text-center" id="myreceiveAllocationTable">
            <caption>List of bins allocated for received materials</caption>
            <thead class="text-center text-dark" >
                <tr class="">
                    <th width="100px" scope="col">No</th>
                    <th width="200px" scope="col">Received Tot</th>
                    <th width="200px" scope="col">Allocated Rack</th>
                    <th width="200px" scope="col">Allocated Bin</th>
                    <th width="200px" scope="col">Batch No</th>
                    <th width="200px" scope="col">Quantity</th>
                    <th width="200px" scope="col">Rolls</th>
                </tr>
            </thead>
            <tbody>
                {{-- <th scope="row">{{ @php($i=1) }}</th> --}}
                @php($i=1)
                @foreach ($receives as $receive)
                <tr class="bg-white">
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{$receive->rereceivedTotalQuantity}}</td>
                    <td>{{$receive->reallocatedRack}}</td>
                    <td>{{$receive->reallocatedBin}}</td>
                    <td>{{$receive->rereceivedBatchNo}}</td>
                    <td>{{$receive->rereceivedQuantity}}</td>
                    <td>{{$receive->rereceivedRollsCount}}</td>
                </tr>
                @endforeach             
            </tbody>
        </table>
        <div class="d-flex justify-content-left mb-5 font-weight-bold">
            {!! $receives->links() !!}
        </div>
    </div>    
</div>


