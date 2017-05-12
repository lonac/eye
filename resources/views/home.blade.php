@extends('layouts.master')

@section('title','Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-success">
                <div class="panel-heading">Welcome {{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</div>
                <div class="panel-body">
                  
                </div>
            </div>
        </div>
    </div>

{{-- check if there are colleges so far --}}
@if($col->count()>0)
    
    {{-- great we now have colleges what next?--}}


    
    
    @else

    no colleges

@endif

{{-- if she/he is not registered to any college, let him/her see the options for registering to colleges--}}



{{-- if the user has registered already let them see their colleges and other details--}}
    



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

        </div>
    </div>
</div>
@endsection
