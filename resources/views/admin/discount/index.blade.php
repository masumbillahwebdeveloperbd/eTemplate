@extends('admin.master')
@section('mainContent')

<div><a href="{{route('discount.create')}}" class="" style="float:right; margin-right:20px;" >Add Discount Offer</a></div>
<table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Discount Type</th>
      <th scope="col">Rate</th>
      <th scope="col">Rules</th>
      <th scope="col">Validity</th>
    
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->discount_id}}</th>
      
      <td>{{$data->discount_type}}</td>
      <td>{{$data->rate}}</td>
      <td>{{$data->rules}}</td>
      <td>{{$data->validity}}</td>
      
      <td>
        
        <a href="{{url('admin/discount/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

       <a href="{{url('admin/delete-discount/'.$data->id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection