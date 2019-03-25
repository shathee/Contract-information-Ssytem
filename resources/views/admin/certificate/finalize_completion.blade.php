@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
	   		<a href="{{ url('certificates/completion-certificate') }}" title="Back">
	   			<button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
	   		</a> 
	       <button class="btn btn-info" onClick="window.print()">Print</button>
	    </h5>
  </div>  
  <div class="card-body">
    
    <!-- <h5 class="card-title text-right">
       <a href="{{ url('') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> 
    </h5> -->
    
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('certificates/store-completion-certificate/' . $contract->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" novalidate>
        
        {{ csrf_field() }}
        @if($contract->contract_type=='works')
          @include ('admin.certificate.form_works', ['submitButtonText' => 'Finalize'])
        @elseif($contract->contract_type=='goods')
          @include ('admin.certificate.form_goods', ['submitButtonText' => 'Finalize'])
        @elseif($contract->contract_type=='services')
          @include ('admin.certificate.form_services', ['submitButtonText' => 'Finalize'])
        @endif

    </form>
   

    

  </div>
</div>

@endsection
