@extends('layouts.master')

@section('title','Account')

@section('content')
<div class="container">
 <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome {{ Auth::user()->firstname}} 
                    {{ Auth::user()->lastname}} </div>
            </div>
        </div>
    </div>


{{-- if she/he is not registered to any college, let him/her see the options for registering to colleges--}}



{{-- if the user has registered already let them see their colleges and other details--}}
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

        </div>
    </div>
</div>
@endsection
