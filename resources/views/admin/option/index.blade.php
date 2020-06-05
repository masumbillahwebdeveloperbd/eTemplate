@extends('admin.master')
@section('mainContent')

<div><a href="{{route('option.create')}}" class="" style="float:right; margin-right:20px;" >Add New Product Option</a></div>
<table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Weight</th>
      <th scope="col">Color</th>
      <th scope="col">Width</th>
      <th scope="col">Height</th>
    
      <th scope="col">Size</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->product->name}}</td>
      <td>{{$data->weight}}</td>
      <td>{{$data->color}}</td>
      <td>{{$data->width}}</td>
      <td>{{$data->height}}</td>
      <td>{{$data->size}}</td>
      <td>
        
        <a href="{{url('admin/option/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

       <a href="{{url('admin/option/'.$data->id)}}" class="btn btn-info" title="View"><i class="fas fa-trash-alt"></i></a>

       <a href="{{url('admin/delete-option/'.$data->id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection