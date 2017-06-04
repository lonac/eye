@extends('layouts.master')

@section('title', 'Financials')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			@if($fin->count()>0)
				@foreach($fin as $finee)
				<div class="panel panel-primary">
					<div class="panel-heading">	
						<h3 class="panel-title">Staff Name: {{$finee->money->firstname}}
							{{$finee->money->lastname}}</h3> 
					</div>
					<div class="panel-body">
						<div class="panel-body">
					{{--departments belonging--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Department:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$finee->department}} </strong>
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
							<strong>{{$finee->officeNo}} </strong>
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
								<strong>{{$finee->money->email}} </strong>
							</div>
						</div>	
					</div>
					</div>		
				</div>

			@endforeach

			@else
				<font color="red">No any Financial related information!</font>
			@endif
		</div>		

	</div>
</div>

@endsection