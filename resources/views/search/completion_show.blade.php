@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	 
  </div>  
  <div class="card-body" id="completion-certificate">
    <div class="text-center row">


    <object data="{{url('/uploads/'.$certificatefile->file_path) }}" type="application/pdf" width="750px" height="750px">
    <embed src="{{url('/uploads/'.$certificatefile->file_path) }}" type="application/pdf">
        <p>This browser does not support PDFs. Please download the PDF to view it: <a href="{{url('/uploads/'.$certificatefile->file_path) }}">Download PDF</a>.</p>
    </embed>
    </object>

  </div>
</div>

@endsection
