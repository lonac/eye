@extends('layouts.master')

@section('title','Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome {{ Auth::user()->firstname}} 
                    {{ Auth::user()->lastname}}
                </div>
                <div class="panel-body">
                        @if(Auth::user()->statuses != null)
                            <strong>My Status: <a href="{{url('status/show')}}">{{ Auth::user()->statuses->status }}</a></strong>
                        @else
                            <strong>My Status: </strong> None
                            <br><br>
                            <strong><a href="{{url('status/create')}}">Create Status?</a></strong>
                        @endif
                </div>                
            </div>
        </div>
    </div>


{{-- if she/he is not registered to any college, let him/her see the options for registering to colleges--}}



{{-- if the user has registered already let them see their colleges and other details--}}
    
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"></div>
                    <div class="panel-body">
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
