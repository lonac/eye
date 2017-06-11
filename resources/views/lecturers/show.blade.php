@extends('layouts.master')

@section('title', 'Instructors:')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Instructor's Name:  {{ $lecturer->instructor->firstname}}
						{{$lecturer->instructor->lastname}} at {{$col->college}}</h3> 		 		
				</div>
				<div class="panel-body">
					<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Status:   
						<font color="blue">
	                        @if($lecturer->statuses != null)
	                            {{ $lecturer->statuses->status }}
	                        @else
	                            No status
	                        @endif
						</font>
					</h3>
				</div>
				<div class="panel-body">
                    @if($lecturer->statuses != null)
						<strong>Updated at: 
						</strong>                    
                        {{ $lecturer->statuses->updated_at->diffForHumans() }}
                    @endif					
				</div>
			</div>	
		</div>
					{{--departments belonging--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Department:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$lecturer->department}} </strong>
							</div>
						</div>	
					</div>

					{{-- office number--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Office No:</h3>
							</div>
							<div class="panel-body">
							<strong>{{$lecturer->officeNo}} </strong>
							</div>
						</div>	
					</div>

					{{-- contacts, phone number--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Phone Number:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$lecturer->phoneno}} </strong>
							</div>
						</div>	
					</div>

					{{--my emails--}}
						<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Email Address:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$lecturer->instructor->email}} </strong>
							</div>
						</div>	
					</div>

					{{-- status--}}
				</div>
			</div>
		</div>	
	</div>
</div>

@endsection