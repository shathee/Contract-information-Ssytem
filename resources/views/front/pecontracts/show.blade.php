@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Contract {{ $pecontract->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/contracts') }}" title="Back">
            <button class="btn btn-warning btn-xs">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
        </a>
        @if($pecontract->commencement_id == NULL)
        <a href="{{ url('/contracts/' . $pecontract->id . '/edit') }}" title="Edit pecontract"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        <form method="POST" action="{{ url('contracts' . '/' . $pecontract->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete pecontract" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
        @else
        <button class="btn btn-success btn-xs">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
            Commencement Given 
        </button>
        @endif
        

        
    </h5>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>01</th>
                    <th>Procuring Entity Details</th><td></td>
                </tr>
                <tr>
                    <th></th>
                    <th> Peoffice Id </th><td> 
                        @if(!empty($pecontract->peoffice->name)) 
                        {{ $pecontract->peoffice->name }}
                        @else
                            {{'N/A'}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th> Circle Id </th>
                        <td>
                        @if(!empty($pecontract->circle->name)) 
                        {{ $pecontract->circle->name }}
                        @else
                            {{'N/A'}}
                        @endif
                         </td>
                </tr>
                <tr>
                    <th></th>
                    <th> Zone Id </th>
                    <td> @if(!empty($pecontract->circle->name)) 
                        {{ $pecontract->zone->name }}
                        @else
                            {{'N/A'}}
                        @endif </td>
                </tr>
                <tr>
                    <th>02</th>
                    <th> name of the works </th><td> {{ $pecontract->name_of_works }} </td>
                </tr>
                <tr>
                    <th>03</th>
                    <th> EGP ID </th><td> {{ $pecontract->egp_id }} </td>
                </tr>
                <tr>
                    <th></th>
                    <th> Contract No </th><td> {{ $pecontract->contract_no }} </td></tr>
                
                <tr>
                    <th>04</th>
                    <th> Contractors Legal Title </th><td> {{ $pecontract->contractors_legal_title }} </td></tr>
                <tr>
                    <th>05</th>
                    <th> Contractors Contact Details </th><td> {{ $pecontract->contractors_contact_details }} </td>
                </tr>
                <tr>
                    <th>06</th>
                    <th> Contractors Trade License/Enlishment/Registration  Details </th><td> {{ $pecontract->contractors_trade_license_details }} </td>
                </tr>
                <tr>
                    <th>07</th>
                    <th> Reference of Noa with Date </th><td> {{ $pecontract->noa_reference }} & {{ $pecontract->noa_date }} </td></tr>
                <tr>
                    <th>08</th>
                    <th> Contract Date </th><td> {{ $pecontract->contract_date }}</td></tr>
                <tr>
                    <th>09</th><th> Original Contract Price as in NOA </th><td> {{ $pecontract->original_contract_price }}</td>
                </tr>
                <tr><th>10</th><th> Final Contract Price as Executed</th><td> {{ $pecontract->executed_contract_price }}</td>
                </tr>
                <tr><th>11</th><th> Original Contract Period</th><td> </td>
                </tr>
                <tr><th></th><th> (a) Date of Commencement</th><td> {{ $pecontract->contract_date_of_commencement }}</td>
                </tr>
                <tr><th></th><th> (a) Date of Completion</th>
                    <td>
                        @if(!empty($pecontract->contract_date_of_completion))
                            {{ $pecontract->contract_date_of_completion }}
                        @else
                            {{ '' }}
                        @endif
                    </td>
                </tr>
                <tr><th>12</th><th> Actual Implementation Period</th><td> </td>
                </tr>
                <tr><th></th><th> (a) Date of Actual Commencement</th><td> {{ $pecontract->actual_date_of_commencement }}</td>
                </tr>
                <tr><th></th><th> (a) Date of Actual Completion</th><td> {{ $pecontract->actual_contract_date_of_completion }}</td>
                </tr>
                <tr><th>13</th><th> Final Contract Price as Executed</th><td> {{ $pecontract->executed_contract_price }}</td>
                </tr>
                <tr><th>14</th><th> Physical Progress </th><td> {{ $pecontract->physical_progress }} </td></tr>
                <tr><th>15</th><th> Financial Progress </th><td> {{ $pecontract->financial_progress }} </td></tr>

            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
