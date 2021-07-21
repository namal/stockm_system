<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="container"> <!--d1-->
    <h3 class="m-0 pt-0 mb-3">
      <span class="font-weight-bold text-center">Issued Materials</span>
      <button onclick="window.print()"><i class="bi bi-printer text-primary"></i></button>
    </h3>
    <div class="" id="">
        <table class="table-responsive table-sm caption-top table-bordered text-center" id="">
            <caption>List of materials issued</caption>
                <thead class=" text-center text-dark">
                    <tr class="">
                        <th width="50px">No</th>
                        <th width="100px">Buyer</th>
                        <th width="100px">Season</th>
                        <th width="100px">Style</th>
                        <th width="50px">GRN</th>
                        <th width="100px">Category</th>
                        <th width="100px">Item Type</th>
                        <th width="100px">Item Category</th>
                        <th width="100px">Color</th>
                        <th width="100px">Description</th>
                        <th width="100px">Quantity</th>
                        <th width="100px">Date</th>
                        <th width="100px">Roll Count</th>
                        <th width="100px">Remark</th>
                        <th scope="100px">Action</th>
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