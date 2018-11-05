@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
	 
  </div>  
  <div class="card-body" id="completion-certificate">
    <div class="text-center row">
    	<!-- <div class="col-md-3 col-sm-3 certificate-top-left">
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
    	
    </div> -->
    <!-- <hr>
    <div class="text-center row">
        <div class="col-md-4 col-sm-4">
            Office Memo No. : {{ $contract->office_memo}}
        </div>
        <div class="col-md-4 col-sm-4">
           <span style="color: #c40000;">
            Certificate No. : {{ $contract->certificate_no }}    
           </span>
            
        </div>
        <div class="col-md-4 col-sm-4">
           Date:{{ $contract->memo_date}}
        </div>
        
    </div> -->
    <!--<h3 class="text-center">COMPLETION CERTIFICATE</h3>
   <div class="table-responsive">
        <table id="completion-certificate-table" class="table table-bordered">
            <tbody>
                <tr>
                    <th width="3%">01</th>
                    <th width="30%">Procuring Entity Details</th><td></td>
                </tr>
                <tr>
                    <th></th>
                    <th> Division/Name of Office </th><td> {{ $contract->peoffice->name }} </td>
                </tr>
                <tr>
                    <th></th>
                    <th> Circle </th><td> {{ $contract->circle->name }} </td>
                </tr>
                <tr>
                    <th></th>
                    <th> Zone</th><td> {{ $contract->zone->name }} </td>
                </tr>
                <tr>
                    <th>02</th>
                    <th> Name of the works </th><td> {{ $contract->name_of_works }} </td>
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
                    <th>08</th><th> Original Contract Price as in NOA </th><td> {{Format::number($contract->original_contract_price,3, ".", ",") }}</td>
                </tr>
                <tr>
                    <th>09</th><th> Final Contract Price as Executed</th><td> {{Format::number($contract->executed_contract_price,3, ".", ",") }}</td>
                </tr>
                <tr>
                    <th>10</th><th> Original Contract Period</th><td> {{ $contract->contract_date_of_commencement }}</td>
                </tr>
                <tr>
                    <th></th><th> (a) Date of Commencement</th><td> {{ $contract->contract_date_of_commencement }}</td>
                </tr>
                <tr>
                    <th></th><th> (b) Date of Completion</th><td> {{ $contract->contract_date_of_completion }}</td>
                </tr>
                <tr>
                    <th>11</th><th> Actual Implementation Period</th><td> {{ $contract->actual_date_of_commencement }}</td>
                </tr>
                <tr>
                    <th></th><th> (a) Date of Actual Commencement</th><td> {{ $contract->commencement->contract_commencement_date or null }}</td>
                </tr>
                <tr>
                    <th></th><th> (b) Date of Actual Completion</th><td> {{ $contract->contract_date_of_completion }}</td>
                </tr>
                <tr>
                    <th>12</th><th>Days/Months Contract Period Extended</th><td> {{ $contract->days_contract_period_extended }}</td>
                </tr>
                <tr>
                    <th>13</th><th>Amount of Bonus for Early Completion</th><td> {{ $contract->amount_bonus_early_completion }}</td>
                </tr>
                <tr>
                    <th>14</th><th>Amount of LD for Delayed Completion</th><td> {{ $contract->amount_ld_delayed_completion }}</td>
                </tr>
                <tr>
                    <th>15</th><th> Final Contract Price as Executed</th><td> {{ $contract->executed_contract_price }}</td>
                </tr>
                <tr>
                    <th>16</th><th> Physical Progress in Percent (in terms of value) </th><td> {{ $contract->physical_progress }} </td>
                </tr>
                <tr>
                    <th>17</th><th>Financial Progress in Amount (in terms of payment)</th><td> {{number_format($contract->fp, 2, '.', ',')}} %</td>
                </tr>
                <tr>
                    <th>18</th><th> Special Note (if any)</th><td> </td>
                </tr>
            </tbody>
        </table>
    </div> -->

    <!-- <div class="row">
        <div class="col-md-12 col-sm-12">
            <p>
                Certified that the Works under the Contract has been executed and completed in all respects in strict compliance with the provisions of the Contract including all plans, designs, drawings, specifications and all modifications thereof as per direction and satisfaction of the Project Manager/Engineer-in Charge/Other (specify). All defects in workmanship and materials reported during construction have been duly corrected.
            </p>
        </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-md-8 col-sm-8">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   
        </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-md-8 col-sm-8">
            &nbsp; 
        </div>
        <div class="col-md-4 col-sm-4">
            <p>
                      </p> 
        </div>
    </div> -->

    <div class="col-md-10">
        <iframe width="1000" height="1000" src="http://docs.google.com/gview?url={{env('APP_URL')}}{{ '/uploads/'.$certificatefile->file_path }}&embedded=true"></iframe> 

    </div>

  </div>
</div>

@endsection
