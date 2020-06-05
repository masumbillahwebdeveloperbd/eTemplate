@extends('admin.master')

@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Option</h2>
			{{Form::open(['route'=>['option.update',$data->id],'method'=>'PUT','name'=>'editProductForm'])}}
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
				    <label for="weight">Weight</label>
				    <input type="number" class="form-control" name="weight" id="weight" value="{{$data->weight}}">  
				</div>
				
				  <div class="form-group">
				    <label for="color">Color</label>
				    <input type="text" class="form-control" name="color" id="color" value="{{$data->color}}">  
				  </div>
				  <div class="form-group">
				    <label for="width">Width</label>
				    <input type="number" name="width" class="form-control" id="width" value="{{$data->width}}">
				   
				  </div>
				   <div class="form-group">
				    <label for="height">Height</label>
				    <input type="number" name="height" class="form-control" id="height" value="{{$data->height}}">
				   
				  </div>
				  <div class="form-group">
				    <label for="size">Size</label>
				    <input type="text" name="size" class="form-control" id="size" value="{{$data->size}}">
				   
				  </div>
			
			

				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

   <script type="text/javascript">
   
      document.forms['editProductForm'].elements['product_id'].value={{$data->product_id}}
     

      
    </script>
@endsection