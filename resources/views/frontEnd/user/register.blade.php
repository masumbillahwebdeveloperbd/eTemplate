@extends('frontEnd.master')
@section('mainContent')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div><h2 style="text-align: center;">User Register</h2></div>
			
		{{Form::open(['route'=>'register.store','action'=>'POST'])}}
		 
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="emails">Email</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<div>
				<button class="btn btn-success btn-block">
					Register
				</button>
			</div>
			{{Form::close()}}
			
		</div>
	</div>
</div>
@endsection