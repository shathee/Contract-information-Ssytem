@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
    Commencement {{ $commencement->id }}
  </div>  
  <div class="card-body">
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
    
    <div class="text-center">
        <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
    </div>
    <div class="text-center">
        <address>
          <strong>{{ $contract->peoffice->name}}</strong><br>
          {{ $contract->peoffice->address}}<br>
          {{ $contract->peoffice->district_id}}-{{ $contract->peoffice->postcode}}<br>
          <abbr title="Phone">P:</abbr> {{ $contract->peoffice->phone}}
        </address>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            
                <tr class="text-center">
                    <th colspan="2"><h3>Commencement of Works</h3></th>
                </tr>
                <tr>
                    <td>Office Memo:{{ $commencement->commencement_memo_no }} </td>
                    <td class="text-right">Date: {{ $commencement->commencement_memo_date }} </td>
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
                            Pursuant to GCC Sub Clause 39.1 of the above mentioned Contract Agreement, this is to notify you that the following precedent conditions have been duly fulfilled:
                        </p>
                        <p>
                            <ul class="list-unstyled">
                              <li>(i) the Contract Agreement has been signed;</li>
                              <li>(ii) the possession of the Site has been given; and</li>
                              <li>(iii) the advance payment has been made(delete if not appropriate).</li>
                            </ul>
                        </p>
                        <p>You are therefore requested to:</p>
                        <p>
                            <ol>
                            <li>Commence execution of  the Works, in accordance with GCC Sub Clause 1.1(nn), within <strong>{{ $commencement->contract_commencement_date}}</strong>;</li>
                            <li>Submit Insurance Policy Documents, in accordance with GCC Sub Clause 36.2, within <strong>{{ $commencement->insurance_policy_date}}</strong> </li>
                            <li>Submit Programme of Works, in accordance with GCC Sub Clause 41.1, within <strong>{{ $commencement->programme_date}}</strong></li>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right">
                        <p>Signed</p>
                        <p>Duly authorised to sign for and on behalf of {{ Auth::user()->name}}</p>
                        <p>Date:{{date('Y-m-d')}}</p>
                    </td>
                </tr>
               



            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
