@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Project {{ $project->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/projects' . '/' . $project->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete Project" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $project->id }}</td>
                </tr>
                <tr><th> Name </th><td> {{ $project->name }} </td></tr><tr><th> Code </th><td> {{ $project->code }} </td></tr><tr><th> Cost </th><td> {{ $project->cost }} </td></tr>
            </tbody>
        </table>
    </div>
   

  </div>
</div>


    
@endsection
