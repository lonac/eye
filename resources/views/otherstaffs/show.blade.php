@extends('layouts.master')

@section('title', 'Staffs')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			@if($staf->count()>0)
				@foreach($staf as $stafee)
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Staff Name:  {{ $stafee->staff->firstname}}
						{{$stafee->staff->lastname}} at {{$col->college}}</h3> 		 		
				</div>
				<div class="panel-body">
					{{--departments belonging--}}
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Department:</h3>
							</div>
							<div class="panel-body">
								<strong>{{$stafee->department}} </strong>
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
							<strong>{{$stafee->officeNo}} </strong>
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
								<strong></strong>
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
								<strong>{{$stafee->staff->email}} </strong>
							</div>
						</div>	
					</div>

					{{-- status--}}
					

				</div>
			</div>
			@endforeach

			@else

			Nothing here
			@endif
		</div>	
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Status:   
						<font color="blue"> </font>
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

@endsection