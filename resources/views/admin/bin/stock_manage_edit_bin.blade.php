@extends('admin.stock_manage_admin_dash')
@section('admin')
<style>
    .viewdedign {
        position: relative;
        animation-name: example;
        animation-duration: 3s;  
        animation-delay: 0s;
        animation-fill-mode: backwards;
    }

    @keyframes example {
        from {top: -100px;}
        to {top: 0px;}
    }
</style>

<div class="container-responsive mx-0"> <!--d1-->
  <h3 class="w3-animate-left mb-3 pt-0">
    <span class="font-weight-bold">Edit - </span>
    <span class="">Bins</span>
  </h3>

  <div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Bin Details</h2>
            </div>
            <form class="" method="POST" action="{{ route('update_bin', $bins->id) }}">
            {{ csrf_field() }} 
                <div class="card-body">
                    <label class="text-dark font-weight-medium" for="pcompany">Company Name</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white">
                                <i class="mdi mdi-home"></i>
                            </span>
                        </div>
                        <select class="in-field-color form-control" id="bicompany" name="bicompany" value="" required>
                            <option value="{{ $bins->bicompany }}" selected>{{ $bins->bicompany }}</option>
                            <option value="">---Select Company---</option>
                                @foreach ($bins as $bin)
                                <option value="{{$bin}}">
                                    {{-- {{ ($rack) ? '' : ''}}   --}}
                                    {{$bin}} 
                                </option> 
                                @endforeach
                        </select>
                    </div>

                    <label class="text-dark mt-1 font-weight-medium" for="">Rack Name</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white">
                                <i class="mdi mdi-grid-large"></i>
                            </span>
                        </div>
                        <select class="custom-select in-field-color" id="birack" name="birack" required>
                            <option value="{{ $bins->birack }}" selected>{{ $bins->birack }}</option>
                        </select>    
                    </div>

                    <label class="text-dark mt-1 font-weight-medium" for="">Bin Name</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white">
                                <i class="mdi mdi-table-column"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control in-field-color" name="bibinName" value="{{ $bins->bibinName }}" placeholder="" required>
                    </div>

                    <label class="text-dark mt-1 font-weight-medium" for="">Note</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white">
                                <i class="mdi mdi-message-text-outline"></i>
                            </span>
                        </div>
                        <textarea  class="form-control in-field-color" name="binote" id="binote" placeholder="Note" rows="3" col="50" required>
                            {{ $bins->binote }}
                        </textarea>
                    </div>
            
                    <div class="container mt-3">
                        <center>
                            <button class="w3-btn  btn-size w3-green w3-hover-black w3-round-xxlarge w3-ripple mx-1 my-0" type="submit" style="width:85px;">
                                <i class="mdi mdi-play"></i> Edit 
                            </button>
                            <button class="w3-btn  mr-0 btn-size w3-hover-black w3-round-xxlarge w3-ripple mx-1 my-0s" type="reset" style="background-color: #e6951d; color:white; width:85px;">
                                <i class="mdi mdi-sync"></i> Reset
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<style>
    .in-field-color{
        background-color: #f5f5f5;
        color: black;
    }
</style>

@endsection
