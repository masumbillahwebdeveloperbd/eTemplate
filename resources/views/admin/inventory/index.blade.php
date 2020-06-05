@extends('admin.master')
@section('mainContent')

<div><a href="{{route('inventory.create')}}" class="" style="float:right; margin-right:20px;" >Add Product Quantity</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Purchase Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->inventory_id}}</th>
      <td>{{$data->product->name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->purchase_price}}</td>
      <td>{{$data->purchasedate}}</td>

     
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection