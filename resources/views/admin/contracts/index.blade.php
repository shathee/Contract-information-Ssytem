@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
   Contracts
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
    <a href="{{ url('/admin/contracts/create') }}" class="btn btn-success btn-sm" title="Add New Contract">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    </h5>
    <form method="GET" action="{{ url('/admin/contracts') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                    <th>#</th><th>Contract Date</th><th>Contract Packag No</th><th>PE Office</th><th>Actions</th><th>Certificates</th>
                </tr>
            </thead>
            <div class="pagination-wrapper"> {!! $contracts->appends(['search' => Request::get('search')])->render() !!} </div>
            <tbody>
            @foreach($contracts as $item)
                <tr>
                    <td>{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->contract_date }}</td>
                    <td>{{ $item->contract_no }}</td>
                    <td>{{ $item->peoffice->name}}</td>
                    <td>
                        <a href="{{ url('/admin/contracts/' . $item->id) }}" title="View Contract"><button class="btn btn-info btn-xs btn-block"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/admin/contracts/' . $item->id . '/edit') }}" title="Edit Contract"><button class="btn btn-primary btn-xs btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/admin/contracts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs btn-block" title="Delete Contract" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary btn-xs btn-block" href="{{ url('payment-certificate/'.$item->id)}}">Payment Certificate</a>
                        <a class="btn btn-outline-secondary btn-xs btn-block" href="{{ url('certificates/completion-certificate/'.$item->id)}}">Completion Certificate</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $contracts->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>
   

    

  </div>
</div>

@endsection
