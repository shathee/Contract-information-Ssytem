@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Bill {{ $bill->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/admin/bills') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/bills/' . $bill->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Bill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $bill->id }}</td>
                </tr>
                <tr><th> Contract Id </th><td> {{ $bill->contract_id }} </td></tr><tr><th> Bill No </th><td> {{ $bill->bill_no }} </td></tr><tr><th> Bill Date </th><td> {{ $bill->bill_date }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
