@extends('layouts.master')

@section('title','Jicho-Udom')

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
                       <font color="blue"><b>Choose the Organization or Company you Love and Apply for Loan.....</b>
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
                                <p>into this section to meet and check status of staffs for specific
                                    college.
                                </p>
                                <a href="{{ url('companies/create')}}" class="btn btn-primary" role="button">
                                    Enter
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
                                <p>For cafteria services status enter into this section 
                               </p>
                                <a href="{{ url('companies')}}" class="btn btn-primary" role="button">
                                    enter
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
                                <p>Check status for library services.</p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                  Enter
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

@endsection