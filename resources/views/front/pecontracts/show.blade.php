@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    pecontract {{ $pecontract->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/contracts') }}" title="Back">
            <button class="btn btn-warning btn-xs">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            </a>
        <a href="{{ url('/contracts/' . $pecontract->id . '/edit') }}" title="Edit pecontract"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('contracts' . '/' . $pecontract->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete pecontract" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $pecontract->id }}</td>
                </tr>
                <tr><th> Peoffice Id </th><td> {{ $pecontract->peoffice_id }} </td></tr>
                <tr><th> Circle Id </th><td> {{ $pecontract->circle_id }} </td></tr>
                <tr><th> Zone Id </th><td> {{ $pecontract->zone_id }} </td></tr>
                <tr><th> EGP ID </th><td> {{ $pecontract->egp_id }} </td></tr>
                <tr><th> Contract No </th><td> {{ $pecontract->contract_no }} </td></tr>
                <tr><th> name of the works </th><td> {{ $pecontract->name_of_works }} </td></tr>
                <tr><th> Name of the Contractor </th><td> {{ $pecontract->contractors_legal_title }} </td></tr>
                <tr><th> Address of the Contractor </th><td> {{ $pecontract->contractors_contact_details }} </td></tr>
                <tr><th> Zone Id </th><td> {{ $pecontract->noa_date }} </td></tr>

            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
