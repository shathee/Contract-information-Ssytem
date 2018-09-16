@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-12">
			
			  <form class="form-inline"  method="POST" action="{{ url('search/pc') }}">
				{{ csrf_field() }}
				<input class="form-control mr-sm-2 col-md-6 offset-md-2" name="search" type="search" placeholder="Write the certificate No" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
			
			
			
		</div>
    </div>
    
@endsection
