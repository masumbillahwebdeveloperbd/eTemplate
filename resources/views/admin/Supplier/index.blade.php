@extends('admin.master')
@section('mainContent')

<div style="background-color: silver;">
  <div class="row">
    <div class="col-md-6">Home/Supplier</div>
    <div class="col-md-2"><input type="text" name="" style="border:1px solid silver; border-radius:2px;"></div>
    <div class="col-md-1"><input type="submit" name="" value="Search"></div>
    <div class="col-md-3"><a href="{{route('supplier.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
  </div>
  
  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->supplier_id}}</th>
      <td>{{$data->company_name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->email}}</td>
      
      <td>{{$data->status==1?'Active':'In Active'}}</td>
      <td>
           <?php 
                $status= $data->status;
                if($status==1){
                ?>

          <a href="{{url('admin/unpublish-supplier/'.$data->supplier_id)}}" class="btn btn-warning" title="Unpublish"><i class="fas fa-thumbs-down"></i></a>
              <?php } else {?>
              
          <a href="{{url('admin/publish-supplier/'.$data->supplier_id)}}" class="btn btn-success" title="Publish"><i class="fas fa-thumbs-up"></i></a>
              <?php } ?>
        <a href="" class="btn btn-info" title="Edit"><i class="far fa-edit"></i></a>


       <a href="" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection