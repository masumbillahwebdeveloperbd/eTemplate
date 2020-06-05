<div class="row">

        <div class="column img12 col-md-3 px-0">
          <a href="">
            <img src="{{asset('public/')}}/img/slider/s-1.png" style="width: 100%">
            <!-- <div class="carousel-caption"><h3>Women's All Collection</h3></div> -->
          </a>
          <a href="">
            <img src="{{'public/'}}/img/slider/s-2.png" style="width: 100%">
          </a>
        </div>

        <div class="column img13 col-md-6 px-2">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade px-0" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <?php $i=1;?>
            <div class="carousel-inner">
              @foreach($featutedImages as $featutedImage)
              <?php if($i==1){
                ?>
              <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('public/productImages/'.$featutedImage->featured_image)}}" alt="First slide"> 
              </div>
            <?php }if($i==2){?>
                <div class="carousel-item ">
            <img class="d-block w-100" src="{{asset('public/productImages/'.$featutedImage->featured_image)}}" alt="Second slide"> 
              </div>
            <?php }if($i==3){?>
                   <div class="carousel-item ">
            <img class="d-block w-100" src="{{asset('public/productImages/'.$featutedImage->featured_image)}}" alt="Third slide"> 
              </div>
            <?php }
            $i++;
            ?>
              @endforeach
             
            
            </div>
          </div>
        </div>

        <div class="column img12 col-md-3 px-0">
          <a href="">
           <img src="{{'public/'}}/img/slider/s-3.png" style="width: 100%">
          </a>
          <a href="">
            <img src="{{'public/'}}/img/slider/s-4.png" style="width: 100%">
          </a>
        </div>

      </div>