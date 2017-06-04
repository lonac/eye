@extends('layouts.master')

@section('title','Jicho')

@section('content')
<div class="container">
<div class="content">
    <div class="row banner">
            <div class="col-sm-10 col-md-12">
                <div class="side-borders">
                        <div class="hero-bg" style="background-image:url('/images/info.jpg');background-repeat: no-repeat;background-size: 100% 100%; height: 500px;">
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md=1">
                <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                       <font color="blue"><b>Jicho helps you to see before taking an action.....</b>
                       </font>
                </marquee></p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>ADMINISTRATION</h3>
                                <p>Let Jicho take you to College administration, see the person you want to meet before visitation.
                                </p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                    Check Administration
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>CAFTERIA SERVICES</h3>
                                <p>Visit the cafteria in your college, check the list of updated Menu everytime before you decide to go.
                               </p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                    Check Cafteria
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>LIBRARY</h3>
                                <p>
                                  The services offered at College library are well defined 
                                  at particular times in here!
                                </p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button"> Library
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>MEDICAL SERVICE</h3>
                                <p>
                                    Before you make any movement to any Medical Center within a college,
                                     you can let Jicho make visit for you.
                                </p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button"> Medical
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
              <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>HOSTEL SERVICE</h3>
                                <p>
                                    You want to know if Officers are present in Hostel offices??,Let Jicho help you
                                    see current status of officers.
                                </p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button"> Hostel
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

@endsection