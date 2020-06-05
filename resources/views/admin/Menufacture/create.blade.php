@extends('admin.master')
@section('mainContent')
<div class="container setting">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
      
  {{Form::open(['route'=>'menufacture.store','method'=>'POST'])}}
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">    
  </div>
  <div class="form-group">
    <label for="menufacture_description">Description</label>
    <textarea class="form-control" id="menufacture_description" name="menufacture_description"></textarea>
    
  </div>
 
   <div class="form-group">
    <label for="publication_status">Status</label>
    <select name="publication_status" class="form-control" id="description">
      <option>-Select-</option>
      <option value="1">Publish</option>
      <option value="0">UnPublish</option>
    </select>
    <div class="form-group setting">
   <button class="btn btn-success">Save</button>
 </div>
   {{Form::close()}}
    
  </div>
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>
  @endsection