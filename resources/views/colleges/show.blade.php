@extends('layouts.master')

@section('title', $college->col_name)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Welcome at {{$college->col_name}}:</h3>
				</div>
			</div>
		</div>		
	</div>

		@if(! Auth::guest())
				{{--if registerd then allow me to register as staff member, as lecturer,bursar or any other--}}
				

		@else

	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel-body">
				@foreach ($cat as $cats)
					<a href="" role="button" class="btn btn-info">{{ $cats->cat_name}}</a>
				@endforeach
			</div>
		</div>		

	</div>

	<div class="row">
		<div class="col-md-6  col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Departments:</h3>
				</div>
			</div>
			<div class="panel-body">
				@if($dep->count()> 0)
					@foreach($dep as $department)
						<a href="" role="button" class="btn btn-info">{{ $department->depart_name}}</a>
					@endforeach
				@else

					no departments for this college

				@endif
			</div>
		</div>

	</div>
		@endif




</div>

@endsection