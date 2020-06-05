@extends('admin.master')
@section('mainContent')

<div><a href="{{route('product.create')}}" class="" style="float:right; margin-right:20px;" >Add New Product</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Sell Price</th>
    
      <th scope="col">Status</th>
      <th scope="col">Category</th>
      <th scope="col">Menufacture</th>
      <th scope="col">Supplier</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->product_id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->purchase_price}}</td>
      <td>{{$data->sell_price}}</td>

      <td>
        <span class="badge badge-primary">{{$data->publication_status==1?'Published':'Unpublished'}}</span>
        </td>
      <td>{{$data->category->name}}</td>
      <td>{{$data->menufacture->name}}</td>
      <td>{{$data->supplierName->company_name}}</td>
      <td>
           <?php 
                $status= $data->publication_status;
                if($status==1){
                ?>

          <a href="{{url('admin/unpublish-product/'.$data->product_id)}}" class="btn btn-warning" title="Unpublish"><i class="fas fa-thumbs-down"></i></a>
              <?php } else {?>
              
          <a href="{{url('admin/publish-product/'.$data->product_id)}}" class="btn btn-success" title="Publish"><i class="fas fa-thumbs-up"></i></a>
              <?php } ?>
        <a href="{{url('admin/product/'.$data->product_id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

       <a href="{{url('admin/product/'.$data->product_id)}}" class="btn btn-info" title="View"><i class="fas fa-trash-alt"></i></a>

       <a href="{{url('admin/delete-product/'.$data->product_id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>


@endsection