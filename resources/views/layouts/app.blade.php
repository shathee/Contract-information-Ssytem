<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    

    <title>CPC</title>
  </head>
  <body>

    <div class="container">
      
      <div id="header" class="row">
        <div class="col-md-3">
          <a href="{{URL::to('/')}}"><img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo"></a>
        </div>
        <div class="col-md-9">
          <h1>Bangladesh Water Development Board</h1>
          <h2>Contract & Procurement Cell</h2>
        </div>
      </div>

      <div id="top-menu" class="row">
              
         
              <ul class="nav nav-tabs">
                
                @if (Auth::check())
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
                      </li>
                      @if (Auth::user()->role=='ADMIN' && Auth::user()->status=='active')
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User Management</a>
                        <div class="dropdown-menu">
                          
                          <a class="dropdown-item" href="{{url('admin/users')}}">Users </a>
                          <a class="dropdown-item" href="{{url('admin/gusers')}}">User Profiles</a>
                          <a class="dropdown-item" href="{{url('admin/peoffices')}}">Pe Offices</a>
                          
                        </div>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contract Management</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Contracts</a>
                          <a class="dropdown-item" href="#">Bills</a>
                          <a class="dropdown-item" href="#"></a>
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Miscelenous</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('admin/divisions')}}">Divisions</a>
                          <a class="dropdown-item" href="{{url('admin/districts')}}">Districts</a>
                          <a class="dropdown-item" href="{{url('admin/zones')}}">Zones</a>
                          <a class="dropdown-item" href="{{url('admin/circles')}}">Circles</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          <strong>{{ Auth::user()->name }}
                          <span class="fa fa-user" ></span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Edit Password</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          
                        </div>
                      </li>
                      @elseif (Auth::user()->role=='PE' && Auth::user()->status=='active')
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contract Management</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Contracts</a>
                          <a class="dropdown-item" href="#">Bills</a>
                          <a class="dropdown-item" href="#"></a>
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          <strong>{{ Auth::user()->name }}
                          <span class="fa fa-user" ></span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ Auth::user()->name }}">Profile</a>
                          <a class="dropdown-item" href="#">Edit Password</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          
                        </div>
                      </li>
                      @endif
                      <li class="nav-item justify-content-end">
                            <a class="nav-link" href="{{ url('/logout') }}">logout</a>
                      </li>

                @else
                      
                      <!--<li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                      </li>-->
                @endif
                
              </ul>  
          
      </div>

      <div id="content-wrapper" class="row">
          
          <div class="col-md-12"> @yield('content')</div>
          
      </div>

      <div id="footer" class="row">
          <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-default">Contact us</button>
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2018 Bangladesh Water Development Board </p>
            </div>
        </div>
       
      </div>



    </div><!--div .container ends here-->
    

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>