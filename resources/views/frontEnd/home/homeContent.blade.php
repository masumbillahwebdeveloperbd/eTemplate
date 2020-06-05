@extends('frontEnd.master')
@section('mainContent')
      @include('frontEnd.pages.slider')

      <!-- products caourosale -->

      @include('frontEnd.pages.womenSlide')


      <!-- mobile slider -->
@include('frontEnd.pages.mobileSlider')
<!-- four in one row -->
    <div class="row mb-2">


    @foreach($imgProducts as $imgProduct)

        <div class="column  col-md-3 ">
          
          <a href="">
            <img src="{{asset('public/productImages/'.$imgProduct->general_image)}}">
          </a>
          
          <a style="margin-top: 5px;" href="{{url('add-to-cart/'.$imgProduct->product_id)}}" class="btn btn-info">Add-to-Cart</a>
          <a href="{{url('/product-details/'.$imgProduct->product_id)}}" style="margin-top: 5px;" class="btn btn-warning">Product Details</a>
          
        </div>
    @endforeach   
    </div>
<!-- two in one row -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/jeans.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/t-shirt-1.png">
          </a>
        </div>
      </div>

      <div class="row py-2">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/panjabi.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/sunglass.png">
          </a>
        </div>
      </div>

      <!-- two row -->

      <div class="row mb-2">
        <div class="column img14 col-md-3 mb-0 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-5.png">
          </a>
          <div class="Appliances bg-info pt-0">
            <h4 class="text-white px-2">Appliances</h4>
              <ul class="list-unstyled">
                <li><a href="">Television</a></li>
                <li><a href="">AC and cooler</a></li>
                <li><a href="">Refregerator</a></li>
                <li><a href="">Fans</a></li>
                <li><a href="">Kitchen Applience</a></li>
                <li><a href="">Small Applience</a></li>
                <li><a href="">Other Applience</a></li>
                <li><a href=""><h3>SHOP All....</h3></a></li>
              </ul>
          </div>
          
        </div>
        <div class="column img14 col-md-3 px-2 py-0">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/watch-1.png">
          </a>
          <a href="" class="">
            <img src="{{'public/'}}/img/home/h-6.png">
          </a>
        </div>
        <div class="column img14 col-md-3 mb-0 px-2">
          <a href=""> 
            <img src="{{'public/'}}/img/electronics/laptop/ls-2.png">
          </a>
          <div class="Appliances bg-warning pt-0 px-2">
            <h4 class="text-white px-2">Electronics</h4>
              <ul class="list-unstyled">
                <li><a href="">Mobile Phone</a></li>
                <li><a href="">Laptop</a></li>
                <li><a href="">Headphones/Speakers</a></li>
                <li><a href="">Gromming Products</a></li>
                <li><a href="">Gadget Accessories</a></li>
                <li><a href="">Smart watches</a></li>
                <li><a href="">Power Bank</a></li>
                <li><a href=""><h3>SHOP All....</h3></a></li>
              </ul>
          </div>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/cos-1.png">            
          </a>
          <a href="">
            <img src="{{'public/'}}/img/home/h-7.png">
          </a>
        </div>
    </div>
    

    <!-- two of four -->

    <div class="row py-0">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/sharee-1.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/jewellery.png">
          </a>
        </div>
    </div>

    <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/handBag.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/makeup-1.png">
          </a>
        </div>
    </div>

    <!-- most wished electronics -->
    <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Most Wished Electronics</h3>
          <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/laptop-bag.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cross laptop bag</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/macbook-bag.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Laptop lather</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>    
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/mobile/mobile-stand.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Adjustable and portable</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/laptop-bag.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cross laptop bag</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>                
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/mobile/ekin.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/hp-lap.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>       
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/laptop-bag.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cross laptop bag</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>      
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/laptop/laptop-bag.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cross laptop bag</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/products/ipad.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel3" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel3" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>
      <!-- two in one -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/trimmer.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/interware.png">
          </a>
        </div>
    </div>

    <!-- three of one -->

    <div class="row">
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/watch-2.png">
          </a>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/bagpack.png">
          </a>
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/mens-collection/show.png">
          </a>
          
        </div>
    </div>


    <!-- carrousal 4 -->

    <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Men's Summer Collection</h3>
          <div id="myCarousel4" class="carousel slide w-100" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/short-pant.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Men's Short pant</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-1.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>New premium quality</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>    
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Polaraized</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>                
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-3.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Sunglass-5</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Polaraized</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>  
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-4.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Sunglass-6</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/short-pant-1.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Short pant</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Polaraized</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>  
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-5.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Black polarized
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-6.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>      
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-7.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-8.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Polaraized</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>  
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-9.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/mens-collection/sunglass-10.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel4" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel4" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>
<!-- two out of four -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-8.png">
          </a>
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-9.png">
          </a>
          
        </div>
    </div>

    <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-10.png">
          </a>
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-11.png">
          </a>
          
        </div>
    </div>


      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Top Fashion Brands</h3>
         <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item row no-gutters active">
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/ocode.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/rise.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/richman.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/infinity.png">
                  </div>
              </div>
              <div class="carousel-item row no-gutters">
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/apex.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/fortuna.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/orion.png">
                  </div>
                  <div class="col-3 float-left">
                    <img class="img-fluid" src="{{'public/'}}/img/brand/sara.png">
                  </div>
              </div>
          </div>
          <a class="carousel-control left carousel-control-prev" href="#recipeCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#recipeCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>

          <!-- <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </div>

    <!-- two in one row -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/skin-care.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/hare-care.png">
          </a>
        </div>
      </div>

      <!-- two in one row -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/decore.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/daily.png">
          </a>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Women's Summer Collection</h3>
          <div id="myCarousel5" class="carousel slide w-100" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/biotin.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Biotin</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/body-spra.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Body spry</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>    
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/cleaning-gel.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cleaning Gel</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>                
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/face-cream.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Face Cream</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/body-spra.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Body spry</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div> 
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/gina-skinny.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Gina Skinny jeans</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/gina-stretch.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Gina Skinny stretch jeans</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/nabhas.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Nabhas</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/gina-skinny.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Gina Skinny jeans</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/navy-yello.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Navey Yellow</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>      
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/printed.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Printed</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/roshnai.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Roshnai</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/oils-life.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Oils of life</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/navy-yello.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Navy yellow</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/womens-collection/roshnai.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Roshnai</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel5" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel5" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>

      <!-- two in one row -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/kids/kids.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/gift-card.png">
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Wrist Essential</h3>
          <div id="myCarousel6" class="carousel slide w-100" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-1.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors red</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>    
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>                
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-3.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Skmei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-4.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch-2</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div> 
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-5.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-6.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-7.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-8.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-9.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>      
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-10.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-11.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-12.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-13.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/wrist-essential/michael-kors-7.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel6" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel6" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/bike/bike-1.png">
          </a>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/bike/bike-access.png">
          </a>
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/home/h-12.png">
          </a>
          
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Our Exclusive Home Decor Collections</h3>
          <div id="myCarousel7" class="carousel slide w-100" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-1.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors red</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>    
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-3.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Michael kors watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>                
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-4.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Skmei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-5.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch-2</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div> 
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-6.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-7.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-8.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-9.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-10.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>      
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-11.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-12.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-1.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-3.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{'public/'}}/img/home/hd-2.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>skamei watch</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel7" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel7" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>

      <!-- two in one row -->
      <div class="row">
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/perfumes.png">
          </a>
          
        </div>
        <div class="column img14 col-md-6 px-2">
          <a href="">
            <img src="{{'public/'}}/img/womens-collection/deodorants.png">
          </a>
        </div>
      </div>

      <!-- two row -->

      <div class="row mb-2">
        <div class="column img14 col-md-3 mb-0 px-2">
          <a href="">
            <img src="{{'public/'}}/img/brand/mobile.png">
          </a>
          <div class="Appliances bg-info pt-0">
            <h4 class="text-white px-2">Mobile Brands</h4>
              <ul class="list-unstyled">
                <li><a href="">Samsung</a></li>
                <li><a href="">Oppo</a></li>
                <li><a href="">VIVO</a></li>
                <li><a href="">Apple</a></li>
                <li><a href="">Huawe</a></li>
                <li><a href="">Nokia</a></li>
                <li><a href="">Maximus</a></li>
                <li><a href=""><h3>SHOP All....</h3></a></li>
              </ul>
          </div>
          
        </div>
        <div class="column img14 col-md-3 px-2 py-0">
          <a href="">
            <img src="{{'public/'}}/img/electronics/watch/w-1.png">
          </a>
          <a href="" class="">
            <img src="{{'public/'}}/img/products/sports-fitness.png">
          </a>
        </div>
        <div class="column img14 col-md-3 mb-0 px-2">
          <a href=""> 
            <img src="{{'public/'}}/img/products/fashion-accss.png">
          </a>
          <div class="Appliances bg-warning pt-0 px-2">
            <h4 class="text-white px-2">Fashion Accessories</h4>
              <ul class="list-unstyled">
                <li><a href="">Bag & Backpack</a></li>
                <li><a href="">Cosmetics</a></li>
                <li><a href="">Watch Men</a></li>
                <li><a href="">Watch Women</a></li>
                <li><a href="">Perfume Men</a></li>
                <li><a href="">Perfume Women</a></li>
                <li><a href="">Jewelleryk</a></li>
                <li><a href=""><h3>SHOP All....</h3></a></li>
              </ul>
          </div>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/headpone.png">            
          </a>
          <a href="">
            <img src="{{'public/'}}/img/products/wallets-accss.png">
          </a>
        </div>
    </div>

    <!-- four in one row -->
    <div class="row mb-2">
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/louge.png">
          </a>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/point.png">
          </a>
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/googleplay.png">
          </a>
          
        </div>
        <div class="column img14 col-md-3 px-2">
          <a href="">
            <img src="{{'public/'}}/img/products/face.png">
          </a>
        </div>
    </div>

    <!-- end rows -->
@endsection