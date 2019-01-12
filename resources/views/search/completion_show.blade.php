@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	 
  </div>  
  <div class="card-body" id="completion-certificate">
    <div class="text-center row">
    	

    <div class="col-md-10">
        <iframe width="1000" height="1000" src="http://docs.google.com/gview?url={{env('APP_URL')}}{{ '/uploads/'.$certificatefile->file_path }}&embedded=true">
            
        </iframe> 

    </div>

  </div>
</div>

@endsection
