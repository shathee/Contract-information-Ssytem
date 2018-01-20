@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Create New commencement
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/commencements') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    </h5>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('/commencements') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}

        @include ('front.commencements.form')

    </form>

   

    

  </div>
</div>
            
   
@endsection
