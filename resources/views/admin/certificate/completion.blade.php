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

  <div class="card-body" id="completion-certificate">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="text-center">বাংলাদেশ পানি উন্নয়ন বোর্ড</h3>
                        <h3 class="text-center">Bangladesh Water Development Board</h3>
                        
                    </div>
                </div>
                <div class="text-center row">
                    
                    <div class="col-md-4 col-sm-4 certificate-top-left">
                        <address>
                            <strong>{{ $contract->peoffice->name_bn}}</strong><br>
                            {{ $contract->peoffice->address_bn}}<br>
                          {{ $contract->peoffice->district->bn_name or ''}}-{{ $contract->peoffice->postcode_bn or ''}}<br>
                          ফোন: {{ $contract->peoffice->phone_bn}}
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
                          Phone: {{ $contract->peoffice->phone}}
                        </address>
                    </div>
                  
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        Office Memo No. : {{ $contract->office_memo}}
                    </div>
                    
                    <div class="col-md-6 col-sm-6 text-right">
                       Date:&nbsp;{{ app_date_format($contract->memo_date,'d-m-Y') }}
                    </div>
                    
                </div>

                <div class="text-center row">
                    <div class="col-md-3 col-sm-3">
                        &nbsp;
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <span style="color: #c40000;">
                        Certificate No. : {{ $contract->certificate_no }}    
                       </span>
                       
                    </div>
                    <div class="col-md-3 col-sm-3">
                      &nbsp;
                    </div>
                    
                </div>
                @if($contract->contract_type=='works')
                        
                <h3 class="text-center">COMPLETION CERTIFICATE</h3>
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
                                <th>  Circle/Directorate </th><td> @if(!empty($contract->circle->name)) {{ $contract->circle->name }}
                                @else
                                {{'N/A'}}
                                @endif  </td>
                            </tr>
                            <tr>
                                <th></th>
                                <th> Zone </th><td> @if(!empty($contract->zone->name)) {{ $contract->zone->name }}
                                @else
                                {{'N/A'}}
                                @endif  </td>
                            </tr>
                            <tr>
                                <th>02</th>
                                <th> Name of the works </th><td> {{ $contract->name_of_works }} </td>
                            </tr>
                            <tr>
                                <th>03</th>
                                <th> e-GP Tender ID </th><td> {{ $contract->egp_id or 'N/A'}} </td>
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
                                <th> Reference of Noa with Date </th><td> {{ $contract->    noa_reference }} & {{ app_date_format($contract->noa_date,'d-m-Y') }} </td></tr>
                            <tr>
                                <th></th>
                                <th> Contract Date </th><td> {{ app_date_format($contract->contract_date,'d-m-Y') }}</td></tr>
                            <tr>
                                <th>08</th><th> Original Contract Price as in NOA </th><td> {{Format::number($contract->original_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>09</th><th> Final Contract Price as Executed</th><td> {{Format::number($contract->executed_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>10</th><th> Original Contract Period</th><td> </td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Commencement</th><td> {{ app_date_format($contract->contract_date_of_commencement,'d-m-Y') }} </td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Completion</th><td> {{ app_date_format($contract->contract_date_of_completion,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>11</th><th> Actual Implementation Period</th><td></td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Actual Commencement</th><td> {{ app_date_format($contract->actual_date_of_commencement,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Actual Completion</th><td> {{ app_date_format($contract->actual_contract_date_of_completion,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>12</th><th>Days/Months Contract Period Extended</th><td> {{ $contract->days_contract_period_extended }}</td>
                            </tr>
                            <tr>
                                <th>13</th><th>Amount of Bonus for Early Completion</th><td> @if($contract->amount_bonus_early_completion == 0)
                                    {{ 'N/A' }}
                                @else   
                                {{ $contract->amount_bonus_early_completion }}
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <th>14</th><th>Amount of LD for Delayed Completion</th><td> @if($contract->amount_ld_delayed_completion == 0)
                                {{ 'N/A' }}
                                @else
                                {{ $contract->amount_ld_delayed_completion }}
                                @endif</td>
                            </tr>
                            <!-- <tr>
                                <th>15</th><th> Final Contract Price as Executed</th><td> {{ $contract->executed_contract_price }}</td>
                            </tr> -->
                            <tr>
                                <th>15</th><th> Physical Progress in Percent (in terms of value) </th><td> {{ $contract->physical_progress }} %</td>
                            </tr>
                            <tr>
                                <th>16</th><th>Financial Progress in Amount (in terms of payment)</th><td> {{ $contract->financial_progress }}</td>
                            </tr>
                            <tr>
                                <th>17</th><th> Special Note (if any)</th><td>{{ $contract->special_note }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p>
                            Certified that the Works under the Contract has been executed and completed in all respects in strict compliance with the provisions of the Contract including all plans, designs, drawings, specifications and all modifications thereof as per direction and satisfaction of the Project Manager/Engineer-in Charge. All defects in workmanship and materials reported during construction have been duly corrected.
                        </p>
                    </div>
                </div>
                
                            
                      
                @elseif($contract->contract_type=='goods')
                        
                <h3 class="text-center">ACCEPTANCE CERTIFICATE</h3>
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
                                <th>  Circle/Directorate </th>
                                <td> @if(!empty($contract->circle->name)) {{ $contract->circle->name }}
                                @else
                                {{'N/A'}}
                                @endif </td>
                            </tr>
                            <tr>
                                <th></th>
                                <th> Zone </th>
                                    <td> 
                                    @if(!empty($contract->zone->name)) {{ $contract->zone->name }} 
                                    @else
                                    {{'N/A'}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>02</th>
                                <th> Name of Supply </th><td> {{ $contract->name_of_works }} </td>
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
                                <th> Supplier’s Legal Title </th><td> {{ $contract->contractors_legal_title }} </td></tr>
                            <tr>
                                <th>05</th>
                                <th> Supplier’s Contact Details </th><td> {{ $contract->contractors_contact_details }} </td>
                            </tr>
                            <tr>
                                <th>06</th>
                                <th> Supplier’s Trade License/Enlishment/Registration  Details </th><td> {{ $contract->contractors_trade_license_details }} </td>
                            </tr>
                            <tr>
                                <th>07</th>
                                <th> Reference to Noa with Date </th><td> {{ $contract->noa_reference }} & {{ app_date_format($contract->noa_date,'d-m-Y') }} </td></tr>
                            <tr>
                                <th></th>
                                <th> Contract Date </th><td> {{ app_date_format($contract->contract_date,'d-m-Y') }}</td></tr>
                            <tr>
                                <th>08</th><th> Original Contract Price as in NOA </th><td> {{Format::number($contract->original_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>09</th><th> Final Contract Price as Delivered</th><td> {{Format::number($contract->executed_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>10</th><th> Original Contract Period</th><td> </td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Commencement</th><td> {{ app_date_format($contract->contract_date_of_commencement,'d-m-Y') }} </td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Completion</th><td> {{ app_date_format($contract->contract_date_of_completion,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>11</th><th> Actual Delivery Period</th><td> </td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Actual Commencement</th><td> {{ app_date_format($contract->actual_date_of_commencement,'d-m-Y') }} </td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Actual Completion</th><td> {{ app_date_format($contract->actual_contract_date_of_completion ,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>12</th><th>Days/Months Delivery Period Extended</th><td> {{ $contract->days_contract_period_extended }}</td>
                            </tr>
                          
                            <tr>
                                <th>13</th><th>Amount of LD for Delayed Delivery</th><td> {{ $contract->amount_ld_delayed_completion }}</td>
                            </tr>
                            
                            <tr>
                                <th>14</th><th> Special Note (if any)</th><td> {{ $contract->special_note }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p>
                            Certified that the Goods and related services under the Contract has been delivered and completed in all respects in strict compliance with the provisions of the Contract including all plans, designs, drawings, specifications and all modifications thereof as per direction and satisfaction of the Procuring Entity/Engineer-in Charge/Other (specify). All defects in the Goods reported during inspection and tests have been duly rectified or replaced.
                        </p>
                    </div>
                </div>
                            
                @elseif($contract->contract_type=='services')


                <h3 class="text-center">COMPLETION CERTIFICATE</h3>
                <div class="table-responsive">
                    <table id="completion-certificate-table" class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="3%">01</th>
                                <th width="30%">Client Details</th><td></td>
                            </tr>
                            <tr>
                                <th></th>
                                <th> Division/Name of Office </th><td> {{ $contract->peoffice->name }} </td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>  Circle/Directorate </th><td> @if(!empty($pecontract->circle->name)) {{ $contract->circle->name }}
                                @else
                                {{'N/A'}}
                                @endif  </td>
                            </tr>
                            <tr>
                                <th></th>
                                <th> Zone </th><td> @if(!empty($pecontract->zone->name)) {{ $contract->zone->name }}
                                @else
                                {{'N/A'}}
                                @endif  </td>
                            </tr>
                            <tr>
                                <th>02</th>
                                <th> Name of Assignment </th><td> {{ $contract->name_of_works }} </td>
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
                                <th> Consultant’s Contact Details </th><td> {{ $contract->contractors_contact_details }} </td>
                            </tr>
                            <tr>
                                <th>06</th>
                                <th> Consultant’s Registration  Details </th><td> {{ $contract->contractors_trade_license_details }} </td>
                            </tr>
                            <tr>
                                <th>07</th>
                                <th> Reference to LOI to sign Contract with Date </th><td> {{ $contract->    noa_reference }} </br>{{ app_date_format($contract->noa_date,'d-m-Y') }} </td></tr>
                            
                            <tr>
                                <th></th>
                                <th> Contract Date </th><td> {{ app_date_format($contract->contract_date,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>08</th><th> Original Contract Price</th><td> {{Format::number($contract->original_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>09</th><th> Final Contract Price as Performed</th><td> {{Format::number($contract->executed_contract_price,3, ".", ",") }}</td>
                            </tr>
                            <tr>
                                <th>10</th><th> Original Contract Period</th><td> &nbsp;</td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Commencement</th><td>  {{ app_date_format($contract->contract_date_of_commencement,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Completion</th><td> {{ app_date_format($contract->contract_date_of_completion,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>11</th><th> Actual Implementation Period</th><td> &nbsp;</td>
                            </tr>
                            <tr>
                                <th></th><th> (a) Date of Actual Commencement</th><td> {{ app_date_format($contract->contract_date_of_commencement,'d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th></th><th> (b) Date of Actual Completion</th><td> {{ app_date_format($contract->contract_date_of_commencement,'d-m-Y') }} </td>
                            </tr>
                            <tr>
                                <th>12</th><th>Days/Months Contract Period Extended</th><td> {{ $contract->days_contract_period_extended }}</td>
                            </tr>
                            
                            <tr>
                                <th>13</th><th> Special Note (if any)</th><td>{{ $contract->special_note }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p>
                           Certified that the Services under the Contract has been performed and completed in all respects in strict compliance with the <strong>“Description of Services”</strong> including all modifications thereof as per satisfaction of the Client.
                        </p>
                    </div>
                </div>



                @endif 

                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/>
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                               
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        &nbsp; 
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p>&nbsp;</p>
                        <p>
                            {{ $contract->issuers_name }}
                            <br>{{ $contract->issuers_designation }}
                           <br> Date:&nbsp;{{ app_date_format($contract->memo_date,'dS F, Y') }}
                        </p> 
                    </div>
                </div>

      <div class="info">
          This is an electronically generated certificate
      </div>
            </div>
  
</div>



@if($detailwork!=null)
<div class="page-break"></div>
<div class="card" id="completion-certificate-detail">
    @if($contract->contract_type=='works')
        {{-- <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="text-center">{{ __('Bangladesh Water Development Board',[],'bn')}}</h3>
                <h3 class="text-center">Bangladesh Water Development Board</h3>
                
            </div>
        </div>
        <div class="text-center row">
            
            <div class="col-md-4 col-sm-4 certificate-top-left">
                <address>
                  <strong>@lang($contract->peoffice->name,[],'bn')</strong><br>

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
        <hr>--}}

        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
{{--        <div class="col-md-4 col-sm-4">
           <span style="color: #c40000;">
            Certificate No. : {{ $contract->certificate_no }}    
           </span>
           
        </div>--}}
        @if(!empty($contract->detailwork->detail_work_form_component_1))
            <table class="table table-bordered" id="completion-certificate-detail-table">
        
            <tr>
                <td colspan="3">
                    <h4 class="text-center">Details of Works Completed</h4>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h5 class="text-center">Contractor: {{ $contract->contractors_legal_title}}</h5>
                </td>
            </tr>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Major Components of Works
                </th>
                <th>
                    Total Value (in Contract Currency)
                </th>
            </tr>
            <tr>
                <td>
                    1.
                </td>
                <td>
                    {{ $detailwork->detail_work_form_component_1}}
                </td>
                <td>
                    {{ $detailwork->detail_work_form_component_1_value}}
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    {{ $detailwork->detail_work_form_component_2}}
                </td>
                <td>{{ $detailwork->detail_work_form_component_2_value}}
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>{{ $detailwork->detail_work_form_component_3}}
                </td>
                <td>{{ $detailwork->detail_work_form_component_3_value}}
                </td>
            </tr>
        </table>
        @endif
        &nbsp;
        @if(!empty($detailwork->lead_partner_name))

            <table class="table table-bordered" id="completion-certificate-detail-table1">
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">Joint Venture</h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">Leading Partner:
                            {{ $detailwork->lead_partner_name}}
                        </h5>
                    </td>
                </tr>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Major Components of Works
                    </th>
                    <th>
                        Total Value (in Contract Currency)
                    </th>
                </tr>
                <tr>
                    <td>
                        1.
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_1}}
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_1_value}}
                    </td>
                </tr>
                <tr>
                    <td>
                        2.
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_2}}
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_2_value}}
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        3.
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_3}}
                    </td>
                    <td>{{ $detailwork->jvca_lead_partner_work_form_component_3_value}}
                    </td>
                    
                </tr>
               
            </table>
            &nbsp;
            <table class="table table-bordered " id="completion-certificate-detail-table2">
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">Co-partner: {{ $detailwork->co_partner1_name}}
                        </h5>
                    </td>
                </tr>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Major Components of Works
                    </th>
                    <th>
                        Total Value (in Contract Currency)
                    </th>
                </tr>
                <tr>
                        <td>
                            1.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_1}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_1_value}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_2}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_2_value}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_3}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner1_work_form_component_3_value}}
                        </td>
                    </tr>
            </table>
            &nbsp;
            <table class="table  table-bordered " id="completion-certificate-detail-table3">
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">Co-partner: {{ $detailwork->co_partner2_name}}
                        </h5>
                    </td>
                </tr>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Major Components of Works
                    </th>
                    <th>
                        Total Value (in Contract Currency)
                    </th>
                </tr>
                
                <tr>
                        <td>
                            1.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_1}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_1_value}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_2}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_2_value}}
                        </td>
                        
                    <tr>
                        <td>
                            3.
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_3}}
                        </td>
                        <td>{{ $detailwork->jvca_co_partner2_work_form_component_3_value}}
                        </td>
                    </tr>
            </table>

        @endif

{{--        <div class="row">
            <div class="col-md-8 col-sm-8">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       
            </div>This is an electronically generated certificate
        </div>


                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        &nbsp; 
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p>&nbsp;</p>
                        <p>
                            {{ $contract->issuers_name }}
                            <br>{{ $contract->issuers_designation }}
                           <br> Date:&nbsp;{{ app_date_format($contract->memo_date,'dS F, Y') }}
                        </p> 
                    </div>
                </div>
        <div class="info">
            This is an electronically generated certificate
        </div>--}}
        
    @endif
                

</div>        
@endif  



@endsection
