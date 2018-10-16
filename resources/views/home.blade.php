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
                    
                    
                            <div id="home_quicklinks">
                                        <a class="quicklink link1" href="{{url('search/cc')}}">
                                            <span class="ql_caption">
                                                <span class="outer">
                                                    <span class="inner">
                                                        <h2>Search Completion Certificate</h2>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="ql_top"></span>
                                            <span class="ql_bottom"></span>
                                        </a>

                                        <a class="quicklink link2" href="{{url('search/pc')}}">
                                            <span class="ql_caption">
                                                <span class="outer">
                                                    <span class="inner">
                                                        <h2>Search Payment Certificate</h2>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="ql_top"></span>
                                            <span class="ql_bottom"></span>
                                        </a>


                                <div class="clear"></div>
                                <a class="quicklink link3" href="{{url('search/cwh')}}">
                                    <span class="ql_caption">
                                        <span class="outer">
                                            <span class="inner">
                                                <h2>Check Work in Hand</h2>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="ql_top"></span>
                                    <span class="ql_bottom"></span>
                                </a>
                                <div class="clear"></div>

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
