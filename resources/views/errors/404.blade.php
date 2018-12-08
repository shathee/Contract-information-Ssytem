@extends('layouts.app')

@section('content')
<section class="error_section">
      <p class="error_section_subtitle">Opps Page is not available !!</p>
      <h1 class="error_title">
        
        404
      </h1>
      <a href="{{ url('/')}}" class="btn">Back to home</a>
    </section>
@endsection