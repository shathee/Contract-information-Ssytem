@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Guser {{ $guser->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/gusers') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/gusers/' . $guser->id . '/edit') }}" title="Edit Guser"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/gusers' . '/' . $guser->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Guser" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $guser->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $guser->name }} </td></tr>
                                    <tr><th> Office </th><td> {{ $guser->office }} </td></tr>
                                    <tr><th> Designation </th><td> {{ $guser->designation }} </td></tr>
                                    <tr><th> Email </th><td> {{ $guser->user->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
