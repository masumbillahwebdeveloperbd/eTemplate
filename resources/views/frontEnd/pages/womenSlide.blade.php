<div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Our Exclusive Women's Collection</h3>
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          
          <div class="carousel-inner w-100">
            @foreach($imageTypes as $imageType)
            <?php $i=1;
              if($i==1){
            ?>
            <div class="item carousel-item active">
              <div class="row">
                
                <div class="col-sm-3">
                  
                  
                  <div class="thumb-wrapper">
                    
                    <div class="img-box">
                      <img src="{{asset('public/productImages/'.$imageType->slider_image)}}" class="img-responsive img-fluid" alt="">

                    </div>
                    <div class="thumb-content">
                      <h4>Arundhati</h4>
                      <span class="item-price"><strike>TK 400.00</strike> <span>TK 369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                <?php } if($i==2){?>
                  
                        <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{asset('public/productImages/'.$imageType->slider_image)}}" class="img-responsive img-fluid" alt="">

                    </div>
                    <div class="thumb-content">
                      <h4>Arundhati</h4>
                      <span class="item-price"><strike>TK 400.00</strike> <span>TK 369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                <?php }if($i==3){?>
                        <div class="thumb-wrapper">
                    <div class="img-box">
                      <img src="{{asset('public/productImages/'.$imageType->slider_image)}}" class="img-responsive img-fluid" alt="">

                    </div>
                    <div class="thumb-content">
                      <h4>Arundhati</h4>
                      <span class="item-price"><strike>TK 400.00</strike> <span>TK 369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                <?php }if($i==4){?>

                  <div class="thumb-wrapper">
                    
                    <div class="img-box">
                      <img src="{{asset('public/productImages/'.$imageType->slider_image)}}" class="img-responsive img-fluid" alt="">

                    </div>
                    <div class="thumb-content">
                      <h4>Arundhati</h4>
                      <span class="item-price"><strike>TK 400.00</strike> <span>TK 369.00 </span> <span style="color: red">50% OFF</span></span>
                    </div>            
                  </div>
                <?php }

                 $i++;
                ?>
                    
                </div>
                
                  
                               
                
              </div>
            </div>

            



           @endforeach
          </div>
          
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>