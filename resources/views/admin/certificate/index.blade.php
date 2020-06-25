@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header d-print-none">
        <span class="">{{ title_case($o['type']) }}s</span>
	   
  </div>  
  <div class="card-body">
        <div class="card-title text-right">
            <h5 style="color: red", align="left">The Certificate will not be completed until signed certificate is uploded.</h5>
            <a href="{{ url('certificates/'.$o['type']) }}" title="Back">

                <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            </a>

            
           <!--<button class="btn btn-info" onClick="window.print()">Print</button>-->
        </div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>E-GP Id</th>
                    <th>Certificate No</th>
                    <th>Contract/Package No</th>
                    <th>Type</th>
                    <th>NOA Date </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contracts as $item)
                <tr>
                    <td>
                        @if($item->egp_id)
                        {{ $item->egp_id }}
                        @else
                        N/A
                        @endif
                    </td>
                    <td>{{ $item->certificate_no }}</td>
                    <td>{{ $item->contract_no }}</td>
                    <td>{{ title_case($item->contract_type) }}</td>
                    <td>{{ $item->noa_date }}</td>
                    <td>
                        @if($o['type']=='payment-certificate')
                            @if($item->bills->count()>0)
                            <a href="{{ url('certificates/payment-certificate/'.$item->id)}}">
                            <button class="btn btn-xs btn-success">
                            Generate</button>
                            </a>
                            @else
                            No biil info given
                            @endif
                            @if($item->payment_certificates->count()>0)
                            <a href="{{ url('certificates/payment-certificates/'.$item->id)}}">
                                <button class="btn btn-xs btn-info">Payment Certificates</button>
                            </a>
                            @else
                            No Certificates Generated
                            @endif
                            
                        @elseif($o['type']=='completion-certificate')
                       
                            @if($item->certificate_issued == 'no')
                            <a href="{{ url('certificates/finalize-completion-certificate/'.$item->id)}}">
                                <button class="btn btn-warning" style="width: 208px;"><b>Finalize Information</b></button>
                            </a>
                            @else
                             <a href="{{ url('certificates/completion-certificate/'.$item->id)}}">
                                <button class="btn btn-xs btn-info">View Electronic Certificate</button></a>

                                @if($item->certificate_file_id == NULL)
                                    <a href="{{ url('certificate-files/create')}}">
                                        <button class="btn btn-xs btn-danger">Upload Signed Certificate</button></a>
                                @else
                                    <a href="{{ url('certificate-files/'.$item->certificate_file_id)}}">
                                        <button class="btn btn-xs btn-success">View Signed Certificate</button></a>
                                @endif

                            @endif
                        
                        @else
                        {{'No Type Selected'}}
                        @endif

                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $contracts->appends(['search' => Request::get('search')])->render() !!} </div>
 

    

  </div>
</div>

@endsection
