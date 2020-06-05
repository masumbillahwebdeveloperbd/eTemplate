<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto text-uppercase">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      @foreach($publishedCategories as $publishedCategorie)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$publishedCategorie->name}}
        </a>
        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">

          
          <div class="container">            
            <div class="row">
              <?php $i=1;?>
              @if ($publishedCategorie->children)
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                   
                   @foreach ($publishedCategorie->children as $child)
               
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('/category-product/'.$child->category_id)}}">
                   {{ $child->name }}
                    </a>
                </li> 
                    <?php 
                   
                    if($i%3==0){
                      echo '</ul></div>';
                  echo '<div class="col-md-4"><ul class="nav">';
                    }

                   ?>
                <?php

                   /* if($i%3==0){
                     
                     echo  '</div></ul>';*/
                
                
                    
                  $i++;


                ?>
                   @endforeach
                
             

                
                <li class="nav-item">

              </ul>
              @endif
              <?php if($i<3){
                echo ' </div>';
              }
                ?>
             
              
              <!-- /.col-md-4  -->
        
              <!-- /.col-md-4  -->
        
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      @endforeach
      

    </ul>
  </div>


</nav>