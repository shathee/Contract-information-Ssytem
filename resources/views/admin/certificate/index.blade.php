@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
	       <button class="btn btn-info" onClick="window.print()">Print</button>
	    </h5>
  </div>  
  <div class="card-body">
    
    
   <div class="text-center">
        <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
    </div>
    <div class="text-center">
        <address>
          <strong>{{ $contract->peoffice->name}}</strong><br>
          {{ $contract->peoffice->address}}<br>
          {{ $contract->peoffice->district->name}}-{{ $contract->peoffice->postcode}}<br>
          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
        </address>
    </div>
   <div class="table-responsive">
        <table class="table table-bordered">
	            <tbody>
	                <tr>
	                    <th>01</th>
	                    <th>Procuring Entity Details</th><td></td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Peoffice Id </th><td> {{ $contract->peoffice->name }} </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Circle Id </th><td> {{ $contract->circle->name }} </td>
	                </tr>
	                <tr>
	                    <th></th>
	                    <th> Zone Id </th><td> {{ $contract->zone->name }} </td>
	                </tr>
	                <tr>
	                    <th>02</th>
	                    <th> name of the works </th><td> {{ $contract->name_of_works }} </td>
	                </tr>
	                <tr>
	                    <th>03</th>
	                    <th> EGP ID </th><td> {{ $contract->egp_id }} </td>
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
	                    <th> Reference of Noa with Date </th><td> {{ $contract->    noa_reference }} & {{ $contract->noa_date }} </td></tr>
	                <tr>
	                    <th></th>
	                    <th> Contract Date </th><td> {{ $contract->contract_date }}</td></tr>
	                <tr>
	                    <th>08</th><th> Original Contract Price as in NOA </th><td> {{ $contract->original_contract_price }}</td>
	                </tr>
	                                
	            </tbody>
	        </table>
	        
	        <table class="table table-bordered">
	        	<thead class="thead-dark">
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
		        		<td>{{ $bill->net_payment }}</td>
		        		<td>{{ $bill->vat }}</td>
		        		<td>{{ $bill->ait }}</td>
		        		<td>{{ $bill->gross_payment }}</td>
		        	
		        	</tr>
	        	@empty
	        		<tr>
		        		<td colspan="6">No Data Found</td>
		        	
		        	</tr>
	        	@endforelse
	        		<tr class="bg-secondary">
		        		<td colspan="2">Cumilitive Up to Last Bill</td>
		        		<td>{{ $contract->bills->sum('net_payment') }}</td>
		        		<td>{{ $contract->bills->sum('vat') }}</td>
		        		<td>{{ $contract->bills->sum('ait') }}</td>
		        		<td>{{ $contract->bills->sum('gross_payment') }}</td>
		        	
		        	</tr>
		        	
		        	<tr>
	                    <td>&nbsp;</td>
	                </tr>
		        	<tr>
	                    <td></td>
	                </tr>
		        	<tr>
	                    <td></td>
	                    <td colspan="5" class="text-right">
	                        <p>&nbsp;</p>
	                        <p>{{ $pe->name }}</p>
	                        <p>{{ $pe->designation }}</p>
	                        <p>Date:{{date('Y-m-d')}}</p>
	                    </td>
               		</tr>
	        	</tbody>
	        	
	        </table>
	    </div>
   

    

  </div>
</div>

@endsection
