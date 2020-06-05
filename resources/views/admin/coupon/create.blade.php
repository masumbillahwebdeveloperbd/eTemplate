@extends('admin.master')
@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Coupon</h2>
				{{Form::open(['route'=>'coupon.store','action'=>'POST'])}}
				<div class="form-group">
				    <label for="discount_id">Discount Type</label>
				    <select name="discount_id" class="form-control" id="discount_id">
				    	<option value="">Select</option>
				    	@foreach($discountDatas as $discountData )
				    	<option value="{{$discountData->discount_id}}">{{$discountData->discount_type}}</option>
				    	@endforeach
				    </select> 
				  </div>
				<div class="form-group">
				    <label for="coupon_code">Coupon Code</label>
				    <input type="text" class="form-control" name="coupon_code" id="coupon_code">  
				</div>
				
				  
				<div class="form-group">
				    <label for="active_status">Status</label>
				    <select name="active_status" class="form-control" id="active_status">
				    	<option value="">Select</option>
				    	
				    	<option value="1">Open</option>
				    	<option value="0">Stop</option>
				    	
				    </select> 
				  </div>
				  <div class="form-group">
				    <label for="coupon_type">Coupon Type</label>
				    <input type="text" class="form-control" name="coupon_type" id="coupon_type">  
				  </div>

				  <div class="form-group">
				    <label for="application_rules">Application Rules</label>
				    <input type="text" class="form-control" name="application_rules" id="application_rules">

				  </div>
				  <div class="form-group">
				    <label for="validaty">Validaty</label>
				    <input type="text" class="form-control" name="validaty" id="validaty">

				  </div>
				  
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection