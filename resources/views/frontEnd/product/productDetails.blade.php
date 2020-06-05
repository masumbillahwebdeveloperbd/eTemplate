@extends('frontEnd.master')
@section('mainContent')
 <div class="wrapper row">
        <div class="preview col-md-6">
          
          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{asset('public/productImages/'.$productDetails->general_image)}}" /></div>
            <div class="tab-pane" id="pic-2"><img src="{{asset('public/productImages/'.$productDetails->general_image)}}" /></div>
       
            <div class="tab-pane" id="pic-4"><img src="{{asset('public/img/')}}/brand/ocode.png" /></div>
            <div class="tab-pane" id="pic-5"><img src="" /></div>
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('public/img/')}}/brand/ecstasy.png" /></a></li>
            <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('public/img/')}}/brand/fortuna.png" /></a></li>
            <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('public/img/')}}/brand/infinity.png" /></a></li>
            <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('public/img/')}}/brand/ocode.png" /></a></li>
            <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('public/img/')}}/brand/richman.png" /></a></li>
          </ul>
          
        </div>
        <div class="details col-md-6">
          <h3 class="product-title">{{$productDetails->name}}</h3>
          <div class="rating">
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <span class="review-no">41 reviews</span>
          </div>
          <p class="product-description">{!!$productDetails->short_description!!}</p>
            <p class="product-description">{!!$productDetails->long_description!!}</p>
          <h4 class="price">current price: <span>{{$productDetails->sell_price}}</span></h4>
          <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
          <h5 class="sizes">sizes:
            @foreach($productOptions as $productOption)
            <span class="size" data-toggle="tooltip" title="small">{{$productOption->size}}</span>
            @endforeach
           
          </h5>
          <?php 
            if(isset($discount)){
          ?>
         <!--  @if($productDiscount) -->
          <h5>Discount Available:{{$discount->rate}}%</h5>
          <h5 class="colors">colors:
            @foreach($productOptions as $productOption)
            <span style="color:{{$productOption->color}};">{{$productOption->color}}</span>
          
            @endforeach
          </h5>
           
           
          
          <!-- @endif -->
          <?php 
            }
          ?>
          <div class="action">
            <a href="{{url('add-to-cart/'.$productDetails->product_id)}}" class="add-to-cart btn btn-default" type="button">add to cart</a>
            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
          </div>
        </div>
      </div>
@endsection