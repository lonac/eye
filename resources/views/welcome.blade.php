@extends('layouts.master')

@section('title','Jicho')

@section('content')
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12">  

                <div class="container-full-bg"  style="background-image:url('/images/info.jpg');background-repeat: no-repeat;background-size: 100% 100%; height: 500px;">
                 <div class="container special">
                    <div class="col-md-4 col-md-offset-3">
                         <div class="jumbotron">
                        <p>
                            @include('search.searchform')
                        </p>
                    </div>
                    </div>
                   
                </div>
              </div>    
            </div>
        </div>
    </div>
</div>

@endsection