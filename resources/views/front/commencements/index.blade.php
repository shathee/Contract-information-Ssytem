@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
   Commencements
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
    <a href="{{ url('/commencements/create') }}" class="btn btn-success btn-sm" title="Add New Commencement">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    </h5>
    <form method="GET" action="{{ url('/commencements') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>#</th><th>Contract No</th>
                    <th>Commencement Memo No</th>
                    <th>Commencement Memo Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($commencements as $item)
                <tr>
                    <td>{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->contract->contract_no }}</td>
                    
                    <td>{{ $item->commencement_memo_no }}</td>
                    <td>{{ $item->commencement_memo_date }}</td>

                    <td>
                        <a href="{{ url('/commencements/' . $item->id) }}" title="View Commencement"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/commencements/' . $item->id . '/edit') }}" title="Edit Commencement"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/commencements' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Commencement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                    <h2>No Data Found</h2>
            @endforelse
            </tbody>
        </table>
       
    </div>
   

    

  </div>
</div>

@endsection
