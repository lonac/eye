@extends('layouts.masterhomepage')

@section('title','Jicho')

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12">  
                <div class="search-background">
                    <img src="{{ asset('images/jichoImage.JPG')}}">
               
                     @include('search.searchform')
              </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                         <h2>
                             <a href="{{url('/universities')}}" class="btn btn-default">UNIVERSITY</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection