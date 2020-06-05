@extends('admin.master')

@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Product</h2>
{!!Form::open(['route'=>['product.update',$data->product_id],'method'=>'PUT','name'=>'editProductForm'])!!}
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">  
				  </div>
				  <div class="form-group">
				    <label for="quantity">Quantity</label>
				    <input type="number" class="form-control" name="quantity" id="quantity" value="{{$data->quantity}}">  
				  </div>
				  <div class="form-group">
				    <label for="purchase_price">Purchase Price</label>
				    <input type="number" name="purchase_price" class="form-control" id="purchase_price" value="{{$data->purchase_price}}">
				   
				  </div>
				   <div class="form-group">
				    <label for="sell_price">Sell Price</label>
				    <input type="number" name="sell_price" class="form-control" id="sell_price" value="{{$data->sell_price}}">
				   
				  </div>
				  <div class="form-group">
				    <label for="short_description">Short Description</label>
				  
				    <textarea class="form-control" name="short_description" id="short_description">
				    	{!!$data->short_description!!}
				    </textarea>
				  </div>
				    <div class="form-group">
				    <label for="long_description">Long Description</label>
				  
				    <textarea class="form-control" name="long_description" id="long_description">
				    	{!!$data->long_description!!}
				    </textarea>
				  </div>
				
				  <div class="form-group">
				    <label for="re_order_level">Re Order Level</label>
				    <input type="number" class="form-control" name="re_order_level" id="re_order_level" value="{{$data->re_order_level}}">  
				  </div>
				  <div class="form-group">
				    <label for="publication_status">Status</label>
				    <select name="publication_status" class="form-control" id="publication_status">
				    	<option value="">Select</option>
				    	
				    	<option value="1">Published</option>
				    	<option value="0">Un Published</option>
				    	
				    </select> 
				  </div>
				    <div class="form-group">
				    <label for="category_id">Category</label>
				    <select name="category_id" class="form-control" id="category_id">
				    	<option value="">Select</option>
				    	@foreach($categoryDatas as $categoryData )
				    	<option value="{{$categoryData->category_id}}">{{$categoryData->name}}</option>
				    	@endforeach
				    </select> 
				  </div>
				  <div class="form-group">
				    <label for="menufacture_id">Menufacture</label>
				    <select name="menufacture_id" class="form-control" id="menufacture_id">
				    	<option value="">Select</option>
				    	@foreach($menufactureDatas as $menufactureData )
				    	<option value="{{$menufactureData->menufacture_id}}">{{$menufactureData->name}}</option>
				    	@endforeach
				    </select> 
				  </div>
				    <div class="form-group">
				    <label for="supplier_id">Supplier</label>
				    <select name="supplier_id" class="form-control" id="supplier_id">
				    	<option value="">Select</option>
				    	@foreach($supplierDatas as $supplierData )
				    	<option value="{{$supplierData->supplier_id}}">{{$supplierData->company_name}}</option>
				    	@endforeach
				    </select> 
				  </div>
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>
       <script type="text/javascript">
      document.forms['editProductForm'].elements['publication_status'].value={{$data->publication_status}}
      document.forms['editProductForm'].elements['category_id'].value={{$data->category_id}}
      document.forms['editProductForm'].elements['menufacture_id'].value={{$data->menufacture_id}}
      document.forms['editProductForm'].elements['supplier_id'].value={{$data->supplier_id}}

      
            </script>
@endsection