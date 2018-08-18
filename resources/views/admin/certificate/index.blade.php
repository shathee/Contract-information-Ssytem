@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
            {{ $o['type'] }}
	   		<a href="{{ url('certificates/'.$o['type']) }}" title="Back">
	   			<button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
	   		</a> 
	       <button class="btn btn-info" onClick="window.print()">Print</button>
	    </h5>
  </div>  
  <div class="card-body">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>#</th>
                    <th>E-GP Id</th>
                    <th>Contract/Package No</th>
                    <th>NOA Date </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contracts as $item)
                <tr>
                    <td>{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->egp_id }}</td>
                    <td>{{ $item->contract_no }}</td>
                    <td>{{ $item->noa_date }}</td>
                    <td>
                        @if($o['type']=='payment-certificate')
                        <a class="btn btn-xs" href="{{ url('certificates/payment-certificate/'.$item->id)}}">Payment Certificate</a>
                        @elseif($o['type']=='completion-certificate')
                       
                            @if($item->certificate_issued == 'no')
                            <a class="btn btn-xs" href="{{ url('certificates/finalize-completion-certificate/'.$item->id)}}">Finalize Info</a>
                            @else
                             <a class="btn btn-xs" href="{{ url('certificates/completion-certificate/'.$item->id)}}">Completion Certificate</a>
                            @endif
                        
                        @else
                        {{'No Type Selected'}}
                        @endif

                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $contracts->appends(['search' => Request::get('search')])->render() !!} </div>
 

    

  </div>
</div>

@endsection
