@extends('layouts.master')

@section('title',$university->name)

@section('content')
	<div class="container">
		@if($uni_subcomp->count()>0)
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<center><h2>{{$university->name}}</h2></center>
						</div>	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				@if($uni_subcomp->count()>0)
				<div class="panel panel-default">
					<div class="panel panel-heading"><center><strong>{{$subcomp->name}}</strong></center>
					</div>
						<div class="panel panel-body">
							
								
						</div>
				</div>
				@else
					<p>Nothing Update so far!</p>
				@endif
			</div>
		</div>
		@else
			@include('errors.503')
	@endif
	</div>
@endsection