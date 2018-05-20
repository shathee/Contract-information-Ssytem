@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	   <h5 class="card-title text-right">
	   		<a href="{{ url('contracts') }}" title="Back">
	   			<button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
	   		</a> 
	       <button class="btn btn-info" onClick="window.print()">Print</button>
	    </h5>
  </div>  
  <div class="card-body">
    <div class="text-center row">
    	<div class="col-md-3">
    		<address>
	          <strong>{{ $contract->peoffice->name}}</strong><br>
	          {{ $contract->peoffice->address}}<br>
	          {{ $contract->peoffice->district->name or ''}}-{{ $contract->peoffice->postcode or ''}}<br>
	          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
	        </address>
    	</div>
    	<div class="col-md-6">
            <h3>Bangladesh Water Development Board</h3>
    		<img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
    	</div>
    	<div class="col-md-3">
    		<address>
	          <strong>{{ $contract->peoffice->name}}</strong><br>
	          {{ $contract->peoffice->address}}<br>
	          {{ $contract->peoffice->district->name or ''}}-{{ $contract->peoffice->postcode or ''}}<br>
	          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
	        </address>
    	</div>
    	
    </div>
    <hr>
    <h3 class="text-center">COMPLETION CERTIFICATE</h3>
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
                <tr><th>09</th><th> Final Contract Price as Executed</th><td> {{ $contract->executed_contract_price }}</td>
                </tr>
                <tr><th>10</th><th> Original Contract Period</th><td> {{ $contract->contract_date_of_commencement }}</td>
                </tr>
                <tr><th></th><th> (a) Date of Commencement</th><td> {{ $contract->contract_date_of_commencement }}</td>
                </tr>
                <tr><th></th><th> (b) Date of Completion</th><td> {{ $contract->contract_date_of_completion }}</td>
                </tr>
                <tr><th>11</th><th> Actual Implementation Period</th><td> {{ $contract->actual_date_of_commencement }}</td>
                </tr>
                <tr><th></th><th> (a) Date of Actual Commencement</th><td> {{ $contract->commencement->contract_commencement_date }}</td>
                </tr>
                <tr><th></th><th> (b) Date of Actual Completion</th><td> {{ $contract->contract_date_of_completion }}</td>
                </tr>
                <tr><th>12</th><th> Final Contract Price as Executed</th><td> {{ $contract->executed_contract_price }}</td>
                </tr>
                <tr><th></th><th> Physical Progress </th><td> {{ $contract->physical_progress }} </td></tr>
                <tr><th></th><th> Financial Progress </th><td> {{number_format($contract->fp, 2, '.', ',')}} %</td></tr>
            </tbody>
        </table>
    </div>
   

    

  </div>
</div>

@endsection
