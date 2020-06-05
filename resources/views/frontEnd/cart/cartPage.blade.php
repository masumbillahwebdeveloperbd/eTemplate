@extends('frontEnd.master')
@section('mainContent')
<style type="text/css">
    h2{
    	text-align: center;
    }
	.list{
		list-style: none;
	}
	.b{
		background-color: black;
		text-transform: uppercase;
		
		color:white;
		margin: 0;
		padding: 0;
	}
	.c{
		margin: 0;
		padding: 0;
		background-color: white;
		text-align: left;
	}
	.d{
		margin: 0;
		padding-top: 30px;
		background-color: silver;
		height:auto;
	}
	.couponInput{
		border-radius: 7px 0px 0px 7px;
		border:none;
		padding: 5px 5px;
	}
	.couponButton{
		border:none;
		border-radius:0px 7px 7px 0px;
		padding: 5px;
	}
	button{
		border:none;
		border-radius:7px;
		padding: 5px;
	}
</style>

	<div class="container">
		<h2 >In Your Sopping Cart:</h2>
		<div class="row justify-center b">
			
			<div class="col-md-1 "></div>
			<div class="col-md-6">Product</div>
			<div class="col-md-1">Price</div>
			<div class="col-md-3">Quantity</div>
			<div class="col-md-1">Total</div>
		</div>
		@foreach($items as $item)
		<div class="row c">
			
			<div class="col-md-1 ">
				<ul class="list">
					<li><a href="{{url('/remove-to-cart/'.$item->id.'/'.$item->quantity)}}"><i class="fas fa-times">Remove</i></a></li>
					
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list">
					<li><a href="">{{$item->name}}</a></li>
				</ul>
			
		    </div>
			<div class="col-md-1">
				<ul class="list">
					<li><a href="">{{$item->price}}</a></li>
				</ul>
			
		    </div>
			<div class="col-md-3">
				<ul class="list">
					<li><a href="">{{$item->quantity}}</a></li>
				</ul>
			
		    </div>
			<div class="col-md-1">
				<ul class="list">
					<li><a href="">{{$item->quantity*$item->price}}</a></li>
				</ul>
			</div>


		</div>
		@endforeach
		<div class="row d">
			<div class="col-md-9" id="div1" style="padding-bottom: 20px;">
				<input type="text" class="couponInput" id="couponId"  placeholder="Coupon code here" name="">
                <button class="couponButton" onclick="addInput(document.getElementById('couponId').value);">Use Coupon</button>
			</div>
            <div class="col-md-3">
			</div>
		</div>
     <div class="row" style="margin-top: 50px;">
	<div class="col-md-9">
		<a href="{{url('/')}}" class="btn btn-info"><< Back To Shopping</a>
		<a href="{{url('check-out')}}" class="btn btn-info">Check Out >></a>
	</div>
	<div class="col-md-3">
		<div style="width:100%; height:auto;">
			<div class="row" style="background-color: tomato;">
				<div class="col-md-10">Expense</div>
				<div class="col-md-2">Taka</div>

			</div>
					<div class="row" >
				<div class="col-md-10">Sub Total</div>
				<div class="col-md-2">
					<?php
                      $subTotal='';
                      $subTotal=0;
				$subTotal=Cart::getSubTotal();
				echo $subTotal;
				?>
				
			    </div>

			</div>
		
			 <div class="row">
				<div class="col-md-10">Vat</div>
				<div class="col-md-2">
                   <?php
	                $vat='';
	                $vat=0;
	                $vat=Cart::getSubTotal()*5/100;
	                echo $vat;
	                ?>
				</div>

			</div>
		
			<div class="row" >
				<div class="col-md-10">Tax</div>
				<div class="col-md-2">
					<?php
					$tax='';
					$tax=0;
					$tax=Cart::getSubTotal()*3/100;
                    echo $tax;
                    ?>
				
			    </div>

			</div>

			<div class="row">
				<div class="col-md-10">Discount</div>
				<div class="col-md-2" id="divId">
					<?php
					   $discount='';
					   $discount=0;
                       $discount=Session::get('discount');
                       echo $discount;
					?>
					
				</div>
		    </div>

			<div class="row">
				<div class="col-md-10">Total</div>
				<div class="col-md-2" id="totalId">
					<?php
                    $total='';
                    $total=0;
                    $total=($subTotal+$vat+$tax)-$discount;
                    echo $total;  
					?>
					
				</div>
		    </div>

			
		</div>
	</div>
</div>

</div>

<script>
obj1=new XMLHttpRequest();
function addInput(inputText1)
{
obj1.open("GET", 'http://localhost/eTemplate/cart-coupon/'+inputText1);
	obj1.onreadystatechange=function(){
 	if(obj1.readyState==4 && obj1.status==200){
	var myObj;
	myObj = JSON.parse(obj1.responseText);
document.getElementById('divId').innerHTML=myObj.discount_total;
document.getElementById('totalId').innerHTML=myObj.total;

}		
	}
	obj1.send(null);
}
</script>
@endsection