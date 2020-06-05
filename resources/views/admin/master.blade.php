<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/')}}/admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/')}}/admin/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/')}}/admin/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="http://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</head>
<body>
	
	<main>
	@include('admin.includes.aside')
		<section>
			<header></header>
			<div class="wrapper">
				<div class="row">
					<div class="col-md-12">
						@yield('mainContent')
					</div>
					
				</div>
				
			</div>
		</section>
	</main>
	
	@include('admin.includes.footer')
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>

	
	<script type="text/javascript" src="{{asset('public/admin/js/custom.js')}}"></script>
</body>
</html>