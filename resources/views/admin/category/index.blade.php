@extends('admin.master')
@section('mainContent')
<!-- Button trigger modal -->
<!-- insert Add Modal -->


    <!--Show Error Model -->
@if($errors->any())
<script type="text/javascript">
  $('document').ready(function(){
    $('#insertModal').modal('show')
  });
  
</script>
@endif
<!--end Error Model-->
@component('admin.common.insertModal')
@slot('title')
    Add Category
  @endslot
  @slot('form')
  {{Form::open(['route'=>'category.store', 'method'=>'POST'])}}
  @endslot
  @slot('body')

  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">    
  </div>
  <div class="form-group">
    <label for="category_description">Description</label>
    <textarea class="form-control" id="category_description" name="category_description"></textarea>
  </div>
  <div class="form-group">
    <label for="parent_id">Parent Category</label>
    <select name="parent_id" class="form-control" id="parent_id">
      <option value="">-Select-</option>
      @foreach($items as $item)
      <option value="{{$item->category_id}}">{{$item->name}}</option>
      @endforeach
    </select>
   
    
  </div>
   <div class="form-group">
    <label for="publication_status">Status</label>
    <select name="publication_status" class="form-control" id="description">
      <option>-Select-</option>
      <option value="1">Publish</option>
      <option value="0">UnPublish</option>
    </select>
   
    
  </div>
  @endslot
@endcomponent

<!-- End  Add Modal -->
<!-- edit Modal -->
@component('admin.common.editModal')
@slot('title')
    Edit Category
  @endslot
  
  @slot('form')
    <form action="" id="editForm" method="post" name="editCategoryForm">
      @csrf
      @method('put')
  @endslot

  @slot('body')
  

  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"
    value="{{old('name')}}">    
  </div>
  <div class="form-group">
    <label for="category_description">Description</label>
    <textarea class="form-control" id="category_description" name="category_description"></textarea>
    
  </div>
  <div class="form-group">
    <label for="parent_id">Parent Category</label>
    <select name="parent_id" class="form-control" id="parent_id">
      <option value="">-Select-</option>
      @foreach($items as $item)
      <option value="{{$item->category_id}}">{{$item->name}}</option>
      @endforeach
    </select>
   
    
  </div>
   <div class="form-group">
    <label for="publication_status">Status</label>
    <select name="publication_status" class="form-control" id="publication_status">
      <option>-Select-</option>
      <option value="1">Publish</option>
      <option value="0">UnPublish</option>
    </select>
   
    
  </div>
  
  @endslot
@endcomponent

<!-- End  Add Modal -->
<!-- endEdit Modal -->






<div><a href="javascript:void(0)" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#insertModal" style="float:right;" >Add</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parent Category</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->category_id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->category_description}}</td>
      <td>{{$data->parent_id}}</td>
      <td>{{$data->publication_status==1?'published':'Unpublished'}}</td>
      <td>
           <?php 
                $status= $data->publication_status;
                if($status==1){
                ?>

          <a href="{{url('admin/unpublish-category/'.$data->category_id)}}" class="btn btn-warning" title="Unpublish"><i class="fas fa-thumbs-down"></i></a>
              <?php } else {?>
              
          <a href="{{url('admin/publish-category/'.$data->category_id)}}" class="btn btn-success" title="Publish"><i class="fas fa-thumbs-up"></i></a>
              <?php } ?>
        <a href="javascript:void(0)" data-toggle="modal"
       data-target="#editModal" data-name="{{$data->name}}" 
       data-subcategory="{{$data->subcategory}}" data-publication_status="{{$data->publication_status}}" data-description="{{$data->category_description}}" data-url="{{url('admin/category/'.$data->category_id)}}" class="btn btn-info" title="Edit"><i class="far fa-edit"></i></a>


       <a href="{{url('admin/delete-category/'.$data->category_id)}}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>

<script type="text/javascript">

  $('#editModal').on('show.bs.modal', function (event) {
 
  var button = $(event.relatedTarget) // Button that triggered the modal
  var modal = $(this)
  var name=button.data('name');
  alert(name);
  
  var parent_id=button.data('parent_id');
  var category_description=button.data('category_description');
  var publication_status=button.data('publication_status');
  var url=button.data('url')

 $('#editForm').attr('action',url);
  //modal.find('.modal-body #name').val(name);

  $('#editForm form input[name="name"]').val(name);
  
  modal.find('.modal-body #category_description').val(category_description); 
  modal.find('.modal-body #parent_id').val(parent_id);
  modal.find('.modal-body #publication_status').val(publication_status);
document.forms['editCategoryForm'].elements['parent_id'].value=parent_id
     
  
})
</script>
@endsection