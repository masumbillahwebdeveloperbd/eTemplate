@extends('admin.master')
@section('mainContent')

<div><a href="{{route('image.create')}}" class="" style="float:right; margin-right:20px;" >Add More Image</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">General Image</th>
      <th scope="col">Thumbnail Image</th>
      <th scope="col">Featured Image</th>
      <th scope="col">Slider Image</th>
      <th scope="col">Back Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->image_id}}</th>
      <td>{{$data->product->name}}</td>
      <td><img width="100" height="100" src="{{asset('public/productImages/'.$data->general_image)}}"></td>
      <td><img width="100" height="100" src="{{asset('public/productImages/'.$data->thumbnail_image)}}"></td>
      <td><img width="100" height="100" src="{{asset('public/productImages/'.$data->featured_image)}}"></td>
      <td><img width="100" height="100" src="{{asset('public/productImages/'.$data->slider_image)}}"></td>
      <td>
        <img width="100" height="100" src="{{asset('public/productImages/'.$data->back_image)}}">
      </td>
       <td>
        <a href="{{url('admin/image/'.$data->image_id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

       <a href="{{url('admin/image/'.$data->image_id)}}" class="btn btn-info" title="View"><i class="fas fa-trash-alt"></i></a>

       <a href="{{url('admin/delete-image/'.$data->image_id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection