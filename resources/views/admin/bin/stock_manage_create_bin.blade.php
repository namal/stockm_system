@extends('admin.stock_manage_admin_dash')
@section('admin')
@include('sweetalert::alert')
{{-- @include('sweet::alert') --}}

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
	{{-- <h3 class="w3-animate-left mb-3 pt-0">
		<span class="font-weight-bold">Create - </span>
		<span class="">Racks and Bins</span>
	</h3> --}}
<div class="row">
	
	<div class="col-sm-6">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h3 class="w3-animate-left mb-3 pt-0">
					<span class="font-weight-bold">Create - </span>
					<span class=""> Bins</span>
				</h3>
			</div>
			<form style="padding: 0%; margin:0;" method="POST" action="{{route('store_bin')}}">
			{{ csrf_field() }}
				<div class="card-body">
			
					<label class="text-dark font-weight-medium" for="pcompany">Company Name</label>
					<div class="input-group mb-1">
						<div class="input-group-prepend">
							<span class="input-group-text bg-secondary text-white">
								<i class="mdi mdi-home"></i>
							</span>
						</div>
						<select class="form-control in-field-color dynamic" data-dependent="rarackName" id="racompany" name="bicompany" value="" required>
							<option value=""></option>
							@foreach($bc_list as $b_c)
							<option value="{{$b_c->racompany}}">
								{{$b_c->racompany}}
							</option> 
							@endforeach

							{{--  <option value="OAU1">OAU1</option>
							<option value=" OAU2">OAU2</option> 
							<option value=" OAW">OAW</option> 
							<option value=" OAH">OAH</option>   --}}
						</select>
					</div>
			
					<label class="text-dark font-weight-medium" for="pcompany">Rack Name</label>
					<div class="input-group mb-1">
						<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-white">
						<i class="mdi mdi-grid-large"></i>
					</span>
				</div>
				<select class="form-control in-field-color " id="rarackName" name="birack" value="" required>
					<option value="">--Select Rack--</option>
					{{-- <option value=" 1"></option>
					<option value=" 2"></option> --}}

					{{--  @foreach ($bins as $bin)
					<option value="{{$bin}}">
						{{ ($bin) ? '' : ''}}  
						{{$bin}} 
					</option> 
					@endforeach  --}}

				</select>
			</div>

			<label class="text-dark mt-1 font-weight-medium" for="">Bin Name</label>
			<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-white">
						<i class="mdi mdi-table-row"></i>
					</span>
				</div>
				<input type="text" class="form-control in-field-color" name="bibinName" id="binName" placeholder="" required>
			</div>
			
			<label class="text-dark mt-1 font-weight-medium" for="">Note</label>
			<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-white">
						<i class="mdi mdi-message-text-outline"></i>
					</span>
				</div>
				<textarea  class="form-control in-field-color" name="binote"  id="binote" placeholder="Note" rows="3" col="50" required></textarea>
			</div>
			
			<div class="container mt-3">
				<center>
					<button class="w3-btn  btn-size w3-green w3-hover-black w3-round-xxlarge w3-ripple mx-1 my-0" type="submit">
						<i class="mdi mdi-play"></i> Create 
					</button>
					<a class="w3-btn  btn-size w3-blue w3-hover-black w3-round-xxlarge  mx-1 my-0" type="button" href="/view-bin_all">
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
			<img src="../img/bin.png" alt="sa">
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

<script type="text/javascript">
//   jQuery(document).ready(function ()
//   {
// 		  jQuery('select[name="bicompany"]').on('change',function(){
// 			 var countryID = jQuery(this).val();
// 			 if(countryID)
// 			 {
// 				jQuery.ajax({
// 				   url : 'rack-bin/' +countryID,
// 				   type : "GET",
// 				   dataType : "json",
// 				   success:function(data)
// 				   {
// 					  console.log(data);
// 				      jQuery('select[name="birack"]').empty();
// 				      jQuery.each(data, function(key,value){
// 				         $('select[name="birack"]').append('<option value="'+ key +'">'+ value +'</option>');
// 					  });
// 				   }
// 				});
// 			 }
// 			 else
// 			 {
// 			    $('select[name="birack"]').empty();
// 			 }
// 		  });
//   });
	$(document).ready(function(){
		$('.dynamic').change(function(){
			if($(this).val() != ''){
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data("dependent");
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url:"{{ route('bin.fetch') }}",
					method:"POST",
					data: {select: select, value:value, _token:_token, dependent:dependent},
					success: function(result){
						$('#'+dependent).html(result);
					}
				})

			}
		});

	$('#racompany').change(function(){
    	$('#rarackName').val('');
  });
  $('#racompany').change(function(){
    	$('#rarackName').val('');
  });
//   $('#rarackName').change(function(){
//     $('#').val('');
//   });

	}); 
 
 </script> 

@endsection
