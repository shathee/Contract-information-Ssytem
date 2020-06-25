@extends('layouts.app')

@section('content')
<!--
<a href="{{url('search/cc')}}"><button type="button" class="btn btn-primary btn-lg">Verify Completion Certificate </button></a>
			<a href="{{url('search/pc')}}"><button type="button" class="btn btn-secondary btn-lg">Verify Payment Certificate </button></a>
		-->
	<div class="row">
		<div class="col-md-8 offset-md-2 text-center alert alert-danger" role="alert">
	      <p><b>!!! Dear Users Some of the features of this Application is still under development. !!!</b></p>
	      <p>If you face any difficulties or find any problem accessing the application </p>
	      <p>please contact programmer.cpc@bwdb.gov.bd</p>
	    </div>
	</div>
    <div class="row ">

		<div class="col-md-8 text-center">
				<div id="home_quicklinks" style="text-align: right;">
	                                <a class="quicklink link1" href="{{url('search/cc')}}">
	                                    <span class="ql_caption">
	                                        <span class="outer">
	                                            <span class="inner">
	                                                <h2>Search Completion Certificate</h2>
	                                            </span>
	                                        </span>
	                                    </span>
	                                    <span class="ql_top"></span>
	                                    <span class="ql_bottom"></span>
	                                </a>

	                                <a class="quicklink link2" href="{{url('search/pc')}}">
	                                    <span class="ql_caption">
	                                        <span class="outer">
	                                            <span class="inner">
	                                                <h2>Search Payment Certificate</h2>
	                                            </span>
	                                        </span>
	                                    </span>
	                                    <span class="ql_top"></span>
	                                    <span class="ql_bottom"></span>
	                                </a>



	                                <div class="clear"></div>

                </div>
		</div>

    	<div class="col-md-4">

    		 @if(Auth::check())
    		 <div id="home_quicklinks" style="text-align: left;">
	            <a class="quicklink link3" href="{{url('search/cwh')}}" style="margin-left: 0px;">
	            <span class="ql_caption">
	                <span class="outer">
	                    <span class="inner">
	                        <h2>Check Work in Hand</h2>
	                    </span>
	                </span>
	            </span>
	            <span class="ql_top"></span>
	            <span class="ql_bottom"></span>
	            </a>
	            <div class="clear"></div>
	         </div>

    		@else
				<h1 class="form-heading">login Form</h1>
				<div class="login-form">

				    <div class="panel">
				   <h2>BWDB Users Login</h2>

				   </div>
				    <form id="Login" class=" form-horizontal" method="POST" action="{{ route('login') }}">
				    	{{ csrf_field() }}
				        <div class="form-group">

				        	<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="ID" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

				        </div>

				        <div class="form-group">

				            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

				        </div>
				        <div class="forgot">
				        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                        </a>
						</div>
				        <button type="submit" class="btn btn-primary">Login</button>

				    </form>

				</div>
			@endif
		</div>
    	</div>
    
            
    
@endsection
