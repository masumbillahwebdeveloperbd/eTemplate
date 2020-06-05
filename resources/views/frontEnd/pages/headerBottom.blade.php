<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
          <img class="img-responsive" src="{{asset('public/img/logo-2.png')}}" style="height: 30px; width: 100px;">
        </a>

    
        
        <div class="collapse navbar-collapse" id="navbar1">
          <div class="form-group search-container col-md-6">
            <form action="">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
            
            <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>
                      <sup><span class="badge badge-info">1</span></sup>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resister</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

        </div>        
    </div>
</nav>