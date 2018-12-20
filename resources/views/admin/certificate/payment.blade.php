@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
	   		<a href="{{ url('certificates/payment-certificate/') }}" title="Back">
	   			<button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
	   		</a> 
	       <!--<button class="btn btn-info" onClick="window.print()">Print</button>-->
	      
	       

	    </h5>
  </div>  
  <div class="card-body" id="payment-certificate">
   	<div class="text-center row">
    	<div class="col-md-3 col-sm-3 certificate-top-left">
    		<address>
	          <strong>{{ $contract->peoffice->name}}</strong><br>
	          {{ $contract->peoffice->address}}<br>
	          {{ $contract->peoffice->district->name or ''}}-{{ $contract->peoffice->postcode or ''}}<br>
	          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
	        </address>
    	</div>
    	<div class="col-md-6 col-sm-6 certificate-top-middle">
            <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
            <h3>Bangladesh Water Development Board</h3>
    		
    	</div>
    	<div class="col-md-3 col-sm-3 certificate-top-right">
    		<address>
	          <strong>{{ $contract->peoffice->name}}</strong><br>
	          {{ $contract->peoffice->address}}<br>
	          {{ $contract->peoffice->district->name or ''}}-{{ $contract->peoffice->postcode or ''}}<br>
	          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
	        </address>
    	</div>
    	
    </div>
    <hr>
    <h3 class="text-center">PAYMENT CERTIFICATE</h3>
   <div class="table-responsive"> 
        <table class="table table-bordered " id="payment-certificate-table">
	            <tbody>
	                <tr>
	                    <th>01</th>
	                    <th>Procuring Entity Details</th><td></td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> PE Office Name </th><td> {{ $contract->peoffice->name }} </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Circle Office Name </th><td> @if(!empty($contract->circle->name)) 
                        {{ $contract->circle->name }}
                        @else
                            {{'N/A'}}
                        @endif </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Zone Office Name </th><td> 
	                    @if(!empty($contract->circle->name)) 
                        {{ $contract->zone->name }}
                        @else
                            {{'N/A'}}
                        @endif</td>
	                </tr>
	                <tr>
	                    <th>02</th>
	                    <th> Name of the Works </th><td> {{ $contract->name_of_works }} </td>
	                </tr>
	                <tr>
	                    <th>03</th>
	                    <th> e-GP ID </th><td> {{ $contract->egp_id }} </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Contract No </th><td> {{ $contract->contract_no }} </td></tr>
	                
	                <tr>
	                    <th>04</th>
	                    <th> Contractors Legal Title </th><td> {{ $contract->contractors_legal_title }} </td></tr>
	                <tr>
	                    <th>05</th>
	                    <th> Contractors Contact Details </th><td> {{ $contract->contractors_contact_details }} </td>
	                </tr>
	                <tr>
	                    <th>06</th>
	                    <th> Contractors Trade License/Enlishment/Registration  Details </th><td> {{ $contract->contractors_trade_license_details }} </td>
	                </tr>
	                <tr>
	                    <th>07</th>
	                    <th> Reference of NOA with Date </th><td> {{ $contract->    noa_reference }} & {{ $contract->noa_date }} </td></tr>
	                <tr>
	                    <th></th>
	                    <th> Contract Date </th><td> {{ $contract->contract_date }}</td></tr>
	                <tr>
	                    <th>08</th><th> Original Contract Price as in NOA </th>
	                    <td>{{Format::number($contract->original_contract_price,3, ".", ",") }}</td>
	                </tr>
	                                
	            </tbody>
	        </table>
	        
	        <table class="table table-bordered payment-certificate-table">
	        	<thead id="#pc-footer" class="thead-dark">
	        		<tr>
	        			<th colspan="6">
	        				<h4 class="">Payment Information</h4>
	        			</th>
	        		</tr>
	        		<tr>
		        		<th>
		        			Bill No
		        		</th>
		        		<th>Date</th>
		        		<th>Net Payment</th>
		        		<th>VAT</th>
		        		<th>AIT</th>
		        		<th>Gross Payment</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	@forelse($contract->bills as $bill)
	        		<tr>
		        		<td>{{ $bill->bill_no }}</td>
		        		<td>{{ $bill->bill_date }}</td>
		        		<td>
		        			{{Format::number($bill->net_payment,3, ".", ",") }}
		        		</td>
		        		<td>{{Format::number($bill->vat,3, ".", ",") }}</td>
		        		<td>{{Format::number($bill->ait,3, ".", ",") }}</td>
		        		<td>{{Format::number($bill->gross_payment,3, ".", ",") }}</td>
		        	
		        	</tr>

		        	
	        	@empty
	        		<tr>
		        		<td colspan="6">No Data Found</td>
		        	
		        	</tr>
	        	@endforelse
	        		<tr class="bg-secondary">
		        		<td colspan="2">Cumulative Up to Last Bill</td>
		        		<td>{{Format::number($contract->bills->sum('net_payment'),3, ".", ",") }}</td>
		        		<td>{{Format::number($contract->bills->sum('vat'),3, ".", ",") }}</td>
		        		<td>{{Format::number($contract->bills->sum('ait'),3, ".", ",") }}</td>
		        		<td>{{Format::number($contract->bills->sum('gross_payment'),3, ".", ",") }}</td>
		        		
		        	
		        	</tr>
		        	
		        	<tr>
	                    <td>&nbsp;</td>
	                </tr>
	        		<tr>
	                    <td></td>
	                    <td colspan="5" class="text-right">
	                        <p>&nbsp;</p>
	                        <p>&nbsp;</p>
	                        <p>{{ $pe->name }}
	                        </br>{{ $designations[$pe->designation] }}
	                        </br>Date:{{date('Y-m-d')}}</p>
	                    </td>
               		</tr>
               		<tr>
	                    <td></td>
	                    <td colspan="5" class="text-right">
	                        <form method="POST" action="{{ url('certificates/store-payment-certificate/' . $contract->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
				                {{ csrf_field() }}
						        
						        <input class="form-control" name="contract_id" type="hidden" id="contract_id" value="{{ $contract->id }}" required >
						        @foreach($contract->bills as $bill)
					        		
						        	<input class="form-control" name="bill_id[]" type="hidden" id="bill_id" value="{{ $bill->id}}" required >
						        	
					        	@endforeach
					        	<input class="form-control" name="issuer_name" type="hidden" id="bill_id" value="{{ $pe->name}}" required >
					        	<input onClick="confSubmit(this.form);" type="button" value="{{ $submitButtonText or 'Generate' }}">
						    </form>
	                    </td>
               		</tr>
               		
	        	</tbody>
	        	
	        </table>
	    </div>
   

    

  </div>
</div>

<script type="text/javascript">
function confSubmit(form) {
if (confirm("Are you sure you want to submit the form?")) {
form.submit();
}

else {
alert("You decided to not submit the form!");
return false;
}
}

</script>


@endsection

