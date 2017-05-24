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

		@endif




</div>

@endsection