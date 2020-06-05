@extends('admin.master')

@section('mainContent')

<script>
	/****************Advance Search************/

    object=new XMLHttpRequest();

function discountTypeAjax(type,idName)
{
/*alert(type);*/
object.open("GET", 'http://localhost/eTemplate/discount-implement/'+type);
//alert(idName);
  object.onreadystatechange=function(){

//alert(object.readyState);
 // alert(object.status);
  if(object.readyState==4 && object.status==200){
      /*alert(object.responseText);*/
//alert(text);
document.getElementById(idName).innerHTML=object.responseText;
}   
  }
  object.send(null);
}
</script>
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	<div class="row">
	    <div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Discount</h2>
				{{Form::open(['route'=>'discount.store','action'=>'POST'])}}
				<div class="alert alert-danger" role="alert">
                {{Session::get('discountType')}} Discount Running
                </div>
				<div class="form-group">
				    <label for="discount_type">Discount Type</label>
				    <select name="discount_type" class="form-control" id="discount_type" onchange="discountTypeAjax(this.value,'divId')">
				    	<option value="">Select</option>
				    	<option value="1">Fixed</option>
				    	<option value="2">Percentage</option>
				    	<option value="3">Coupon</option>
				    	<option value="4">Category</option>
				    	<option value="5">Product</option>	
				    </select> 
				  </div>
				  <div id="divId">
				  	
				  </div>
				  <div class="form-group">
				    <label for="rate">Rate</label>
				    <input type="number" class="form-control" name="rate" id="rate">  
				  </div>
				   <div class="form-group">
				    <label for="rules">Rules:Min Amount(Tk.)</label>
				    <input type="number" class="form-control" name="rules" id="rules">  
				  </div>
				  
				  <div class="form-group">
				    <label for="starting_date">Starting Date</label>
				    <input type="date" class="form-control" name="starting_date" id="starting_date">
				  </div>
				  <div class="form-group">
				    <label for="ending_date">Ending Date</label>
				    <input type="date" class="form-control" name="ending_date" id="ending_date">
				  </div>
				  	<div class="form-group">
				    <label for="publication_status">Publication Status</label>
				    <select name="publication_status" class="form-control" id="publication_status">
				    	<option value="">Select</option>
				    	<option value="1">Active</option>
				    	<option value="2">In Active</option>  	
				    </select> 
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
