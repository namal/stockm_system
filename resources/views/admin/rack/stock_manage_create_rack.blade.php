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

<div class="container-responsive mb-0"> <!--d1-->


    


    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="w3-animate-left mb-3 pt-0">
                        <span class="font-weight-bold">Create - </span>
                        <span class="">Racks</span>
                    </h3>
                </div>
                <form class="" method="POST" action="{{ route('store_rack') }}">
                {{ csrf_field() }} 
                    <div class="card-body">
                        <label class="text-dark font-weight-medium" for="pcompany">Company Name</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-white">
                                    <i class="mdi mdi-home"></i>
                                </span>
                            </div>
                            <select class="in-field-color form-control" id="racompany" name="racompany" value="" required>
                                <option value="">---Select Company---</option>
                                    @foreach ($companies as $company)
                                    <option value="{{$company}}">
                                        {{-- {{ ($rack) ? '' : ''}}   --}}
                                        {{$company}} 
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
                            <input type="text" class="form-control in-field-color" name="rarackName" id="rarackName" placeholder="" required>
                        </div>
                
                        <label class="text-dark mt-1 font-weight-medium" for="">Note</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-white">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </span>
                            </div>
                            <textarea  class="in-field-color form-control" id="ranote"  name="ranote" placeholder="Note" rows="3" col="50" required></textarea>
                        </div>
                
                        <div class="container mt-3">
                            <center>
                                <button class="w3-btn  btn-size w3-green w3-hover-black w3-round-xxlarge w3-ripple mx-1 my-0" type="submit" style="">
                                    <i class="mdi mdi-play"></i> Create 
                                </button>
                                <a class="w3-btn  btn-size w3-blue w3-hover-black w3-round-xxlarge  mx-1 my-0" type="button" style="" href="/view-rack_all">
                                    <i class="mdi mdi-binoculars"></i> View 
                                </a>
                                <button class="w3-btn  mr-0 btn-size w3-hover-black w3-round-xxlarge w3-ripple mx-1 my-0s" type="reset" style="background-color: #e6951d; color:white;">
                                    <i class="mdi mdi-sync"></i> Reset
                                </button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-6 boarderles" style="">
            <div class="card card-default">
                <img src="../img/rack.png" alt="xs">
            </div>
    </div>

    </div>
</div>

<style>
    /*Fill input box*/
    .in-field-color{
        background-color: #f5f5f5;
        color: black;
    }

    /*change button size*/
    /* .btn-size{
        width:120px;
        height:35px;
        padding: 5px;
    } */

</style>

@endsection
