@extends('admin.master')
@section('mainContent')

<div><a href="{{route('product.index')}}" style="float:right;">Return Product List</a></div>

<table class="table">
  
    <tr>
      <th scope="col">#</th>
      <th scope="row">{{$data->id}}</th>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td>{{$data->name}}</td>
    </tr>
    <tr>
      <th scope="col">Quantity</th>
      <td>{{$data->quantity}}</td>
    </tr>
    <tr>
      <th scope="col">Purchase Price</th>
      <td>{{$data->purchase_price}}</td>
    </tr>
    <tr>
      <th scope="col">Sell Price</th>
      <td>{{$data->sell_price}}</td>
    </tr>
    <tr>
      <th scope="col">Short Description</th>
      <td>{{$data->short_description}}</td>
    </tr>
    <tr>
      <th scope="col">Long Description</th>
      <td>{{$data->long_description}}</td>
    </tr>
    <tr>
      <th scope="col">Re Order</th>
      <td>{{$data->re_order_level}}</td>
    </tr>
    <tr>
      <th scope="col">Status</th>

      <td>{{$data->publication_status==1?'published':'Unpublished'}}</td>
    </tr>
    <tr>
      <th scope="col">Category</th>
      <td>{{$data->category_id}}</td>
    </tr>
    <tr>
      <th scope="col">Menufacture</th>
      <td>{{$data->menufacture_id}}</td>
    </tr>
    <tr>
      <th scope="col">Supplier</th>
      <td>{{$data->supplier_id}}</td>
    </tr>
            
     
</table>


@endsection