@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Commencement {{ $commencement->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/commencements') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/commencements/' . $commencement->id . '/edit') }}" title="Edit Commencement"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('commencements' . '/' . $commencement->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Commencement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $commencement->id }}</td>
                </tr>
                <tr><th> Commencement Memo No </th><td> {{ $commencement->commencement_memo_no }} </td></tr><tr><th> Commencement Memo Date </th><td> {{ $commencement->commencement_memo_date }} </td></tr><tr><th> Contract No </th><td> {{ $commencement->contract_no }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
