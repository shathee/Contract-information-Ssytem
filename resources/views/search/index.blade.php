@extends('layouts.app')

@section('content')

    <div class="row">
		<div class="col-md-12 text-center">
			<a href="{{url('search/cc')}}"><button type="button" class="btn btn-primary btn-lg">Verify Completion Certificate </button></a>
			<a href="{{url('search/pc')}}"><button type="button" class="btn btn-secondary btn-lg">Verify Payment Certificate </button></a>
		</div>
    </div>
	<div class="row">
		<div class="col-md-12">
			&nbsp;
		</div>
    </div>
            
    
@endsection
