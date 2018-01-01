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
