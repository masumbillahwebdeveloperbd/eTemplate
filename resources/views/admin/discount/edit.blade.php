@extends('admin.master')

@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Discount</h2>
				{{Form::open(['route'=>['discount.update',$data->id],'method'=>'PUT','name'=>'editDiscountForm'])}}
				<div class="form-group">
				    <label for="product_id">Product</label>
				    <select name="product_id" class="form-control" id="product_id">
				    	<option value="">Select</option>
				    	@foreach($productDatas as $productData )
				    	<option value="{{$productData->product_id}}">{{$productData->name}}</option>
				    	@endforeach
				    </select> 
				  </div>
				<div class="form-group">
				    <label for="discount_type">Discount Type</label>
				    <input type="text" class="form-control" name="discount_type" id="discount_type" value="{{$data->discount_type}}">  
				</div>
				
				  <div class="form-group">
				    <label for="discount_rate">Rate</label>
				    <input type="number" class="form-control" name="discount_rate" id="discount_rate" value="{{$data->discount_rate}}">  
				  </div>
				<div class="form-group">
				    <label for="active_status">Status</label>
				    <select name="active_status" class="form-control" id="active_status" value="{{$data->active_status}}">
				    	<option value="">Select</option>
				    	
				    	<option value="1">Open</option>
				    	<option value="0">Stop</option>
				    	
				    </select> 
				  </div>

				  <div class="form-group">
				    <label for="start_date">Start Date</label>
				    <input type="date" class="form-control" name="start_date" id="start_date" value="{{$data->start_date}}">

				  </div>
				  <div class="form-group">
				    <label for="end_date">End Date</label>
				    <input type="date" class="form-control" name="end_date" id="end_date" value="{{$data->end_date}}">

				  </div>
				  
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>
   <script type="text/javascript">
      document.forms['editDiscountForm'].elements['product_id'].value={{$data->product_id}}
      document.forms['editDiscountForm'].elements['active_status'].value={{$data->active_status}}
   </script>
@endsection