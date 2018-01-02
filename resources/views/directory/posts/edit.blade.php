@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header">
    Edit post #{{ $post->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
       <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> 
    </h5>
    
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('/admin/posts/' . $post->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include ('directory.posts.form', ['submitButtonText' => 'Update'])

    </form>
   

    

  </div>
</div>

   
     
@endsection
