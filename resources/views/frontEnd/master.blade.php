<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Talha soft">
  <title>eCommerce</title>
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/custom/front-style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- <script src="{{asset('public/js/bootstrap.min.js')}}"></script> -->
  <script src="{{asset('public/js/jquery.min.js')}}"></script> 
  
  <script type="text/javascript" src="{{asset('public/js/jqzoom.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>
  <!-- <script src="{{asset('public/js/fontawesome.js')}}"></script> -->




  </head>

<body>

@include('frontEnd.pages.headerTop')
@include('frontEnd.pages.headerBottom')
@include('frontEnd.pages.menu')
    
<div class="container">
@yield('mainContent')
      
</div>

<!-- end container -->

        <!-- Copyright Info -->
@include('frontEnd.pages.copyright')
        <!-- END Copyright Info -->
<!--Start Footer-->  
@include('frontEnd.pages.footer')
<!-- END Footer -->
<!-- 
  <script src="{{asset('public/js/jquery.min.js')}}"></script>

  <script src="{{asset('public/js/bootstrap.min.js')}}"></script> -->

<!-- Dropdown menu -->
<script>
      $(document).ready(function() {

    $(window).resize(function(){
      if ($(window).width() >= 980){  

          $(".navbar .dropdown-toggle").hover(function () {
             $(this).parent().toggleClass("show");
             $(this).parent().find(".dropdown-menu").toggleClass("show"); 
           });

          $( ".navbar .dropdown-menu" ).mouseleave(function() {
            $(this).removeClass("show");  
          });
      
      } 
    });  
      
    });
</script>


<!-- carousal -->
<!-- <script type="text/javascript" src="{{asset('public/js/custom.js')}}"></script> -->
  
</body>

</html>