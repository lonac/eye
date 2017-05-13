@extends('layouts.master')

@section('title', $college->col_name)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"> Welcome at {{$college->col_name}}:</h3>
				</div>
			</div>
		</div>		

	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Categories:</h3>
				</div>
			</div>
		</div>		

	</div>


</div>

@endsection