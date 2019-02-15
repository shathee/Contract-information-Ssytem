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
                <tr>
                    <th> Name </th><td> {{ $project->name }} </td>
                </tr>
                <tr>
                    <th> Code </th><td> {{ $project->code }} </td></tr>
                <tr>
                    <th> Cost </th><td> {{ $project->cost }} </td>
                </tr>
                <tr>
                    <th> Start Date </th><td> {{ $project->start_date }} </td>
                </tr>
                <tr>
                    <th> End Date </th><td> {{ $project->end_date }} </td>
                </tr>
            
                
                
                    
            </tbody>
        </table>
    </div>
    <div class="row responsive">
        <div class="col-md-6">
            <h4>Associated PEs</h4>
            <ul>
                @foreach ($project->peoffice as $peoffice)
                        <li>{{ $peoffice->name }}</li>
                @endforeach
            </ul> 
                
                
                
        </div>
        <div class="col-md-6">
            <h5>Tender Information under this Project</h5>
            <p>Total Contracts : {{ $project->contracts->count() }} </p>
            <ul>
               
                @forelse ($project->contracts as $contract)
                <li> Package No : {{ $contract->contract_no }}
                    <ul>
                        <li>Contract Price: {{ $contract->original_contract_price }}</li>
                        <li>Bills Paid: {{ $contract->bills->sum('gross_payment') }}</li>
                    </ul>
                </li>
                @empty
                    <p>No Contracts Signed under this Project</p>
                @endforelse
            </ul> 
            
            
        </div>
        
    </div>
   

  </div>
</div>


    
@endsection
