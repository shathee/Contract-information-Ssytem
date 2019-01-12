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
   	<div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="text-center">{{ __('Bangladesh Water Development Board',[],'bn')}}</h3>
                        <h3 class="text-center">Bangladesh Water Development Board</h3>
                        
                    </div>
                </div>
                <div class="text-center row">
                    
                    <div class="col-md-4 col-sm-4 certificate-top-left">
                        <address>
                          <strong>                            @lang($contract->peoffice->name,[],'bn')</strong><br>

                          {{ __($contract->peoffice->address,[],'bn') }}<br>
                          {{ $contract->peoffice->district->bn_name or ''}}-{{ __($contract->peoffice->postcode,[],'bn')}}<br>
                          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
                        </address>
                       
                    </div>
                    <div class="col-md-4 col-sm-4 certificate-top-middle">
                        <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
                        
                        
                    </div>
                    <div class="col-md-4 col-sm-4 certificate-top-right">
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
    <h5 class="text-center">Certificate-No.:{{ $payment_certificate_no }}</h5>
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
	                    <th> Circle Office Name </th><td> {{ $contract->circle->name }} </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Zone Office Name </th><td> {{ $contract->zone->name }} </td>
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
	        	<thead id="#pc-footer" class="">
	        		<tr>
	        			<th colspan="6">
	        				<h4 class="text-center text-info">Payment Information</h4>
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
	        	@forelse($bills as $bill)
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
	        		<tr class="">
		        		<td colspan="2"><b>Cumulative Up to Last Bill</b></td>
		        		<td><b>{{Format::number($contract->bills->sum('net_payment'),3, ".", ",") }}</b></td>
		        		<td><b>{{Format::number($contract->bills->sum('vat'),3, ".", ",") }}</b></td>
		        		<td><b>{{Format::number($contract->bills->sum('ait'),3, ".", ",") }}</b></td>
		        		<td><b>{{Format::number($contract->bills->sum('gross_payment'),3, ".", ",") }}</b></td>
		        		
		        	
		        	</tr>
		        	
		        	<tr>
	                    <td colspan="6">&nbsp;</td>
	                </tr>
		        	
		        	<tr>
	                    <td class=" border-" colspan="4">&nbsp;</td>
	                    <td colspan="2" class="text-center border-0">
	                        
	                         <p>&nbsp;</p>
	                        <p>&nbsp;</p>
	                        <p>{{ $payment_certificate_issuer->issuer_name }}
	                        </br>{{ $designations[$pe->designation] }}
	                        </br>Date:{{date('Y-m-d')}}</p>
	                    </td>
               		</tr>
               		
		        	<tr>
	                    
	                    <td colspan="6" class="">
	                        <p class="info">
	                        	This is an electronically generated certificate
	                        </p>
	                    </td>
               		</tr>
               		
	        	</tbody>
	        	
	        </table>
	    </div>
   

    

  </div>
</div>

<script type="text/javascript">

function ConfirmBox() {
    alert("Are you sure that you want to generate Payment Certificate?");
    
}
</script>


@endsection

