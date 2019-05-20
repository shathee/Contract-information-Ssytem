@extends('layouts.app')

@section('content')
<!--
<a href="{{url('search/cc')}}"><button type="button" class="btn btn-primary btn-lg">Verify Completion Certificate </button></a>
			<a href="{{url('search/pc')}}"><button type="button" class="btn btn-secondary btn-lg">Verify Payment Certificate </button></a>
		-->
	<div class="row">
		<div class="col-md-10 offset-md-1 text-center">
	      &nbsp;<br>
	      &nbsp;<br>
	    </div>
	</div>
    <div class="row home-page-class">
    	
    	<div class="card col-md-6 offset-md-3 text-center">
    		<a href="{{ url('search')}}">	
			  <div class="card-body bg-dark rounded">
			    <h5 class="card-title h-button">Contract Information System</h5>
			  </div>
		  	</a>
		</div>
		    	
    	</div>
		
    	<div class="row">&nbsp;</div>

    	<div class="row home-page-class">
    	<div class="card col-md-4 text-center">
    		<a href="{{ url('rules')}}">	
			  <div class="card-body bg-dark rounded">
			    <h5 class="card-title h-button">Act, Rules & Guidelines</h5>
			  </div>
		  	</a>
		</div>
    	<div class="card col-md-4 text-center">
    		<a href="{{ url('search')}}">	
			  <div class="card-body bg-dark rounded">
			    <h5 class="card-title h-button">Delegation of Financial Power</h5>			    
			  </div>
		  	</a>
		</div>
    	<div class="card col-md-4 text-center">
    		<a href="{{ url('search')}}">	
			  <div class="card-body bg-dark rounded">
			    <h5 class="card-title h-button align-middle">Circulars/Office Orders</h5>
			  </div>
		  	</a>
		</div>

		
    	
    	</div>


    	<div class="row">
		<div class="col-md-10 offset-md-1 text-center">
	      &nbsp;<br>
	      &nbsp;<br>
	    </div>
	</div>
    
            
    
@endsection
