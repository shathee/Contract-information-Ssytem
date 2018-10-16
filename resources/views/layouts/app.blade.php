<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    


    <link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.8.0/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>CPC</title>
  </head>
  <body>

    <div class="container">
      
      <div id="header" class="row d-print-none">
        <div class="col-md-3">
          <a href="{{URL::to('/')}}"><img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo"></a>
        </div>
        <div class="col-md-9">
          <h1>Bangladesh Water Development Board</h1>
          <h2>Contract & Procurement Cell</h2>
        </div>
      </div>

      <div id="top-menu" class="row d-print-none">
              
         
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
                          <a class="dropdown-item" href="{{url('admin/contracts')}}">Contracts</a>
                          <a class="dropdown-item" href="{{url('admin/bills')}}">Bills</a>
                        </div>
                      </li>
                      <!--
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Certificates</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('payment-certificate/')}}">Payment Certificate</a>
                          <a class="dropdown-item" href="{{ url('payment-certificate/')}}">Completion Certificate</a>
                        </div>
                      </li>
                      -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Miscelenous</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('admin/divisions')}}">Divisions</a>
                          <a class="dropdown-item" href="{{url('admin/districts')}}">Districts</a>
                          <a class="dropdown-item" href="{{url('admin/zones')}}">Zones</a>
                          <a class="dropdown-item" href="{{url('admin/circles')}}">Circles</a>
                          <a class="dropdown-item" href="{{url('admin/projects')}}">Projects</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          <strong>{{ Auth::user()->name }}
                          <span class="fa fa-user" ></span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('user/profile')}}">Profile</a>
                          <a class="dropdown-item" href="">Edit Password</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          
                        </div>
                      </li>
                      @elseif (Auth::user()->role=='PE' && Auth::user()->status=='active')
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contract Management</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('contracts')}}">Contracts</a>
                          <a class="dropdown-item" href="{{url('commencements')}}">Commencement/Work Order</a>
                          <a class="dropdown-item" href="{{url('bills')}}">Bills</a>
                          
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Certificate Management</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('certificates/payment-certificate')}}">Payment Certificate</a>
                          <a class="dropdown-item" href="{{ url('certificates/completion-certificate')}}">Completion Certificate</a>
                          
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

      <div id="footer" class="row  col-md-12 d-print-none">
          <div class="container">
            <div class="row">
                
                
                <div class="col-sm-4 col-md-4">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="{{url('pubs/staff')}}">Officials of Contract & Procurement Cell</a></li>
                        <li><a href="{{url('pubs/contact')}}">Contact us</a></li>
                       
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h5>APPS</h5>
                    <ul>
                        <li><a href="#">Verify Certificate</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h5>For BWDB Officials Only</h5>
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Sign UP</a></li>
                    </ul>
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
    
    <script type="text/javascript">
    function netBill(){
        var p = (parseFloat($('#gross_payment').val()) || 0);
       
        var v = (parseFloat($('#vat').val()) || 0);
        
        var t = (parseFloat($('#ait').val()) || 0);
        
        total = p - v - t;
        //alert(v,t,t);
        $('#net_payment').val(total);
    }

</script>
    
  </body>
</html>