@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
   Contracts
  </div>  
  <div class="card-body">
    @if(Session::has('flash_message'))
    <p class="alert alert-info"> {{ Session::get('flash_message') }}</p>
    @endif
    <h5 class="card-title text-right">
    <a href="{{ url('/contracts/create') }}" class="btn btn-success btn-sm" title="Add New pecontract">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    </h5>
    <form method="GET" action="{{ url('/contracts') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                    <th>#</th>
                    <th>E-GP Id</th>
                    <th>Contract/Package No</th>
                    <th>NOA Date </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pecontracts as $item)
                <tr>
                    <td>{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->egp_id }}</td>
                    <td>{{ $item->contract_no }}</td>
                    <td>{{ $item->noa_date }} -- {{ $item->contract_type }}</td>
                    <td>
                        @if($item->certificate_issued=='yes')
                            <button type="button" class="btn">Certificate Issued
                            </button>
                        @else
                            @if($item->commencement_id == NULL)
                            <a href="{{ url('/contracts/' . $item->id) }}" title="View pecontract"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/contracts/' . $item->id . '/edit') }}" title="Edit pecontract">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                            </a>

                            <form method="POST" action="{{ url('/contracts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-xs" title="Delete pecontract" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @else
                            
                                <a href="{{ url('/contracts/' . $item->id) }}" title="View pecontract">
                                    <button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                @if($item->contract_type=='works')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                  Update Commencement Date
                                </button>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$item->id}}">Actual Start/Commencement Date</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="POST" action="{{ url('/contracts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('PUT') }}
                                            {{ csrf_field() }}
                                            <input class="form-control col-md-7 date_picker" name="actual_date_of_commencement" type="text" id="actual_date_of_commencement" value="{{ $pecontract->actual_date_of_commencement or ''}}" >
                                            {!! $errors->first('noa_date', '<p class="help-block">:message</p>') !!}
                                           <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            
                            @endif
                        @endif
                        

                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $pecontracts->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>
   

    

  </div>
</div>

@endsection
