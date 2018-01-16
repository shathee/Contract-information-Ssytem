@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    pecontract {{ $pecontract->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/contracts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
                <tr><th> Peoffice Id </th><td> {{ $pecontract->peoffice_id }} </td></tr><tr><th> Circle Id </th><td> {{ $pecontract->circle_id }} </td></tr><tr><th> Zone Id </th><td> {{ $pecontract->zone_id }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
