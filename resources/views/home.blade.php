@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <div class="panel panel-default">
                <div class="panel-heading"><h3>Welcome</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>You are logged in!</h4>
                    @if (Auth::user()->status=='deactive')
                        <div class="alert alert-warning">
                            Your account is not activated yet. Please Contact with the Application Administrator
                        </div>
                    @endif

                </div>
        </div>

        <div class="panel panel-default">
                <div class="panel-heading"><h3>&nbsp;</h3></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{url('search/cc')}}"><button type="button" class="btn btn-primary btn-lg">Verify Completion Certificate </button></a>
                            <a href="{{url('search/pc')}}"><button type="button" class="btn btn-secondary btn-lg">Verify Payment Certificate </button></a>
                        </div>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <a href="{{url('search/cwh')}}"><button type="button" class="btn btn-info btn-lg">Check Work in Hand </button></a>
                        </div>
                    </div>
                </div>
        </div>
    @else
        <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="">Please 
                    <a href="{{url('login')}}">
                        <button type="button" class="btn btn-dark">Login</button>
                    </a>
                To Access the features
                </h3>
                </div>

        </div>  
    @endif  
            
    
@endsection
