@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Peoffice {{ $peoffice->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/admin/peoffices') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/peoffices/' . $peoffice->id . '/edit') }}" title="Edit Peoffice"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/peoffices' . '/' . $peoffice->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Peoffice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $peoffice->id }}</td>
                </tr>
                <tr><th> Zone Id </th><td> {{ $peoffice->zone->name }} </td></tr><tr><th> Circle Id </th><td> {{ $peoffice->circle->name }} </td></tr><tr><th> Name </th><td> {{ $peoffice->name }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
