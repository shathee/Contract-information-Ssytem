@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
    Commencement Detail
  </div>  
  <div class="card-body"  id="commencement-certificate">
    <h5 class="card-title text-right d-print-none">
        <button class="btn btn-info" onClick="window.print()">Print</button>
        <a href="{{ url('/commencements') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/commencements/' . $commencement->id . '/edit') }}" title="Edit Commencement"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('commencements' . '/' . $commencement->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Commencement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="text-center">বাংলাদেশ পানি উন্নয়ন বোর্ড</h3>
                    <h3 class="text-center">Bangladesh Water Development Board</h3>
                    
                </div>
            </div>
            <div class="text-center row">
                
                <div class="col-md-4 col-sm-4 certificate-top-left">
                    <address>
                        <address>
                            <strong>{{ $contract->peoffice->name_bn}}</strong><br>
                            {{ $contract->peoffice->address_bn}}<br>
                            {{ $contract->peoffice->district->bn_name or ''}}-{{ $contract->peoffice->postcode_bn or ''}}<br>
                            ফোন: {{ $contract->peoffice->phone_bn}}
                        </address>
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
    <div class="table-responsive">
        <table class="">
               <tr>
                    <td>Office Memo:{{ $commencement->commencement_memo_no }} </td>
                    <td class="text-right">Date: {{ $commencement->commencement_memo_date }} </td>
                </tr>
                <tr class="text-center">
                    <th colspan="2"><h3>Commencement of Works</h3></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>
                            To
                        </p>
                        <p>
                            {{ $commencement->contract->contractors_legal_title }} <br>
                            {{ $commencement->contract->contractors_contact_details }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>
                            Dear Sir,
                        </p>
                        <p>
                            Pursuant to GCC Sub Clause 39.1 of the above mentioned Contract Agreement, this is to notify you that the following precedent conditions have been duly fulfilled:
                        </p>
                        <p>
                            <ol type="i">
                              @if($commencement->commencement_condition_1 =='on')
                              <li>the Contract Agreement has been signed;</li>
                              @endif
                              @if($commencement->commencement_condition_2 =='on')
                              <li>the possession of the Site has been given; and</li>
                              @endif
                              @if($commencement->commencement_condition_3 =='on')
                              <li>the advance payment has been made(delete if not appropriate).</li>
                              @endif
                            </ol>
                        </p>
                        <p>You are therefore requested to:</p>
                        <p>
                            <ol>
                            <li>Commence execution of  the Works, in accordance with GCC Sub Clause {{ $commencement->commencement_clause_no }}, within <strong>{{ $commencement->contract_commencement_date}}</strong>;</li>
                            @if(!empty($commencement->insurance_policy_date)) 
                                <li>Submit Insurance Policy Documents, in accordance with GCC Sub Clause 36.2, within <strong>{{ $commencement->insurance_policy_date}}</strong> </li>
                            @else
                                {{''}}
                            @endif 

                            @if(!empty($commencement->programme_date)) 
                                <li>Submit Programme of Works, in accordance with GCC Sub Clause 41.1, within <strong>{{ $commencement->programme_date}}</strong></li>
                            @else
                                {{''}}
                            @endif 
                            
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Contract Description:
                            <ol type="i">
                            <li>Contract Package No. {{ $contract->contract_no }}</li>
                            <li>Completion date: {{ $contract->contract_date_of_completion }}</li>
                            <li>Name of Works: {{ $contract->name_of_works}}</li>
                            <li>Contract Amount: Tk. {{ $contract->original_contract_price}}</li>
                            </ol>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right">
                        <p>Signed</p>
                        <p>Duly authorised to sign for and on behalf of {{ Auth::user()->name}}</p>
                        <p>Date:&nbsp;{{ app_date_format($commencement->commencement_memo_date,'dS F, Y') }}</p>

                    </td>
                </tr>
           
        </table>
    </div>
   
<!-- ccc -->
  </div>
</div>


    
@endsection
