@extends('admin.master')

@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Inventory</h2>
				{{Form::open(['route'=>'inventory.store','action'=>'POST'])}}

				    <div class="form-group">
				    <label for="product_id">Product</label>
				    <select name="product_id" class="form-control" id="product_id">
				    	<option value="">Select</option>
				    	@foreach($datas as $data)
				    	<option value="{{$data->product_id}}">{{$data->name}}</option>
				    	@endforeach
				   
				    </select> 
				  </div>
				
				  <div class="form-group">
				    <label for="purchase_date">Purchase Date</label>
				    <input type="date" class="form-control" name="purchase_date" id="purchase_date">

				  </div>
				  <div class="form-group">
				    <label for="quantity">Quantity</label>
				    <input type="number" class="form-control" name="quantity" id="quantity">  
				  </div>
				  <div class="form-group">
				    <label for="purchase_price">Purchase Price</label>
				    <input type="number" name="purchase_price" class="form-control" id="purchase_price">
				   
				  </div>
				
			
			
		
		
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection