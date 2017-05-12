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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        </div>
    </div>
</div>
@endsection
