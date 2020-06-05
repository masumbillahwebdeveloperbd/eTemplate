
    <div class="row">
        <div class="col-md-12">
          <h3 class="text-center catheader py-4">Best Selling Mobiles & Gadget</h3>
          <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
             
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
                <?php
              for($i=1;$i<=9;$i++)
                {
                    if($i==1)
                      {
                       echo $i;
                       echo '<div class="item carousel-item active">';
                       echo '<div class="row">';
                      }  
                    if($i==6)
                    {
                     echo "</div></div>"; 
                     echo '<div class="item carousel-item">';
                     echo '<div class="row">';
                    }
                    else if($i%6==0)
                    {
                     echo '<div class="item carousel-item">';
                     echo '<div class="row">';
                 
                    } ?>
          <div class="col-sm-3">
              <div class="thumb-wrapper">
                  <div class="img-box">
                      <img src="{{'public/'}}/img/electronics/mobile/m-3.png" class="img-responsive img-fluid" alt="">
                  </div>
                  <div class="thumb-content">
                      <h4>Apple iPad</h4>
                      <span class="item-price"><strike>$400.00</strike> <span>$369.00 </span> <span style="color: red">50% OFF</span></span>
                  </div>              
             </div>
         </div>
         <?php 
 echo '---'.$i;
         if($i==6)
                    {
            

                     echo "</div></div>"; 
                 
                    }
         
         else if($i%6==0){
           

               echo "</div></div>";  
               }         
          
         } ?>
                
            


        </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel2" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
    </div>