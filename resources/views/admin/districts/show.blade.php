@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    District {{ $district->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/admin/districts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/districts/' . $district->id . '/edit') }}" title="Edit District"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/districts' . '/' . $district->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete District" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $district->id }}</td>
                </tr>
                <tr><th> Division Id </th><td> {{ $district->division->name }} </td></tr><tr><th> Name </th><td> {{ $district->name }} </td></tr><tr><th> Bn Name </th><td> {{ $district->bn_name }} </td></tr>
            </tbody>
        </table>
    </div>

  </div>
</div>


@endsection
