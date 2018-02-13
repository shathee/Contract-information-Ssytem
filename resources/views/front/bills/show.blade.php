@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Bill {{ $bill->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/bills') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/bills/' . $bill->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Bill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="text-center">
        <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo" />
    </div>
    <div class="text-center">
        <address>
          <strong>{{ $pe->name}}</strong><br>
          <strong>{{ $pe->address}}</strong><br>
          <strong>{{ $pe->postcode}}</strong><br>
          <strong></strong><br>
          <br>
          <abbr title="Phone"></abbr> 
        </address>
        <h3>Payment Certificate</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $bill->id }}</td>
                </tr>

                <tr>
                    <th>Name of Contractor of Supplier                                              
                    </th><td>{{ $bill->contract->contractors_legal_title }}</td>
                </tr>
                <tr>
                    <th> Contract</th><td> {{ $bill->contract->contract_no }} </td></tr>
                    <th> Name of Works</th><td> {{ $bill->contract->name_of_works }} </td></tr>
                    <tr><th> Bill No & Date</th><td> {{ $bill->bill_no }}, {{ $bill->bill_date }}</td></tr>
                    <tr><th> Date of Commencement 
                    </th><td> {{ $bill->contract->commencement_memo_date }}</td></tr>
                    <tr><th> Reference of Agreement
                    </th><td> {{ $pe->name}} Memo No - {{ $bill->contract->contract_no }}  </td></tr>
                     <tr>
                        <th> &nbsp;
                        </th><td> </td>
                    </tr>
                     <tr>
                        <th> Net value of work or supplies since previous bill {{ $bill->bill_no }}</th><td> {{ $bill->gross_payment}}   </td>
                    </tr>                                                                                                                                                                                                                                                                             

                    
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
