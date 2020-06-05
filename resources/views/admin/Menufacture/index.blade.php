@extends('admin.master')
@section('mainContent')

<div><a href="{{route('menufacture.create')}}" class="" style="float:right; margin-right:20px;" >Add New Menufacture</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->menufacture_id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->menufacture_description}}</td>
      
      <td>{{$data->publication_status==1?'published':'Unpublished'}}</td>
      <td>
           <?php 
                $status= $data->publication_status;
                if($status==1){
                ?>

          <a href="{{url('admin/unpublish-menufacture/'.$data->menufacture_id)}}" class="btn btn-warning" title="Unpublish"><i class="fas fa-thumbs-down"></i></a>
              <?php } else {?>
              
          <a href="{{url('admin/publish-menufacture/'.$data->menufacture_id)}}" class="btn btn-success" title="Publish"><i class="fas fa-thumbs-up"></i></a>
              <?php } ?>
        <a href="" class="btn btn-info" title="Edit"><i class="far fa-edit"></i></a>


       <a href="{{url('admin/delete-menufacture/'.$data->menufacture_id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection