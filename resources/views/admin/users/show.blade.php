@extends('layouts.app')

@section('content')
   
    <div class="card">
    <div class="card-header">
        View user
    </div>
        <div class="card-body">
            <h5 class="card-title text-right">
                <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('admin/users' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
            </h5>
                  
            <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th> Name </th><td> {{ $user->name }} </td>
                                </tr>
                                <tr>
                                    <th> Email </th><td> {{ $user->email }} </td>
                                </tr>
                                <tr>
                                    <th> Designation </th><td> {{ $user->guser->designation }} </td>
                                </tr>
                                <tr>
                                    <th> Created At </th><td> {{ $user->created_at }} </td>
                                </tr>
                                <tr>
                                    <th> Last Updated </th><td> {{ $user->updated_at }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>        

            </div>    
                           
    </div>       

@endsection
