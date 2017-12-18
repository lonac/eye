@extends('layouts.master')

@section('title','University Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong><h3>{{$university->name}} 
					</h3></strong></center>
				</div>
				<div class="panel panel-body">
					@if($uni_comp->count()>0)		
							@foreach($uni_comp as $comp)
								<strong><h3>{{$comp->comp_name}} </h3></strong>
							@endforeach
						@else
					<font color="red">
						<h3>Sorry, no any component Updated for this University!</h3>
					</font>	
					@endif
				</div>
			</div>
		</div>
		</div>		
	</div>
@endsection