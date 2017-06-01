@extends('layouts.master')

@section('title', 'Instructors:')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			@if($lect->count()>0)
				@foreach($lect as $lectee)
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Instructor's Name:  {{ $lectee->instructor->firstname}}
						{{$lectee->instructor->lastname}} at {{$col->college}}</h3> 		 		
				</div>
				<div class="panel-body">
					{{--departments belonging--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Department:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$lectee->department}} </strong>
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
							<strong>{{$lectee->officeNo}} </strong>
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
								<strong> </strong>
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
								<strong> </strong>
							</div>
						</div>	
					</div>

					{{-- status--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Status:   
									<font color="blue">  </font>
								</h3>
							</div>
							<div class="panel-body">
								<strong>Updated at: 
								</strong>
							</div>
						</div>	
					</div>

				</div>
			</div>
			@endforeach

			@else

			Nothing here
			@endif
		</div>		

	</div>
</div>

@endsection