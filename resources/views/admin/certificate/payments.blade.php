@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
	   		<a href="{{ url('certificates/payment-certificate') }}" title="Back">
	   			<button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
	   		</a> 
	       <!-- <button class="btn btn-info" onClick="window.print()">Print</button> -->
	    </h5>
  </div>  
  <div class="card-body">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Certificate-No</th>
                    <th>Contract/Package No</th>
                    <th>Issue Date</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($contract as $item)
                    <tr>
                    <td>{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->certificate_no }}</td>
                    <td>{{ $item->contract->contract_no }}</td>
                    <td>{{ $item->contract->created_at }}</td>
                    <td>
                        <a href="{{ url('certificates/payment-certificate/view/'.$item->id)}}">
                        <button class="btn btn-xs btn-info">View</button>
                        </a>
                        
                    </td>
                    </tr>
                @empty
                    <p class="info">No Payment Certificate Issued for this contract</p>
                @endforelse
           
            </tbody>
        </table>
       
 

    

  </div>
</div>

@endsection
