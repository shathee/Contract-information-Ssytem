@extends('layouts.app')

@section('content')
<section class="error_section">
      <p class="error_section_subtitle">You are not Authorized to access this Page !</p>
      <h1 class="error_title">
        
        403
      </h1>
      <a href="{{ url('/')}}" class="btn">Back to home</a>
    </section>
@endsection