@extends('frontEnd.master')
@section('mainContent')
<div class="row">
 @foreach($categoryProducts as $categoryProduct)

        <div class="column img14 col-md-3 px-2">
        	<div>
          
          <a href="">
            <img src="{{asset('public/productImages/'.$categoryProduct->general_image)}}">
          </a>
          
          </div>
          <div><a href="{{url('/product-details/'.$categoryProduct->product_id)}}" type="button-link" style="text-decoration: none;"><button class="btn btn-info btn-block">Product Details</button></a></div>
          <div><a href="{{url('add-to-cart/'.$categoryProduct->product_id)}}" type="button-link" style="text-decoration: none;"><button class="btn btn-success btn-block">Add-to-cart</button></a></div>
        </div>

 	
 @endforeach
 </div>
@endsection