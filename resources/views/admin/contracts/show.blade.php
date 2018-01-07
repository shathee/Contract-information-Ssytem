@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Contract {{ $contract->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/admin/contracts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/contracts/' . $contract->id . '/edit') }}" title="Edit Contract"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/contracts' . '/' . $contract->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Contract" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $contract->id }}</td>
                </tr>
                <tr><th> Office Memo </th><td> {{ $contract->office_memo }} </td></tr><tr><th> Memo Date </th><td> {{ $contract->memo_date }} </td></tr><tr><th> Peoffice Id </th><td> {{ $contract->peoffice_id }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
