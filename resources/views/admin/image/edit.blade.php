@extends('admin.master')

@section('mainContent')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Image</h2>
{!!Form::open(['route'=>['image.update',$data->image_id],'method'=>'PUT','name'=>'editImageForm','files'=>'true'])!!}
			
				 <div class="form-group">
				    <label for="product_id">Product Name</label>
				    <select name="product_id" class="form-control" id="product_id">
				    	<option value="">Select</option>
				    @foreach($productDatas as $productData )
				    	<option value="{{$productData->product_id}}">{{$productData->name}}</option>
				    	@endforeach
				    </select> 
				  </div>
<div class="row">
	<div class="col-md-4">
		 <div class="form-group">
                <label for="general_image">Genearal Image
                </label>
                    
                 <input type="file" class="form-control" id="general_image" name="general_image">
                      
                    
          </div>
	</div>	
	<div class="col-md-8">
		<img src="{{asset('public/productImages/'.$data->general_image)}}">
	</div>

</div>
<div class="row">
	<div class="col-md-4">
		 <div class="form-group">
                <label for="thumbnail_image">Thumbnail Image
                </label>
                    
                 <input type="file" class="form-control" id="thumbnail_image" name="thumbnail_image">
                      
                    
          </div>
	</div>	
	<div class="col-md-8">
		<img src="{{asset('public/productImages/'.$data->thumbnail_image)}}">
	</div>
	
</div>
<div class="row">
	<div class="col-md-4">
		 <div class="form-group">
                <label for="featured_image">Featured Image
                </label>
                    
                 <input type="file" class="form-control" id="featured_image" name="featured_image">
                      
                    
          </div>
	</div>	
	<div class="col-md-8">
		<img src="{{asset('public/productImages/'.$data->featured_image)}}">
	</div>
	
</div>
<div class="row">
	<div class="col-md-4">
		 <div class="form-group">
                <label for="slider_image">Slider Image
                </label>
                    
                 <input type="file" class="form-control" id="slider_image" name="slider_image">
                      
                    
          </div>
	</div>	
	<div class="col-md-8">
		<img src="{{asset('public/productImages/'.$data->slider_image)}}">
	</div>
	
</div>
<div class="row">
	<div class="col-md-4">
		 <div class="form-group">
                <label for="back_image">Back Image
                </label>
                    
                 <input type="file" class="form-control" id="back_image" name="back_image">
                      
                    
          </div>
	</div>	
	<div class="col-md-8">
		<img src="{{asset('public/productImages/'.$data->back_image)}}">
	</div>
	
</div>
                 

				  
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>
       <script type="text/javascript">
     
      document.forms['editImageForm'].elements['product_id'].value={{$data->product_id}}


      
            </script>
@endsection