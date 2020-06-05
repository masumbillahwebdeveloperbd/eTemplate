@extends('admin.master')
@section('mainContent')

<div><a href="{{route('coupon.create')}}" class="" style="float:right; margin-right:20px;" >Add Coupon Rules</a></div>
<table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Discount</th>
      <th scope="col">Coupon Code</th>
      <th scope="col">Status</th>
      <th scope="col">Coupon Type</th>
    
      <th scope="col">Application Rules</th>
      <th scope="col">Validaty</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->coupon_id}}</th>
      
      <td>{{$data->discount->discount_type}}</td>
      <td>{{$data->coupon_code}}</td>
      <td>{{$data->active_status==1?'On':'Off'}}</td>
      <td>{{$data->coupon_type}}</td>
      <td>{{$data->application_rules}}</td>
      <td>{{$data->validaty}}</td>
      
      <td>
        
        <a href="{{url('admin/coupon/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

       <a href="{{url('admin/delete-coupon/'.$data->id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection